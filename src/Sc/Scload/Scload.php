<?php 
/*
* copyright @ ibrahimshendy..
* created By 4webcoding@gmail.com
*/
namespace Sc\Scload;

class Scload
{
	
	public static function getSounds($key = null , $limit = 0) {
		$limit = ($limit != 0 ? $limit : 50 );
		$api_url = 'http://api.soundcloud.com/tracks.json?client_id=33f65c0e45f566fdfb2eec92e05dffb1&q='.urlencode($key).'&limit='.$limit; 
		//get json data from soundcloud API 3 
		$result = json_decode(file_get_contents($api_url) , true); 

		return $result ;
	}

	public static function getDownload($url) {
		$url = end((explode('/', $url)));
        $link = 'https://api.soundcloud.com/tracks/'.$url.'?client_id=33f65c0e45f566fdfb2eec92e05dffb1';
        //get json dwonload link from soundcloud API 3 
		$dwonload_data_link = json_decode(file_get_contents($link) , true); 

		return $dwonload_data_link ;
    }

}