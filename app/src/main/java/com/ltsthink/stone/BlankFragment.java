package com.ltsthink.stone;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.ltsthink.stone.Models.UsersService;

import okhttp3.OkHttpClient;
import retrofit2.Retrofit;


/**
 * A simple {@link Fragment} subclass.
 */
public class BlankFragment extends Fragment {

    private Retrofit mRetrofit;
    private OkHttpClient mOkHttpClient;
    private UsersService mUsersService;
    public BlankFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment



        return inflater.inflate(R.layout.fragment_main, container, false);
    }

}
