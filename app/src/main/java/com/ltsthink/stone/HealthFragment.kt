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
import android.text.Editable
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.RadioButton
import android.widget.TextView
import android.widget.Toast
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.github.gcacace.signaturepad.views.SignaturePad
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import kotlinx.android.synthetic.main.fragment_health.*
import kotlinx.android.synthetic.main.fragment_health.view.*
import org.json.JSONObject
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter
import kotlin.concurrent.thread


class HealthFragment : Fragment() {


    private val REQUEST_EXTERNAL_STORAGE = 1
    private val PERMISSIONS_STORAGE = arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE)
    private var mSignaturePad: SignaturePad? = null
    private var healthId: Int = 0
    lateinit var txtPhoneLayout: TextInputLayout
    lateinit var txtPhone: AppCompatEditText

    var userExist: Boolean = false
    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        // Inflate the layout for this fragment
        val v = inflater.inflate(R.layout.fragment_health, container, false)
        verifyStoragePermissions(context as Activity)

        txtPhoneLayout = v.findViewById(R.id.textPhoneLayout) as TextInputLayout
        txtPhone = v.findViewById(R.id.textHealthPhone) as AppCompatEditText




        txtPhone.onFocusChangeListener = View.OnFocusChangeListener { v, hasFocus ->
            if (txtPhone.text.toString().isEmpty()) {
                txtPhoneLayout.isErrorEnabled = true
                txtPhoneLayout.error = "Required Field!"
            } else {
                txtPhoneLayout.isErrorEnabled = false
                existUser(textHealthPhone.text.toString())
            }
        }


        val bundle = this.arguments

        val s: AppCompatEditText = v.findViewById(R.id.textHealthPhone) as AppCompatEditText
        val m: AppCompatEditText = v.findViewById(R.id.textHealthName) as AppCompatEditText
        val e: AppCompatEditText = v.findViewById(R.id.textHealthEmail) as AppCompatEditText
        var client_id: Int = 0
        s.setText(UserInfo.client_phone, TextView.BufferType.EDITABLE)
        m.setText(UserInfo.client_name, TextView.BufferType.EDITABLE)
        e.setText(UserInfo.client_email, TextView.BufferType.EDITABLE)

        s.isEnabled = false
        m.isEnabled = false
        e.isEnabled = false
        var url = Config.SITE_URL + "healths"
        var url2 = Config.SITE_URL + "user/check-health"
        val healthobj2 = JSONObject()
        val jsonObj = JSONObject()
        val userObj = JSONObject()
        val healthObj = JSONObject()





        if (UserInfo.client_id != 0) {
            val chest: RadioButton = v.findViewById(R.id.chestYes) as RadioButton
            val lifeS: RadioButton = v.findViewById(R.id.styleActive) as RadioButton
            val heartD: RadioButton = v.findViewById(R.id.heartYes) as RadioButton
            val blood: RadioButton = v.findViewById(R.id.bloodYes) as RadioButton
            val veins: RadioButton = v.findViewById(R.id.veinsYes) as RadioButton
            val alerg: RadioButton = v.findViewById(R.id.allergiesYes) as RadioButton
            val bronG: RadioButton = v.findViewById(R.id.bronchitisYes) as RadioButton
            val athT: RadioButton = v.findViewById(R.id.asthmaYes) as RadioButton
            val dizA: RadioButton = v.findViewById(R.id.dizzinessYes) as RadioButton
            val bronT: RadioButton = v.findViewById(R.id.headachesYes) as RadioButton
            val chemA: RadioButton = v.findViewById(R.id.chemotherapyYes) as RadioButton
            val diab: RadioButton = v.findViewById(R.id.diabetesYes) as RadioButton
            val epil: RadioButton = v.findViewById(R.id.ePilepsyYes) as RadioButton
            val other: RadioButton = v.findViewById(R.id.otherYes) as RadioButton
            val aler: RadioButton = v.findViewById(R.id.allergicYes) as RadioButton

            val life: RadioButton = v.findViewById(R.id.styleActive) as RadioButton
            val preg: RadioButton = v.findViewById(R.id.pregnanciesYes) as RadioButton
            val exer: RadioButton = v.findViewById(R.id.exerciseYes) as RadioButton

            val textAge: AppCompatEditText = v.findViewById(R.id.textAge) as AppCompatEditText
            val textAle: AppCompatEditText = v.findViewById(R.id.textNotes) as AppCompatEditText
            val textOth: AppCompatEditText = v.findViewById(R.id.textOtherDesc) as AppCompatEditText
            Toast.makeText(context, "Fetching Data", Toast.LENGTH_LONG).show()
            healthObj.put("id", UserInfo.client_id)

            val hQue = Volley.newRequestQueue(context)
            val hReq = JsonObjectRequest(Request.Method.POST, Config.SITE_URL + "health/search?one=true", healthObj,
                    Response.Listener { response ->
                        if (response.getInt("id") != 0) {
                            if (response.getInt("heart_disease") == 1) {
                                heartD.isChecked = true
                            }
                            if (response.getInt("high_blood_pressure") == 1) {
                                blood.isChecked = true
                            }
                            if (response.getInt("allergies") == 1) {
                                alerg.isChecked = true
                            }
                            if (response.getInt("allergic") == 1) {
                                aler.isChecked = true
                            }
                            if (response.getInt("otherـdiseases") == 1) {
                                other.isChecked = true
                            }
                            if (response.getInt("e_pilepsy") == 1) {
                                epil.isChecked = true
                            }
                            if (response.getInt("diabetes") == 1) {
                                diab.isChecked = true
                            }
                            if (response.getInt("chemotherapy") == 1) {
                                chemA.isChecked = true
                            }
                            if (response.getInt("chest_pain") == 1) {
                                chest.isChecked = true
                            }
                            if (response.getInt("varicose_veins") == 1) {
                                veins.isChecked = true
                            }
                            if (response.getInt("bronchitis") == 1) {
                                bronG.isChecked = true
                            }
                            if (response.getInt("asthma") == 1) {
                                athT.isChecked = true
                            }
                            if (response.getInt("dizziness") == 1) {
                                dizA.isChecked = true
                            }
                            if (response.getInt("headaches") == 1) {
                                bronT.isChecked = true
                            }

                            if (response.getInt("life_style") == 1) {
                                life.isChecked = true
                            }
                            if (response.getInt("pregnancies") == 1) {
                                preg.isChecked = true
                            }
                            if (response.getInt("exercise") == 1) {
                                exer.isChecked = true
                            }

                            healthId = response.getInt("id")
                            textAge.setText(response.getString("age"), TextView.BufferType.EDITABLE)
                            textAle.setText(response.getString("what_causes_you_allergies"), TextView.BufferType.EDITABLE)
                            textOth.setText(response.getString("otherـdiseases_desc"), TextView.BufferType.EDITABLE)
                        }


                    }, Response.ErrorListener { error ->
                Log.d("D", error.message.toString())
            })
            hQue.add(hReq)
        }



        mSignaturePad = v.findViewById(R.id.healthSignature_pad) as SignaturePad
        v.healthlBtn.setOnClickListener {

            if (txtPhone.text.toString().isEmpty()) {
                txtPhoneLayout.isErrorEnabled = true
                txtPhoneLayout.error = "Required Field!"
            } else {
                txtPhoneLayout.isErrorEnabled = false
            }

            val heartD: Int = radioHeart.checkedRadioButtonId
            val chestD: Int = radioChest.checkedRadioButtonId
            val bllodD: Int = radioBlood.checkedRadioButtonId
            val viensD: Int = radioVeins.checkedRadioButtonId
            val alirgD: Int = radioAllergies.checkedRadioButtonId
            val broncD: Int = radioBronchitis.checkedRadioButtonId
            val asthmD: Int = radioAsthma.checkedRadioButtonId
            val dizziD: Int = radioDizziness.checkedRadioButtonId
            val headaD: Int = radioHeadaches.checkedRadioButtonId
            val chemoD: Int = radioChemotherapy.checkedRadioButtonId
            val diabeD: Int = radioDiabetes.checkedRadioButtonId
            val e_pilD: Int = radioEPilepsy.checkedRadioButtonId
            val otherD: Int = radioOther.checkedRadioButtonId
            val allerD: Int = radioAllergic.checkedRadioButtonId

            val pregD: Int = radioPregnancies.checkedRadioButtonId
            val exerR: Int = radioExercise.checkedRadioButtonId
            val lifeS: Int = myRadioGroup.checkedRadioButtonId

            //Toast.makeText(context , UserInfo.client_id.toString() , Toast.LENGTH_LONG).show()
            jsonObj.put("user_id", UserInfo.client_id)
            jsonObj.put("branch_id", UserInfo.branch_id)
            jsonObj.put("updated_by", UserInfo.user_id)
            jsonObj.put("created_by", UserInfo.user_id)
            val signatureBitmap = mSignaturePad!!.getSignatureBitmap()
            if (addSvgSignatureToGallery(mSignaturePad!!.getSignatureSvg())) {
                jsonObj.put("tech_signature", mSignaturePad!!.getSignatureSvg())
            }


            when (allerD) {
                R.id.allergicYes -> jsonObj.put("allergic", 1)
            }
            when (otherD) {
                R.id.otherYes -> jsonObj.put("otherـdiseases", 1)
            }
            when (e_pilD) {
                R.id.ePilepsyYes -> jsonObj.put("e_pilepsy", 1)
            }
            when (diabeD) {
                R.id.diabetesYes -> jsonObj.put("diabetes", 1)
            }
            when (chemoD) {
                R.id.chemotherapyYes -> jsonObj.put("chemotherapy", 1)
            }
            when (heartD) {
                R.id.heartYes -> jsonObj.put("heart_disease", 1)
            }
            when (chestD) {
                R.id.chestYes -> jsonObj.put("chest_pain", 1)
            }
            when (bllodD) {
                R.id.bloodYes -> jsonObj.put("high_blood_pressure", 1)
            }
            when (viensD) {
                R.id.veinsYes -> jsonObj.put("varicose_veins", 1)
            }
            when (alirgD) {
                R.id.veinsYes -> jsonObj.put("allergies", 1)
            }
            when (broncD) {
                R.id.bronchitisYes -> jsonObj.put("bronchitis", 1)
            }
            when (asthmD) {
                R.id.asthmaYes -> jsonObj.put("asthma", 1)
            }
            when (dizziD) {
                R.id.dizzinessYes -> jsonObj.put("dizziness", 1)
            }
            when (headaD) {
                R.id.headachesYes -> jsonObj.put("headaches", 1)
            }
            when (pregD) {
                R.id.pregnantYes -> jsonObj.put("pregnancies", 1)
            }
            when (exerR) {
                R.id.exerciseYes -> jsonObj.put("exercise", 1)
            }
            when (lifeS) {
                R.id.styleActive -> jsonObj.put("life_style", 1)
            }
            jsonObj.put("what_causes_you_allergies", textNotes.text)
            jsonObj.put("otherـdiseases_desc", textOtherDesc.text)
            jsonObj.put("age", textAge.text)



            //healthobj2.put("client_id", UserInfo.client_id)

            if (UserInfo.client_id != 0) {

                val que = Volley.newRequestQueue(context)
                val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,

                        Response.Listener { response ->
                                              if (response.getString("what_causes_you_allergies") == "") {
                                                Toast.makeText(context, "fill what causes you allergies ", Toast.LENGTH_LONG).show()

                                            } else if (response.getString("otherـdiseases_desc") == "") {
                                                Toast.makeText(context, "fill other diseases desc ", Toast.LENGTH_LONG).show()

                                            } else if (response.getString("age") == "") {
                                                Toast.makeText(context, "fill age", Toast.LENGTH_LONG).show()

                                            } else {
                                                Toast.makeText(context, getString(R.string.added), Toast.LENGTH_LONG).show()
                                                commitFrag()
                                            }


                                        }, Response.ErrorListener { error ->
                                    Log.d("D", jsonObj.toString())
                                })
                                que.add(req)


            } else {
                Toast.makeText(context, getString(R.string.not_found_user), Toast.LENGTH_LONG).show()
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
                    } else {
                        UserInfo.client_email = ""
                        UserInfo.client_id = 0
                        UserInfo.client_name = ""
                        UserInfo.client_phone = ""
                    }
                }, Response.ErrorListener { error ->
            Log.d("D", error.message.toString())
        })
        que.add(req)
        return exist
    }

    private fun commitFrag() {
        val bundle = Bundle()
        val fragment = MainFragment()
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
