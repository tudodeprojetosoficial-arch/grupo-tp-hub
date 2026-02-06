<?php
/**
 * Template para página 404
 *
 * @package HomeMoney
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">

        <section class="error-404">
            <h1 class="error-title">404</h1>
            <h2><?php esc_html_e( 'Página não encontrada', 'homemoney' ); ?></h2>
            <p><?php esc_html_e( 'A página que você procura não existe ou foi movida.', 'homemoney' ); ?></p>

            <div class="error-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'Voltar ao Início', 'homemoney' ); ?>
                </a>
            </div>

            <div class="error-search">
                <p><?php esc_html_e( 'Ou tente buscar:', 'homemoney' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
