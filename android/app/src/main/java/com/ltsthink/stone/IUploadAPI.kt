package com.ltsthink.stone

import okhttp3.MultipartBody
import retrofit2.Call
import retrofit2.http.Multipart
import retrofit2.http.POST
import retrofit2.http.Part

interface IUploadAPI {

    @Multipart
    @POST("scrubs")
    fun uploadFile(@Part file:MultipartBody.Part):Call <String>
}