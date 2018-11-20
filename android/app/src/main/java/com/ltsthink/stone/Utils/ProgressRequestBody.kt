package com.ltsthink.stone.Utils

import android.os.Handler
import android.os.Looper
import okhttp3.MediaType
import okhttp3.RequestBody
import okio.BufferedSink
import java.io.File
import java.io.FileInputStream
import java.io.IOException

class ProgressRequestBody(private val mFile :File, private val mLister:UpladCallBacks ):RequestBody(){

    interface UpladCallBacks{
         fun onProgressUpdate(persentage : Int)
        abstract fun getContentResolver(): Any
    }
    override fun contentType(): MediaType? {

        return MediaType.parse("image/*")

     }

    @Throws(IOException::class)
    override fun contentLength(): Long {
        return mFile.length()
    }


    @Throws(IOException::class)
    override fun writeTo(sink: BufferedSink?) {
        val fileLength = mFile.length()
        val buffer  = ByteArray(DEFAULT_BUFFER_SIZE)
        val `in` = FileInputStream(mFile)
        var uploaded : Long = 0

        try {
            var read : Int = 0
            val handler = Handler(Looper.getMainLooper())
            while (`in`.read(buffer).let { read = it; it != -1 }){

                handler.post(progressUpdater(uploaded , fileLength))
                uploaded+= read.toLong()
                sink!!.write(buffer, 0 ,read)
            }



        }finally {
            `in`.close()
        }
    }

    private inner class progressUpdater(private val mUploaded:Long ,  private val mTotal:Long ):Runnable {
        override fun run() {
            mLister.onProgressUpdate((100*mUploaded/mTotal).toInt())
        }

    }
}