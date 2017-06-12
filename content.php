<div <?php post_class(); ?>>
	<?php do_action( 'business_blog_post_before' ); ?>
	<article>
		<div class='post-header'>
			<h2 class='post-title'><?php the_title(); ?></h2>
			<?php get_template_part( 'content/post-byline' ); ?>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 42, '', get_the_author() ); ?>
			<?php get_template_part( 'content/comments-link' ); ?>
		</div>
		<?php ct_business_blog_featured_image(); ?>
		<div class="post-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array(
				'before' => '<p class="singular-pagination">' . __( 'Pages:', 'business-blog' ),
				'after'  => '</p>',
			) ); ?>
			<?php do_action( 'business_blog_post_after' ); ?>
		</div>
		<div class="post-meta">
			<?php get_template_part( 'content/post-author' ); ?>
			<?php get_template_part( 'content/post-categories' ); ?>
			<?php get_template_part( 'content/post-tags' ); ?>
		</div>
	</article>
</div>
<?php comments_template(); ?>