package com.ltsthink.stone.Controllers;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentActivity;
import android.support.v4.app.FragmentManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TableRow;
import android.widget.TextView;

import com.ltsthink.stone.Models.ArrayMassage;
import com.ltsthink.stone.Models.Massage;
import com.ltsthink.stone.R;
import com.ltsthink.stone.RatingFragment;

import java.util.List;

/**
 * Created by Abdelrahman on 11/13/2018.
 */

public class HistoryMassageAdapter extends RecyclerView.Adapter<HistoryMassageAdapter.HistoryMassageViewHolder> {

    Context context;
    List<Massage> massage;


    public HistoryMassageAdapter(Context context, List<Massage> massage) {
        this.context = context;
        this.massage = massage;


    }

    @Override
    public HistoryMassageViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.history_list, parent, false);
        HistoryMassageViewHolder reportsTaxesViewHolder = new HistoryMassageViewHolder(view);
        return reportsTaxesViewHolder;
    }

    @Override
    public void onBindViewHolder(final HistoryMassageViewHolder holder, final int position) {
        holder.date.setText(massage.get(position).getCreatedAt());
        holder.rate.setText(String.valueOf(massage.get(position).getRate()));
        holder.name.setText("Massage");
        Log.e("TAG", "idd " + massage.get(position).getId());
//        holder.rate.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                holder.tableRow.setVisibility(View.GONE);
//                commitFrag(massage.get(position).getId(), "massage");
//            }
//        });
    }

    private void commitFrag(int id, String module) {
        Bundle bundle = new Bundle();
        RatingFragment fragment = new RatingFragment();
        bundle.putString("module", module);
        bundle.putInt("id", id);
        fragment.setArguments(bundle);
        ((FragmentActivity) context).getSupportFragmentManager().beginTransaction()
                //.addToBackStack(null)
                .replace(R.id.java_frame, fragment)
                .commit();
    }


    @Override
    public int getItemCount() {
        return massage.size();
    }

    public class HistoryMassageViewHolder extends RecyclerView.ViewHolder {
        TextView name, rate, date;
        TableRow tableRow;

        public HistoryMassageViewHolder(View itemView) {
            super(itemView);

            date = itemView.findViewById(R.id.date);
            rate = itemView.findViewById(R.id.rate);
            name = itemView.findViewById(R.id.name);
            tableRow = itemView.findViewById(R.id.tablee_row);


        }
    }

}
