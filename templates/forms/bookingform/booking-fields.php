<?php
/* 
 * This file generates the default booking form fields. Events Manager Pro does not use this file.
 */
/* @var $EM_Event EM_Event */ 
//Here we have extra information required for the booking. 
?>
<?php if( !is_user_logged_in() && apply_filters('em_booking_form_show_register_form',true) ): ?>
	<?php //User can book an event without registering, a username will be created for them based on their email and a random password will be created. ?>
	<input type="hidden" name="register_user" value="1" />
	<div class="form-group">
		<label for='user_name'><?php _e('Name','dbem') ?></label>
		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Your full name" value="<?php if(!empty($_REQUEST['user_name'])) echo esc_attr($_REQUEST['user_name']); ?>" />
	</div>
<!--
	<p>
		<label for='dbem_phone'><?php _e('Phone','dbem') ?></label>
		<input type="text" name="dbem_phone" id="dbem_phone" class="input" value="<?php if(!empty($_REQUEST['dbem_phone'])) echo esc_attr($_REQUEST['dbem_phone']); ?>" />
	</p>
-->
	<div class="form-group">
		<label for='user_email'><?php _e('E-mail','dbem') ?></label> 
		<input type="text" name="user_email" id="user_email" class="form-control" placeholder="you@email.com" value="<?php if(!empty($_REQUEST['user_email'])) echo esc_attr($_REQUEST['user_email']); ?>"  />
	</div>
	<?php do_action('em_register_form'); //careful if making an add-on, this will only be used if you're not using custom booking forms ?>					
<?php endif; ?>		
<div class="form-group">
	<label for='booking_comment'><?php _e('Comment', 'dbem') ?></label>
	<textarea name='booking_comment' class="form-control" rows="2" cols="20"><?php echo !empty($_REQUEST['booking_comment']) ? esc_attr($_REQUEST['booking_comment']):'' ?></textarea>
</div>