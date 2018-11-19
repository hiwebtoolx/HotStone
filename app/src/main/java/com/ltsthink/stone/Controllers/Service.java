package com.ltsthink.stone.Controllers;

import com.ltsthink.stone.Models.ArrayMassage;
import com.ltsthink.stone.Models.Massage;

import java.util.ArrayList;
import java.util.List;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;
import retrofit2.converter.scalars.ScalarsConverterFactory;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.Path;
import retrofit2.http.Query;

/**
 * Created by Abdelrahman on 11/3/2018.
 */

public interface Service {
    @FormUrlEncoded
    @POST("massage/search")
    Call<List<Massage>> getMassage(@Field("id") int user_id);


    @FormUrlEncoded
    @POST("acrylic/search")
    Call<List<Massage>> getAcrylic(@Field("id") int user_id);

    @FormUrlEncoded
    @POST("visit/search")
    Call<List<Massage>> getVisit(@Field("id") int user_id);


    @FormUrlEncoded
    @POST("facial/search")
    Call<List<Massage>> getFacial(@Field("id") int user_id);


    @FormUrlEncoded
    @POST("scrub/search")
    Call<List<Massage>> getScrub(@Field("id") int user_id);


    @FormUrlEncoded
    @POST("manicure/search")
    Call<List<Massage>> getManicure(@Field("id") int user_id);


    @FormUrlEncoded
    @POST("keratin/search")
    Call<List<Massage>> getKeratin(@Field("id") int user_id);


    @FormUrlEncoded
    @POST("hairtreatment/search")
    Call<List<Massage>> getHairtreatment(@Field("id") int user_id);


    String BASE_URL = "http://forms.hotstone-spa.com/frontend/web/en/api/";

    class Fetcher {
        private static Service service = null;

        public static Service getInstance() {
            if (service == null) {
                Retrofit retrofit = new Retrofit.Builder()
                        .addConverterFactory(GsonConverterFactory.create())
                        .addConverterFactory(ScalarsConverterFactory.create())
                        .baseUrl(BASE_URL)
                        .build();
                service = retrofit.create(Service.class);
            }
            return service;
        }
    }

}
