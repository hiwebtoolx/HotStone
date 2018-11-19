package com.ltsthink.stone.Controllers;

import android.content.Context;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import com.ltsthink.stone.Models.Massage;
import com.ltsthink.stone.R;

import java.util.List;

/**
 * Created by Abdelrahman on 11/14/2018.
 */

public class ScrubAdapter extends RecyclerView.Adapter<ScrubAdapter.ScrubViewHolder> {

    Context context;
    List<Massage> massage;


    public ScrubAdapter(Context context, List<Massage> massage) {
        this.context = context;
        this.massage = massage;


    }

    @Override
    public ScrubViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.history_list, parent, false);
        ScrubViewHolder reportsTaxesViewHolder = new ScrubViewHolder(view);
        return reportsTaxesViewHolder;
    }

    @Override
    public void onBindViewHolder(final ScrubViewHolder holder, final int position) {
        holder.date.setText(massage.get(position).getCreatedAt());
        holder.rate.setText(String.valueOf(massage.get(position).getRate()));
        holder.name.setText("Scrub");

    }


    @Override
    public int getItemCount() {
        return massage.size();
    }

    public class ScrubViewHolder extends RecyclerView.ViewHolder {
        TextView name, rate, date;


        public ScrubViewHolder(View itemView) {
            super(itemView);

            date = itemView.findViewById(R.id.date);
            rate = itemView.findViewById(R.id.rate);
            name = itemView.findViewById(R.id.name);


        }
    }

}