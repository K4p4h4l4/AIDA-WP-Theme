<?php get_header(); ?>

<main>
    <section>
        <h1>Page Not Found</h1>
        <p>It looks like nothing was found at this location. Maybe try a search?</p>
        <?php get_search_form(); ?>
        <p>Or, <a href="<?php echo home_url(); ?>">return to the homepage</a>.</p>
    </section>
</main>

<?php get_footer(); ?>