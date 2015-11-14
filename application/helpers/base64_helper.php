<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * @package     Helper CodeIgniter Indonesia
 * @author      codeigniter-id (http://codeigniter-id.github.io)
 * @license     MIT
 */

if (!function_exists('blobToImage')) {
    function blobToImage($blob = '', $width = '', $height = '')
    {
        $style = "width=\"$width\" height=\"$height\"";
        if (!empty($blob))
            $imageInfo = getimagesizefromstring(base64_decode($blob));
            if (!empty($imageInfo))
                $image = "data:{$imageInfo['mime']};base64,".$blob;
                if ($width != '' || $height != '')
                    return "<img src=\"".$image."\" $style/>";
                return "<img src=\"".$image."\" {$imageInfo[3]}/>";
            return "";
        return "";
    }
}
