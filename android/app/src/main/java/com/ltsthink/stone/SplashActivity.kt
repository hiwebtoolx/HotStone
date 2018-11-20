package com.ltsthink.stone

import android.content.Context
import android.content.Intent
import android.content.res.Resources
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.view.Window
import android.view.WindowManager
import android.widget.TextView
import android.widget.Toast
import com.ltsthink.stone.Models.LocaleHelper
import io.paperdb.Paper
import kotlinx.android.synthetic.main.activity_splash.*

class SplashActivity : AppCompatActivity() {

    var textView: TextView? = null
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_splash)

        Paper.init(this)
        val language:String = Paper.book().read("language" , "en" )
        if(language == null)
            Paper.book().write("language" , "en")

        updateView(Paper.book().read("language" , "en") as String)

        btn_get_started.setOnClickListener{
//            startActivity(Intent(this, MainActivity::class.java))

            Toast.makeText(this , "Welcome To HotStone Spa" , Toast.LENGTH_LONG).show()

        }
        btn_login.setOnClickListener(){
            startActivity(Intent(this, LoginActivity::class.java))

        }
    }
    private fun updateView(language: String) {
        val context: Context = LocaleHelper.setLocale(this , language )
        val resources: Resources = context.resources

        //val resources = context.resources

        textView?.text = resources.getString(R.string.hello)
    }
}
