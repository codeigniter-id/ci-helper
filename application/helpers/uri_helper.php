<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package		Helper CodeIgniter Indonesia
 * @author		codeigniter-id (http://codeigniter-id.github.io)
 * @license		MIT
 */

if ( ! function_exists('beautyURI'))
{
	function beautyURI($str)
	{
		$character = array('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');
		$remove_char_strange = strtolower(str_replace($character, '', $str));
		$end_link = strtolower(str_replace(' ', '-', $remove_char_strange));
		return $end_link;
	}
}