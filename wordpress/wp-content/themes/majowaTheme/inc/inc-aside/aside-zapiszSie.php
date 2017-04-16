<h3 id="toggleSingIn">Zapisz się <i class="fa fa-chevron-down fa-x2" aria-hidden="true"></i></h3>
<!--Latest 4 posts-->
<div class="aside-sing-in">
    <form method="POST"
          action="https://docs.google.com/forms/d/1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE"
          onsubmit="return window.submitGoogleForm(this);">
        <label for="Imie">Imie:</label>
        <input type="text" placeholder="Imie" id="Imie" name="entry.1782511083" required>
        <label for="Nazwisko">Nazwisko:</label>
        <input type="text" placeholder="Nazwisko" id="Nazwisko" name="entry.173465573">
        <label for="nrTelefonu">Nr telefonu:</label>
        <input type="text" placeholder="Nr telefonu" id="nrTelefonu" name="entry.774965994" required>
        <label for="Email">Email:</label>
        <input type="email" placeholder="Email" id="Email" name="entry.1943066783">
        <div>
            <label class="radio-label" for="Solo">Solo</label>
            <input class="radio-input" type="radio" name="entry.1994805656" id="Solo" value="Solo" checked>
        </div>
        <div>
            <label class="radio-label" for="Z_partnerem">Z partnerem</label>
            <input class="radio-input" type="radio" name="entry.1994805656" id="Z_partnerem" value="Z partnerem">
        </div>
        <div class="clearfix"></div>
        <input name="entry.491094824" value="<?php the_title()?>" type="hidden">
        <button class="submitBtn" type="submit">Zapisz Się</button>
    </form>

</div>
