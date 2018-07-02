/**
 * Created by Klinek on 25.06.2017.
 */


(function () {

    var i;
    var slides = $(".singleNews");
    var move_right_btn = $('#news-slideRight');
    var move_left_btn = $('#news-slideLeft');
    var slides_array= [];
    var slide_width = 33.333333333333;



/*
    $('.news--img').each(function() {
        var currentElement = $(this);
        var src = currentElement.data('src');
        currentElement.attr('src',src)
    });
*/



    (function set_slide_width(){
        if(window.innerWidth > 1150){
            slide_width = 33.33333333333;
        } else if (window.innerWidth > 700){
            slide_width = 50;
        } else {
            slide_width = 100;
        }
    })();

    /*$(window).resize(function () {
        set_slide_width();
    });*/


    function Single_slide(jQuery_slide_object,position,width){
        this.slide = jQuery_slide_object;
        this.position = position;
        this.initial_position = position;
        this.width = width;
    }

    Single_slide.prototype.move = function () {

        if([-1,0,1,2,3,4].includes(this.position)){
            $(this.slide).css('visibility','visible');
            var src = $(this.slide).find('.news--img').data('src');
            $(this.slide).find('.news--img').attr('src',src);
        }
        else{
            $(this.slide).css('visibility','hidden');
        }

      $(this.slide).css('width',this.width+'%');
      $(this.slide).css('left',this.width*this.position+'%');
    };
    Single_slide.prototype.move_right = function () {
        if(this.position === slides.length - 2){
         this.position = -2;
        }
        else{
            this.position += 1;
        }
    };
    Single_slide.prototype.move_left = function () {
        if(this.position === -2){
            this.position = slides.length - 2;
        }
        else{
            this.position -= 1;
        }
    };

    for(i = 0; i < slides.length; i++){
        var current_slide;
       /* if(i === slides.length - 2){
            current_slide = new Single_slide(slides[i],-2,slide_width)
        }
        else if(i === slides.length - 1){
            current_slide = new Single_slide(slides[i],-1,slide_width)
        }
        else{
            current_slide = new Single_slide(slides[i],i,slide_width);
        }*/

        current_slide = new Single_slide(slides[i],i-2,slide_width);
        slides_array.push(current_slide);
    }
    slides_array.forEach(function (slide) {
        slide.move();
    });

    move_right_btn.on('click',function () {
        slides_array.forEach(function (slide) {
            slide.move_left();
            slide.move();

        })
    });
    move_left_btn.on('click',function () {
        slides_array.forEach(function (slide) {
            slide.move_right();
            slide.move();
        })
    });
})();