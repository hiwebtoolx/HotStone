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
import kotlinx.android.synthetic.main.fragment_facial.view.*
import kotlinx.android.synthetic.main.fragment_hair_treatment.*
import kotlinx.android.synthetic.main.fragment_hair_treatment.view.*
import kotlinx.android.synthetic.main.fragment_haircolour.*
import kotlinx.android.synthetic.main.fragment_haircolour.view.*
import org.json.JSONObject
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter

/**
 * Created by Abdelrahman on 11/7/2018.
 */
class HairTreatment : Fragment() {
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
        val v = inflater.inflate(R.layout.fragment_hair_treatment, container, false)

        txtPhoneLayout = v.findViewById(R.id.textPhoneLayout) as TextInputLayout
        txtPhone = v.findViewById(R.id.textPhone) as AppCompatEditText

        mSignaturePad = v.findViewById(R.id.hairTreatSignaturePad1) as SignaturePad
        sSignaturePad = v.findViewById(R.id.hairTreatSignaturePad) as SignaturePad
        val nm: AppCompatEditText = v.findViewById(R.id.textName) as AppCompatEditText
        val ph: AppCompatEditText = v.findViewById(R.id.textPhone) as AppCompatEditText
        val em: AppCompatEditText = v.findViewById(R.id.textEmail) as AppCompatEditText

        nm.setText(UserInfo.client_name, TextView.BufferType.EDITABLE)
        ph.setText(UserInfo.client_phone, TextView.BufferType.EDITABLE)
        em.setText(UserInfo.client_email, TextView.BufferType.EDITABLE)

        nm.isEnabled = false
        ph.isEnabled = false
        em.isEnabled = false

        var url = Config.SITE_URL + "hairtreatments"
        var url2 = Config.SITE_URL + "user/check-health"

        val jsonObj = JSONObject()
        val hairObj = JSONObject()
        v.hair_his.setOnClickListener {
            val intent = Intent(context, HistoryActivity::class.java)
            intent.putExtra("his",2)
            startActivity(intent)
        }


        v.major.setOnClickListener {

            val popup = PopupMenu(context as Activity, major)

            popup.menuInflater.inflate(R.menu.wishes, popup.menu)

            popup.setOnMenuItemClickListener(PopupMenu.OnMenuItemClickListener { item ->
                if (item.itemId == R.id.soft_touch) {
                    jsonObj.put("major_wish", "a soft touch")
                    major_text.text = "a soft touch"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.shine) {
                    jsonObj.put("major_wish", "more shine")
                    major_text.text = "more shine"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.resistance) {
                    jsonObj.put("major_wish", "more resistance to breakage")
                    major_text.text = "more resistance to breakage"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.touch) {
                    jsonObj.put("major_wish", "a natural touch &glow")
                    major_text.text = "a natural touch &glow"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.more_volume) {
                    jsonObj.put("major_wish", "more volume")
                    major_text.text = "more volume"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.density) {
                    jsonObj.put("major_wish", "more density")
                    major_text.text = "more density"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.vibrate) {
                    jsonObj.put("major_wish", "a vibrant colour for longer")
                    major_text.text = "a vibrant colour for longer"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.discipline) {
                    jsonObj.put("major_wish", "discipline frizz-free")
                    major_text.text = "discipline frizz-free"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.disciplined_curls) {
                    jsonObj.put("major_wish", "disciplined curls")
                    major_text.text = "disciplined curls"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.revitalization) {
                    jsonObj.put("major_wish", "revitalization")
                    major_text.text = "revitalization"
                    return@OnMenuItemClickListener true
                }
                false
            })
            popup.show()
        }

