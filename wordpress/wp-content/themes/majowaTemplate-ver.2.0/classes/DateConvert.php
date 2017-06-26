<?php

/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 09.02.2017
 * Time: 10:51
 */
class DateConvert
{
    static public function convertMonthFromEnToPL($numberDate){

        $m_en = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        $m_pol = array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");

        return str_replace($m_en, $m_pol, date('d M Y',strtotime($numberDate)));
    }
}