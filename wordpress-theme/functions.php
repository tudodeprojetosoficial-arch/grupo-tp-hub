<?php
/**
 * Home Money - Functions and definitions
 *
 * @package HomeMoney
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'HOMEMONEY_VERSION', '1.0.0' );

/**
 * Configurações do tema
 */
function homemoney_setup() {
    // Título dinâmico
    add_theme_support( 'title-tag' );

    // Imagens destacadas
    add_theme_support( 'post-thumbnails' );

    // Logo personalizado
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Alinhamento de blocos
    add_theme_support( 'align-wide' );

    // Estilos do editor
    add_theme_support( 'editor-styles' );

    // Responsivo para embeds
    add_theme_support( 'responsive-embeds' );

    // Registro de menus
    register_nav_menus( array(
        'primary'   => __( 'Menu Principal', 'homemoney' ),
        'footer'    => __( 'Menu Rodapé', 'homemoney' ),
    ) );
}
add_action( 'after_setup_theme', 'homemoney_setup' );

/**
 * Enqueue de scripts e estilos
 */
function homemoney_scripts() {
    // Estilos
    wp_enqueue_style(
        'homemoney-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        HOMEMONEY_VERSION
    );

    wp_enqueue_style(
        'homemoney-style',
        get_stylesheet_uri(),
        array( 'homemoney-main' ),
        HOMEMONEY_VERSION
    );

    // Google Fonts
    wp_enqueue_style(
        'homemoney-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap',
        array(),
        null
    );

    // Scripts
    wp_enqueue_script(
        'homemoney-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        HOMEMONEY_VERSION,
        true
    );

    // Comentários aninhados
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'homemoney_scripts' );

/**
 * Registrar sidebar/widgets
 */
function homemoney_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Barra Lateral', 'homemoney' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Adicione widgets aqui.', 'homemoney' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Rodapé 1', 'homemoney' ),
        'id'            => 'footer-1',
        'description'   => __( 'Primeira coluna do rodapé.', 'homemoney' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Rodapé 2', 'homemoney' ),
        'id'            => 'footer-2',
        'description'   => __( 'Segunda coluna do rodapé.', 'homemoney' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Rodapé 3', 'homemoney' ),
        'id'            => 'footer-3',
        'description'   => __( 'Terceira coluna do rodapé.', 'homemoney' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'homemoney_widgets_init' );

/**
 * Limitar o tamanho do excerpt
 */
function homemoney_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'homemoney_excerpt_length' );

/**
 * Personalizar o "Leia mais" do excerpt
 */
function homemoney_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'homemoney_excerpt_more' );
