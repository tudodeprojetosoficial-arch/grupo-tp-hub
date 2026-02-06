<?php
/**
 * Template para páginas
 *
 * @package HomeMoney
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container single-container">

        <?php
        while ( have_posts() ) :
            the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-page' ); ?>>

            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'homemoney' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>

        </article>

        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        endwhile;
        ?>

    </div>
</main>

<?php get_footer(); ?>
