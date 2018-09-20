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
import android.support.design.widget.TextInputLayout
import android.support.v4.app.ActivityCompat
import android.support.v4.app.Fragment
import android.support.v4.app.FragmentActivity
import android.support.v7.widget.AppCompatEditText
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import android.widget.Toast
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.github.gcacace.signaturepad.views.SignaturePad
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import kotlinx.android.synthetic.main.fragment_facial.*
import kotlinx.android.synthetic.main.fragment_facial.view.*
import kotlinx.android.synthetic.main.fragment_manicure.*
import org.json.JSONObject
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter


class FacialFragment : Fragment() {

    private val REQUEST_EXTERNAL_STORAGE = 1
    private val PERMISSIONS_STORAGE = arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE)
    private var mSignaturePad: SignaturePad? = null
    lateinit var txtPhoneLayout : TextInputLayout
    lateinit var txtPhone : AppCompatEditText
    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        verifyStoragePermissions(context as Activity)

        // Inflate the layout for this fragment
        val v = inflater.inflate(R.layout.fragment_facial, container, false)

        txtPhoneLayout = v.findViewById(R.id.textPhoneLayout) as TextInputLayout
        txtPhone = v.findViewById(R.id.textPhone) as AppCompatEditText



//        txtPhone.onFocusChangeListener = View.OnFocusChangeListener { v, hasFocus ->
//            if (txtPhone.text.toString().isEmpty()) {
//                txtPhoneLayout.isErrorEnabled = true
//                txtPhoneLayout.error = "Required Field!"
//            } else {
//                txtPhoneLayout.isErrorEnabled = false
//                existUser(textPhone.text.toString())
//            }
//        }
        //val userType = bundle!!.getString("type" )
        val nm:AppCompatEditText =  v.findViewById(R.id.textName) as AppCompatEditText
        val ph:AppCompatEditText =  v.findViewById(R.id.textPhone) as AppCompatEditText
        val em:AppCompatEditText =  v.findViewById(R.id.textEmail) as AppCompatEditText

        nm.setText(UserInfo.client_name , TextView.BufferType.EDITABLE)
        ph.setText(UserInfo.client_phone , TextView.BufferType.EDITABLE)
        em.setText(UserInfo.client_email , TextView.BufferType.EDITABLE)

        nm.isEnabled = false
        ph.isEnabled = false
        em.isEnabled = false

        var url = Config.SITE_URL + "facials"
        val jsonObj = JSONObject()

        mSignaturePad = v.findViewById(R.id.techSignature_pad) as SignaturePad


        v.facialBtn.setOnClickListener{

            val signatureBitmap = mSignaturePad!!.getSignatureBitmap()
            if (addSvgSignatureToGallery(mSignaturePad!!.getSignatureSvg())) {
                Log.d( "d" , mSignaturePad!!.getSignatureSvg())
                jsonObj.put("tech_signature" , mSignaturePad!!.getSignatureSvg())
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
            } else {
                Toast.makeText(context, "Unable to store the SVG signature", Toast.LENGTH_SHORT).show()
            }

            val lifeS: Int = myRadioGroup.checkedRadioButtonId
            val exerS: Int = radioExercise.checkedRadioButtonId
            val pregS: Int = radioPregnancies.checkedRadioButtonId
            val skinS: Int = radioSkinType.checkedRadioButtonId
            val skinC: Int = radioSkinColour.checkedRadioButtonId
            val skinT: Int = radioSkinTexture.checkedRadioButtonId
            val skinCr:Int = radioSkinCirculation.checkedRadioButtonId
            val skinM: Int = radioSkinMuscletone.checkedRadioButtonId
            val skinE: Int = radioSkinElasticity.checkedRadioButtonId
            val skinI: Int = radioSkinImperfections.checkedRadioButtonId
            val skinW: Int = radioSkinWrinkles.checkedRadioButtonId
            val skinP: Int = radioSkinPores.checkedRadioButtonId
            val skinD: Int = radioSkinDiscoloration.checkedRadioButtonId
            when(lifeS){
                R.id.Active -> jsonObj.put("life_style" , "active")
                R.id.Sedentary -> jsonObj.put("life_style" , "sedentary")
            }

            when(exerS){
                R.id.exerciseYes -> jsonObj.put("exercise" , "yes")
                R.id.exerciseNo -> jsonObj.put("exercise" , "no")
            }

            when(pregS){
                R.id.pregnantYes -> jsonObj.put("pregnancies" , "yes")
                R.id.pregnanciesNo -> jsonObj.put("pregnancies" , "no")
            }

            when(skinS){
                R.id.skinCombination -> jsonObj.put("type" , "combination")
                R.id.skinOily -> jsonObj.put("type" , "oily")
                R.id.skinDry -> jsonObj.put("type" , "dry")
            }

            when(skinC){
                R.id.skinFair -> jsonObj.put("color" , "fair")
                R.id.skinDark -> jsonObj.put("color" , "dark")
                R.id.skinOlive -> jsonObj.put("color" , "olive")
            }
            when(skinT){
                R.id.skinFine -> jsonObj.put("texture" , "fine")
                R.id.skinCoarse -> jsonObj.put("texture" , "coarse")
            }
            when(skinCr){
                R.id.skinCirculationGood -> jsonObj.put("circulation" , "good")
                R.id.skinCirculationAverage -> jsonObj.put("circulation" , "average")
                R.id.skinCirculationPoor -> jsonObj.put("circulation" , "poor")
            }
            when(skinM){
                R.id.skinMuscleToneGood -> jsonObj.put("muscle_tone" , "good")
                R.id.skinMuscleToneAverage -> jsonObj.put("muscle_tone" , "average")
                R.id.skinMuscleTonePoor -> jsonObj.put("muscle_tone" , "poor")
            }

            when(skinE){
                R.id.skinElasticityGood -> jsonObj.put("elasticity" , "good")
                R.id.skinElasticityAverage -> jsonObj.put("elasticity" , "average")
                R.id.skinElasticityPoor -> jsonObj.put("elasticity" , "poor")
            }

            when(skinI){
                R.id.skinScars -> jsonObj.put("imperfections_Irregularities" , "scars")
                R.id.skinNaevi -> jsonObj.put("imperfections_Irregularities" , "naevi")
                R.id.skinSkintags -> jsonObj.put("imperfections_Irregularities" , "Skin tags")
            }

            when(skinW){
                R.id.skinWrinklesDeep -> jsonObj.put("wrinkles" , "deep")
                R.id.skinSuperficial -> jsonObj.put("wrinkles" , "superficial")
            }
            when(skinP){
                R.id.skinPoresMedium -> jsonObj.put("pores" , "medium")
                R.id.skinPoresSmall -> jsonObj.put("pores" , "small")
                R.id.skinPoresEnlarged -> jsonObj.put("pores" , "enlarged")
            }
            when(skinD){
                R.id.skinPoresAround -> jsonObj.put("discoloration" , "around eyes")
                R.id.skinPoresAny -> jsonObj.put("discoloration" , "anywhere in the face")
            }
            jsonObj.put("user_id" , UserInfo.user_id)
            jsonObj.put("branch_id" , UserInfo.branch_id)
            jsonObj.put("updated_by" ,UserInfo.user_id)
            jsonObj.put("created_by" , UserInfo.user_id)
            jsonObj.put("age" , textAge.text)
//            jsonObj.put("color" , textColor.text)
//            jsonObj.put("texture" , textTexture.text)
//            jsonObj.put("circulation" , textCirculation.text)
//            jsonObj.put("muscle_tone" , textMuscle.text)
//            jsonObj.put("elasticity" , textElasticity.text)
//            jsonObj.put("imperfections_Irregularities" , textImperfections.text)
//            jsonObj.put("wrinkles" , textWrinkles.text)
//            jsonObj.put("pores" , textPores.text)
//            jsonObj.put("discoloration" , textDiscoloration.text)
            jsonObj.put("present_skincare_routine" , textPresent.text)
            jsonObj.put("hands" , textHands.text)
            jsonObj.put("feet" , textFeet.text)
            jsonObj.put("miscellaneous", textMiscellaneous.text)


            jsonObj.put("notes", textNotes.text)
            if(UserInfo.client_id != 0){
                val que = Volley.newRequestQueue(context)
                val req = JsonObjectRequest(Request.Method.POST , url , jsonObj ,
                        Response.Listener { response ->
                            Toast.makeText(context, getString(R.string.added), Toast.LENGTH_LONG).show()
                            commitFrag(response.getInt("id") , "facial" )

                        } , Response.ErrorListener { error->
                    Log.d("D" , error.message.toString())
                } )

                que.add(req)
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
