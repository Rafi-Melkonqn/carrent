<?php
    if ( ! function_exists('month_name_by_number') )
    {
        function month_name_by_number($number, $locale = 'bg_BG.utf8')
        {
            setlocale(LC_TIME, $locale);
            return mb_convert_case(strftime('%B', mktime(0, 0, 0, $number, 1)), MB_CASE_TITLE, "UTF-8");
        }
    }
