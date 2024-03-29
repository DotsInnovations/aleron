<?php
if ( !is_admin() )
{
	print 'Direct access not allowed.';
    exit;
}

$_GET['u'] = (isset($_GET['u'])) ? intval(@$_GET['u']) : 0;
$_GET['c'] = (isset($_GET['c'])) ? intval(@$_GET['c']) : 0;
$_GET['d'] = (isset($_GET['d'])) ? intval(@$_GET['d']) : 0;

global $wpdb;
$message = "";
if (isset($_GET['a']) && $_GET['a'] == '1')
{
	check_admin_referer( 'session_id_'.CP_SESSION::session_id(), '_cpcff_nonce' );
    $wpdb->insert( $wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE, array(
                                      'form_name' => stripcslashes($_GET["name"]),

                                      'form_structure' => CP_CALCULATEDFIELDSF_DEFAULT_form_structure,

                                      'fp_from_email' => CP_CALCULATEDFIELDSF_DEFAULT_fp_from_email,
                                      'fp_destination_emails' => CP_CALCULATEDFIELDSF_DEFAULT_fp_destination_emails,
                                      'fp_subject' => CP_CALCULATEDFIELDSF_DEFAULT_fp_subject,
                                      'fp_inc_additional_info' => CP_CALCULATEDFIELDSF_DEFAULT_fp_inc_additional_info,
                                      'fp_return_page' => CP_CALCULATEDFIELDSF_DEFAULT_fp_return_page,
                                      'fp_message' => CP_CALCULATEDFIELDSF_DEFAULT_fp_message,

                                      'cu_enable_copy_to_user' => CP_CALCULATEDFIELDSF_DEFAULT_cu_enable_copy_to_user,
                                      'cu_user_email_field' => CP_CALCULATEDFIELDSF_DEFAULT_cu_user_email_field,
                                      'cu_subject' => CP_CALCULATEDFIELDSF_DEFAULT_cu_subject,
                                      'cu_message' => CP_CALCULATEDFIELDSF_DEFAULT_cu_message,

                                      'vs_use_validation' => CP_CALCULATEDFIELDSF_DEFAULT_vs_use_validation,
                                      'vs_text_is_required' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_is_required,
                                      'vs_text_is_email' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_is_email,
                                      'vs_text_datemmddyyyy' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_datemmddyyyy,
                                      'vs_text_dateddmmyyyy' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_dateddmmyyyy,
                                      'vs_text_number' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_number,
                                      'vs_text_digits' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_digits,
                                      'vs_text_max' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_max,
                                      'vs_text_min' => CP_CALCULATEDFIELDSF_DEFAULT_vs_text_min,

                                      'enable_paypal' => CP_CALCULATEDFIELDSF_DEFAULT_ENABLE_PAYPAL,
                                      'paypal_email' => CP_CALCULATEDFIELDSF_DEFAULT_PAYPAL_EMAIL,
                                      'request_cost' => CP_CALCULATEDFIELDSF_DEFAULT_COST,
                                      'paypal_product_name' => CP_CALCULATEDFIELDSF_DEFAULT_PRODUCT_NAME,
                                      'currency' => CP_CALCULATEDFIELDSF_DEFAULT_CURRENCY,
                                      'paypal_language' => CP_CALCULATEDFIELDSF_DEFAULT_PAYPAL_LANGUAGE,

                                      'cv_enable_captcha' => CP_CALCULATEDFIELDSF_DEFAULT_cv_enable_captcha,
                                      'cv_width' => CP_CALCULATEDFIELDSF_DEFAULT_cv_width,
                                      'cv_height' => CP_CALCULATEDFIELDSF_DEFAULT_cv_height,
                                      'cv_chars' => CP_CALCULATEDFIELDSF_DEFAULT_cv_chars,
                                      'cv_font' => CP_CALCULATEDFIELDSF_DEFAULT_cv_font,
                                      'cv_min_font_size' => CP_CALCULATEDFIELDSF_DEFAULT_cv_min_font_size,
                                      'cv_max_font_size' => CP_CALCULATEDFIELDSF_DEFAULT_cv_max_font_size,
                                      'cv_noise' => CP_CALCULATEDFIELDSF_DEFAULT_cv_noise,
                                      'cv_noise_length' => CP_CALCULATEDFIELDSF_DEFAULT_cv_noise_length,
                                      'cv_background' => CP_CALCULATEDFIELDSF_DEFAULT_cv_background,
                                      'cv_border' => CP_CALCULATEDFIELDSF_DEFAULT_cv_border,
                                      'cv_text_enter_valid_captcha' => CP_CALCULATEDFIELDSF_DEFAULT_cv_text_enter_valid_captcha
                                     ),
									 array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' )
                      );

    $message = __( "Item added", 'calculated-fields-form' );
}
else if (isset($_GET['u']) && $_GET['u'] != '')
{
	check_admin_referer( 'session_id_'.CP_SESSION::session_id(), '_cpcff_nonce' );
	$wpdb->query( $wpdb->prepare( 'UPDATE `'.$wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE.'` SET form_name=%s WHERE id=%d', $_GET["name"], $_GET['u'] ) );
    $message = __( "Item updated", 'calculated-fields-form' );
}
else if (isset($_GET['d']) && $_GET['d'] != '')
{
	check_admin_referer( 'session_id_'.CP_SESSION::session_id(), '_cpcff_nonce' );
	if($wpdb->query( $wpdb->prepare( 'DELETE FROM `'.$wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE.'` WHERE id=%d', $_GET['d'] ) ))
	{
		do_action( 'cpcff_delete_form', $_GET['d']);
	}
    $message = __( "Item deleted", 'calculated-fields-form' );
} else if (isset($_GET['c']) && $_GET['c'] != '')
{
	check_admin_referer( 'session_id_'.CP_SESSION::session_id(), '_cpcff_nonce' );
    $myrows = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM ".$wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE." WHERE id=%d", $_GET['c'] ), ARRAY_A );
    unset($myrows["id"]);
    $myrows["form_name"] = 'Cloned: '.$myrows["form_name"];
    $wpdb->insert( $wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE, $myrows);
    $message = __( "Item duplicated/cloned", 'calculated-fields-form' );
} else if (isset($_GET['ac']) && $_GET['ac'] == 'st')
{
	check_admin_referer( 'session_id_'.CP_SESSION::session_id(), '_cpcff_nonce' );
    update_option( 'CP_CFF_LOAD_SCRIPTS', 			  		(isset($_GET["scr"]) && $_GET["scr"]=="1"? "0":"1")  );
    update_option( 'CP_CALCULATEDFIELDSF_USE_CACHE',  		(isset($_GET["jsc"]) && $_GET["jsc"]=="1" ? 1 : 0)  );
    update_option( 'CP_CALCULATEDFIELDSF_EXCLUDE_CRAWLERS', (isset($_GET["ecr"]) && $_GET["ecr"]=="1" ? 1 : 0)  );

	if( get_option( 'CP_CALCULATEDFIELDSF_USE_CACHE', CP_CALCULATEDFIELDSF_USE_CACHE ) == false )
	{
		try{
			$public_js_path = CP_CALCULATEDFIELDSF_BASE_PATH.'/js/cache/all.js';
			if( file_exists( $public_js_path ) )
			{
				unlink( $public_js_path );
			}
		}catch( Exception $err ){}
	}

    if ($_GET["chs"] != '')
    {
        $target_charset = $_GET["chs"];
		if( !in_array($target_charset, array('utf8_general_ci', 'utf8mb4_general_ci', 'latin1_swedish_ci')) ) $target_charset = 'utf8_general_ci';

        $tables = array( $wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE, $wpdb->prefix.CP_CALCULATEDFIELDSF_POSTS_TABLE_NAME_NO_PREFIX );
        foreach ($tables as $tab)
        {
            $myrows = $wpdb->get_results( "DESCRIBE {$tab}" );
            foreach ($myrows as $item)
	        {
	            $name = $item->Field;
		        $type = $item->Type;
		        if (preg_match("/^varchar\((\d+)\)$/i", $type, $mat) || !strcasecmp($type, "CHAR") || !strcasecmp($type, "TEXT") || !strcasecmp($type, "MEDIUMTEXT"))
		        {
	                $wpdb->query("ALTER TABLE {$tab} CHANGE {$name} {$name} {$type} COLLATE {$target_charset}");
	            }
	        }
        }
    }
    $message = __( "Troubleshoot settings updated", 'calculated-fields-form' );
}


