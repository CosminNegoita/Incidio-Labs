<?php if(comments_open()): ?>
	<section id="comments">
		<h3 class="heading"><small><a href="#commentform">Add your comment</a></small><?php echo total_comments() . pluralise(total_comments(), ' comment'); ?></h3>
		<?php if(has_comments()): ?>
			<?php while(comments()): ?>
				<div class="comment" id="comment-<?php echo comment_id(); ?>">
					<h3><?php echo comment_name(); ?> <span>&rarr; <?php echo comment_date(); ?></span></h3>
					<?php echo comment_text(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div id="commentform">
			<h3 class="heading">Add your comment</h3>
			<form id="comment" class="commentform" action="<?php echo current_url(); ?>#comment" method="post">
				<div>
					<?php echo comment_form_input_name('placeholder="Your full name"'); ?>
					<?php echo comment_form_input_email('placeholder="Your Email Address"'); ?>
				</div>
				<?php echo comment_form_input_text('placeholder="You can use HTML tags for the message..."'); ?>
				<?php echo comment_form_button(); ?>
			</form>
		</div>
	</section>
<?php endif; ?>