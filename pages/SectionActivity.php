<div class="Width">
    <h4 class="Section__title">AKTİVİTE</h4>
    <ul>
        <?php
            $args = array( 'posts_per_page' => 10, 'category_name' => 'ifttt' );
            $myposts = get_posts( $args );

            $icon_figure = array(
                'instagram-photo-like' => array('icon-color' => 'instagram','figure' => true),
                'instagram-video-like' => array('icon-color' => 'instagram','figure' => true),
                'instagram-photo-share' => array('icon-color' => 'instagram','figure' => true),
                'instagram-video-share' => array('icon-color' => 'instagram','figure' => true),
                'vimeo-video-favorite' => array('icon-color' => 'vimeo-square','figure' => false),
                'youtube-video-favorite' => array('icon-color' => 'youtube-play','figure' => false),
                'soundcloud-track-favorite' => array('icon-color' => 'rss','figure' => true),
                'facebook-status-share' => array('icon-color' => 'facebook','figure' => false),
                'facebook-link-share' => array('icon-color' => 'facebook','figure' => false),
                'facebook-photo-share' => array('icon-color' => 'facebook','figure' => true),
                'twitter-tweet-share' => array('icon-color' => 'twitter','figure' => false),
                'dribbble-shot-share' => array('icon-color' => 'dribbble','figure' => true),
                'dribbble-shot-like' => array('icon-color' => 'dribbble','figure' => true),
                'imdb-watchlist-update' => array('icon-color' => 'rss','figure' => false),
                'imdb-checkins-update' => array('icon-color' => 'rss','figure' => false),
                'github-repo-starred' => array('icon-color' => 'github','figure' => false),
                'pocket-add-url' => array('icon-color' => 'rss','figure' => false),
            );

            foreach ( $myposts as $post ) : setup_postdata( $post );

                // first-tag
                $posttags = array_values( get_the_tags() );
                $postTag;
                $count = 0;

                if ( $posttags )
                    $postTag = $posttags[0]->name;

                if(isset($icon_figure[$postTag]))
                {
                    $iconColor = $icon_figure[$postTag]['icon-color'];
                    $figure = $icon_figure[$postTag]['figure'];
                }
                else
                {
                    $iconColor = "rss";
                    $figure    = false;
                }

            ?>

            <li class="Event <?php echo 'Event--' . $iconColor;
                    if ( $figure ) {
                        echo ' Event--figure';
                } ?>">
                <span class="Event__icon"><i class="fa <?php echo 'fa-' . $iconColor; ?>"></i></span>

                <div class="Event__content">
                    <?php the_content( false ); ?>
                    <p class="Event__time">
                        <time title="<?php the_time( 'j F Y - G:i' ) ?>" datetime="<?php the_time( 'Y-m-dTG:i:s' ) ?>"><?php the_time( 'j F Y - G:i' ) ?></time>
                    </p>
                </div>
                <?php if ( $figure ): ?>
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