        v.other_desire.setOnClickListener {

            val popup = PopupMenu(context as Activity, other_desire)

            popup.menuInflater.inflate(R.menu.wishes, popup.menu)

            popup.setOnMenuItemClickListener(PopupMenu.OnMenuItemClickListener { item ->
                if (item.itemId == R.id.soft_touch) {
                    jsonObj.put("other_desire", "a soft touch")
                    desire_text.text = "a soft touch"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.shine) {
                    jsonObj.put("other_desire", "more shine")
                    desire_text.text = "more shine"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.resistance) {
                    jsonObj.put("other_desire", "more resistance to breakage")
                    desire_text.text = "more resistance to breakage"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.touch) {
                    jsonObj.put("other_desire", "a natural touch &glow")
                    desire_text.text = "a natural touch &glow"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.more_volume) {
                    jsonObj.put("other_desire", "more volume")
                    desire_text.text = "more volume"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.density) {
                    jsonObj.put("other_desire", "more density")
                    desire_text.text = "more density"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.vibrate) {
                    jsonObj.put("other_desire", "a vibrant colour for longer")
                    desire_text.text = "a vibrant colour for longer"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.discipline) {
                    jsonObj.put("other_desire", "discipline frizz-free")
                    desire_text.text = "discipline frizz-free"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.disciplined_curls) {
                    jsonObj.put("other_desire", "disciplined curls")
                    desire_text.text = "disciplined curls"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.revitalization) {
                    jsonObj.put("other_desire", "revitalization")
                    desire_text.text = "revitalization"
                    return@OnMenuItemClickListener true
                }
                false
            })
            popup.show()
        }
        v.style_hair.setOnClickListener {

            val popup = PopupMenu(context as Activity, other_desire)

            popup.menuInflater.inflate(R.menu.wishes_style, popup.menu)

            popup.setOnMenuItemClickListener(PopupMenu.OnMenuItemClickListener { item ->
                if (item.itemId == R.id.volume) {
                    jsonObj.put("prefer_style_hair", "Extra volume")
                    style_hair_text.text = "Extra volume"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.smooth) {
                    jsonObj.put("prefer_style_hair", "smooth blow-dry")
                    style_hair_text.text = "smooth blow-dry"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.curls) {
                    jsonObj.put("prefer_style_hair", "better-defined curls")
                    style_hair_text.text = "better-defined curls"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.preference) {
                    jsonObj.put("prefer_style_hair", "No specific preference")
                    style_hair_text.text = "No specific preference"

                    return@OnMenuItemClickListener true
                }

                false
            })
            popup.show()
        }
        v.evaluate.setOnClickListener {

            val popup = PopupMenu(context as Activity, evaluate)

            popup.menuInflater.inflate(R.menu.touch, popup.menu)

            popup.setOnMenuItemClickListener(PopupMenu.OnMenuItemClickListener { item ->
                if (item.itemId == R.id.no) {
                    jsonObj.put("condition_scalp", "no problem")
                    evaluate_text.text = "no problem"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.sebum) {
                    jsonObj.put("condition_scalp", "excess sebum")
                    evaluate_text.text = "excess sebum"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.dandruff) {
                    jsonObj.put("condition_scalp", "dandruff")
                    evaluate_text.text = "dandruff"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.lack_of_density) {
                    jsonObj.put("condition_scalp", "lack of density")
                    evaluate_text.text = "lack of density"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.sensitiveness) {
                    jsonObj.put("condition_scalp", "sensitiveness/ redness/ itchiness")
                    evaluate_text.text = "sensitiveness/ redness/ itchiness"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.hair_loss) {
                    jsonObj.put("condition_scalp", "hair loss")
                    evaluate_text.text = "hair loss"
                    return@OnMenuItemClickListener true
                }
                false
            })
            popup.show()
        }
        v.manageability.setOnClickListener {

            val popup = PopupMenu(context as Activity, manageability)

            popup.menuInflater.inflate(R.menu.touch_test, popup.menu)

            popup.setOnMenuItemClickListener(PopupMenu.OnMenuItemClickListener { item ->
                if (item.itemId == R.id.easy_to_detangle) {
                    jsonObj.put("manageability_hair", "easy to detangle")
                    manageability_text.text = "easy to detangle"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.slightly_unruly) {
                    jsonObj.put("manageability_hair", "slightly unruly")
                    manageability_text.text = "slightly unruly"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.frizz_prone) {
                    jsonObj.put("manageability_hair", "frizz-prone")
                    manageability_text.text = "frizz-prone"
                    return@OnMenuItemClickListener true
                } else if (item.itemId == R.id.curly) {
                    jsonObj.put("manageability_hair", "curly and unmanageable")
                    manageability_text.text = "curly and unmanageable"
                    return@OnMenuItemClickListener true
                }
                false
            })
            popup.show()
        }

