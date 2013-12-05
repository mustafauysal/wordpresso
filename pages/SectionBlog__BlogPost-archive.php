<?php
$args = array('posts_per_page' => 6, 'offset'=> 1, 'category__not_in' => array(get_cat_ID('ifttt'), get_cat_ID('lab')));
$myposts = get_posts($args);
foreach ($myposts as $post) : setup_postdata($post);?>

<li>
	<h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h4>
	<ul class="BlogPost__meta">
		<li><time class="timestamp" title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php the_time('j F Y - G:i') ?></time></li>
		<li><?php the_category(', '); ?></li>
		<li><?php comments_popup_link('Yorum yok', '1 Yorum', '% Yorum', '', 'Yoruma kapalı'); ?></li>
	</ul>
</li>

<?php endforeach;
wp_reset_postdata();?>