<?php include(TEMPLATEPATH . '/classes/conn.php'); ?>
<?php require_once (TEMPLATEPATH . '/classes/DB.php'); ?>


<div class="singIn-container">
    <div class="singIn-form-container">
        <form method="POST" action="https://docs.google.com/forms/d/1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE"
              onsubmit="return window.submitGoogleForm(this);">
            <div>
                <a class="boxclose" id="closeSingIn"></a>
            </div>

            <div class="instructions singIn-column">
                1. Wybierz taniec:
            </div>
            <div class="instructions singIn-column">
                2. Wybierz kurs:
            </div>
            <div class="instructions singIn-column">
                3. Zapisz się:
            </div>

            <div class="singIn-column selectDance">

                <div class="singIn-selectBtn" data-toggle="singIn-course">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/w_parach.png">
                    <span class="selected-course pairs">W parach</span> <i class="fa fa-chevron-down fa-x2"
                                                                           aria-hidden="true"></i>
                    <div id="singIn-course" class="singIn-selectBox pairs">

                        <?php
                        $arg = array(
                            'post_type' => 'post',
                            'category__in' => [11],
                            'meta_key' => 'kategoria',
                            'meta_value' => 'pary',
                            'posts_per_page' => -1,
                        );
                        $pary = new WP_Query($arg);
                        if ($pary->have_posts()) {
                            while ($pary->have_posts()) {
                                $pary->the_post();
                                print_r("<span class='singIn-danceBtn pairs' id='" . get_the_ID() . "'>" . get_the_title() . "</span>");
                            }
                        }
                        ?>
                        <?php
                        /*                        $db = new DB($name,$host,$user,$pass);
                                                $allClasses = $db -> getAllClasses();
                                                $i = 0;
                                                while(isset($allClasses[$i])){
                                                    if($allClasses[$i]['class'] !== 'Joga' && $allClasses[$i]['class'] !== 'Latino Solo' && $allClasses[$i]['class'] !== 'Pilates Flow' && $allClasses[$i]['class'] !== 'Taniec brzucha' && $allClasses[$i]['class'] !== 'Zumba'){
                                                        print_r ("<span class='singIn-danceBtn pairs'>".$allClasses[$i]['class']."</span>");
                                                    }
                                                    $i++;
                                                }
                                                */ ?>

                    </div>
                </div>
                <div class="singIn-selectBtn" data-toggle="singIn-group">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/solo.png">
                    <span class="selected-course solo">Solo</span> <i class="fa fa-chevron-down fa-x2"
                                                                      aria-hidden="true"></i>
                    <div id="singIn-group" class="singIn-selectBox solo">
                        <?php
                        $arg = array(
                            'posts_per_page' => -1,
                            'post_type' => 'post',
                            'category__in' => [11],
                            'meta_key' => 'kategoria',
                            'meta_value' => 'solo'
                        );
                        $solo = new WP_Query($arg);
                        if ($solo->have_posts()) {
                            while ($solo->have_posts()) {
                                $solo->the_post();
                                print_r("<span class='singIn-danceBtn solo' id='" . get_the_ID() . "'>" . get_the_title() . "</span>");
                            }
                        }
                        ?>
                        <?php
                        /*                        $i = 0;
                                                while(isset($allClasses[$i])){
                                                    if($allClasses[$i]['class'] === 'Joga' || $allClasses[$i]['class'] === 'Latino Solo' || $allClasses[$i]['class'] === 'Pilates Flow' || $allClasses[$i]['class'] === 'Taniec brzucha' || $allClasses[$i]['class'] === 'Zumba'){
                                                        print_r ("<span class='singIn-danceBtn solo'>".$allClasses[$i]['class']."</span>");
                                                    }
                                                    $i++;
                                                }
                                                */ ?>
                    </div>
                </div>
                <div class="singIn-selectBtn" data-toggle="singIn-group">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/fit.png">
                    <span class="selected-course fit">Dla zdrowia</span> <i class="fa fa-chevron-down fa-x2"
                                                                      aria-hidden="true"></i>
                    <div id="singIn-group" class="singIn-selectBox fit">
                        <?php
                        $arg = array(
                            'posts_per_page' => -1,
                            'post_type' => 'post',
                            'category__in' => [11],
                            'meta_key' => 'kategoria',
                            'meta_value' => 'zdrowie'
                        );
                        $solo = new WP_Query($arg);
                        if ($solo->have_posts()) {
                            while ($solo->have_posts()) {
                                $solo->the_post();
                                print_r("<span class='singIn-danceBtn fit' id='" . get_the_ID() . "'>" . get_the_title() . "</span>");
                            }
                        }
                        ?>
                        <?php
                        /*                        $i = 0;
                                                while(isset($allClasses[$i])){
                                                    if($allClasses[$i]['class'] === 'Joga' || $allClasses[$i]['class'] === 'Latino Solo' || $allClasses[$i]['class'] === 'Pilates Flow' || $allClasses[$i]['class'] === 'Taniec brzucha' || $allClasses[$i]['class'] === 'Zumba'){
                                                        print_r ("<span class='singIn-danceBtn solo'>".$allClasses[$i]['class']."</span>");
                                                    }
                                                    $i++;
                                                }
                                                */ ?>
                    </div>
                </div>

                <div class="singIn-pricelistBtn">
                    <a target="_blank" href="http://majowa.eu/cennik/">CENNIK</a>
                </div>
            </div>
            <div class="singIn-column columnWithBorders">
                <select title='kurs' class='kurs'>
                    <option>Wybierz zajęcia</option>
                    <?php
                    $arg = array(
                        'posts_per_page' => -1,
                        'post_type' => 'post',
                        'category__in' => [11],
                        'meta_key' => 'kategoria',
                        'meta_value' => ['zdrowie', 'solo', 'pary']
                    );
                    $solo = new WP_Query($arg);
                    if ($solo->have_posts()) {
                        while ($solo->have_posts()) {
                            $solo->the_post();

                            $postTitle = get_the_ID();

                            $custom = get_post_custom();
                            $stringFromCustom = $custom['kursy'][0];
                            $explodedString = explode('"', $stringFromCustom);
                            $postIDs = array();
                            foreach ($explodedString as $postID) {
                                $postID = intval($postID);
                                if ($postID !== 0) {
                                    array_push($postIDs, $postID);
                                }
                            }
                            $arg = array(
                                'post_type' => 'wcs3_class',
                                'post__in' => $postIDs,
                                'posts_per_page' => -1,
                            );
                            $last4POSTS = new WP_Query($arg);
                            if ($last4POSTS->have_posts()) {

                                while ($last4POSTS->have_posts()) {
                                    $last4POSTS->the_post();
                                    print_r("<option value='" . get_the_title() . "' class='singIn-option " . $postTitle . "'>" . get_the_title() . "</option>");
                                }
                            }

                        }
                    }
                    ?>
                </select>

                <h4>Instruktorzy:</h4>
                <div class="class-trainer-info">
                    <?php
                    $db = new DB($name, $host, $user, $pass);
                    $instructors = $db->getInstructor();
                    foreach ($instructors as $instructor) {
                        print_r("<p class='singIn-instructor singIn-info' data-class='" . $instructor['class'] . "'>" . $instructor['instructor'] . "</p>");
                    }
                    ?>
                </div>
                <h4>Grafik:</h4>
                <div class="class-hours-info">

                    <?php
                    $db = new DB($name, $host, $user, $pass);
                    $hours = $db->getHours();

                    function NumberToWeekday($number)
                    {
                        if ($number == 0) {
                            return 'Niedziela';
                        } else if ($number == 1) {
                            return 'Poniedziałek';
                        } else if ($number == 2) {
                            return 'Wtorek';
                        } else if ($number == 3) {
                            return 'Środa';
                        } else if ($number == 4) {
                            return 'Czwartek';
                        } else if ($number == 5) {
                            return 'Piątek';
                        } else if ($number == 6) {
                            return 'Sobota';
                        }
                        return "";
                    }
                    function CutSecondsFromTime($time){

                    }

                    foreach ($hours as $hour) {
                        print_r("<p class='singIn-hour singIn-info' data-hour='" . $hour['class'] . "'>" .NumberToWeekday($hour['weekday']). " " . substr($hour['start_hour'],0,-3) . " - " . substr($hour['end_hour'],0,-3) . "</p>");
                    }
                    ?>
                </div>

                <!--            <p class="singIn-hour singIn-info">wtorek 18:00 - 19:00</p>
                            <p>Wtorek 20:00 - 21:00</p>-->
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

                <input id="zajecia-input" type="hidden" value="" name="entry.491094824">
                <!--<input id="jakSie-input" type="hidden" value="" name="entry.1492233592">-->

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
                <input class="submitBtn singIn-pricelistBtn" type="submit" value="ZAPISZ SIĘ!">
            </div>

            <div class="clearfix"></div>
        </form>
    </div>
    <div class="singIn-pricelist-container">
        <div id="accordion">
            <h3>zumba, latino solo, joga, taniec brzucha, salsa, taniec użytkowy, cubano solo</h3>
            <div>
                <div class="col-sm-6">
                    <div class="column-title">Rodzaj karnetu</div>
                    <div class="column-content">pojedyncze wejście</div>
                    <div class="column-content">karnet 0,5 miesiąca (2 kolejne zajęcia)</div>
                    <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                    <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Liczba zajęć</div>
                    <div class="column-content">1</div>
                    <div class="column-content">2</div>
                    <div class="column-content">3</div>
                    <div class="column-content">8</div>
                    <div class="column-content">8</div>
                    <div class="column-content">12</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Cena</div>
                    <div class="column-content">25zł</div>
                    <div class="column-content">40zł</div>
                    <div class="column-content">70zł</div>
                    <div class="column-content">110zł</div>
                    <div class="column-content">120zł</div>
                    <div class="column-content">170zł</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Koszt 1 lekcji</div>
                    <div class="column-content">-</div>
                    <div class="column-content">20zł</div>
                    <div class="column-content">18zł</div>
                    <div class="column-content">14zł</div>
                    <div class="column-content">15zł</div>
                    <div class="column-content">14zł</div>
                </div>
            </div>
            <h3>tango, jazz (lekcja 1 godz)</h3>
            <div>
                <div class="col-sm-6">
                    <div class="column-title">Rodzaj karnetu</div>
                    <div class="column-content">pojedyncze wejście</div>
                    <div class="column-content">karnet 0,5 miesiąca (2 kolejne zajęcia)</div>
                    <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                    <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Liczba zajęć</div>
                    <div class="column-content">1</div>
                    <div class="column-content">2</div>
                    <div class="column-content">4</div>
                    <div class="column-content">8</div>
                    <div class="column-content">8</div>
                    <div class="column-content">12</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Cena</div>
                    <div class="column-content">30zł</div>
                    <div class="column-content">50zł</div>
                    <div class="column-content">90zł</div>
                    <div class="column-content">150zł</div>
                    <div class="column-content">170zł</div>
                    <div class="column-content">220zł</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Koszt 1 lekcji</div>
                    <div class="column-content">-</div>
                    <div class="column-content">25zł</div>
                    <div class="column-content">23zł</div>
                    <div class="column-content">19zł</div>
                    <div class="column-content">21zł</div>
                    <div class="column-content">18zł</div>
                </div>
            </div>
            <h3>tango (lekcja 1,5 godz)</h3>
            <div>
                <div class="col-sm-6">
                    <div class="column-title">Rodzaj karnetu</div>
                    <div class="column-content">pojedyncze wejście</div>
                    <div class="column-content">karnet 0,5 miesiąca (2 kolejne zajęcia)</div>
                    <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                    <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Liczba zajęć</div>
                    <div class="column-content">1</div>
                    <div class="column-content">2</div>
                    <div class="column-content">4</div>
                    <div class="column-content">8</div>
                    <div class="column-content">8</div>
                    <div class="column-content">12</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Cena</div>
                    <div class="column-content">40zł</div>
                    <div class="column-content">75zł</div>
                    <div class="column-content">135zł</div>
                    <div class="column-content">240zł</div>
                    <div class="column-content">260zł</div>
                    <div class="column-content">330zł</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Koszt 1 lekcji</div>
                    <div class="column-content">-</div>
                    <div class="column-content">38zł</div>
                    <div class="column-content">34zł</div>
                    <div class="column-content">30zł</div>
                    <div class="column-content">33zł</div>
                    <div class="column-content">28zł</div>
                </div>
            </div>
            <h3>pilates 50+
                (2 razy / tydzień)</h3>
            <div>
                <div class="col-sm-6">
                    <div class="column-title">Rodzaj karnetu</div>
                    <div class="column-content">pojedyncze wejście</div>
                    <div class="column-content">karnet 1 miesiąc (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 2 miesiące (16 kolejnych zajęć)</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Liczba zajęć</div>
                    <div class="column-content">1</div>
                    <div class="column-content">8</div>
                    <div class="column-content">16</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Cena</div>
                    <div class="column-content">10zł</div>
                    <div class="column-content">64zł</div>
                    <div class="column-content">112zł</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Koszt 1 lekcji</div>
                    <div class="column-content">-</div>
                    <div class="column-content">8zł</div>
                    <div class="column-content">7zł</div>
                </div>
            </div>
            <h3>pilates flow</h3>
            <div>
                <div class="col-sm-6">
                    <div class="column-title">Rodzaj karnetu</div>
                    <div class="column-content">pojedyncze wejście</div>
                    <div class="column-content">karnet 1 miesiąc (4 kolejne zajęcia)</div>
                    <div class="column-content">karnet 2 miesiące (8 kolejnych zajęć)</div>
                    <div class="column-content">karnet 3 miesiące (12 kolejnych zajęć)</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Liczba zajęć</div>
                    <div class="column-content">1</div>
                    <div class="column-content">4</div>
                    <div class="column-content">8</div>
                    <div class="column-content">12</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Cena</div>
                    <div class="column-content">15zł</div>
                    <div class="column-content">48zł</div>
                    <div class="column-content">90zł</div>
                    <div class="column-content">135zł</div>
                </div>
                <div class="col-sm-2">
                    <div class="column-title">Koszt 1 lekcji</div>
                    <div class="column-content">-</div>
                    <div class="column-content">12zł</div>
                    <div class="column-content">11zł</div>
                    <div class="column-content">11zł</div>
                </div>
            </div>
        </div>
    </div>
</div>