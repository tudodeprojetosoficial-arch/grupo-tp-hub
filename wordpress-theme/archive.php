<?php
/**
 * Template para arquivos (categorias, tags, datas)
 *
 * @package HomeMoney
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">

        <header class="page-header">
            <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
            <?php the_archive_description( '<p class="page-description">', '</p>' ); ?>
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
                    <h2><?php esc_html_e( 'Nenhum conteúdo encontrado nesta categoria.', 'homemoney' ); ?></h2>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>
