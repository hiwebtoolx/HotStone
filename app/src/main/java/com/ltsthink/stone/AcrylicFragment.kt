package com.ltsthink.stone


import android.Manifest
import android.app.Activity
import android.content.Intent
import android.content.pm.PackageManager
import android.graphics.Bitmap
import android.graphics.Canvas
import android.graphics.Color
import android.net.Uri
import android.os.Bundle
import android.os.Environment
import android.os.Handler
import android.support.design.widget.TextInputLayout
import android.support.v4.app.ActivityCompat
import android.support.v4.app.Fragment
import android.support.v4.app.FragmentActivity
import android.support.v7.widget.AppCompatEditText
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.RadioGroup
import android.widget.TextView
import android.widget.Toast
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.github.gcacace.signaturepad.views.SignaturePad
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import kotlinx.android.synthetic.main.fragment_acrylic.*
import kotlinx.android.synthetic.main.fragment_acrylic.view.*
import kotlinx.android.synthetic.main.fragment_health.*
import kotlinx.android.synthetic.main.fragment_keratin.*
import org.json.JSONObject
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter


class AcrylicFragment : Fragment() {


    private val REQUEST_EXTERNAL_STORAGE = 1
    private val PERMISSIONS_STORAGE = arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE)
    private var mSignaturePad: SignaturePad? = null
    private var sSignaturePad: SignaturePad? = null
    lateinit var txtPhoneLayout: TextInputLayout
    lateinit var txtPhone: AppCompatEditText
    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        // Inflate the layout for this fragment
        verifyStoragePermissions(context as Activity)
        var url = Config.SITE_URL + "acrylics"
        val jsonObj = JSONObject()
        val v = inflater.inflate(R.layout.fragment_acrylic, container, false)

        txtPhoneLayout = v.findViewById(R.id.textPhoneLayout) as TextInputLayout
        txtPhone = v.findViewById(R.id.textPhone) as AppCompatEditText



        v.acrylic_his.setOnClickListener {
            val intent = Intent(context, HistoryActivity::class.java)
            intent.putExtra("his",8)
            startActivity(intent)
        }

        txtPhone.onFocusChangeListener = View.OnFocusChangeListener { v, hasFocus ->
            if (txtPhone.text.toString().isEmpty()) {
                txtPhoneLayout.isErrorEnabled = true
                txtPhoneLayout.error = "Required Field!"
            } else {
                txtPhoneLayout.isErrorEnabled = false
                existUser(v.textPhone.text.toString())
            }
        }
        val nm: AppCompatEditText = v.findViewById(R.id.textName) as AppCompatEditText
        val ph: AppCompatEditText = v.findViewById(R.id.textPhone) as AppCompatEditText
        val em: AppCompatEditText = v.findViewById(R.id.textEmail) as AppCompatEditText

        nm.setText(UserInfo.client_name, TextView.BufferType.EDITABLE)
        ph.setText(UserInfo.client_phone, TextView.BufferType.EDITABLE)
        em.setText(UserInfo.client_email, TextView.BufferType.EDITABLE)
        Toast.makeText(context, "" + UserInfo.client_id, Toast.LENGTH_LONG).show()
        nm.isEnabled = false
        ph.isEnabled = false
        em.isEnabled = false

        mSignaturePad = v.findViewById(R.id.acrylic_th_pad) as SignaturePad

        sSignaturePad = v.findViewById(R.id.acrylic_client_pad) as SignaturePad
        val radio = v.findViewById<RadioGroup>(R.id.radioServicesGiven)
        // val given: Int = radioServicesGiven.checkedRadioButtonId
        val given: Int = radio.checkedRadioButtonId
        v.acrylicBtn.setOnClickListener {
            when (given) {
                R.id.Apply_acrylic -> jsonObj.put("services_given", "Apply acrylic")
                R.id.remove_acrylic -> jsonObj.put("services_given", "remove acrylic")
                R.id.remove_and_apply -> jsonObj.put("services_given", "remove and apply")
            }
            jsonObj.put("user_id", UserInfo.client_id)
            jsonObj.put("branch_id", UserInfo.branch_id)
            jsonObj.put("updated_by", UserInfo.user_id)
            jsonObj.put("created_by", UserInfo.user_id)
            jsonObj.put("product_suggested", textRetailProduct2.text.toString())
            jsonObj.put("comments", textCommentsProduct2.text.toString())


            val signatureBitmap = mSignaturePad!!.getSignatureBitmap()
            val signatureBitmap2 = sSignaturePad!!.getSignatureBitmap()

            if (addSvgSignatureToGallery(mSignaturePad!!.getSignatureSvg())) {
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
                jsonObj.put("tech_signature", mSignaturePad!!.getSignatureSvg())
            }
            if (addSvgSignatureToGallery(sSignaturePad!!.getSignatureSvg())) {
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
                jsonObj.put("client_signature", sSignaturePad!!.getSignatureSvg())
            }
            if (UserInfo.client_id != 0) {
                val que = Volley.newRequestQueue(context)
                val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                        Response.Listener { response ->
                            Toast.makeText(context, "Successfully Added", Toast.LENGTH_LONG).show()
                            commitFrag(response.getInt("id"), "acrylic")

                        }, Response.ErrorListener { error ->
                    Log.d("D", error.message.toString())
                })

                que.add(req)
            } else {
                Toast.makeText(context, "User Not Found! Please add user first ", Toast.LENGTH_LONG).show()
            }
        }
        return v
    }

    private fun existUser(phone: String): Boolean {
        val url = Config.SITE_URL + "user/search"
        var exist: Boolean = false
        val jsonObj = JSONObject()
        jsonObj.put("phone", phone)
        val que = Volley.newRequestQueue(context)
        val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                Response.Listener { response ->
                    if (response.getString("phone") != "") {
                        UserInfo.client_email = response.getString("email")
                        UserInfo.client_id = response.getInt("id")
                        UserInfo.client_name = response.getString("name")
                        UserInfo.client_phone = response.getString("phone")
                        exist = true
                    }
                }, Response.ErrorListener { error ->
            Log.d("D", error.message.toString())
        })
        que.add(req)
        return exist
    }

    private fun commitFrag(id: Int, module: String) {
        val bundle = Bundle()
        val fragment = RatingFragment()
        bundle.putString("module", module)
        bundle.putInt("id", id)
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
