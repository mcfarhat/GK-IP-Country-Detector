<?php
/*
  Plugin Name: GK IP Country Detector
  Tags: wordpress, ip, detect, country
  Description: A plugin allowing proper IP detection and mapping it to relevant country relying on either freegeoip or geoplugin, depending which is available
  Version: 1.0.0
  Author: mcfarhat
  Author URI: http://www.greateck.com
  License: GPLv2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

//grab ip and map to country
function gk_map_ip_country(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else if (!empty($_SERVER['REMOTE_ADDR'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
	} else {
		$ip = false;
	}

	// CALL THE WEBSERVICE
	try{
		$ip_info = json_decode(file_get_contents('http://freegeoip.net/json/'.$ip));
		$relevant_country_code = $ip_info->country_code;
	}catch(Exception $e){
		try{
			$ip_info = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
			$relevant_country_code = $ip_info['geoplugin_countryCode'];
		}catch(Exception $e1){
			$relevant_country_code = 'US';
		}
	}

	return $relevant_country_code;
}

?>