        v.hairTreatBtn.setOnClickListener {

            val wash_hair: Int = radioWashHair.checkedRadioButtonId
            val conditioning_product: Int = radioConditioning.checkedRadioButtonId
            val heat_tool: Int = radioHeatTool.checkedRadioButtonId
            val hair_style: Int = radioHairIs.checkedRadioButtonId
            val hair_diameter: Int = radioHairDiameter.checkedRadioButtonId
            val mobility_scalp: Int = radioMobility.checkedRadioButtonId
            val ends_roots: Int = radioRoots.checkedRadioButtonId
            val resistance_hair: Int = radioResistance.checkedRadioButtonId
            val dryness_hair: Int = radioDryness.checkedRadioButtonId
            val suggested_treatment: Int = radioSuggested_Treatment.checkedRadioButtonId




            when (wash_hair) {
                R.id.every_day -> jsonObj.put("wash_hair", "every day")
                R.id.every_two_days -> jsonObj.put("wash_hair", "every two days")
                R.id.twice_a_week -> jsonObj.put("wash_hair", "twice a week")
                R.id.once_a_week -> jsonObj.put("wash_hair", "once a week")

            }
            when (conditioning_product) {
                R.id.always -> jsonObj.put("conditioning_product", "always")
                R.id.Often -> jsonObj.put("conditioning_product", "Often")
                R.id.Sometimes -> jsonObj.put("conditioning_product", "Sometimes")
                R.id.Never -> jsonObj.put("conditioning_product", "Never")

            }

            when (heat_tool) {
                R.id.every_ay -> jsonObj.put("heat_tool", "every day")
                R.id.sometimes -> jsonObj.put("heat_tool", "sometimes")
                R.id.never_heat_tool -> jsonObj.put("heat_tool", "never")


            }


            when (hair_style) {
                R.id.Natural -> jsonObj.put("hair_style", "Natural")
                R.id.coloured -> jsonObj.put("hair_style", "coloured")
                R.id.highlighted -> jsonObj.put("hair_style", "highlighted")
                R.id.permed -> jsonObj.put("hair_style", "permed")
                R.id.straightened -> jsonObj.put("hair_style", "straightened")

            }

            when (hair_diameter) {
                R.id.Fine -> jsonObj.put("hair_diameter", "Fine")
                R.id.Normal -> jsonObj.put("hair_diameter", "Normal")
                R.id.Thick -> jsonObj.put("hair_diameter", "Thick")


            }


            when (mobility_scalp) {
                R.id.Good -> jsonObj.put("mobility_scalp", "Good")
                R.id.Average -> jsonObj.put("mobility_scalp", "Average")
                R.id.Tensed -> jsonObj.put("mobility_scalp", "Tensed")

            }

            when (ends_roots) {
                R.id.Shiny -> jsonObj.put("ends_roots", "Shiny")
                R.id.Dull -> jsonObj.put("ends_roots", "Dull")
            }

            when (resistance_hair) {
                R.id.has_good_elasticity -> jsonObj.put("resistance_hair", "has good elasticity")
                R.id.stretches -> jsonObj.put("resistance_hair", "stretches but does not bounce back")

            }
            when (dryness_hair) {
                R.id.normal -> jsonObj.put("dryness_hair", "normal")
                R.id.dry -> jsonObj.put("dryness_hair", "dry")
                R.id.severely_dried_out -> jsonObj.put("dryness_hair", "severely dried out")

            }

            when (suggested_treatment) {
                R.id.Kerastase -> jsonObj.put("suggested_treatment", "Kerastase treatment")
                R.id.Hotstone -> jsonObj.put("suggested_treatment", "Hotstone treatment")
                R.id.Combined -> jsonObj.put("suggested_treatment", "Combined")
                R.id.Quick_treatment -> jsonObj.put("suggested_treatment", "Quick treatment")

            }

            jsonObj.put("user_id", UserInfo.client_id)
            jsonObj.put("branch_id", UserInfo.branch_id)
            jsonObj.put("updated_by", UserInfo.user_id)
            jsonObj.put("created_by", UserInfo.user_id)

            jsonObj.put("many_sessions", How_many_sessions.text)
            jsonObj.put("product_suggested", suggestedProductHairTreatment.text)
            jsonObj.put("comments", textCommentsHairTreatment.text)

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
                                            Toast.makeText(context, "fill all fields", Toast.LENGTH_LONG).show()
                                        })
                                req.retryPolicy = DefaultRetryPolicy(60000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT)

                                que!!.add(req)

                            } else {
                                Toast.makeText(context, "fill customer health form first", Toast.LENGTH_LONG).show()

                            }
                        },
                        Response.ErrorListener { error ->
                            Toast.makeText(context, "fill all fields", Toast.LENGTH_LONG).show()
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