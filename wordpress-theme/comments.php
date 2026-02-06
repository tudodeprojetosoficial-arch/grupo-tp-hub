<?php
/**
 * Template para comentários
 *
 * @package HomeMoney
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            printf(
                esc_html( _n( '%d Comentário', '%d Comentários', $comment_count, 'homemoney' ) ),
                $comment_count
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation( array(
            'prev_text' => '&laquo; Comentários anteriores',
            'next_text' => 'Próximos comentários &raquo;',
        ) );
        ?>

    <?php endif; ?>

    <?php
    comment_form( array(
        'title_reply'        => esc_html__( 'Deixe um comentário', 'homemoney' ),
        'label_submit'       => esc_html__( 'Enviar Comentário', 'homemoney' ),
        'comment_notes_after' => '',
    ) );
    ?>

</div>
