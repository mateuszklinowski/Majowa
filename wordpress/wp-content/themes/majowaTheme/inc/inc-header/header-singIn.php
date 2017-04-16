<div class="singIn-container">
    <form method="POST" action="https://docs.google.com/forms/d/1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE"
          onsubmit="return window.submitGoogleForm(this);">

        <div class="dance-form-btn dance-form-toggle" id="wParze">
            <img src="<?php echo get_template_directory_uri()?>/img/icons/w_parach.png">
            <span>W PARZE</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
            <div class="toggle-radio-div">
                <div class="toggle-radio-option radio-input">
                    Tango
                </div>
                <div class="toggle-radio-option radio-input">
                    Salsa
                </div>
                <div class="toggle-radio-option radio-input">
                    Taniec użytkowy
                </div>
            </div>
        </div>
        <div class="dance-form-btn dance-form-toggle" id="Solo">
            <img src="<?php echo get_template_directory_uri()?>/img/icons/solo.png">
            <span>SOLO</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
            <div class="toggle-radio-div">
                <div class="toggle-radio-option radio-input">
                    Latino Solo
                </div>
                <div class="toggle-radio-option radio-input">
                    Jazz
                </div>
                <div class="toggle-radio-option radio-input">
                    Zumba
                </div>
            </div>
        </div>
        <div class="dance-form-btn dance-form-toggle" id="dlaZdrowia">
            <img src="<?php echo get_template_directory_uri()?>/img/icons/fit.png">
            <span>DLA ZDROWIA</span> <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i>
            <div class="toggle-radio-div">
                <div class="toggle-radio-option radio-input">
                    Joga
                </div>
                <div class="toggle-radio-option radio-input">
                    Gimnastyka
                </div>
                <div class="toggle-radio-option radio-input">
                    Pilates
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <label for="Imie">Imie</label>
            <input type="text" placeholder="Imie" id="Imie" name="entry.1782511083" required>
        </div>
        <div class="col-sm-6">
            <label for="nazwisko">Nazwisko</label>
            <input type="text" placeholder="Nazwisko" id="Nazwisko" name="entry.173465573">
        </div>
        <div class="col-sm-6">
            <label for="nrTelefonu">Nr telefonu</label>
            <input type="text" placeholder="Nr telefonu" id="nrTelefonu" name="entry.774965994" required>
        </div>
        <div class="col-sm-6">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="entry.1943066783">
        </div>
        <div class="clearfix"></div>
        <input id="zajecia-input" type="hidden" value="" name="entry.491094824">
        <input id="jakSie-input" type="hidden" value="" name="entry.1492233592">

        <div class="dance-form-toggle" id="jakSieDowiedziales">
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
        </div>

        <button class="submitBtn" type="submit">Zapisz Się</button>
    </form>
</div>