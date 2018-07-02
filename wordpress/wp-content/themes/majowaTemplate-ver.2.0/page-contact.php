<?php
/*
    Template Name: Contact
 */

get_header();
?>

<?php require_once 'template_elements/banner.php'?>

<div class="col-md-9">
    <h1 class="title text-center"><?php the_title()?></h1>

    <div class="row">
        <div class="col-md-offset-1 col-md-10 main-container pricelist-container">


        </div>
        <div class="col-xs-12">

            <div class="contact-info-container">

                    <div class="col-md-offset-1 col-md-5">
                        <div class="contact-ways">
                            <a href="mailto:<?php echo get_field('email_kontaktowy') ?>">
                                <h4><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                    <?php echo get_field('email_kontaktowy') ?>
                                </h4></a>
                            <a href="tel:+48<?php echo get_field('telefon_kontaktowy') ?>"><h4><i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                    (+48)   <?php echo get_field('telefon_kontaktowy') ?>
                                </h4></a>
                            <a href="https://www.facebook.com/Taniec.Zabrze/"><h4><i class="fa fa-facebook fa-2x" aria-hidden="true"></i>  /Taniec.Zabrze</h4></a>
                        </div>
                        <div class="contact-adress">
                            Majowa Szkoła Tańca
                            <br/>
                            ul. M. Curie-Skłodowskiej 34
                            <br/>
                            41-800 Zabrze
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri() ?>/img/budynek_PAN.jpg">
                    </div>
                <div class="clearfix"></div>

            </div>
            <div class="col-md-offset-1 col-md-11">
                <div class="maps-container" id="about-photo-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2547.7871086515315!2d18.769787515219097!3d50.31456487945689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711320f62fb313d%3A0xd290487a69b3437f!2zTWFqb3dhIFN6a2_FgmEgVGHFhGNh!5e0!3m2!1spl!2spl!4v1488009299081" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

</div>
<?php require_once  'template_elements/aside.php'?>

<?php get_footer()?>



