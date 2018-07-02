<?php


function newClient(){

    $to = 'wiktoria.ulidowska@gmail.com';
    $subject = 'ZAPISZ SIE - wiadomość';

    $imie = 'Imie i nazwisko :'.$_POST['name_surname'].'<br/><br/>';
    $tel = 'Tel: '.$_POST['telefon'].'<br/><br/>';
    $adres = 'Adres email: '.$_POST['emailzajecia'].'<br/><br/>';
    $zajecia = 'Zajęcia: '.$_POST['zajecia'].'<br/><br/>';
    $wiadomosc = 'Wiadomość: <br/> '.$_POST['wiadomosc'].'<br/><br/>';

    $body = 'Wiadomość automatyczna z serwera: <br/>'.$imie.$tel.$adres.$zajecia.$wiadomosc;

    $headers = array('Content-Type: text/html; charset=UTF-8');

    if(wp_mail( $to, $subject, $body, $headers )){
        echo "<script type='text/javascript'>alert('Wiadomość została wysłana');</script>";

    }
}

if(isset($_POST['emailzajecia'])){
    add_action('init','newClient');
    newClient();
};

?>

<div class="clearfix"></div>
<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
	            <?php wp_nav_menu(array('theme_location'=>'footer_nav_menu')) ?>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="singInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Napisz do nas!</h4>
                    </div>
                    <form action="<?php echo get_home_url()?>" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Imie i nazwisko:</span>
                                    <input name="name_surname" type="text" class="form-control" placeholder="Imie i nazwisko" aria-describedby="basic-addon1">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Nr tel:</span>
                                    <input name="telefon" type="text" class="form-control" placeholder="Numer telefonu" aria-describedby="basic-addon1">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Adres email @</span>
                                    <input name="emailzajecia" type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Jakie zajęcie cie interesują? </span>
                                    <input name="zajecia" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                                </div>
                                <br/>

                                <textarea name="wiadomosc" type="text" class="form-control" placeholder="Masz pytania? Napisz!" aria-describedby="basic-addon1"></textarea>



                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-red">Zapisz się!</button>
                    </div>
                    </form>
                </div>
        </div>

    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>