package com.ltsthink.stone

import android.content.Context
import android.content.DialogInterface
import android.content.Intent
import android.os.Bundle
import android.support.v4.app.Fragment
import android.support.v4.app.FragmentActivity
import android.support.v7.app.AlertDialog
import android.support.v7.widget.AppCompatEditText
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast
import com.android.volley.Request
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.ltsthink.stone.Models.Config
import com.ltsthink.stone.Models.UserInfo
import com.ltsthink.stone.Utils.IOnBackPressed
import kotlinx.android.synthetic.main.app_bar_main.*
import kotlinx.android.synthetic.main.fragment_main.*
import kotlinx.android.synthetic.main.fragment_main.view.*
import org.json.JSONObject


class MainFragment : Fragment() {

    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {

        // Inflate the layout for this fragment
        val v = inflater.inflate(R.layout.fragment_main, container, false)

        val clientName: TextView = v.findViewById(R.id.clientName) as TextView
        val clinetEmail: TextView = v.clientEmail as TextView
        val clientPhone: TextView = v.clientPhone as TextView
        clientName.text = UserInfo.client_name
        clinetEmail.text = UserInfo.client_email
        clientPhone.text = UserInfo.client_phone


        if (clientName.text == "") {
            v.client_info.visibility = View.GONE
            v.clientBtn.visibility = View.GONE
            //searchTextPhone.isEnabled = false
        }
        v.searchBtn.setOnClickListener {
            if (searchTextPhone.text.toString() != "") {
                showCreateCategoryDialog(searchTextPhone.text.toString())

                if (UserInfo.client_id != 0) {
//                    val searbBT:Button =  v.findViewById(R.id.searchBtn) as Button
//                    searbBT.isClickable = false
//                    se

//                    v.searchBtn.isEnabled = false
//                    v.searchBtn.isClickable = false
                    //v.searchBtn.background =

                }
            } else {

                //  v.searchBtn.visibility = View.GONE
                Toast.makeText(context, "Enter phone number", Toast.LENGTH_LONG).show()
            }

        }

        v.clientBtn.setOnClickListener {
            showCreateUserDialog()
        }

        v.clearBtn.setOnClickListener {
            UserInfo.client_name = ""
            UserInfo.client_email = ""
            UserInfo.client_phone = ""
            UserInfo.client_id = 0
            clientName.text = ""
            clinetEmail.text = ""
            clientPhone.text = ""
            v.client_info.visibility = View.GONE
            v.clientBtn.visibility = View.GONE
            Toast.makeText(context, "Cleared", Toast.LENGTH_LONG).show()
        }

        return v
    }


    fun showCreateCategoryDialog(phoneNumber: String) {

        var url = Config.SITE_URL + "user/search"
        val jsonObj = JSONObject()
        val context = this.context


        jsonObj.put("phone", phoneNumber)


        val que = Volley.newRequestQueue(context)
        val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                Response.Listener { response ->
                    //Toast.makeText(context , "Successfully Found" , Toast.LENGTH_LONG).show()
                    //commitFrag(response.getInt("user_id") , "health" , response.getInt("id"))

                    if (response.getString("phone") != "") {
                        UserInfo.client_email = response.getString("email")
                        UserInfo.client_id = response.getInt("id")
                        UserInfo.client_name = response.getString("name")
                        UserInfo.client_phone = response.getString("phone")
                        loadFragment(frag1 = MainFragment())

                        //Toast.makeText(context , response.getString("name") , Toast.LENGTH_LONG).show()
                    } else {
                        UserInfo.client_email = ""
                        UserInfo.client_id = 0
                        UserInfo.client_name = ""
                        UserInfo.client_phone = phoneNumber.toString()
                        Toast.makeText(context, "Not Found, Add new client", Toast.LENGTH_LONG).show()
                        //commitFrag()
                        showCreateUserDialog()

                    }


                }, Response.ErrorListener { error ->
            Log.d("D", error.message.toString())
        })

        que.add(req)
        ///
    }

//    override fun  onDetach() {
//        super.onDetach()
//        val builder = AlertDialog.Builder(requireContext())
//        builder.setPositiveButton("نعم") { dialogInterface, i ->
//            val intent = Intent(Intent.ACTION_MAIN)
//            intent.addCategory(Intent.CATEGORY_HOME)
//            intent.flags = Intent.FLAG_ACTIVITY_NEW_TASK
//            startActivity(intent)
//        }
//
//        builder.setNegativeButton("لا") { dialogInterface, i -> dialogInterface.dismiss() }
//        val dialog = builder.create()
//
//        dialog.setTitle("إغلاق التطبيق")
//        dialog.setMessage("هل انت متأكد انك تريد الخروج من التطبيق؟")
//
//        dialog.show()
//
//    }


