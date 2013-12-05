<div class="Width">
	<h4 class="Section__title">AKTİVİTE</h4>
	<ul>
		<?php
		$args = array('posts_per_page' => 10, 'category_name' => 'ifttt');
		$myposts = get_posts($args);
		foreach ($myposts as $post) : setup_postdata($post);

			// first-tag
			$posttags = get_the_tags();
			$postTag;
			$count=0;
			if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (1 == $count) $postTag = $tag->name;
				}
			}

			$iconColor = "";
			$action = "paylaştı.";
			$figure = false;

			switch ($postTag) {
			    case 'instagram-photo-like':
			    	$iconColor = "instagram";
			        $action = "fotoğrafı beğendi.";
			        $figure = true;
			        break;
			    case 'instagram-video-like':
			    	$iconColor = "instagram";
			        $action = "videoyu beğendi.";
			        $figure = true;
			        break;
			    case 'instagram-photo-share':
			    	$iconColor = "instagram";
			        $action = "fotoğraf paylaştı.";
			        $figure = true;
			        break;
			    case 'instagram-video-share':
			    	$iconColor = "instagram";
			        $action = "video paylaştı.";
			        $figure = true;
			        break;
			    case 'vimeo-favorite':
			    	$iconColor = "vimeo-square";
			        $action = "videoyu beğendi.";
			        break;
			    case 'youtube-favorite':
			    	$iconColor = "youtube-play";
			        $action = "videoyu favorilere ekledi.";
			        break;
			    case 'foursquare-checkin':
			    	$iconColor = "foursquare";
			        $action = "yer bildirimi yaptı.";
			        $figure = true;
			        break;
			    case 'soundcloud-favorite':
			    	$iconColor = "soundcloud";
			        $action = "şarkıyı beğendi.";
			        $figure = true;
			        break;
			    case 'facebook-status-share':
			    	$iconColor = "facebook";
			        $action = "yazdı.";
			        break;
			    case 'facebook-link-share':
			    	$iconColor = "facebook";
			        $action = "link paylaştı.";
			        break;
			    case 'facebook-photo-share':
			    	$iconColor = "facebook";
			        $action = "fotoğraf paylaştı.";
			        $figure = true;
			        break;
			    case 'twitter-tweet-share':
			    	$iconColor = "twitter";
			        $action = "yazdı.";
			        break;
			    case 'dribbble-shot-share':
			    	$iconColor = "dribbble";
			        $action = "tasarım paylaştı.";
			        $figure = true;
			        break;
			    case 'dribbble-shot-like':
			    	$iconColor = "dribbble";
			        $action = "tasarımı beğendi.";
			        $figure = true;
			        break;
			};?>

			<li class="Event <?php echo 'Event--'.$iconColor; if ($figure) echo ' Event--figure'; ?>">
				<span class="Event__icon"><i class="fa <?php echo 'fa-'.$iconColor; ?>"></i></span>
				<div class="Event__content">
					 <?php the_content(false); ?>
					 <p class="Event__time"><time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php the_time('j F Y - G:i') ?></time> <?php echo $action; ?></p>
				</div>
				<?php if ($figure): ?>
				<figure>
					<img src="<?php the_title(); ?>" alt="">
				</figure>
				<?php endif ?>
			</li>

		<?php endforeach;
		wp_reset_postdata();?>

	</ul>
	<a class="Button Section__button">TÜM AKTIVITELER</a>
</div>