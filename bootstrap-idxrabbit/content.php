<h2 class="blog-post-title"><?php the_title(); ?></h2>

<?php if(!is_page()): ?>
 	<p class="blog-post-meta">
 		<?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
 	</p>
<?php endif; ?>

<?php the_content(); ?>