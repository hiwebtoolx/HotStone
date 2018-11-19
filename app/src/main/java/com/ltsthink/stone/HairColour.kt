package com.ltsthink.stone

import android.Manifest
import android.app.Activity
import android.content.Intent
import android.content.pm.PackageManager
import android.net.Uri
import android.os.Bundle
import android.os.Environment
import android.support.design.widget.TextInputLayout
import android.support.v4.app.ActivityCompat
import android.support.v4.app.Fragment
import android.support.v4.app.FragmentActivity
import android.support.v7.widget.AppCompatEditText
import android.support.v7.widget.PopupMenu
import android.util.Log
import android.view.LayoutInflater
import android.view.MenuItem
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import android.widget.Toast
import com.android.volley.DefaultRetryPolicy
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.github.gcacace.signaturepad.views.SignaturePad
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import kotlinx.android.synthetic.main.fragment_haircolour.*
import kotlinx.android.synthetic.main.fragment_haircolour.view.*
import kotlinx.android.synthetic.main.fragment_scrub.*
import kotlinx.android.synthetic.main.fragment_scrub.view.*
import org.json.JSONObject
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter

/**
 * Created by Abdelrahman on 11/6/2018.
 */
class HairColour : Fragment() {
    val REQUEST_EXTERNAL_STORAGE = 1
    private val PERMISSIONS_STORAGE = arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE)
    private var mSignaturePad: SignaturePad? = null
    private var sSignaturePad: SignaturePad? = null
    lateinit var txtPhoneLayout: TextInputLayout
    lateinit var txtPhone: AppCompatEditText
    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        verifyStoragePermissions(context as Activity)

        // Inflate the layout for this fragment
        val v = inflater.inflate(R.layout.fragment_haircolour, container, false)

        txtPhoneLayout = v.findViewById(R.id.textPhoneLayout) as TextInputLayout
        txtPhone = v.findViewById(R.id.textPhone) as AppCompatEditText

        mSignaturePad = v.findViewById(R.id.hairSignaturePad1) as SignaturePad
        sSignaturePad = v.findViewById(R.id.hairSignaturePad) as SignaturePad
        val nm: AppCompatEditText = v.findViewById(R.id.textName) as AppCompatEditText
        val ph: AppCompatEditText = v.findViewById(R.id.textPhone) as AppCompatEditText
        val em: AppCompatEditText = v.findViewById(R.id.textEmail) as AppCompatEditText

        nm.setText(UserInfo.client_name, TextView.BufferType.EDITABLE)
        ph.setText(UserInfo.client_phone, TextView.BufferType.EDITABLE)
        em.setText(UserInfo.client_email, TextView.BufferType.EDITABLE)

        nm.isEnabled = false
        ph.isEnabled = false
        em.isEnabled = false

        var url = Config.SITE_URL + "haircolours"
        var url2 = Config.SITE_URL + "user/check-health"

        val jsonObj = JSONObject()
        val hairObj = JSONObject()

        v.hairBtn.setOnClickListener {

            val texture: Int = radioTexture.checkedRadioButtonId
            val cond: Int = radioCondition.checkedRadioButtonId
            val nat: Int = radio_natural_form.checkedRadioButtonId
            val nat2: Int = radio_natural_colour.checkedRadioButtonId
            val amount: Int = radio_amount_of_grey.checkedRadioButtonId
            val exist: Int = radio_existing_hair_treatment.checkedRadioButtonId
            val sclap: Int = radio_scalp_and_skin.checkedRadioButtonId
            val colou: Int = radio_colouration_given.checkedRadioButtonId





            when (texture) {
                R.id.Fine -> jsonObj.put("texture", "Fine")
                R.id.Average -> jsonObj.put("texture", "Average")
                R.id.Thick -> jsonObj.put("texture", "Thick")

            }
            when (cond) {
                R.id.Dry -> jsonObj.put("condition", "Dry")
                R.id.Normal -> jsonObj.put("condition", "Normal")
                R.id.Oily -> jsonObj.put("condition", "Oily")


            }
            when (nat) {
                R.id.Straight -> jsonObj.put("natural_form", "Straight")
                R.id.Wavy -> jsonObj.put("natural_form", "Wavy")
                R.id.Curly -> jsonObj.put("natural_form", "Curly")
            }

            when (nat2) {
                R.id.Light -> jsonObj.put("natural_colour", "Light")
                R.id.Tone -> jsonObj.put("natural_colour", "Tone")
            }

            when (amount) {
                R.id.Front -> jsonObj.put("amount_grey", "Front")
                R.id.Back -> jsonObj.put("amount_grey", "Back")
                R.id.Full -> jsonObj.put("amount_grey", "Full")
            }
            when (exist) {
                R.id.Perm -> jsonObj.put("existing_treatment", "Perm")
                R.id.Keratin -> jsonObj.put("existing_treatment", "Keratin")
                R.id.Highlighted -> jsonObj.put("existing_treatment", "Highlighted")
                R.id.Bleach -> jsonObj.put("existing_treatment", "Bleach")
                R.id.Tint -> jsonObj.put("existing_treatment", "Tint")
                R.id.Rincage -> jsonObj.put("existing_treatment", "Rincage")
            }

            when (sclap) {
                R.id.Normal_sclap -> jsonObj.put("scalpskin_condition", "Normal")
                R.id.Sensitive -> jsonObj.put("scalpskin_condition", "Sensitive")
            }

            when (colou) {
                R.id.Roots -> jsonObj.put("colouration_given", "Roots")
                R.id.Highlight -> jsonObj.put("colouration_given", "Highlight")
                R.id.Lowlight -> jsonObj.put("colouration_given", "Lowlight")
                R.id.Rincage_colouration -> jsonObj.put("colouration_given", "Rincage_colouration")
                R.id.Ampoule -> jsonObj.put("colouration_given", "Ampoule")
                R.id.Colour -> jsonObj.put("colouration_given", "Colour")
                R.id.contouring -> jsonObj.put("colouration_given", "contouring")

            }

            jsonObj.put("user_id", UserInfo.client_id)
            jsonObj.put("branch_id", UserInfo.branch_id)
            jsonObj.put("updated_by", UserInfo.user_id)
            jsonObj.put("created_by", UserInfo.user_id)

            jsonObj.put("number_used", number_colour_used.text)
            jsonObj.put("product_suggested", suggestedProductHair.text)
            jsonObj.put("comments", textCommentsHair.text)

            if (addSvgSignatureToGallery(mSignaturePad!!.getSignatureSvg())) {
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
                jsonObj.put("tech_signature", mSignaturePad!!.getSignatureSvg())
            }
            if (addSvgSignatureToGallery(sSignaturePad!!.getSignatureSvg())) {
                //Toast.makeText(context, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
                jsonObj.put("client_signature", sSignaturePad!!.getSignatureSvg())
            }
            hairObj.put("client_id", UserInfo.client_id)

            if (UserInfo.client_id != 0) {
                val que = Volley.newRequestQueue(context)
                val req = JsonObjectRequest(Request.Method.POST, url2, hairObj,
                        Response.Listener { response ->
                            if (response.getString("success") != "0") {

                                val que = Volley.newRequestQueue(context)
                                val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                                        Response.Listener { response ->

                                            Toast.makeText(context, getString(R.string.added), Toast.LENGTH_LONG).show()
                                            commitFrag()

                                        },
                                        Response.ErrorListener { error ->
                                            Toast.makeText(context, "fill number used ", Toast.LENGTH_LONG).show()
                                        })
                                req.retryPolicy = DefaultRetryPolicy(60000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT)

                                que!!.add(req)

                            } else {
                                Toast.makeText(context, "fill customer health form first", Toast.LENGTH_LONG).show()

                            }
                        },
                        Response.ErrorListener { error ->
                            Toast.makeText(context, "fill number used ", Toast.LENGTH_LONG).show()
                        })
                req.retryPolicy = DefaultRetryPolicy(60000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT)

                que!!.add(req)
            } else {
                Toast.makeText(context, getString(R.string.not_found_user), Toast.LENGTH_LONG).show()
            }
        }
        return v
    }

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

    fun getAlbumStorageDir(albumName: String): File {
        // Get the directory for the user's public pictures directory.
        val file = File(Environment.getExternalStoragePublicDirectory(
                Environment.DIRECTORY_PICTURES), albumName)
        if (!file.mkdirs()) {
            Log.e("SignaturePad", "Directory not created")
        }
        return file
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


    private fun commitFrag() {
        val bundle = Bundle()
        val fragment = MainFragment()
        fragment.arguments = bundle
        (context as FragmentActivity).supportFragmentManager.beginTransaction()
                //.addToBackStack(null)
                .replace(R.id.frameLayout, fragment)
                .commit()
    }
}