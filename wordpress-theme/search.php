<?php
/**
 * Template para resultados de busca
 *
 * @package HomeMoney
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">

        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf(
                    esc_html__( 'Resultados para: %s', 'homemoney' ),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header>

        <div class="posts-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content' );
                endwhile;

                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&laquo; Anterior',
                    'next_text' => 'Próxima &raquo;',
                ) );
            else :
                ?>
                <div class="no-results">
                    <h2><?php esc_html_e( 'Nenhum resultado encontrado.', 'homemoney' ); ?></h2>
                    <p><?php esc_html_e( 'Tente usar termos diferentes.', 'homemoney' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>
