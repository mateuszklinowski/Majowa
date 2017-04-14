<h3>Zapisz się</h3>
<!--Latest 4 posts-->
<div>



    <form>
        <input type="text" placeholder="Imie">
        <input type="text" placeholder="Nazwisko">
        <input type="text" placeholder="Nr telefonu">
        <input type="email" placeholder="Email">
        <input type="radio" name="solo">
        <input type="radio" name="solo">
        <select>
            <option>Tango</option>
            <option>Jazz</option>
            <option>Salsa</option>
            <option>Zumba</option>
            <option>Latino Solo</option>
            <option>Pilates</option>
            <option>Joga</option>
            <option>Gimnastyka</option>
            <option>Taniec użytkowy</option>
        </select>
        <input type="submit">
    </form>
    <?php
    $arg = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'category__not_in' => 5,
    );

    $last4POSTS = new WP_Query($arg);

    if ($last4POSTS->have_posts()) {

        while ($last4POSTS->have_posts()) {
            $last4POSTS->the_post();
            get_template_part('post-files/aside-last-posts');

        }
    }
    ?>
</div>