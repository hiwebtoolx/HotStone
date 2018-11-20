package com.ltsthink.stone

import android.content.Context
import android.content.res.Resources
import android.os.Bundle
import android.support.design.widget.NavigationView
import android.support.v4.app.Fragment
import android.support.v4.view.GravityCompat
import android.support.v7.app.ActionBarDrawerToggle
import android.support.v7.app.AppCompatActivity
import android.view.Menu
import android.view.MenuItem
import com.ltsthink.stone.Models.LocaleHelper
import com.ltsthink.stone.Models.UserInfo
import io.paperdb.Paper
import kotlinx.android.synthetic.main.activity_main.*
import kotlinx.android.synthetic.main.app_bar_main.*
import android.content.DialogInterface
import android.content.Intent
import android.support.v7.app.AlertDialog
import android.view.View
import android.widget.*


class MainActivity : AppCompatActivity(), NavigationView.OnNavigationItemSelectedListener {


    var backButtonCount: Int = 0
    var textView: TextView? = null
    var txtPhone: TextView? = null
    override fun attachBaseContext(newBase: Context?) {
        super.attachBaseContext(LocaleHelper.onAttach(newBase, "en"))
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        setSupportActionBar(toolbar)

        fab.setOnClickListener { view ->
            //            Snackbar.make(view, "Replace with your own action", Snackbar.LENGTH_LONG)
//                    .setAction("Action", null).show()
            loadFragment(frag1 = MainFragment())

        }


        Paper.init(this)
        val language: String = Paper.book().read("language", "en")
        if (language == null)
            Paper.book().write("language", "en")

        updateView(Paper.book().read("language", "en") as String)
        loadFragment(frag1 = MainFragment())

        //Toast.makeText(this , "Hello, "+UserInfo.name, Toast.LENGTH_LONG).show()
//


        val toggle = ActionBarDrawerToggle(
                this, drawer_layout, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close)
        drawer_layout.addDrawerListener(toggle)
        toggle.syncState()

        nav_view.setNavigationItemSelectedListener(this)
        txtPhone = findViewById<TextView>(R.id.userName)
        //txtUser = findViewById<TextView>(R.id.userName) as TextView
        txtPhone?.text = "test"


        val navigationView = findViewById<View>(R.id.nav_view) as NavigationView
        val headerView = navigationView.getHeaderView(0)
        val navUsername = headerView.findViewById(R.id.userName) as TextView
        val navUseremail = headerView.findViewById(R.id.userEmail) as TextView
        val navImage = headerView.findViewById(R.id.nav_image) as ImageView

        navUsername.text = UserInfo.name
        navUseremail.text = UserInfo.email

        navImage.setOnClickListener { view ->
            drawer_layout.closeDrawers()
            loadFragment(frag1 = MainFragment())
        }
//        navUsername.setOnClickListener(View.OnClickListener {
//            loadFragment(frag1 = MainFragment())
//
//        })


    }


//        override fun onBackPressed() {
//        val fragment = this.supportFragmentManager.findFragmentById(R.id.iconics_tag_id)
//        if ((fragment as? IOnBackPressed)?.onBackPressed()!!.not()) {
//            super.onBackPressed()
//        }
//    }

//    override fun onBackPressed() {
//        val builder = AlertDialog.Builder(this)
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
//        builder.setPositiveButton("نعم") { dialogInqqterface, i ->
//            val intent = Intent(Intent.ACTION_MAIN)
//    }

//    override fun onBackPressed() {
//
//        val count = fragmentManager.backStackEntryCount
//
//        if (count == 0) {
//            super.onBackPressed()
//
//        } else {
//            fragmentManager.popBackStack()
//            val builder = AlertDialog.Builder(this)
//            builder.setPositiveButton("نعم") { dialogInterface, i ->
//                val intent = Intent(Intent.ACTION_MAIN)
//                intent.addCategory(Intent.CATEGORY_HOME)
//                intent.flags = Intent.FLAG_ACTIVITY_NEW_TASK
//                startActivity(intent)
//            }
//
//            builder.setNegativeButton("لا") { dialogInterface, i -> dialogInterface.dismiss() }
//            val dialog = builder.create()
//
//            dialog.setTitle("إغلاق التطبيق")
//            dialog.setMessage("هل انت متأكد انك تريد الخروج من التطبيق؟")
//
//            dialog.show()
//        }
//
//    }

    // Method to show an alert dialog with yes, no and cancel button
    private fun showDialog() {
        // Late initialize an alert dialog object
        lateinit var dialog: AlertDialog


        // Initialize a new instance of alert dialog builder object
        val builder = AlertDialog.Builder(this)

        // Set a title for alert dialog
        builder.setTitle("Change Language")

        // Set a message for alert dialog
        builder.setMessage("Are you sure you want to change the application language.")


        // On click listener for dialog buttons
        val dialogClickListener = DialogInterface.OnClickListener { _, which ->
            when (which) {
                DialogInterface.BUTTON_POSITIVE -> {
                    //Toast.makeText(this , "Application will restart to apply selected language" , Toast.LENGTH_LONG).show()

//                    val i = baseContext.packageManager
//                            .getLaunchIntentForPackage(baseContext.packageName)
//                    i!!.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP)
//                    startActivity(i)

                    finish()
                    startActivity(getIntent())
                }
                DialogInterface.BUTTON_NEGATIVE -> {
                    // Toast.makeText(this , "Negative/No button clicked.", Toast.LENGTH_LONG).show()
                }
                DialogInterface.BUTTON_NEUTRAL -> {
                    // Toast.makeText(this , "Neutral/Cancel button clicked.", Toast.LENGTH_LONG).show()
                }
            }
        }


        // Set the alert dialog positive/yes button
        builder.setPositiveButton("YES", dialogClickListener)

        // Set the alert dialog negative/no button
        //builder.setNegativeButton("NO",dialogClickListener)

        // Set the alert dialog neutral/cancel button
        builder.setNeutralButton("CANCEL", dialogClickListener)


        // Initialize the AlertDialog using builder object
        dialog = builder.create()

        // Finally, display the alert dialog
        dialog.show()
    }