if ($message) echo "<div id='setting-error-settings_updated' class='updated settings-error'><p><strong>".$message."</strong></p></div>";

?>
<div class="wrap">
<h1><?php _e( 'Calculated Fields Form', 'calculated-fields-form' ); ?></h1>

<script type="text/javascript">
 function cp_addItem()
 {
    var calname = document.getElementById("cp_itemname").value;
    document.location = 'admin.php?page=cp_calculated_fields_form&a=1&r='+Math.random()+'&name='+encodeURIComponent(calname)+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
 }

 function cp_addItem_keyup( e )
 {
    e.which = e.which || e.keyCode;
    if(e.which == 13) {
        var calname = document.getElementById("cp_itemname").value;
        document.location = 'admin.php?page=cp_calculated_fields_form&a=1&r='+Math.random()+'&name='+encodeURIComponent(calname)+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
    }
 }

 function cp_updateItem(id)
 {
    var calname = document.getElementById("calname_"+id).value;
    document.location = 'admin.php?page=cp_calculated_fields_form&u='+id+'&r='+Math.random()+'&name='+encodeURIComponent(calname)+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
 }

 function cp_cloneItem(id)
 {
    document.location = 'admin.php?page=cp_calculated_fields_form&c='+id+'&r='+Math.random()+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
 }

 function cp_manageSettings(id)
 {
    document.location = 'admin.php?page=cp_calculated_fields_form&cal='+id+'&r='+Math.random()+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
 }

 function cp_viewMessages(id)
 {
    alert('Not available in this version. Check other versions at: '+"\n\n"+'http://wordpress.dwbooster.com');
 }

 function cp_BookingsList(id)
 {
    document.location = 'admin.php?page=cp_calculated_fields_form&cal='+id+'&list=1&r='+Math.random();
 }

 function cp_deleteItem(id)
 {
    if (confirm('<?php _e( 'Are you sure that you want to delete this item?', 'calculated-fields-form' ); ?>'))
    {
        document.location = 'admin.php?page=cp_calculated_fields_form&d='+id+'&r='+Math.random()+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
    }
 }

 function cp_updateConfig()
 {
    if (confirm('<?php _e( 'Are you sure that you want to update these settings?', 'calculated-fields-form' ); ?>'))
    {
        var scr = document.getElementById("ccscriptload").value,
			chs = document.getElementById("cccharsets").value,
			jsc = (document.getElementById("ccjscache").checked) ? 1 : 0,
			ecr = (document.getElementById("ccexcludecrawler").checked) ? 1 : 0;

        document.location = 'admin.php?page=cp_calculated_fields_form&ecr='+ecr+'&ac=st&scr='+scr+'&chs='+chs+'&jsc='+jsc+'&r='+Math.random()+'&_cpcff_nonce=<?php echo wp_create_nonce( 'session_id_'.CP_SESSION::session_id() ); ?>';
    }
 }
