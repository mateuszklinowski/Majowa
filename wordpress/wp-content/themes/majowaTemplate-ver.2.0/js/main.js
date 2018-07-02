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
        console.log('modal');
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
            left: '-300px'
        }, 300, 'easeInQuart', function () {
            mobileMenu.fadeOut(300)
        })

    }

        var header = $('.nav--container__fluid');

        function testScroll(){
            if(window.pageYOffset>100){
                header.css('background','rgba(0,0,0,0.6)');
                header.css('top','-40px');
                header.css('position','fixed');
                $('.nav--logo').css('visibility','hidden');
            }
            else if(window.pageYOffset<100){
                header.css('background','transparent');
                header.css('top','0');
                $('.nav--logo').css('visibility','visible');
            }
        }
        if(window.pageYOffset>100){
            testScroll();
        }
        window.onscroll=testScroll;


    /*todayClasses slide animation*//*
    (function slideTodayClasses(){

        var todayClassesRows = $(".todayClasses-row");
        for(var i = 0; i < todayClassesRows.length; i++){

            todayClassesRows[i].animate({
               height: "100px"
            },0.9, 'easeOutCubic')

        }
    })();*/

});