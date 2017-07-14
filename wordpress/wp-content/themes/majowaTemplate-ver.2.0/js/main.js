/**
 * Created by Klinek on 18.06.2017.
 */

$(document).ready(function () {

    /* adding grey div in grafik breake between 11.30 and 15.30*/
    $('.wcs3-schedule-normal-layout > tbody > tr:nth-child(8)').after("<div class='classes-breake'></div>");
    $('.classes-breake').css('width',$('.wcs3-schedule-normal-layout').width());

});