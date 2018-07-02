<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 13.07.2017
 * Time: 20:17
 */
function processMyForm(){

    //you could make some validation even though validation
    //is also processed in our function
    $email = $_POST['email'] ;


    $user_data = array(
        'email' => $email
    );

    $data_subscriber = array(
        'user' => $user_data,
        'user_list' => array('list_ids' => array(3)),
    );

    $helper_user = WYSIJA::get('user','helper');
    $helper_user->addSubscriber($data_subscriber);


    //this function will add the subscriber to mailpoet
}

//initialize this function only when your subscription form data has been posted

if(isset($_POST['email'])){
    add_action('init','processMyForm');
    processMyForm();
};

?>

<div class="container-fluid container--padding pseudo--slant__after">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                <h1 class="text-center title--fancy">Newsletter!</h1>
                <form class="newsletter--form" action="<?php echo get_home_url()?>" method="POST">
                    <input type="text" name="email" class="newsletter--input" id="email"
                           placeholder="Podaj swój email ...">
                    <button class="newsletter--button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

