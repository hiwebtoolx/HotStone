package com.ltsthink.stone.Models

import java.util.ArrayList

import retrofit2.Call
import retrofit2.http.Body
import retrofit2.http.POST

interface UsersService {
    @POST("api/users")
    fun getFakeUsersBasedOnASearchTag(@Body tag: String): Call<ArrayList<UserModel>>
}
