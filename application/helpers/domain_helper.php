<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_domain')) {
    function get_domain($url){
        $host = @parse_url($url, PHP_URL_HOST);
        if (!$host)
            $host = $url;
        if (substr($host, 0, 4) == "www.")
            $host = substr($host, 4);
        if (strlen($host) > 50)
            $host = substr($host, 0, 47) . '...';
        return $host;
    }
}