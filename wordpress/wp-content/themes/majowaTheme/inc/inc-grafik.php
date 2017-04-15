<div class="row whitebg">
    <div class="graphic-container">
        <h2>grafik</h2>
        <div id="grafik">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>
</div>