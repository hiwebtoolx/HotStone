package com.ltsthink.stone

import android.Manifest
import android.app.Activity
import android.content.Intent
import android.content.pm.PackageManager
import android.graphics.Bitmap
import android.graphics.Canvas
import android.graphics.Color
import android.net.Uri
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.os.Environment
import android.support.v4.app.ActivityCompat
import android.util.Log
import android.view.View
import android.widget.Button
import android.widget.TextView
import android.widget.Toast
import com.android.volley.Request
import com.android.volley.RequestQueue
import com.android.volley.Response
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import com.github.gcacace.signaturepad.views.SignaturePad
import com.ipaulpro.afilechooser.utils.FileUtils
import kotlinx.android.synthetic.main.activity_main2.*
import kotlinx.android.synthetic.main.activity_upload.*
import okhttp3.MediaType
import okhttp3.MultipartBody
import okhttp3.RequestBody
import okhttp3.ResponseBody
import org.json.JSONObject
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory
import java.io.File
import java.io.FileOutputStream
import java.io.IOException
import java.io.OutputStreamWriter

class UploadActivity : AppCompatActivity() {

    private val REQUEST_EXTERNAL_STORAGE = 1
    private val PERMISSIONS_STORAGE = arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE)
    private var mSignaturePad: SignaturePad? = null
    private var mClearButton: Button? = null
    private var mSaveButton: Button? = null
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        verifyStoragePermissions(this)
        setContentView(R.layout.activity_upload)


        var url = "http://192.168.1.3/yii-stone/frontend/web/en/api/scrubs"
        var rq : RequestQueue = Volley.newRequestQueue(this)
        val jsonObj = JSONObject()

        mSignaturePad = findViewById(R.id.signature_pad) as SignaturePad
        mSignaturePad!!.setOnSignedListener(object : SignaturePad.OnSignedListener {
            override fun onStartSigning() {
                Toast.makeText(this@UploadActivity, "OnStartSigning", Toast.LENGTH_SHORT).show()
            }

            override fun onSigned() {
                mSaveButton!!.setEnabled(true)
                mClearButton!!.setEnabled(true)
            }

            override fun onClear() {
                mSaveButton!!.setEnabled(false)
                mClearButton!!.setEnabled(false)
            }
        })
         mClearButton = findViewById(R.id.clear_button) as Button
        mSaveButton = findViewById(R.id.save_button) as Button

        mClearButton!!.setOnClickListener(View.OnClickListener { mSignaturePad!!.clear() })

        mSaveButton!!.setOnClickListener(View.OnClickListener {

            val signatureBitmap = mSignaturePad!!.getSignatureBitmap()


            if (addJpgSignatureToGallery(signatureBitmap)) {
                Toast.makeText(this@UploadActivity, "Signature saved into the Gallery", Toast.LENGTH_SHORT).show()
                //uploadFile(signatureBitmap , signature_pad)
            } else {
                Toast.makeText(this@UploadActivity, "Unable to store the signature", Toast.LENGTH_SHORT).show()
            }
            if (addSvgSignatureToGallery(mSignaturePad!!.getSignatureSvg())) {
                Log.d( "d" , mSignaturePad!!.getSignatureSvg())
                jsonObj.put("client_signature" , mSignaturePad!!.getSignatureSvg())
                Toast.makeText(this@UploadActivity, mSignaturePad!!.getSignatureSvg(), Toast.LENGTH_SHORT).show()
            } else {
                Toast.makeText(this@UploadActivity, "Unable to store the SVG signature", Toast.LENGTH_SHORT).show()
            }

            jsonObj.put("user_id" , "1")
            jsonObj.put("branch_id" , "1")
            jsonObj.put("which_hammam_or_body_scrub_do_you_prefer" , "test")
            jsonObj.put("how_do_you_prefer_the_scrubbing" , "Moderate")
            jsonObj.put("updated_by" , "1")
            jsonObj.put("created_by" , "1")

            val que = Volley.newRequestQueue(this)
            val req = JsonObjectRequest(Request.Method.POST , url , jsonObj ,
                    Response.Listener { response ->
                        Toast.makeText(this , "Seccuess" , Toast.LENGTH_LONG).show()
                    } , Response.ErrorListener { error->
                Toast.makeText(this , error.message , Toast.LENGTH_LONG).show()
            } )

            que.add(req)

        })

    }


    private fun uploadFile(fileUri: Uri, textView: TextView) {
        val name =  textView

        val name2 = editText
        val descriptionPart = RequestBody.create(
                MultipartBody.FORM, "test"
        )
        val originalFile = FileUtils.getFile(this, fileUri)
        val filePart = RequestBody.create(
                MediaType.parse(getContentResolver().getType(fileUri)!!),
                originalFile
        )

        val file = MultipartBody.Part.createFormData("photo", originalFile.name, filePart)

        val builder = Retrofit.Builder()
                .baseUrl("url")
                .addConverterFactory(GsonConverterFactory.create())

        val retrofit = builder.build()

        val client = retrofit.create(ScrubjClient::class.java)
        val call = client.uploadPhoto(
                descriptionPart, file , "1" , "1" , "tt" ,
                "tt" , "1" , "1")
        call.enqueue(object : Callback<ResponseBody> {
            override fun onResponse(call: Call<ResponseBody>, response: retrofit2.Response<ResponseBody>) {
                Toast.makeText(this@UploadActivity, "yea", Toast.LENGTH_LONG).show()
            }

            override fun onFailure(call: Call<ResponseBody>, t: Throwable) {
                Toast.makeText(this@UploadActivity, "failed", Toast.LENGTH_LONG).show()

            }
        })
    }

    override fun onRequestPermissionsResult(requestCode: Int,
                                            permissions: Array<String>, grantResults: IntArray) {
        when (requestCode) {
            REQUEST_EXTERNAL_STORAGE -> {
                // If request is cancelled, the result arrays are empty.
                if (grantResults.size <= 0 || grantResults[0] != PackageManager.PERMISSION_GRANTED) {
                    Toast.makeText(this@UploadActivity, "Cannot write images to external storage", Toast.LENGTH_SHORT).show()
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
        this@UploadActivity.sendBroadcast(mediaScanIntent)
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
