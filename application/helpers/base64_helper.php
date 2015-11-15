<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * @package     Helper CodeIgniter Indonesia
 * @author      codeigniter-id (http://codeigniter-id.github.io)
 * @license     MIT
 */

if (!function_exists('base64ToImage')) {
    function base64ToImage($base64string = '', $width = '', $height = '')
    {
        $style = "width=\"$width\" height=\"$height\"";
        if (!empty($base64string))
            $imageInfo = getimagesizefromstring(base64_decode($base64string));
            if (!empty($imageInfo))
                $image = "data:{$imageInfo['mime']};base64,".$base64string;
                if ($width != '' || $height != '')
                    return "<img src=\"".$image."\" $style/>";
                return "<img src=\"".$image."\" {$imageInfo[3]}/>";
            return "";
        return "";
    }
}
