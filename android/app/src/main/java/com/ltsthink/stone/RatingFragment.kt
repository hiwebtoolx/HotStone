package com.ltsthink.stone


import android.os.Bundle
import android.support.v4.app.Fragment
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import com.hsalf.smilerating.SmileRating
import com.hsalf.smilerating.BaseRating
import android.R.attr.checked
import android.support.v4.app.FragmentActivity
import android.widget.Toast
import com.android.volley.DefaultRetryPolicy
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.ltsthink.stone.Models.Config
import kotlinx.android.synthetic.main.fragment_rating.*
import kotlinx.android.synthetic.main.fragment_rating.view.*
import org.json.JSONObject


class RatingFragment : Fragment() {

    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        // Inflate the layout for this fragment



        val v = inflater.inflate(R.layout.fragment_rating, container, false)
        val smileRating = v.findViewById(R.id.smile_rating) as SmileRating
        val bundle = this.arguments
        val module = bundle!!.getString("module" )
        val record_id = bundle!!.getInt("id" )

        var url = Config.SITE_URL + "user/rate"
        val jsonObj = JSONObject()
        smileRating.setOnSmileySelectionListener { smiley, reselected ->
            // reselected is false when user selects different smiley that previously selected one
            // true when the same smiley is selected.
            // Except if it first time, then the value will be false.
            when (smiley) {
                SmileRating.BAD -> jsonObj.put("value" , 1)
                SmileRating.GOOD -> jsonObj.put("value" , 2)
                SmileRating.GREAT -> jsonObj.put("value" , 3)
                SmileRating.OKAY -> jsonObj.put("value" , 4)
                SmileRating.TERRIBLE -> jsonObj.put("value" , 5)
            }
        }

        v.rateBtn.setOnClickListener {

            jsonObj.put("module" , module)
            jsonObj.put("id" , record_id)
            jsonObj.put("client_review",textReview.text.toString() )
            val que = Volley.newRequestQueue(context)
            val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                    Response.Listener {
                        response ->
                        Toast.makeText(context, getString(R.string.thank_you), Toast.LENGTH_LONG).show()
                        commitFrag( )
                    },
                    Response.ErrorListener {
                        error ->
                        Toast.makeText(context, error.toString(), Toast.LENGTH_LONG).show()
                    })
            req.retryPolicy = DefaultRetryPolicy(60000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT)

            que!!.add(req)
        }
        return  v
    }


    private fun commitFrag( ){
        val bundle = Bundle()
        val fragment = MainFragment()
        fragment.arguments = bundle
        (context as FragmentActivity).supportFragmentManager.beginTransaction()
                //.addToBackStack(null)
                .replace(R.id.frameLayout, fragment)
                .commit()
    }
}
