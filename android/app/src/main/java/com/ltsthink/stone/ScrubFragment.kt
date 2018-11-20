package com.ltsthink.stone

import android.Manifest
import android.content.Context
import android.content.pm.PackageManager
import android.net.Uri
import android.os.Bundle
import android.support.v4.app.ActivityCompat
import android.support.v4.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.webkit.PermissionRequest
import com.android.volley.Request
import com.android.volley.RequestQueue
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.StringRequest
import com.android.volley.toolbox.Volley
import com.ltsthink.stone.Remote.RetrofitClient
import kotlinx.android.synthetic.main.fragment_scrub.view.*
import org.json.JSONObject
import retrofit2.Retrofit
import android.app.Activity
import android.app.ProgressDialog
import android.content.ContentResolver
import android.content.Intent
import android.graphics.Bitmap
import android.graphics.Canvas
import android.graphics.Color
import android.os.Environment
import android.support.design.widget.TextInputLayout
import android.support.v4.app.FragmentActivity
import android.support.v4.content.ContentResolverCompat
import android.support.v7.widget.AppCompatEditText
import android.util.Log
import android.widget.*
import com.android.volley.DefaultRetryPolicy
import com.github.gcacace.signaturepad.views.SignaturePad
import com.ipaulpro.afilechooser.utils.FileUtils
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import com.ltsthink.stone.Utils.ProgressRequestBody
import kotlinx.android.synthetic.main.activity_main2.*
import kotlinx.android.synthetic.main.fragment_keratin.*
import kotlinx.android.synthetic.main.fragment_scrub.*
import okhttp3.MediaType
import okhttp3.MultipartBody
import okhttp3.RequestBody
import okhttp3.ResponseBody
import retrofit2.Call
import retrofit2.Callback
import retrofit2.converter.gson.GsonConverterFactory
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter


class ScrubFragment : Fragment()  {



