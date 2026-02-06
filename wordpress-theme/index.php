<?php
/**
 * O template principal
 *
 * @package HomeMoney
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">

        <?php if ( is_home() && ! is_paged() ) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php bloginfo( 'name' ); ?></h1>
                <p class="page-description"><?php bloginfo( 'description' ); ?></p>
            </header>
        <?php endif; ?>

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
                    <h2><?php esc_html_e( 'Nenhum conteúdo encontrado', 'homemoney' ); ?></h2>
                    <p><?php esc_html_e( 'Tente realizar uma busca.', 'homemoney' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>
