<?php
if ( get_theme_mod( 'post_tags') == 'no' ) return;

$tags   = get_the_tags( $post->ID );
$output = '';
if ( $tags ) {
	echo '<div class="post-tags">';
		echo '<ul>';
			foreach ( $tags as $tag ) {
				// translators: %s = the name of the post tag
				echo '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts tagged %s", 'startup-blog' ), $tag->name ) ) . '">' . esc_html( $tag->name ) . '</a></li>';
			}
		echo '</ul>';
	echo '</div>';
}