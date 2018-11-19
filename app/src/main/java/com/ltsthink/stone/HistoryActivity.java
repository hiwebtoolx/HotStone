package com.ltsthink.stone;

import android.content.Intent;
import android.support.v4.app.FragmentTransaction;
import android.app.ProgressDialog;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.widget.TextView;
import android.widget.Toast;

import com.ltsthink.stone.Controllers.AcrylicAdapter;
import com.ltsthink.stone.Controllers.FacialAdapter;
import com.ltsthink.stone.Controllers.HairTreatmentAdapter;
import com.ltsthink.stone.Controllers.HistoryMassageAdapter;
import com.ltsthink.stone.Controllers.KeratinAdapter;
import com.ltsthink.stone.Controllers.ManicureAdapter;
import com.ltsthink.stone.Controllers.ScrubAdapter;
import com.ltsthink.stone.Controllers.Service;
import com.ltsthink.stone.Controllers.VisitAdapter;
import com.ltsthink.stone.Models.ArrayMassage;
import com.ltsthink.stone.Models.Massage;
import com.ltsthink.stone.Models.UserInfo;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class HistoryActivity extends AppCompatActivity {
    RecyclerView recyclerMassage, recyclerAcrylic, recyclerFacial, recyclerScrub,
            recyclerKeratin, recyclerManicure, recyclerHairTreatment, recyclerVisit;
    GridLayoutManager LayoutManager, LayoutManager2, LayoutManager3,
            LayoutManager4, LayoutManager5, LayoutManager6, LayoutManager7, LayoutManager8;
    HistoryMassageAdapter historyMassageAdapter;
    AcrylicAdapter acrylicAdapter;
    FacialAdapter facialAdapter;
    VisitAdapter visitAdapter;
    ScrubAdapter scrubAdapter;
    KeratinAdapter keratinAdapter;
    HairTreatmentAdapter hairTreatment;
    ManicureAdapter manicureAdapter;
    int history_btn, facial_his, hair_his, scrub_his, visit_his, keratin_his,
            manicure_his, acrylic_his, massage_his;
    int client_id;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_history);
        recyclerMassage = findViewById(R.id.recyclerMassage);
        recyclerAcrylic = findViewById(R.id.recyclerAcrylic);
        recyclerFacial = findViewById(R.id.recyclerFacial);
        recyclerScrub = findViewById(R.id.recyclerScrub);
        recyclerKeratin = findViewById(R.id.recyclerKeratin);
        recyclerManicure = findViewById(R.id.recyclerManicure);
        recyclerHairTreatment = findViewById(R.id.recyclerHairTreatment);
        recyclerVisit = findViewById(R.id.recyclerVisit);

        LayoutManager = new GridLayoutManager(this, 1);
        LayoutManager2 = new GridLayoutManager(this, 1);
        LayoutManager3 = new GridLayoutManager(this, 1);
        LayoutManager4 = new GridLayoutManager(this, 1);
        LayoutManager5 = new GridLayoutManager(this, 1);
        LayoutManager6 = new GridLayoutManager(this, 1);
        LayoutManager7 = new GridLayoutManager(this, 1);
        LayoutManager8 = new GridLayoutManager(this, 1);
        recyclerAcrylic.setLayoutManager(LayoutManager2);
        recyclerMassage.setLayoutManager(LayoutManager);
        recyclerVisit.setLayoutManager(LayoutManager3);
        recyclerHairTreatment.setLayoutManager(LayoutManager4);
        recyclerKeratin.setLayoutManager(LayoutManager5);
        recyclerManicure.setLayoutManager(LayoutManager6);
        recyclerFacial.setLayoutManager(LayoutManager7);
        recyclerScrub.setLayoutManager(LayoutManager8);
        client_id = UserInfo.Companion.getClient_id();

        Intent intent = getIntent();
        history_btn = intent.getIntExtra("historyBtn", 0);
        facial_his = intent.getIntExtra("his", 0);
        hair_his = intent.getIntExtra("his", 0);
        scrub_his = intent.getIntExtra("his", 0);
        keratin_his = intent.getIntExtra("his", 0);
        acrylic_his = intent.getIntExtra("his", 0);
        visit_his = intent.getIntExtra("his", 0);
        massage_his = intent.getIntExtra("his", 0);
        manicure_his = intent.getIntExtra("his", 0);

        if (history_btn == 1) {
            getMassage();
            getAcrylic();
            getFacial();
            getHairtreatment();
            getKeratin();
            getManicure();
            getScrub();
            getVisit();
        }
        if (facial_his == 1) {
            getFacial();

        }
        if (hair_his == 2) {
            getHairtreatment();

        }
        if (scrub_his == 3) {
            getHairtreatment();

        }
        if (massage_his == 4) {
            getMassage();

        }
        if (keratin_his == 5) {
            getKeratin();

        }
        if (manicure_his == 6) {
            getManicure();

        }
        if (visit_his == 7) {
            getVisit();

        }
        if (acrylic_his == 8) {
            getAcrylic();

        }

    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        Intent intent = new Intent(HistoryActivity.this,MainActivity.class);
        startActivity(intent);
    }

    public void getMassage() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();


        Service.Fetcher.getInstance().getMassage(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();
                    historyMassageAdapter = new HistoryMassageAdapter(HistoryActivity.this, response.body());
                    recyclerMassage.setAdapter(historyMassageAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
            //    Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

             //   Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }

    public void getAcrylic() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getAcrylic(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    acrylicAdapter = new AcrylicAdapter(HistoryActivity.this, response.body());
                    recyclerAcrylic.setAdapter(acrylicAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
               // Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

               // Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }


    public void getFacial() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getFacial(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    facialAdapter = new FacialAdapter(HistoryActivity.this, response.body());
                    recyclerFacial.setAdapter(facialAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
                //Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

               // Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }


    public void getHairtreatment() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getHairtreatment(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    hairTreatment = new HairTreatmentAdapter(HistoryActivity.this, response.body());
                    recyclerHairTreatment.setAdapter(hairTreatment);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
               // Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

                //Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }


    public void getKeratin() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getKeratin(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    keratinAdapter = new KeratinAdapter(HistoryActivity.this, response.body());
                    recyclerKeratin.setAdapter(keratinAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
                //Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

                //Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }


    public void getManicure() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getManicure(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    manicureAdapter = new ManicureAdapter(HistoryActivity.this, response.body());
                    recyclerManicure.setAdapter(manicureAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
              //  Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

                //Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }


    public void getScrub() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getScrub(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    scrubAdapter = new ScrubAdapter(HistoryActivity.this, response.body());
                    recyclerScrub.setAdapter(scrubAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
               // Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

               // Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }


    public void getVisit() {
        final ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setMessage("جاري التحميل...");
        progressDialog.show();
        Log.e("TAG", "Client_id2 " + client_id);

        Service.Fetcher.getInstance().getVisit(client_id).enqueue(new Callback<List<Massage>>() {

            @Override
            public void onResponse(Call<List<Massage>> call, Response<List<Massage>> response) {
                if (response.isSuccessful()) {
                    progressDialog.dismiss();

                    visitAdapter = new VisitAdapter(HistoryActivity.this, response.body());
                    recyclerVisit.setAdapter(visitAdapter);

                } else {
                    progressDialog.dismiss();
                    Toast.makeText(HistoryActivity.this, "يجب ان تكون مسجل الدخول اولا", Toast.LENGTH_SHORT).show();

                }
            }

            @Override
            public void onFailure(Call<List<Massage>> call, Throwable t) {
                progressDialog.dismiss();
                Log.e("TAG ", "onFailure" + t.getMessage());
               // Toast.makeText(HistoryActivity.this, t.getMessage(), Toast.LENGTH_LONG).show();

                //Toast.makeText(HistoryActivity.this, "خطأ", Toast.LENGTH_SHORT).show();
            }

        });
    }
}

