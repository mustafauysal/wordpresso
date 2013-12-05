<?php
$args = array('posts_per_page' => 1, 'category__not_in' => array(get_cat_ID('ifttt'), get_cat_ID('lab')));
$myposts = get_posts($args);
foreach ($myposts as $post) : setup_postdata($post);?>

<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h2>
<?php global $more;
$more = 0;
the_content(false); ?>
<ul class="BlogPost__meta">
	<li><time class="timestamp" title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php the_time('j F Y - G:i') ?></time></li>
	<li><?php the_category(', '); ?></li>
	<li><?php comments_popup_link('Yorum yok', '1 Yorum', '% Yorum', '', 'Yoruma kapalı'); ?></li>
</ul>

<?php endforeach;
wp_reset_postdata();?>