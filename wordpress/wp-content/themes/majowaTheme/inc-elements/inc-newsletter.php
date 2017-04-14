<?php
function processMyForm(){

    //you could make some validation even though validation
    //is also processed in our function
    $my_email_variable = $_POST['my_email_variable'] ;


    $user_data = array(
        'email' => $my_email_variable
    );

    $data_subscriber = array(
        'user' => $user_data,
        'user_list' => array('list_ids' => array(2)),
    );

    $helper_user = WYSIJA::get('user','helper');
    $helper_user->addSubscriber($data_subscriber);


    //this function will add the subscriber to mailpoet
}

//initialize this function only when your subscription form data has been posted

if(isset($_POST['my_email_variable'])){
    add_action('init','processMyForm');

    processMyForm();

};

?>

<div class="row">
    <div class="newsletter-container" id="newsletter">
        <i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
        <p>Chcesz być na bieżąco z tym, co się u nas dzieje? Zapisz się do newslettera,
            <br/>
            a nie ominie Cię żadne tanczne wydarzenie!
        </p>
        <form method="POST" action="http://localhost#newsletter">
        <div class="input-group">

                <input placeholder="Wpisz adres email" name="my_email_variable" type="text">

                <button type="submit">ZAPISZ SIĘ</button>
        </div>
        </form>
    </div>
</div>