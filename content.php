<div <?php post_class(); ?>>
	<?php do_action( 'business_blog_post_before' ); ?>
	<article>
		<?php ct_business_blog_featured_image(); ?>
		<div class='post-header'>
			<h2 class='post-title'><?php the_title(); ?></h2>
			<?php get_template_part( 'content/post-byline' ); ?>
		</div>
		<div class="post-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array(
				'before' => '<p class="singular-pagination">' . __( 'Pages:', 'business-blog' ),
				'after'  => '</p>',
			) ); ?>
			<?php do_action( 'business_blog_post_after' ); ?>
		</div>
		<div class="post-meta">
			<?php get_template_part( 'content/post-categories' ); ?>
			<?php get_template_part( 'content/post-tags' ); ?>
			<?php get_template_part( 'content/post-nav' ); ?>
		</div>
	</article>
	<?php comments_template(); ?>
</div>