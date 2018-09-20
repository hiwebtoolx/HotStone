package com.ltsthink.stone;

import okhttp3.MultipartBody;
import okhttp3.RequestBody;
import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.http.Multipart;
import retrofit2.http.POST;
import retrofit2.http.Part;

public interface ScrubjClient {

    @Multipart
    @POST("upload")
    Call<ResponseBody> uploadPhoto(
            @Part("description")RequestBody  description,
            @Part MultipartBody.Part photo,
            @Part("user_id")String user_id,
            @Part("branch_id")String branch_id,
            @Part("which_hammam_or_body_scrub_do_you_prefer")String hmmam_type,
            @Part("how_do_you_prefer_the_scrubbing") String scrub_type,
            @Part("updated_by") String updated_by,
            @Part("created_by") String created_by
            );
}
