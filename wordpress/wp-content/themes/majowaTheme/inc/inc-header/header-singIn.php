<?php include (TEMPLATEPATH . '/classes/conn.php' ); ?>


<div class="singIn-container">
    <div class="singIn-form-container">
        <form method="POST" action="https://docs.google.com/forms/d/1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE"
              onsubmit="return window.submitGoogleForm(this);">

            <div>
                <a class="boxclose" id="closeSingIn"></a>
            </div>

            <div class="singIn-column selectDance">
                <div class="singIn-selectBtn" data-toggle="singIn-course">
                    <img src="<?php echo get_template_directory_uri()?>/img/icons/w_parach.png">
                    <span class="selected-course">Kurs</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
                    <div id="singIn-course" class="singIn-selectBox">
                        <?php
                        $db = new DB($name,$host,$user,$pass);
                        $allClasses = $db -> getAllClasses();
                        $i = 0;
                        while(isset($allClasses[$i])){
                            if($allClasses[$i]['class'] !== 'Joga' && $allClasses[$i]['class'] !== 'Latino Solo' && $allClasses[$i]['class'] !== 'Pilates Flow' && $allClasses[$i]['class'] !== 'Taniec brzucha' && $allClasses[$i]['class'] !== 'Zumba'){
                                print_r ("<span>".$allClasses[$i]['class']."</span>");
                            }
                            $i++;
                        }
                        ?>

                    </div>
                </div>
                <div class="singIn-selectBtn" data-toggle="singIn-group">
                    <img src="<?php echo get_template_directory_uri()?>/img/icons/solo.png">
                    <span class="selected-course">Solo</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
                    <div id="singIn-group" class="singIn-selectBox">
                        <?php
                        $i = 0;
                        while(isset($allClasses[$i])){
                            if($allClasses[$i]['class'] === 'Joga' || $allClasses[$i]['class'] === 'Latino Solo' || $allClasses[$i]['class'] === 'Pilates Flow' || $allClasses[$i]['class'] === 'Taniec brzucha' || $allClasses[$i]['class'] === 'Zumba'){
                                print_r ("<span>".$allClasses[$i]['class']."</span>");
                            }
                            $i++;
                        }
                        ?>
                    </div>
                </div>

                <div class="singIn-pricelistBtn">
                    CENNIK
                </div>
            </div>
            <div class="singIn-column columnWithBorders">
                <h4>Instruktorzy:</h4>
                <p class="singIn-instructor singIn-info">Maja Kucharska</p>
                <h4>Grafik:</h4>
                <p class="singIn-hour singIn-info">wtorek 18:00 - 19:00</p>
                <p>Wtorek 20:00 - 21:00</p>
            </div>
            <div class="singIn-column singIn-form-inputs">
                <label for="Imie">Imie</label>
                <input type="text" placeholder="Imie" id="Imie" name="entry.1782511083" required>
                <label for="nazwisko">Nazwisko</label>
                <input type="text" placeholder="Nazwisko" id="Nazwisko" name="entry.173465573" required>
                <label for="nrTelefonu">Nr telefonu</label>
                <input type="text" placeholder="Nr telefonu" id="nrTelefonu" name="entry.774965994" required>
                <label for="email">Email</label>
                <input type="email" placeholder="Email" id="email" name="entry.1943066783" required>

                <!--<input id="zajecia-input" type="hidden" value="" name="entry.491094824">
                <input id="jakSie-input" type="hidden" value="" name="entry.1492233592">-->

                <!--<div class="dance-form-toggle" id="jakSieDowiedziales">
                    <span>SKĄD DOWIEDZIAŁEŚ SIĘ O STRONIE?</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
                    <div class="toggle-radio-div whitebg">
                        <div class="toggle-radio-option select-input">
                            Facebook
                        </div>
                        <div class="toggle-radio-option select-input">
                            Znajomi
                        </div>
                        <div class="toggle-radio-option select-input">
                            Ulotka
                        </div>
                        <div class="toggle-radio-option select-input">
                            Internet
                        </div>
                        <div class="toggle-radio-option select-input">
                            Inne...
                        </div>
                    </div>
                </div>-->
            </div>

            <div class="clearfix"></div>

            <input class="submitBtn" type="submit" value="ZAPISZ SIĘ!">
        </form>
    </div>
</div>