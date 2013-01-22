<?php get_header(); ?>
<section class="blogs">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php
				$image_args = array(
                            'numberposts' => 1,
                            'order' => 'DESC',
                            'post_mime_type' => 'image',
                            'post_parent' => get_the_ID(),
                            'post_type' => 'attachment'
                            );
				//echo get_the_ID();
                $get_children_array = get_children($image_args, ARRAY_A);
                $rekeyed_array = array_values($get_children_array);
                $child_image = $rekeyed_array[0];
                if ($child_image['guid'] != '') {
                	?>
                	<img src="<?php print $child_image['guid']; ?>" width=550 />
                	<?php
            	}
				if ( is_single() ) {
					the_content();
				} else {
					the_excerpt();
				} ?>
			</div>

			<div class="postmetadata">
				<table>
					<tr>
						<td>
							<a class="read-all" href="<?php the_permalink() ?>">阅读全文&nbsp;&gt;</a>
						</td>
						<td class="comment-grid right-grid">
							<?php comments_popup_link('没有评论', '<span>1</span> 条评论', '<span>%</span> 条评论'); ?>
						</td>
					</tr>
					<tr>
						<td colspan='2' class="right-grid footer-meta">
							<p><?php the_time('Y | m | d') ?></p>
						</td>
					</tr>
				</table>
				<!-- <?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | -->
				
			</div>

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
