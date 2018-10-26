package com.ltsthink.stone

import android.content.Context
import android.content.Intent
import android.content.res.Resources
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.widget.TextView
import android.widget.Toast
import com.android.volley.DefaultRetryPolicy
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.LocaleHelper
import com.ltsthink.stone.Models.UserInfo
import io.paperdb.Paper
import kotlinx.android.synthetic.main.activity_login.*
import org.json.JSONObject

class LoginActivity : AppCompatActivity() {

    var textView: TextView? = null
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_login)

        Paper.init(this)
        val language:String = Paper.book().read("language" , "en" )
        if(language == null)
            Paper.book().write("language" , "en")

        updateView(Paper.book().read("language" , "en") as String)

        //updateView(Paper.book().read("language" , "en") as String)

        val url = Config.SITE_URL+"user/login"
        val jsonObj = JSONObject()
        btn_login.setOnClickListener{

            jsonObj.put("username" , et_username.text.toString())
            jsonObj.put("password" , et_password.text.toString())

            val que = Volley.newRequestQueue(this)
            val req = JsonObjectRequest(Request.Method.POST , url , jsonObj ,
                    Response.Listener { response ->
                        if(response.getString("branch_id") != "0" || response.getString("branch_id") != "0"){
                            if(response.getInt("user_id") != 0){
                                UserInfo.branch_id =  response.getInt("branch_id")
                                UserInfo.user_id = response.getInt("user_id")
                                UserInfo.email = response.getString("email")
                                UserInfo.name = response.getString("name")
                                startActivity(Intent(this, MainActivity::class.java))
                            }else{
                                Toast.makeText(this , getString(R.string.invalid_user) , Toast.LENGTH_LONG).show()
                            }

                        }else{
                            Toast.makeText(this , getString(R.string.invalid_user) , Toast.LENGTH_LONG).show()
                        }


                    } , Response.ErrorListener { error->
                Toast.makeText(this , error.message , Toast.LENGTH_LONG).show()
            } )
            req.retryPolicy = DefaultRetryPolicy(60000, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT)

            que!!.add(req)

        }
    }

    private fun updateView(language: String) {
        val context: Context = LocaleHelper.setLocale(this , language )
        val resources: Resources = context.resources

        //val resources = context.resources

        textView?.text = resources.getString(R.string.hello)
    }
}