</script>
<div id="normal-sortables" class="meta-box-sortables">
 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span><?php _e( 'Form List / Items List', 'calculated-fields-form' ); ?></span></h3>
  <div class="inside">
  <table cellspacing="10" class="cff-custom-table cff-forms-list">
	<thead>
	   <tr>
		<th align="left"><?php _e( 'ID', 'calculated-fields-form' ); ?></th><th align="left"><?php _e( 'Form Name', 'calculated-fields-form' ); ?></th><th align="center"><?php _e( 'Options', 'calculated-fields-form' ); ?></th><th align="left"><?php _e( 'Shortcode', 'calculated-fields-form' ); ?></th>
	   </tr>
	</thead>
	<tbody>
<?php
  $myrows = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix.CP_CALCULATEDFIELDSF_FORMS_TABLE );
  foreach ($myrows as $item)
  {
?>
   <tr>
    <td nowrap><?php echo $item->id; ?></td>
    <td nowrap><input type="text" name="calname_<?php echo $item->id; ?>" id="calname_<?php echo $item->id; ?>" value="<?php echo esc_attr($item->form_name); ?>" /></td>

    <td nowrap>
		<input type="button" name="calupdate_<?php echo $item->id; ?>" value="<?php esc_attr_e( 'Update', 'calculated-fields-form' ); ?>" onclick="cp_updateItem(<?php echo $item->id; ?>);" />
		<input type="button" name="calmanage_<?php echo $item->id; ?>" value="<?php esc_attr_e( 'Settings', 'calculated-fields-form' ); ?>" onclick="cp_manageSettings(<?php echo $item->id; ?>);" />
		<input type="button" name="calmanage_<?php echo $item->id; ?>" value="<?php esc_attr_e( 'Messages', 'calculated-fields-form' ); ?>" onclick="cp_viewMessages(<?php echo $item->id; ?>);" />
		<input type="button" name="calclone_<?php echo $item->id; ?>" value="<?php esc_attr_e( 'Clone', 'calculated-fields-form' ); ?>" onclick="cp_cloneItem(<?php echo $item->id; ?>);" />
		<input type="button" name="caldelete_<?php echo $item->id; ?>" value="<?php esc_attr_e( 'Delete', 'calculated-fields-form' ); ?>" onclick="cp_deleteItem(<?php echo $item->id; ?>);" />
    </td>
    <td nowrap>[CP_CALCULATED_FIELDS id="<?php echo $item->id; ?>"]</td>
   </tr>
<?php
   }
