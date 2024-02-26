<?php 
class Businesso_User_Basic_Settings_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function create_default($id)
	{
		$data = [
			'favicon' 		=> '64b21ddeeebea.jpg',
			'breadcrumb'				=> '',
			'logo'				=> '60fe92120fba7.png',
			'preloader'		=> '60fe92123486dc.jpg',
			'base_color'	=> '4C3EC7',
			'theme'				=> 'home_one',
			'email'				=> '',
			'from_name'=> '',
			'is_quote'		=> 1,
			'user_id'			=> $id,
			'qr_image'				=> '',
			'qr_color'		=> '000000',
			'qr_size'			=> 0,
			'qr_style'		=> 'square',
			'qr_eye_style'=> 'square',
			'qr_margin'		=> 0,
			'qr_text'				=> '',
			'qr_text_color'=> '000000',
			'qr_text_size'	=> 15,
			'qr_text_x'			=> 50,
			'qr_text_y'			=> 50,
			'qr_inserted_image'				=> '',
			'qr_inserted_image_size' => 20,
			'qr_inserted_image_x'	=> 50,
			'qr_inserted_image_y'	=> 50,
			'qr_type'							=> 'default',
			'qr_url'				=> '',
			'created_at'					=> date("Y-m-d H:i:s"),
			'updated_at'					=> date("Y-m-d H:i:s"),
			'whatsapp_status'			=> 0,
			'whatsapp_number'				=> '',
			'whatsapp_header_title'				=> '',
			'whatsapp_popup_status'				=> '',
			'whatsapp_popup_message'				=> '',
			'disqus_status'				=> '',
			'disqus_short_name'				=> '',
			'analytics_status'				=> '',
			'measurement_id'				=> '',
			'pixel_status'				=> '',
			'pixel_id'				=> '',
			'tawkto_status'				=> '',
			'tawkto_direct_chat_link'				=> '',
			'custom_css'				=> '',
			'website_title'				=> '',
			'base_currency_symbol'				=> '',
			'base_currency_symbol_position'				=> '',
			'base_currency_text'		=> 'USD',
			'base_currency_rate'				=> '',
			'base_currency_text_position'				=> '',
			'secondary_color'				=> '',
			'is_recaptcha'				=> '',
			'google_recaptcha_site_key'				=> '',
			'google_recaptcha_secret_key'				=> '',
			'adsense_publisher_id'				=> '',
			'timezone'				=> 1,
			'features_section_image'				=> '',
			'cv'				=> '',
			'cv_original'				=> ''
		];
		if($this->db->insert('businesso_user_basic_settings', $data))
			return true;
		return false;
	}
}		