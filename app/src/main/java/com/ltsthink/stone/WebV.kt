package com.ltsthink.stone


import android.os.Bundle
import android.support.v4.app.Fragment
<<<<<<< HEAD
import android.util.Log
=======
>>>>>>> 0026944e737158b551053a24feabf29d5e80170d
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.webkit.WebView
import android.webkit.WebViewClient
<<<<<<< HEAD
import com.ltsthink.stone.Models.UserInfo
=======
import kotlinx.android.synthetic.main.app_bar_main.*
import kotlinx.android.synthetic.main.app_bar_main.view.*
import kotlinx.android.synthetic.main.fragment_web_v.*
>>>>>>> 0026944e737158b551053a24feabf29d5e80170d


// TODO: Rename parameter arguments, choose names that match
// the fragment initialization parameters, e.g. ARG_ITEM_NUMBER
private const val ARG_PARAM1 = "param1"
private const val ARG_PARAM2 = "param2"

/**
 * A simple [Fragment] subclass.
 *
 */
class WebV : Fragment() {

    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        // Inflate the layout for this fragment

<<<<<<< HEAD

        val v = inflater.inflate(R.layout.fragment_web_v, container, false)
        val mWebView = v.findViewById(R.id.webview) as WebView
        Log.e("TAG", "UserInfo.auth_token " + UserInfo.auth_token);


//        val progressDialog = ProgressDialog(context)
//        progressDialog.setMessage("جاري التحميل...")
//        progressDialog.show()
//        Service.Fetcher.getInstance().getToken(UserInfo.auth_token).enqueue(object : Callback<ResponseBody> {
//            override fun onResponse(call: Call<ResponseBody>, response: retrofit2.Response<ResponseBody>) {
//                if (response.isSuccessful()) {
//                    progressDialog.dismiss()
//                    mWebView.loadUrl("http://forms.hotstone-spa.com/backend/web")
//                    Toast.makeText(context, UserInfo.auth_token, Toast.LENGTH_LONG).show()
//                } else {
//                    progressDialog.dismiss()
//                    Toast.makeText(context, "notSuccessful", Toast.LENGTH_LONG).show()
//
//                }
//            }
//
//            override fun onFailure(call: Call<ResponseBody>, t: Throwable) {
//                progressDialog.dismiss()
//                Toast.makeText(context, t.message, Toast.LENGTH_LONG).show()
//                Log.e("TAG", "t.message " + t.message)
//            }
//        })


        mWebView.loadUrl("http://forms.hotstone-spa.com/backend/web/en/user/login?auth_token="+UserInfo.auth_token)
        val webSettings = mWebView.getSettings()
        webSettings.setJavaScriptEnabled(true)
=======
        val v = inflater.inflate(R.layout.fragment_web_v, container, false)
        val mWebView = v.findViewById(R.id.webview) as WebView
        mWebView.loadUrl("http://forms.hotstone-spa.com/backend/web")
        val webSettings = mWebView.getSettings()
        webSettings.setJavaScriptEnabled(true)

        // Force links and redirects to open in the WebView instead of in a browser
>>>>>>> 0026944e737158b551053a24feabf29d5e80170d
        mWebView.setWebViewClient(WebViewClient())

        return v
    }


}
