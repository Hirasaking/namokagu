<?php
/**
 * Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options        = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
                
		<div id="secondary" class="widget-area" role="complementary">
                    
                    <h2 style="font-size:120%;">家具職人たちのプロフィール</h2>
                    <?php $user_info = get_userdata( 2 ); ?>
                    <h3 style="font-size:150%; padding:0.2em; border-left: 5px solid #ccc; border-bottom: 2px dotted #ccc;"><?php echo $user_info->nickname; ?></h3>
                    <p style="padding:0.5em;"><?php echo $user_info->description; ?></p>

                    <?php $user_info = get_userdata( 3 ); ?>
                    <h3 style="font-size:150%; padding:0.2em; border-left: 5px solid #ccc; border-bottom: 2px dotted #ccc;"><?php echo $user_info->nickname; ?></h3>
                    <p style="padding:0.5em;"><?php echo $user_info->description; ?></p>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