    private val REQUEST_EXTERNAL_STORAGE = 1
    private val PERMISSIONS_STORAGE = arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE)
    private var mSignaturePad: SignaturePad? = null
    private var sSignaturePad: SignaturePad? = null
    private var mClearButton: Button? = null
    private var mSaveButton: Button? = null
    lateinit var emailLayout : TextInputLayout
    lateinit var emaiInput: AppCompatEditText
    var userExist:Boolean = false
    lateinit var txtPhoneLayout : TextInputLayout
    lateinit var txtPhone : AppCompatEditText
    lateinit var textHam : TextInputLayout
    lateinit var txtHammamType : AppCompatEditText
    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {

        verifyStoragePermissions(context as Activity)

        // Inflate the layout for this fragment
        val v = inflater.inflate(R.layout.fragment_scrub, container, false)

        txtPhoneLayout = v.findViewById(R.id.textPhoneLayout) as TextInputLayout
        txtPhone = v.findViewById(R.id.textPhone) as AppCompatEditText




        txtPhone.onFocusChangeListener = View.OnFocusChangeListener { v, hasFocus ->

            if (txtPhone.text.toString().isEmpty()) {
                txtPhoneLayout.isErrorEnabled = true
                txtPhoneLayout.error = "Required Field!"

            } else {
                txtPhoneLayout.isErrorEnabled = false
                existUser(v.textPhone.text.toString())

            }
        }

        mSignaturePad = v.findViewById(R.id.scrubSignaturePad) as SignaturePad

        sSignaturePad = v.findViewById(R.id.scrubSignaturePad1) as SignaturePad
        val nm:AppCompatEditText =  v.findViewById(R.id.textName) as AppCompatEditText
        val ph:AppCompatEditText =  v.findViewById(R.id.textPhone) as AppCompatEditText
        val em:AppCompatEditText =  v.findViewById(R.id.textEmail) as AppCompatEditText

        nm.setText(UserInfo.client_name , TextView.BufferType.EDITABLE)
        ph.setText(UserInfo.client_phone , TextView.BufferType.EDITABLE)
        em.setText(UserInfo.client_email , TextView.BufferType.EDITABLE)

        nm.isEnabled = false
        ph.isEnabled = false
        em.isEnabled = false
        var url = Config.SITE_URL + "scrubs"
        val jsonObj = JSONObject()
        v.scrubBtn.setOnClickListener {

            val id: Int = myRadioGroup.checkedRadioButtonId
            val pregD : Int = pregnantRadioGroup.checkedRadioButtonId
            val delvD : Int = deliveredRadioGroup.checkedRadioButtonId
            val receD : Int = surgeryRadioGroup.checkedRadioButtonId

            when(receD){
                R.id.surgeryYes -> jsonObj.put("did_you_have_a_surgery_operation_during_the_last_3_months" , 1)
            }
            when(delvD){
                R.id.deliveredYes -> jsonObj.put("are_you_recently_delivered" , 1)
            }
            when(pregD){
                R.id.pregnantYes -> jsonObj.put("are_you_pregnant" , 1)
            }
            when (id) {
                R.id.Firm -> jsonObj.put("how_do_you_prefer_the_scrubbing", "Firm")
                R.id.Soft -> jsonObj.put("how_do_you_prefer_the_scrubbing", "Soft")
                else -> {
                    jsonObj.put("how_do_you_prefer_the_scrubbing", "Moderate")

                }
            }
            jsonObj.put("user_id" , UserInfo.client_id)
            jsonObj.put("branch_id" , UserInfo.branch_id)
            jsonObj.put("updated_by" ,UserInfo.user_id)
            jsonObj.put("created_by" , UserInfo.user_id)

            jsonObj.put("which_hammam_or_body_scrub_do_you_prefer" , textHamamType.text)
            jsonObj.put("when_was_your_last_laser_session" , textlaser.text)
            jsonObj.put("when_last_time_you_remove_the_hair" , textshaving.text)
            jsonObj.put("If_yes_when" , textPeeling.text)

            if (addSvgSignatureToGallery(mSignaturePad!!.getSignatureSvg())) {
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
                jsonObj.put("tech_signature" , mSignaturePad!!.getSignatureSvg())
            }
            if (addSvgSignatureToGallery(sSignaturePad!!.getSignatureSvg())) {
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
                jsonObj.put("client_signature" , sSignaturePad!!.getSignatureSvg())
            }
            if(UserInfo.client_id != 0){
            val que = Volley.newRequestQueue(context)
            val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                    Response.Listener {
                        response ->
                        Toast.makeText(context, getString(R.string.added), Toast.LENGTH_LONG).show()
                        commitFrag(response.getInt("id") , "scrub" )
                    },
                    Response.ErrorListener {
                        error ->
                        Toast.makeText(context, error.toString(), Toast.LENGTH_LONG).show()
                    })
            req.retryPolicy = DefaultRetryPolicy(60000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT)

            que!!.add(req)
            }else{
                Toast.makeText(context, getString(R.string.not_found_user), Toast.LENGTH_LONG).show()
            }
        }


        return v

    }


    private fun existUser(phone:String): Boolean {
        val url = Config.SITE_URL + "user/search"
        var exist:Boolean = false
        val jsonObj = JSONObject()
        jsonObj.put("phone" , phone)
        val que = Volley.newRequestQueue(context)
        val req = JsonObjectRequest(Request.Method.POST , url , jsonObj ,
                Response.Listener { response ->
                    if(response.getString("phone") != ""){
                        UserInfo.client_email = response.getString("email")
                        UserInfo.client_id = response.getInt("id")
                        UserInfo.client_name = response.getString("name")
                        UserInfo.client_phone = response.getString("phone")
                        exist = true
                    }else{
                        UserInfo.client_email = ""
                        UserInfo.client_id = 0
                        UserInfo.client_name = ""
                        UserInfo.client_phone = ""
                    }
                } , Response.ErrorListener { error->
            Log.d("D" , error.message.toString())
        } )
        que.add(req)
        return exist
    }
    private fun commitFrag(id:Int , module:String ){
        val bundle = Bundle()
        val fragment = RatingFragment()
        bundle.putString("module", module)
        bundle.putInt("id" , id)
        fragment.arguments = bundle
        (context as FragmentActivity).supportFragmentManager.beginTransaction()
                //.addToBackStack(null)
                .replace(R.id.frameLayout, fragment)
                .commit()
    }





    override fun onRequestPermissionsResult(requestCode: Int,
                                            permissions: Array<String>, grantResults: IntArray) {
        when (requestCode) {
            REQUEST_EXTERNAL_STORAGE -> {
                // If request is cancelled, the result arrays are empty.
                if (grantResults.size <= 0 || grantResults[0] != PackageManager.PERMISSION_GRANTED) {
                    Toast.makeText(context, "Cannot write images to external storage", Toast.LENGTH_SHORT).show()
                }
            }
        }
    }

    fun getAlbumStorageDir(albumName: String): File {
        // Get the directory for the user's public pictures directory.
        val file = File(Environment.getExternalStoragePublicDirectory(
                Environment.DIRECTORY_PICTURES), albumName)
        if (!file.mkdirs()) {
            Log.e("SignaturePad", "Directory not created")
        }
        return file
    }
    private fun loadTextWithProgress(handleProgress: (Int) -> Unit): String {
        for (i in 1..10) {
            handleProgress(i * 100 / 10) // in %
            Thread.sleep(300)
        }
        return "Loaded Text"
    }
    @Throws(IOException::class)
    fun saveBitmapToJPG(bitmap: Bitmap, photo: File) {
        val newBitmap = Bitmap.createBitmap(bitmap.width, bitmap.height, Bitmap.Config.ARGB_8888)
        val canvas = Canvas(newBitmap)
        canvas.drawColor(Color.WHITE)
        canvas.drawBitmap(bitmap, 0f, 0f, null)
        val stream = FileOutputStream(photo)
        newBitmap.compress(Bitmap.CompressFormat.JPEG, 80, stream)
        stream.close()
    }

    fun addJpgSignatureToGallery(signature: Bitmap): Boolean {
        var result = false
        try {
            val photo = File(getAlbumStorageDir("SignaturePad"), String.format("Signature_%d.jpg", System.currentTimeMillis()))
            saveBitmapToJPG(signature, photo)

            scanMediaFile(photo)
            result = true
        } catch (e: IOException) {
            e.printStackTrace()
        }

        return result
    }

    private fun scanMediaFile(photo: File) {
        val mediaScanIntent = Intent(Intent.ACTION_MEDIA_SCANNER_SCAN_FILE)
        val contentUri = Uri.fromFile(photo)
        mediaScanIntent.data = contentUri
        context!!.sendBroadcast(mediaScanIntent)
    }

    fun addSvgSignatureToGallery(signatureSvg: String): Boolean {
        var result = false
        try {
            val svgFile = File(getAlbumStorageDir("SignaturePad"), String.format("Signature_%d.svg", System.currentTimeMillis()))
            val stream = FileOutputStream(svgFile)
            val writer = OutputStreamWriter(stream)
            writer.write(signatureSvg)
            writer.close()
            stream.flush()
            stream.close()
            scanMediaFile(svgFile)
            result = true
        } catch (e: IOException) {
            e.printStackTrace()
        }

        return result
    }

    /**
     * Checks if the app has permission to write to device storage
     *
     *
     * If the app does not has permission then the user will be prompted to grant permissions
     *
     * @param activity the activity from which permissions are checked
     */
    fun verifyStoragePermissions(activity: Activity) {
        // Check if we have write permission
        val permission = ActivityCompat.checkSelfPermission(activity, Manifest.permission.WRITE_EXTERNAL_STORAGE)

        if (permission != PackageManager.PERMISSION_GRANTED) {
            // We don't have permission so prompt the user
            ActivityCompat.requestPermissions(
                    activity,
                    PERMISSIONS_STORAGE,
                    REQUEST_EXTERNAL_STORAGE
            )
        }
    }
}
