package com.ltsthink.stone.Models

import ir.mirrajabi.searchdialog.core.Searchable


class SearchModel(private var mTitle: String?) : Searchable {

    override fun getTitle(): String? {
        return mTitle
    }

    fun setTitle(title: String): SearchModel {
        mTitle = title
        return this
    }
}