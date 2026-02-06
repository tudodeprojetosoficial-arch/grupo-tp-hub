<?php
/**
 * Template para post individual
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

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>

            <header class="entry-header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-thumbnail-full">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-meta">
                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                        <?php echo esc_html( get_the_date() ); ?>
                    </time>
                    <span class="meta-sep">&bull;</span>
                    <span class="entry-author"><?php the_author(); ?></span>

                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) :
                    ?>
                        <span class="meta-sep">&bull;</span>
                        <span class="entry-categories">
                            <?php echo esc_html( $categories[0]->name ); ?>
                        </span>
                    <?php endif; ?>
                </div>

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

            <footer class="entry-footer">
                <?php
                $tags = get_the_tags();
                if ( $tags ) :
                ?>
                    <div class="entry-tags">
                        <?php foreach ( $tags as $tag ) : ?>
                            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="tag-badge">
                                <?php echo esc_html( $tag->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </footer>

        </article>

        <div class="post-navigation">
            <?php
            the_post_navigation( array(
                'prev_text' => '<span class="nav-label">&laquo; Anterior</span><span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-label">Próximo &raquo;</span><span class="nav-title">%title</span>',
            ) );
            ?>
        </div>

        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        endwhile;
        ?>

    </div>
</main>

<?php get_footer(); ?>
