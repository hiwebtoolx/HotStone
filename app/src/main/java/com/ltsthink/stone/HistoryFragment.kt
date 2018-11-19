package com.ltsthink.stone

import android.app.Activity
import android.os.Bundle
import android.support.v4.app.Fragment
import android.support.v4.app.FragmentActivity
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Toast
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import kotlinx.android.synthetic.main.fragment_main.view.*
import kotlinx.android.synthetic.main.history_layout.*
import org.json.JSONArray
import org.json.JSONObject

/**
 * Created by MAGIC on 11/10/2018.
 */
class HistoryFragment : Fragment() {
    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {

        val v = inflater.inflate(R.layout.history_layout, container, false)

        val obj = JSONObject()
        obj.put("id", UserInfo.client_id)

        val massageUrl = Config.SITE_URL + "massage/search?one=true"

        val que = Volley.newRequestQueue(context)
        val req = JsonObjectRequest(Request.Method.POST, massageUrl, obj,
                Response.Listener { response ->

                    massage_name.text = "Massage"
                    if (response.isNull("created_at")) {
                        massage_date.text = "not exist"

                    } else {
                        massage_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        massage_rate.text = "not exist"
                    } else {
                        massage_rate.text = response.get("rate").toString()
                    }

                    massage_rate.setOnClickListener {
                        if (massage_rate.text == "0") {
                            commitFrag(response.getInt("id"), "massage")

                        } else if (massage_rate.text == "not exist") {
                            Toast.makeText(context, "Fill the form first", Toast.LENGTH_LONG).show()
                        }

                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que.add(req)

        val visitUrl = Config.SITE_URL + "visit/search?one=true"

        val que1 = Volley.newRequestQueue(context)
        val req1 = JsonObjectRequest(Request.Method.POST, visitUrl, obj,
                Response.Listener { response ->

                    visit_name.text = "Visit"
                    if (response.isNull("created_at")) {
                        visit_date.text = "not exist"

                    } else {
                        visit_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        visit_rate.text = "not exist"
                    } else {
                        visit_rate.text = response.get("rate").toString()
                    }

//                    visit_rate.setOnClickListener {
//                        if (visit_rate.text == "0") {
//                            commitFrag(response.getInt("id"), "visit")
//
//                        }
//
//                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que1.add(req1)


        val scrubUrl = Config.SITE_URL + "scrub/search?one=true"
        val que2 = Volley.newRequestQueue(context)
        val req2 = JsonObjectRequest(Request.Method.POST, scrubUrl, obj,
                Response.Listener { response ->

                    scrub_name.text = "Scrub"
                    if (response.isNull("created_at")) {
                        scrub_date.text = "not exist"

                    } else {
                        scrub_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        scrub_rate.text = "not exist"
                    } else {
                        scrub_rate.text = response.get("rate").toString()
                    }
                    scrub_rate.setOnClickListener {
                        if (scrub_rate.text == "0") {
                            commitFrag(response.getInt("id"), "scrub")

                        } else if (scrub_rate.text == "not exist") {
                            Toast.makeText(context, "Fill the form first", Toast.LENGTH_LONG).show()
                        }


                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que2.add(req2)


        val manicureUrl = Config.SITE_URL + "manicure/search?one=true"
        val que3 = Volley.newRequestQueue(context)
        val req3 = JsonObjectRequest(Request.Method.POST, manicureUrl, obj,
                Response.Listener { response ->

                    manicure_name.text = "Manicure"
                    if (response.isNull("created_at")) {
                        manicure_date.text = "not exist"

                    } else {
                        manicure_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        manicure_rate.text = "not exist"
                    } else {
                        manicure_rate.text = response.get("rate").toString()
                    }

                    manicure_rate.setOnClickListener {
                        if (manicure_rate.text == "0") {
                            commitFrag(response.getInt("id"), "manicure")

                        } else if (manicure_rate.text == "not exist") {
                            Toast.makeText(context, "Fill the form first", Toast.LENGTH_LONG).show()
                        }

                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que3.add(req3)


        val keratinUrl = Config.SITE_URL + "keratin/search?one=true"
        val que4 = Volley.newRequestQueue(context)
        val req4 = JsonObjectRequest(Request.Method.POST, keratinUrl, obj,
                Response.Listener { response ->

                    keratin_name.text = "Keratin"
                    if (response.isNull("created_at")) {
                        keratin_date.text = "not exist"

                    } else {
                        keratin_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        keratin_rate.text = "not exist"
                    } else {
                        keratin_rate.text = response.get("rate").toString()
                    }

                    keratin_rate.setOnClickListener {
                        if (keratin_rate.text == "0") {
                            commitFrag(response.getInt("id"), "keratin")

                        }
                        else if (keratin_rate.text =="not exist"){
                            Toast.makeText(context, "Fill the form first", Toast.LENGTH_LONG).show()
                        }

                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que4.add(req4)


//
//        val hairTreatmentUrl = Config.SITE_URL + "hairtreatment/search?one=true"
//        val que5 = Volley.newRequestQueue(context)
//        val req5 = JsonObjectRequest(Request.Method.POST, hairTreatmentUrl, obj,
//                Response.Listener { response ->
//
//                    hairtreatment_name.text = "Hair treatment"
//                    if (response.isNull("created_at")) {
//                        hairtreatment_date.text = "not exist"
//
//                    } else {
//                        hairtreatment_date.text = response.get("created_at").toString()
//
//                    }
//                    if (response.isNull("rate")) {
//                        hairtreatment_rate.text = "not exist"
//                    } else {
//                        hairtreatment_rate.text = response.get("rate").toString()
//                    }
//                }, Response.ErrorListener { error ->
//            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()
//
//            Log.d("D", error.message.toString())
//        })
//
//        que5.add(req5)
//

        val facialUrl = Config.SITE_URL + "facial/search?one=true"
        val que6 = Volley.newRequestQueue(context)
        val req6 = JsonObjectRequest(Request.Method.POST, facialUrl, obj,
                Response.Listener { response ->

                    facial_name.text = "Facial"
                    if (response.isNull("created_at")) {
                        facial_date.text = "not exist"

                    } else {
                        facial_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        facial_rate.text = "not exist"
                    } else {
                        facial_rate.text = response.get("rate").toString()
                    }

                    facial_rate.setOnClickListener {
                        if (facial_rate.text == "0") {
                            commitFrag(response.getInt("id"), "facial")

                        }
                        else if (facial_rate.text =="not exist"){
                            Toast.makeText(context, "Fill the form first", Toast.LENGTH_LONG).show()
                        }

                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que6.add(req6)


        val acrylicUrl = Config.SITE_URL + "acrylic/search?one=true"
        val que7 = Volley.newRequestQueue(context)
        val req7 = JsonObjectRequest(Request.Method.POST, acrylicUrl, obj,
                Response.Listener { response ->

                    acrylic_name.text = "Acrylic"
                    if (response.isNull("created_at")) {
                        acrylic_date.text = "not exist"

                    } else {
                        acrylic_date.text = response.get("created_at").toString()

                    }
                    if (response.isNull("rate")) {
                        acrylic_rate.text = "not exist"
                    } else {
                        acrylic_rate.text = response.get("rate").toString()
                    }

                    acrylic_rate.setOnClickListener {
                        if (acrylic_rate.text == "0") {
                            commitFrag(response.getInt("id"), "acrylic")

                        }
                        else if (acrylic_rate.text =="not exist"){
                            Toast.makeText(context, "Fill the form first", Toast.LENGTH_LONG).show()
                        }

                    }
                }, Response.ErrorListener { error ->
            Toast.makeText(context, "error", Toast.LENGTH_LONG).show()

            Log.d("D", error.message.toString())
        })

        que7.add(req7)

        return v
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

    private fun commitFrag1() {
        val bundle = Bundle()
        val fragment = MainFragment()
        fragment.arguments = bundle
        (context as FragmentActivity).supportFragmentManager.beginTransaction()
                //.addToBackStack(null)
                .replace(R.id.frameLayout, fragment)
                .commit()
    }


}