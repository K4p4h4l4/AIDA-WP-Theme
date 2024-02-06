<?php get_header(); ?>

    <!-- *****************************\
             Main header
    \******************************/-->
    <section class="main__header-container">
        <div class="header__container">
            <!-- *****************************\
                     Menu Principal
            \******************************/-->
            <?php get_sidebar(); ?>
            
            <div class="catgories__container">
                <div class="categories__container-header">
                    <h1 class="categories__container-title">Resultados de procura para: " <?php echo get_search_query(); ?> "</h1>  
                </div>
                <div class="new__products-list">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </article>
                    <?php endwhile; else: ?>
                        <p style="font-size:var(--font-size13);">Sem resultados encontrados para: '<?php echo get_search_query(); ?>'</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>