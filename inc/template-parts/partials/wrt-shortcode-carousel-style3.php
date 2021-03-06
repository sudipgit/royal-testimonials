<?php 
/**
*   Called in template wrt-shortcode-carousel.php
*   Carousel style3
*  
*/
?>  
<?php foreach($testimonials as $testimonial){?>
	<div class="item wrt-carousel-style3">
		<div class="wrt-body">			
			<?php if ($wrt_setting_options['wrt_carousel_hide_title']=='no'){ ?>
			<div class="wrt-title">
				<h3><?php _e($testimonial->post_title, 'royal-testimonials');?></h3>
			</div>
			 <?php } ?>
			<div class="wrt-desc">
				<?php _e($testimonial->post_content, 'royal-testimonials');?>
			</div>	
			<?php if ($wrt_setting_options['wrt_carousel_hide_rating']=='no'){ 
			 $rating= get_post_meta( $testimonial->ID, 'wrt_client_rating',true);
			?>
			<div class="wrt-rating">
			<?php for($i=1;$i<=5;$i++){ ?>
				<span class="fa fa-star <?php if($i<=$rating) echo 'checked';?>"></span>
			<?php } ?>
			</div>
			<?php } ?>
			<div class="wrt-author-title">
				<?php if ($wrt_setting_options['wrt_carousel_hide_photo']=='no'){ ?>
				<div class="wrt-img">
				<?php		
					if(has_post_thumbnail($testimonial->ID))
				{
				?>			
				<img src="<?php echo get_the_post_thumbnail_url($testimonial->ID,'thumbnail');?>"/>
				<?php } else{ ?>
					<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/assets/images/images.jpg';?>" /> 
				<?php } ?>
				</div>		
				<?php } ?>
				<div class="wrt-author-info">
					<?php if ($wrt_setting_options['wrt_carousel_hide_name']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_full_name',true)){ ?>
					<div class="wrt-name">
						<h4><?php _e(get_post_meta( $testimonial->ID, 'wrt_client_full_name',true), 'royal-testimonials');?></h4>
					</div>
					<?php } ?>
					<div class="wrt-author-contact">
						  <?php if ($wrt_setting_options['wrt_carousel_hide_company']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_company',true)){ ?>
							<p class="wrt_company">
							<?php _e(get_post_meta( $testimonial->ID, 'wrt_client_company',true), 'royal-testimonials');?>
							</p>
						  <?php } ?>
							<?php if($wrt_setting_options['wrt_carousel_hide_company']=='no' && $wrt_setting_options['wrt_carousel_hide_website']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_website',true) && get_post_meta( $testimonial->ID, 'wrt_client_company',true)){									
								_e("<span class='wrt-separator'>&#124;</span>", 'royal-testimonials');
							}		
							?>
						   <?php if ($wrt_setting_options['wrt_carousel_hide_website']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_website',true)){ ?>
							<p class="wrt_website">
							<a href="<?php echo esc_url(get_post_meta( $testimonial->ID, 'wrt_client_website',true));?>" target="_blank"><?php echo get_post_meta( $testimonial->ID, 'wrt_client_website',true);?></a>
							</p>
						  <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>	
