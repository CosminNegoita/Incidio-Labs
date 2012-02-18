<section id="content">
	<div class="wrapper">
		<section id="posts" class="col_2">
			<article>
				<h2 class="noTop"><?php echo article_title(); ?></h2>
				<p class="meta">
					Posted on <?php echo article_date(); ?>
					<?php if(user_authed()): ?>
						&rarr; <a href="<?php echo base_url('admin/posts/edit/' . article_id()); ?>">Edit</a>
					<?php endif; ?>
				</p>
				<?php echo article_html(); ?>
			</article>
			<?php include_comments(); ?>
		</section>
		<?php include('includes/sidebar.php'); ?>
	</div>
</section>