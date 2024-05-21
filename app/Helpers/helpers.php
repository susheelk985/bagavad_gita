<?php

if (!function_exists('_lang')) {
    function _lang($string = '') {
        $translated_String = GoogleTranslate::trans($string, app()->getLocale());

        return $translated_String;
    }
}

