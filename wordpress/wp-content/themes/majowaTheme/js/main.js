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

    //region top menu dropdown elements
    var collapseTopMenu = $('.menu-item-has-children');
    var drop_down_item = $('.sub-menu');

    var dropdown_right = $(window).width() - (collapseTopMenu.offset().left + collapseTopMenu.outerWidth());
    var dropdown_top = collapseTopMenu.offset().top + collapseTopMenu.outerHeight();

    drop_down_item.css('right', dropdown_right);
    drop_down_item.css('top',dropdown_top);

    //endregion


    /* adding grey div in grafik breake between 11.30 and 15.30*/
    $('.wcs3-schedule-normal-layout > tbody > tr:nth-child(5)').after("<div class='classes-breake'></div>");

   $('.classes-breake').css('width',$('.wcs3-schedule-normal-layout').width());

    $("#holder > div:nth-child(2)").after("<div>foobar</div>");

    function testScroll(ev){
        if(window.pageYOffset>100 && window.innerWidth > 984){
            $(".sticky-header-container").css('top','0px');

        }
        else if(window.pageYOffset<100){
            $(".sticky-header-container").css('top','-70px');
            console.log('ss');
        }
    }
    window.onscroll=testScroll;

    //region mobile menu

    function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault) {
            e.preventDefault();
        }
        e.returnValue = false;
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    function disableScroll() {
        if (window.addEventListener) {
            window.addEventListener('DOMMouseScroll', preventDefault, false);
        } // older FF
        window.onwheel = preventDefault; // modern standard
        window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
        window.ontouchmove  = preventDefault; // mobile
        document.onkeydown  = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        if (window.removeEventListener) {
            window.removeEventListener('DOMMouseScroll', preventDefault, false);
        }
        window.onmousewheel = document.onmousewheel = null;
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }

    $('.mobile-menu-button').click(function () {
        $('.mobile-menu').toggleClass('openMenu');

        console.log('d');

        $('#nav-icon3').toggleClass('open');

        if( $('#nav-icon3').hasClass('open')){

            disableScroll();
        }
        else{
            enableScroll();
        }
    });

    //endregion

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

            if(i%2 === 0){
                element_1_height = $(this).height();
                element_2_height = $(this).next().height();

                if (element_1_height > element_2_height){
                    max_height =  element_1_height;
                    max_height += 40;
                }
                else{
                    max_height =  element_2_height;
                    max_height += 40;
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

    //region blog-post slider

    var newsPostDiv = $('.single-news');
    var newsPostWrapperDiv = $('.news-box');
    newsPostWrapperDiv.height(function () {
        return newsPostDiv.height() + 50;
    }); //set parent height acording to absolute child

    var i = 0;
    var newsPostWidth;

    newsPostDiv.each(function () {
       newsPostWidth = newsPostDiv.width();
        $(this).css('left',i*newsPostWidth);
        i++;
    });

    var leftLimit;
    var rightLimit;
    var current_left_value;
    $('#news-slideRight').on('click',function () {

        rightLimit= parseFloat(newsPostDiv.last().css('left').slice(0,-2));

        if(rightLimit < -1 || rightLimit > 1){

            console.log(newsPostDiv.last().css('left'));
            newsPostDiv.each(function(){
                current_left_value = $(this).css('left');
                current_left_value = current_left_value.slice(0,-2);

                current_left_value = parseFloat(current_left_value);
                newsPostWidth = parseFloat(newsPostWidth);

                current_left_value = current_left_value - newsPostWidth;
                $(this).css('left',current_left_value);

            });
        }
    });

    $('#news-slideLeft').on('click',function () {

        leftLimit= parseFloat(newsPostDiv.first().css('left').slice(0,-2));


        if(leftLimit < -1 || leftLimit > 1){

            newsPostDiv.each(function(){
                current_left_value = $(this).css('left');
                current_left_value = current_left_value.slice(0,-2);

                current_left_value = parseFloat(current_left_value);
                newsPostWidth = parseFloat(newsPostWidth);

                current_left_value = current_left_value + newsPostWidth;
                $(this).css('left',current_left_value);

            });
        }

    });

    $(window).resize(function(){
        newsPostWrapperDiv.height(function () {
            return newsPostDiv.height() + 50;
        }); //set parent height acording to absolute child
        i = 0;
        newsPostDiv.each(function () {
            newsPostWidth = newsPostDiv.width();
            $(this).css('left',i*newsPostWidth);
            i++;
        });
    });


    //endregion


});


//region google forms curl JS
!function(exports) {
    exports.submitGoogleForm = submitGoogleForm;

    function submitGoogleForm(form) {
        try {
            var data = [].slice.call(form).map(function(control) {
                return 'value' in control && control.name ?
                control.name + '=' + (control.value === undefined ? '' : control.value) :
                    '';
            }).join('&');
            var xhr = new XMLHttpRequest();

            xhr.open('POST', form.action + '/formResponse', true);
            xhr.setRequestHeader('Origin', 'https://docs.google.com');
            xhr.setRequestHeader('Accept',
                'application/xml, text/xml, */*; q=0.01');
            xhr.setRequestHeader('Content-type',
                'application/x-www-form-urlencoded; charset=UTF-8');
            xhr.send(data);
        } catch(e) {}

        form.parentNode.className += ' submitted';

        swal(
            'Zapisałeś się!',
            'Skontaktujemy się z Tobą, do zobaczenia na zajęciach :)',
            'success'
        );

        return false;
    }
}(typeof module === 'undefined' ? window : module.exports);
//endregion

//region zapiszSie popout form


var danceBtn = $('.singIn-danceBtn');

danceBtn.on('click',function(){
    $('#zajecia-input').val($(this).html());

    if($(this).hasClass('pairs')){
        $('.selected-course.solo').html('Solo');
        $('.selected-course.pairs').html($(this).html());
    }
    else if($(this).hasClass('solo')){
        $('.selected-course.pairs').html('W Parach');
        $('.selected-course.solo').html($(this).html());
    }

    var data_class = $('#zajecia-input').val();
    $('.singIn-instructor').css('display','none');
    $("p[data-class='"+data_class+"']").css('display','block');

    $('.singIn-hour').css('display','none');
    $("p[data-hour='"+data_class+"']").css('display','block');





});

/*toggle singin dive in dance post page*/
$('#toggleSingIn').on('click',function(){
    /*$('.aside-sing-in').toggle('slow');*/

    if($('.singIn-container').css('display') == 'none'){
        $('.singIn-container').fadeIn();
    }
    else{
        $('.singIn-container').fadeOut();
    }
});


/*toggle singin Div from menu lvl*/
/*$('li#menu-item-436').on('click',function () {

    if($('.singIn-container').css('display') == 'none'){
        $('.singIn-container').fadeIn();
    }
    else{
        $('.singIn-container').fadeOut();
    }

});*/
$('li#menu-item-286').on('click',function () {

    if($('.singIn-container').css('display') == 'none'){
        $('.singIn-container').fadeIn();
    }
    else{
        $('.singIn-container').fadeOut();
    }

});

$('#zapiszSie').on('click',function () {

    if($('.singIn-container').css('display') == 'none'){
        $('.singIn-container').fadeIn();
    }
    else{
        $('.singIn-container').fadeOut();
    }
});

$('#closeSingIn').on('click',function () {
    $('.singIn-container').fadeOut();
});

//endregion





//region activate pricelist accordion

    var pricelist = $('#accordion');

$( function() {
    pricelist.accordion();
} );
//endregion
