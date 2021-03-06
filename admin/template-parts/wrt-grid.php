 <?php 
/**
*   Called in template wrt-setting.php
*  Admin grid panel Setting
*  
*/
?> 

<td> 
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_grid_style1.png';?>" /> 
		<input <?php if(!$wrt_setting_options || $wrt_setting_options['wrt_grid_preview_style']=='style1') echo 'checked="checked"';?> type="radio" name="wrt_grid_preview_style" value="style1"/>
	</div>
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_grid_style2.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_preview_style']=='style2') echo 'checked="checked"';?> type="radio" name="wrt_grid_preview_style" value="style2"/>
	</div>
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_grid_style3.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_preview_style']=='style3') echo 'checked="checked"';?> type="radio" name="wrt_grid_preview_style" value="style3"/>
	</div>
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_grid_style4.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_preview_style']=='style4') echo 'checked="checked"';?> type="radio" name="wrt_grid_preview_style" value="style4"/>
	</div>
</td>
<td>
	<span class="shortcode">[wrt_royal_grid]</span>
</td>
<td>
	 <div class="general-settings">
		<h3><?php _e('General settings', 'royal-testimonials' ); ?></h3>
		<div class="wrt-form-fields">
			<label><strong><?php _e('Total Testimoninals:', 'royal-testimonials' ); ?></strong></label>
			<input class="wrt-text" type="number" name="wrt_grid_total" value="<?php if($wrt_setting_options) echo $wrt_setting_options['wrt_grid_total']; else echo '0';?>"/>
			<span class="wrt-des"><?php _e('(-1 or 0 to show all testimonials)', 'royal-testimonials' ); ?>  </span>
		</div>
		<div class="wrt-form-fields">
			<h4><?php _e('Testimoninal Per Row:', 'royal-testimonials' ); ?></h4>
			<span class="wrt-des"><?php _e('(Number of testimonials you want to show per row.)', 'royal-testimonials' ); ?></span>
			<label><strong><?php _e('Desktop:', 'royal-testimonials' ); ?><strong></label>
			<select class="wrt-text" name="wrt_grid_columns_desktop">

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_desktop']==6) echo 'selected="selected"';?> value="6">6</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_desktop']==5) echo 'selected="selected"';?> value="5">5</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_desktop']==4) echo 'selected="selected"';?> value="4">4</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_desktop']==3) echo 'selected="selected"'; else if(!$wrt_setting_options) echo 'selected="selected"';?> value="3">3</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_desktop']==2) echo 'selected="selected"';?> value="2">2</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_desktop']==1) echo 'selected="selected"';?> value="1">1</option>	  

			</select>
			
			<label><strong><?php _e('Tablet:', 'royal-testimonials' ); ?><strong> </label>
			
			<select class="wrt-text" name="wrt_grid_columns_tablet">

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_tablet']==6) echo 'selected="selected"';?> value="6">6</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_tablet']==5) echo 'selected="selected"';?> value="5">5</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_tablet']==4) echo 'selected="selected"';?> value="4">4</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_tablet']==3) echo 'selected="selected"'; ?> value="3">3</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_tablet']==2) echo 'selected="selected"';else if(!$wrt_setting_options) echo 'selected="selected"';?> value="2">2</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_tablet']==1) echo 'selected="selected"';?> value="1">1</option>	  

			</select>

			<label><strong><?php _e('Mobile:', 'royal-testimonials' ); ?><strong> </label>

			<select class="wrt-text" name="wrt_grid_columns_mobile">

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_mobile']==4) echo 'selected="selected"';?> value="4">4</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_mobile']==3) echo 'selected="selected"'; ?> value="3">3</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_mobile']==2) echo 'selected="selected"';?> value="2">2</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_columns_mobile']==1) echo 'selected="selected"';else if(!$wrt_setting_options) echo 'selected="selected"';?> value="1">1</option>

			</select>
		</div>
	</div>

	<div class="display-setting">
		<h3><?php _e('Display Settings', 'royal-testimonials' ); ?></h3>
		<div class="wrt-form-fields">
			<label><strong><?php _e('Hide Client Photo:', 'royal-testimonials' ); ?><strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_hide_photo']=='yes') echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_grid_hide_photo" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e('Hide Client Name:', 'royal-testimonials' ); ?><strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_hide_name']=='yes') echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_grid_hide_name" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong><?php _e('Hide Title:', 'royal-testimonials' ); ?><strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_hide_title']=='yes') echo 'checked="checked"'; else if(!$wrt_setting_options) echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_grid_hide_title" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong><?php _e('Hide Rating:', 'royal-testimonials' ); ?><strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_hide_rating']=='yes') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_grid_hide_rating" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e('Hide Company Name:', 'royal-testimonials' ); ?><strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_hide_company']=='yes') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_grid_hide_company" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e('Hide Website:', 'royal-testimonials' ); ?><strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_grid_hide_website']=='yes') echo 'checked="checked"';else if(!$wrt_setting_options) echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_grid_hide_website" value="yes"/> 
		</div>
	 </div>	
</td>