    private fun updateView(language: String) {
        val context: Context = LocaleHelper.setLocale(this, language)
        val resources: Resources = context.resources

        //val resources = context.resources

        textView?.text = resources.getString(R.string.hello)
    }

//    override fun onBackPressed() {
//        if (backButtonCount >= 1) {
//            val intent = Intent(Intent.ACTION_MAIN)
//            intent.addCategory(Intent.CATEGORY_HOME)
//            intent.flags = Intent.FLAG_ACTIVITY_NEW_TASK
//            startActivity(intent)
//        } else {
//            Toast.makeText(this, "Press the back button once again to close the application.", Toast.LENGTH_SHORT).show()
//            backButtonCount++
//        }
//    }
//    override fun onBackPressed() {
//        var backButtonCount:Int
//        if (drawer_layout.isDrawerOpen(GravityCompat.START)) {
//            Toast.makeText(this , "back2 pressed", Toast.LENGTH_LONG).show()
//            drawer_layout.closeDrawer(GravityCompat.START)
//        } else {
//            if (backButtonCount >= 1) {
//                val intent = Intent(Intent.ACTION_MAIN)
//                intent.addCategory(Intent.CATEGORY_HOME)
//                intent.flags = Intent.FLAG_ACTIVITY_NEW_TASK
//                startActivity(intent)
//            } else {
//                Toast.makeText(this, "Press the back button once again to close the application.", Toast.LENGTH_SHORT).show()
//                backButtonCount++
//            }
//            super.onBackPressed()
//        }
//    }

    override fun onCreateOptionsMenu(menu: Menu): Boolean {
        // Inflate the menu; this adds items to the action bar if it is present.
        menuInflater.inflate(R.menu.main, menu)

//        val searchView = MenuItemCompat.getActionView(menu.findItem(R.id.action_search)) as SearchView
//        val searchManager = getSystemService(Context.SEARCH_SERVICE) as SearchManager
//        searchView.setSearchableInfo(searchManager.getSearchableInfo(componentName))

        return true
    }

    override fun onOptionsItemSelected(item: MenuItem): Boolean {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        when (item.itemId) {
            R.id.action_settings -> {
                showDialog()
                Paper.book().write("language", "en")
                updateView(Paper.book().read("language") as String)
            }
            R.id.language_ar -> {
                showDialog()
                Paper.book().write("language", "ar")
                updateView(Paper.book().read("language") as String)
            }
            else -> return super.onOptionsItemSelected(item)
        }
        //Toast.makeText(this , getString(R.string.change_lang) , Toast.LENGTH_LONG).show()
        return true
    }

    override fun onNavigationItemSelected(item: MenuItem): Boolean {
        // Handle navigation view item clicks here.


        when (item.itemId) {
            R.id.nav_camera -> {
                // Handle the camera action
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = HealthFragment())

                }
            }
            R.id.nav_gallery -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                }
                else {
                    loadFragment(frag1 = ScrubFragment())
                }
            }
            R.id.nav_slideshow -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = FacialFragment())
                }
            }
            R.id.nav_acrylic -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = AcrylicFragment())
                }
            }

            R.id.nav_keratin -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = KeratinFragment())
                }
            }
            R.id.nav_manicure -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = ManicureFragment())
                }
            }

            R.id.nav_massage -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = MassageFragment())
                }
            }
            R.id.nav_visits -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = VisitsFragment())
                }
            }
<<<<<<< HEAD
            R.id.nav_hair_colour -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = HairColour())
                }
            }

            R.id.nav_hair_Treatment -> {
                if (UserInfo.client_id == 0) {
                    Toast.makeText(this, getString(R.string.must_select_client), Toast.LENGTH_LONG).show()

                } else {
                    loadFragment(frag1 = HairTreatment())
                }
            }
=======
>>>>>>> 0026944e737158b551053a24feabf29d5e80170d
            R.id.nav_share -> {

                loadFragment(frag1 = MainFragment())
            }


            R.id.backend -> {
                loadFragment(frag1 = WebV())
            }
            R.id.nav_send -> {

                UserInfo.client_id = 0
                UserInfo.user_id = 0
                UserInfo.branch_id = 0
                UserInfo.name = ""
                UserInfo.email = ""
                UserInfo.client_email = ""
                UserInfo.client_phone = ""
                UserInfo.client_name = ""
                UserInfo.client_record = 0

                val intent = Intent(this, SplashActivity::class.java)
                startActivity(intent)
            }
        }

        drawer_layout.closeDrawer(GravityCompat.START)
        return true
    }

    private fun loadFragment(frag1: Fragment) {
        val manager = supportFragmentManager
        val transaction = manager.beginTransaction()
        transaction.replace(R.id.frameLayout, frag1)
        transaction.commit()
    }


    private fun loadRating(frag1: RatingFragment) {
        val manager = supportFragmentManager
        val transaction = manager.beginTransaction()
        transaction.replace(R.id.frameLayout, frag1)
        transaction.commit()
    }


}
