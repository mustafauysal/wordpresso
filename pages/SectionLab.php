<div class="Width">

	<h4 class="Section__title">LAB</h4>

	<ul>
		<?php
		$args = array('category_name' => 'lab', 'order' => 'ASC', 'posts_per_page' => 10);
		$myposts = get_posts($args);
		foreach ($myposts as $post) : setup_postdata($post);?>

		<li>
			<h4><a href=""><?php the_title(); ?></a></h4>
			<?php the_content(false);

			$caps = get_post_meta($post->ID, 'lab-caps', true);
			$link = get_post_meta($post->ID, 'lab-link', true);
            if (!empty($caps)) { ?>
            <figure>
				<a href="<?php echo $link; ?>" alt=""><img src="<?php echo $caps; ?>" alt=""></a>
			</figure>
            <?php } else { ?>
				<a href="<?php echo $link; ?>" alt=""></a>
            <?php } ?>

		</li>

		<?php endforeach;
		wp_reset_postdata();?>
	</ul>

</div>

Çünkü o kutunun içinde kullanım kılavuzundan herşeyin olduğunu biliyordum.
http://ademilter.com/v3/wp-content/uploads/2013/12/lab-2.jpg