?>
	</tbody>
  </table>
  </div>
 </div>

 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span><?php _e( 'New Form', 'calculated-fields-form' ); ?></span></h3>
  <div class="inside">

    <form name="additem">
      <?php _e( 'Item Name', 'calculated-fields-form' ); ?>:<br />
      <input type="text" name="cp_itemname" id="cp_itemname"  value="" onkeyup="cp_addItem_keyup( event );" /> <input type="button" onclick="cp_addItem();" name="gobtn" value="<?php esc_attr_e( 'Add', 'calculated-fields-form' ); ?>" />
      <br /><br />
    </form>
  </div>
 </div>

 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span><?php _e( 'Troubleshoot Area & General Settings', 'calculated-fields-form' ); ?></span></h3>
  <div class="inside">
    <form name="updatesettings">
		<div style="border:1px solid #DADADA; padding:10px;">
			<p><?php _e( '<strong>Important!</strong>: Use this area <strong>only</strong> if you are experiencing conflicts with third party plugins, with the theme scripts or with the character encoding.', 'calculated-fields-form' ); ?></p>
			<?php _e( 'Script load method', 'calculated-fields-form' ); ?>:<br />
			<select id="ccscriptload" name="ccscriptload">
			<option value="0" <?php if (get_option('CP_CFF_LOAD_SCRIPTS',"0") == "1") echo 'selected'; ?>><?php _e( 'Classic (Recommended)', 'calculated-fields-form' ); ?></option>
			<option value="1" <?php if (get_option('CP_CFF_LOAD_SCRIPTS',"0") != "1") echo 'selected'; ?>><?php _e( 'Direct', 'calculated-fields-form' ); ?></option>
			</select><br />
			<em><?php _e( '* Change the script load method if the form doesn\'t appear in the public website.', 'calculated-fields-form' ); ?></em>
			<br /><br />
			<?php _e( 'Character encoding', 'calculated-fields-form' ); ?>:<br />
			<select id="cccharsets" name="cccharsets">
			<option value=""><?php _e( 'Keep current charset (Recommended)', 'calculated-fields-form' ); ?></option>
			<option value="utf8_general_ci">UTF-8 (<?php _e( 'try this first', 'calculated-fields-form' ); ?>)</option>
			<option value="utf8mb4_general_ci">UTF-8mb4 (<?php _e( 'Only from MySQL 5.5', 'calculated-fields-form' ); ?>)</option>
			<option value="latin1_swedish_ci">latin1_swedish_ci</option>
			</select><br />
			<em><?php _e( '* Update the charset if you are getting problems displaying special/non-latin characters. After updated you need to edit the special characters again.', 'calculated-fields-form' ); ?></em>
		</div>
		<br />
	   <?php _e( 'Activate Javascript Cache', 'calculated-fields-form' ); ?>: <input type="checkbox" name="ccjscache" id="ccjscache" <?php echo ( get_option( 'CP_CALCULATEDFIELDSF_USE_CACHE', CP_CALCULATEDFIELDSF_USE_CACHE ) ) ? 'CHECKED' : ''; ?> />
       <br /><br />
       <?php _e( 'Do not load the forms with crawlers', 'calculated-fields-form' ); ?>: <input type="checkbox" name="ccexcludecrawler" id="ccexcludecrawler" <?php echo ( get_option( 'CP_CALCULATEDFIELDSF_EXCLUDE_CRAWLERS', false ) ) ? 'CHECKED' : ''; ?> /><br /><i><?php _e( '* The forms are not loaded when website is being indexed by searchers.', 'calculated-fields-form' ); ?></i>
       <br /><br />
       <input type="button" onclick="cp_updateConfig();" name="gobtn" value="<?php esc_attr_e( 'UPDATE', 'calculated-fields-form' ); ?>" />
       <br />
    </form>

  </div>
 </div>
</div>
[<a href="http://cff.dwbooster.com/customization" target="_blank"><?php _e( 'Request Custom Modifications', 'calculated-fields-form' ); ?></a>] | [<a href="http://cff.dwbooster.com/download" target="_blank"><?php _e( 'Upgrade', 'calculated-fields-form' ); ?></a>] | [<a href="https://wordpress.org/support/plugin/calculated-fields-form#new-post" target="_blank"><?php _e( 'Help', 'calculated-fields-form' ); ?></a>]
</form>
</div>