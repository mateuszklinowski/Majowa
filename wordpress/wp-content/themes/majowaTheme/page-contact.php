<?php
/*
    Template Name: Contact
 */

get_header();
?>

    <div class="page-container contact-container">

        <div class="contact-info-container">

            <img src="<?php echo get_template_directory_uri() ?>/img/budynek_PAN.jpg">


            <div class="contact-ways">

                <h4><i class="fa fa-envelope fa-2x" aria-hidden="true"></i> taniec.zabrze@gmail.com</h4>

                <h4><i class="fa fa-phone fa-2x" aria-hidden="true"></i> (+48) 535 299 316</h4>

                <h4><i class="fa fa-facebook fa-2x" aria-hidden="true"></i>  /majowaszkola</h4>

            </div>

            <div class="contact-adress">

                Majowa Szkoła Tańca
                <br/>
                ul. M. Curie-Skłodowskiej 34
                <br/>
                41-800 Zabrze
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="maps-container" id="about-photo-area">
           <!-- <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('about-photo-area'), {
                        center: {lat: 50.314798, lng: 18.772019},
                        zoom: 15,
                        zoomControl: true,
                        scaleControl: true,
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                        }
                    });
                    var marker = new google.maps.Marker({
                        position: {lat: 50.314798, lng: 18.772019},
                        map: map
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEKVMCs5opEN6bmlzHo-4mHOAV9JAbY8A&callback=initMap"
                    async defer></script>-->
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2547.7871086515315!2d18.769787515219097!3d50.31456487945689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711320f62fb313d%3A0xd290487a69b3437f!2zTWFqb3dhIFN6a2_FgmEgVGHFhGNh!5e0!3m2!1spl!2spl!4v1488009299081" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="clearfix"></div>
    </div>



<?php get_footer()?>