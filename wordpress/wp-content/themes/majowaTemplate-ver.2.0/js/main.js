/**
 * Created by Klinek on 18.06.2017.
 */

$(document).ready(function () {

    /* adding grey div in grafik breake between 11.30 and 15.30*/
    $('.wcs3-schedule-normal-layout > tbody > tr:nth-child(8)').after("<div class='classes-breake'></div>");
    $('.classes-breake').css('width', $('.wcs3-schedule-normal-layout').width());


    $('#accordion').accordion();


    $('.singInModal').on('click', function () {
        $('#singInModal').modal('toggle');
    })


    /*mobile menu toggle*/
    var mobileMenuBtn = $('.box-shadow-menu');

    var mobileMenu = $('.nav--main');

    mobileMenuBtn.on('click', function () {

        if(mobileMenu.css('display') === 'block'){
            hideMobileMenu();
        } else {
            showMobileMenu();
        }
    });

    function showMobileMenu() {

        mobileMenu.fadeIn(300, function () {
            mobileMenu.animate({
                left: 0
            }, 300, 'easeOutQuart')
        });
    }

    function hideMobileMenu() {

        mobileMenu.animate({
            left: '-200px'
        }, 300, 'easeInQuart', function () {
            mobileMenu.fadeOut(300)
        })

    }

    /*todayClasses slide animation*/
    (function slideTodayClasses(){

        var todayClassesRows = $(".todayClasses-row");

        console.log(todayClassesRows)
        for(var i = 0; i < todayClassesRows.length; i++){

            console.log(todayClassesRows[i]);
            todayClassesRows[i].animate({
               height: "100px"
            },0.4, 'easeOutCubic')

        }
        console.log('sda')
    })();
});