//
//    override fun onBackPressed(): Boolean {
//
//        //action not popBackStack
//        val builder = AlertDialog.Builder(requireContext())
//        builder.setPositiveButton("نعم") { dialogInterface, i ->
//            val intent = Intent(Intent.ACTION_MAIN)
//            intent.addCategory(Intent.CATEGORY_HOME)
//            intent.flags = Intent.FLAG_ACTIVITY_NEW_TASK
//            startActivity(intent)
//        }
//
//        builder.setNegativeButton("لا") { dialogInterface, i -> dialogInterface.dismiss() }
//        val dialog = builder.create()
//
//        dialog.setTitle("إغلاق التطبيق")
//        dialog.setMessage("هل انت متأكد انك تريد الخروج من التطبيق؟")
//
//        dialog.show()
//        return false
//
//    }


    fun showCreateUserDialog() {

        var url = Config.SITE_URL + "user/new"
        val jsonObj = JSONObject()
        val context = this.context
        val builder = AlertDialog.Builder(context!!)
        builder.setTitle(getString(R.string.add_new))

        // https://stackoverflow.com/questions/10695103/creating-custom-alertdialog-what-is-the-root-view
        // Seems ok to inflate view with null rootView
        val view = layoutInflater.inflate(R.layout.user_dialog, null)


        val nameEditText = view.findViewById(R.id.nameEditText) as EditText
        val emailEditText = view.findViewById(R.id.emailEditText) as EditText
        val phoneEditText = view.findViewById(R.id.PhoneEditText) as EditText

        builder.setView(view)

        // set up the ok button
        builder.setPositiveButton(android.R.string.ok) { dialog, p1 ->
            val phoneNumber = phoneEditText.text
            val emailAddress = emailEditText.text
            val fullName = nameEditText.text
            jsonObj.put("phone", phoneNumber)
            jsonObj.put("email", emailAddress)
            jsonObj.put("name", fullName)
            var isValid = true
            if (phoneNumber.isBlank()) {
                //categoryEditText.error = getString(R.string.ph)
                isValid = false
            }

            if (isValid) {
                // do something
                Toast.makeText(context, phoneNumber.toString(), Toast.LENGTH_LONG).show()

                ///

                val que = Volley.newRequestQueue(context)
                val req = JsonObjectRequest(Request.Method.POST, url, jsonObj,
                        Response.Listener { response ->
                            //Toast.makeText(context , "Successfully Found" , Toast.LENGTH_LONG).show()
                            //commitFrag(response.getInt("user_id") , "health" , response.getInt("id"))

                            if (response.getString("phone") != "") {
                                UserInfo.client_email = response.getString("email")
                                UserInfo.client_id = response.getInt("id")
                                UserInfo.client_name = response.getString("name")
                                UserInfo.client_phone = response.getString("phone")
                                loadFragment(frag1 = MainFragment())
                                Toast.makeText(context, "User Added", Toast.LENGTH_LONG).show()
                            } else {
                                UserInfo.client_email = ""
                                UserInfo.client_id = 0
                                UserInfo.client_name = ""
                                UserInfo.client_phone = phoneNumber.toString()
                                Toast.makeText(context, "Not Found, Add new client", Toast.LENGTH_LONG).show()
                                commitFrag()
                            }


                        }, Response.ErrorListener { error ->
                    Log.d("D", error.message.toString())
                })

                que.add(req)
                ///
            }


        }

        builder.setNegativeButton(android.R.string.cancel) { dialog, p1 ->
            dialog.cancel()
        }

        builder.show()
    }

    private fun commitFrag() {
        val bundle = Bundle()
        val fragment = HealthFragment()
        bundle.putString("type", "newClient")
        fragment.arguments = bundle
        (context as FragmentActivity).supportFragmentManager.beginTransaction()
                .addToBackStack(null)
                .replace(R.id.frameLayout, fragment)
                .commit()
    }

//    override fun  onDetach() {
//        super.onDetach()
//        var backButtonCount:Int = 0
//
//        // PUT YOUR CODE HERE
//        if (backButtonCount >= 1) {
//            val intent = Intent(Intent.ACTION_MAIN)
//            intent.addCategory(Intent.CATEGORY_HOME)
//            intent.flags = Intent.FLAG_ACTIVITY_NEW_TASK
//            startActivity(intent)
//        } else {
//           // Toast.makeText(requireContext(), "Press the back button once again to close the application.", Toast.LENGTH_SHORT).show()
//            backButtonCount++
//        }
//    }

    private fun loadFragment(frag1: Fragment) {
        val bundle = Bundle()
        val fragment = frag1
        fragment.arguments = bundle
        (context as FragmentActivity).supportFragmentManager.beginTransaction()
                .addToBackStack(null)
                .replace(R.id.frameLayout, fragment)
                .commit()
    }


}
