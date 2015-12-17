<?php 
/*
* copyright @ ibrahimshendy..
* created By 4webcoding@gmail.com
*/
namespace Sc\Scload;

class Scload
{
	// Get Sounds By Keywords..
	public static function getSounds($key = null , $limit = 0 , $client_id = null) {
		// check if client id is empty
		if(empty($client_id)){
			return null;
		}

		$limit = ($limit != 0 ? $limit : 50 );
		$api_url = 'http://api.soundcloud.com/tracks.json?client_id={$client_id}&q='.urlencode($key).'&limit='.$limit; 
		//get json data from soundcloud API 3 
		$result = json_decode(file_get_contents($api_url) , true); 

		return $result ;
	}
	// Get Download Links By sound url
	public static function getDownload($url = null , $client_id) {
		// check if client id is empty
		if(empty($client_id)){
			return null;
		}

		$url = end((explode('/', $url)));
        $link = 'https://api.soundcloud.com/tracks/'.$url.'?client_id={$client_id}';
        //get json dwonload link from soundcloud API 3 
		$dwonload_data_link = json_decode(file_get_contents($link) , true); 

		return $dwonload_data_link ;
    }

}