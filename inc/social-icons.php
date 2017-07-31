<?php

//----------------------------------------------------------------------------------
// Setup array with all social accounts available for icons in the Customizer
//----------------------------------------------------------------------------------
if ( ! function_exists( 'ct_startup_blog_social_array' ) ) {
	function ct_startup_blog_social_array() {

		$social_sites = array(
			'twitter'       => 'startup_blog_twitter_profile',
			'facebook'      => 'startup_blog_facebook_profile',
			'instagram'     => 'startup_blog_instagram_profile',
			'linkedin'      => 'startup_blog_linkedin_profile',
			'pinterest'     => 'startup_blog_pinterest_profile',
			'google-plus'   => 'startup_blog_googleplus_profile',
			'youtube'       => 'startup_blog_youtube_profile',
			'email'         => 'startup_blog_email_profile',
			'email-form'    => 'startup_blog_email_form_profile',
			'500px'         => 'startup_blog_500px_profile',
			'amazon'        => 'startup_blog_amazon_profile',
			'bandcamp'      => 'startup_blog_bandcamp_profile',
			'behance'       => 'startup_blog_behance_profile',
			'codepen'       => 'startup_blog_codepen_profile',
			'delicious'     => 'startup_blog_delicious_profile',
			'deviantart'    => 'startup_blog_deviantart_profile',
			'digg'          => 'startup_blog_digg_profile',
			'dribbble'      => 'startup_blog_dribbble_profile',
			'etsy'          => 'startup_blog_etsy_profile',
			'flickr'        => 'startup_blog_flickr_profile',
			'foursquare'    => 'startup_blog_foursquare_profile',
			'github'        => 'startup_blog_github_profile',
			'google-wallet' => 'startup_blog_google_wallet_profile',
			'hacker-news'   => 'startup_blog_hacker-news_profile',
			'meetup'        => 'startup_blog_meetup_profile',
			'paypal'        => 'startup_blog_paypal_profile',
			'podcast'       => 'startup_blog_podcast_profile',
			'quora'         => 'startup_blog_quora_profile',
			'qq'            => 'startup_blog_qq_profile',
			'ravelry'       => 'startup_blog_ravelry_profile',
			'reddit'        => 'startup_blog_reddit_profile',
			'rss'           => 'startup_blog_rss_profile',
			'skype'         => 'startup_blog_skype_profile',
			'slack'         => 'startup_blog_slack_profile',
			'slideshare'    => 'startup_blog_slideshare_profile',
			'snapchat'      => 'startup_blog_snapchat_profile',
			'soundcloud'    => 'startup_blog_soundcloud_profile',
			'spotify'       => 'startup_blog_spotify_profile',
			'steam'         => 'startup_blog_steam_profile',
			'stumbleupon'   => 'startup_blog_stumbleupon_profile',
			'telegram'      => 'startup_blog_telegram_profile',
			'tencent-weibo' => 'startup_blog_tencent_weibo_profile',
			'tumblr'        => 'startup_blog_tumblr_profile',
			'twitch'        => 'startup_blog_twitch_profile',
			'vimeo'         => 'startup_blog_vimeo_profile',
			'vine'          => 'startup_blog_vine_profile',
			'vk'            => 'startup_blog_vk_profile',
			'wechat'        => 'startup_blog_wechat_profile',
			'weibo'         => 'startup_blog_weibo_profile',
			'whatsapp'      => 'startup_blog_whatsapp_profile',
			'xing'          => 'startup_blog_xing_profile',
			'yahoo'         => 'startup_blog_yahoo_profile',
			'yelp'          => 'startup_blog_yelp_profile'
		);

		return apply_filters( 'ct_startup_blog_social_array_filter', $social_sites );
	}
}

//----------------------------------------------------------------------------------
// Output social icons based on user's Customizer settings
//----------------------------------------------------------------------------------
if ( ! function_exists( 'ct_startup_blog_social_icons_output' ) ) {
	function ct_startup_blog_social_icons_output( $source = 'header' ) {

		$social_sites = ct_startup_blog_social_array();

		// store the site name and url
		foreach ( $social_sites as $social_site => $profile ) {

			if ( $source == 'header' ) {
				if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
					$active_sites[ $social_site ] = $social_site;
				}
			} elseif ( $source == 'author' ) {
				if ( strlen( get_the_author_meta( $profile ) ) > 0 ) {
					$active_sites[ $profile ] = $social_site;
				}
			}
		}

		if ( ! empty( $active_sites ) ) {

			echo "<ul class='social-media-icons'>";

			foreach ( $active_sites as $key => $active_site ) {

				if ( $active_site == 'email-form' ) {
					$class = 'fa fa-envelope-o';
				} else {
					$class = 'fa fa-' . $active_site;
				}

				echo '<li>';
				if ( $active_site == 'email' ) { ?>
					<a class="email" target="_blank"
					   href="mailto:<?php echo antispambot( is_email( get_theme_mod( $key ) ) ); ?>">
						<i class="fa fa-envelope" title="<?php esc_attr_e( 'email', 'startup-blog' ); ?>"></i>
					</a>
				<?php } elseif ( $active_site == 'skype' ) { ?>
					<a class="<?php echo esc_attr( $active_site ); ?>" target="_blank"
					   href="<?php echo esc_url( get_theme_mod( $key ), array( 'http', 'https', 'skype' ) ); ?>">
						<i class="<?php echo esc_attr( $class ); ?>"
						   title="<?php echo esc_attr( $active_site ); ?>"></i>
					</a>
				<?php } else { ?>
					<a class="<?php echo esc_attr( $active_site ); ?>" target="_blank"
					   href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
						<i class="<?php echo esc_attr( $class ); ?>"
						   title="<?php echo esc_attr( $active_site ); ?>"></i>
					</a>
					<?php
				}
				echo '</li>';
			}
			echo "</ul>";
		}
	}
}