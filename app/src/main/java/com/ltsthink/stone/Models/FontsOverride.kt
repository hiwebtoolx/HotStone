package com.ltsthink.stone.Models

import android.content.Context
import java.lang.reflect.AccessibleObject.setAccessible
import android.graphics.Typeface


object FontsOverride {



    internal fun replaceFont(staticTypefaceFieldName: String,
                             newTypeface: Typeface) {
        try {
            val staticField = Typeface::class.java
                    .getDeclaredField(staticTypefaceFieldName)
            staticField.isAccessible = true

            staticField.set(null, newTypeface)
        } catch (e: NoSuchFieldException) {
            e.printStackTrace()
        } catch (e: IllegalAccessException) {
            e.printStackTrace()
        }

    }


}