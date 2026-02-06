<?php
/**
 * Template part para exibição de posts no loop
 *
 * @package HomeMoney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="post-card-thumbnail">
            <?php the_post_thumbnail( 'medium_large' ); ?>
        </a>
    <?php endif; ?>

    <div class="post-card-content">

        <div class="post-card-meta">
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
            </time>

            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) :
            ?>
                <span class="meta-sep">&bull;</span>
                <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="post-card-category">
                    <?php echo esc_html( $categories[0]->name ); ?>
                </a>
            <?php endif; ?>
        </div>

        <h2 class="post-card-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <div class="post-card-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="post-card-link">
            <?php esc_html_e( 'Leia mais', 'homemoney' ); ?> &rarr;
        </a>

    </div>

</article>
