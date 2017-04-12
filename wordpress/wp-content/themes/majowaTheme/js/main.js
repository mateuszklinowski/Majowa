console.log('Js work');

var thumbnail = $('.post-thumbnail-box');

var thumbnail_width = thumbnail.width();

var thumbnail_height = thumbnail_width * 0.665;

thumbnail.css('height',thumbnail_height);

$(window).resize(function () {

    thumbnail_width = thumbnail.width();

    thumbnail_height = thumbnail_width * 0.665;

    thumbnail.css('height',thumbnail_height);

});



$(document).ready(function () {


  //  $('.wcs3-day-col-6, .wcs3-day-col-0').css('display','none');



    $(".news-link-area").on('click',function () {

        window.location.href = this.id;

    });
    $(".blog-post-container").on('click',function () {

        window.location.href = this.id;

    });
    $(".class-hover").on('click',function () {

        window.location.href = this.id;

    });
    $(".dance-btn").on('click',function () {

        window.location.href = this.id;

    });

    $('.wcs3-schedule-normal-layout > tbody > tr:nth-child(3)').after("<div class='classes-breake'></div>");

   $('.classes-breake').css('width',$('.wcs3-schedule-normal-layout').width());

    $("#holder > div:nth-child(2)").after("<div>foobar</div>");


    function testScroll(ev){
        if(window.pageYOffset>100){
            $(".sticky-header-container").css('top','0px');
        }
        else if(window.pageYOffset<100){
            $(".sticky-header-container").css('top','-70px');
            console.log('ss');
        }
    }
    window.onscroll=testScroll;



    //region match height

    function findMaxHeight(element){

        var maxHeight=0;
        element.each(function () {
            if($(this).height() > maxHeight){
                maxHeight = $(this).height();
            }
            console.log($(this).height());

        });
        console.log(maxHeight);
        return maxHeight;
    }
    function setSameHeight(element,maxHeight){

        element.each(function () {
            $(this).css('height',maxHeight);
        });
    }

    var news_box = $('.single-news');

    var single_news_text = $('.single-news-text');
    //setSameHeight(single_news_text,findMaxHeight(single_news_text));


    //endregion


    //region setting same height in row of images
   /* var max_productImage_height =0;

    var product_box = $('.blog-post-container');

    function set_max_height(element){

        max_productImage_height = 0;
        element.each(function () {

            if($(this).height() > max_productImage_height){

                max_productImage_height = $(this).height();
            }
        });
        console.log(max_productImage_height);
        return max_productImage_height;

    }

    function set_same_height(element){
        element.each(function(){
            $(this).css('height',set_max_height(element));
        });
    }

    set_same_height(product_box);

    $(window).resize(function(){
        product_box.height('auto');

        set_max_height(product_box);
        set_same_height(product_box)

    });
*/



    function set_same_height_in_row (element){

        var i = 0;
        var element_1_height;
        var element_2_height;
        var max_height;

        element.each(function () {

            if(i%2 == 0){
                element_1_height = $(this).height();
                element_2_height = $(this).next().height();

                if (element_1_height > element_2_height){
                    max_height =  element_1_height;
                }
                else{
                    max_height =  element_2_height
                }

                $(this).css('height',max_height);
                $(this).next().css('height',max_height);
                console.log(max_height);

                element_1_height = 0;
                element_2_height = 0;
                max_height = 0;
                i++;
            }
            else{
                i++
            }
        });


    }
    set_same_height_in_row($('.blog-post-container'));




    //endregion










});




