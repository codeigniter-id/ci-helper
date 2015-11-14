Helper CodeIgniter Indonesia
==================

## Daftar Helper

#### domain_helper.php
Fungsi get_domain :
``` php
get_domain($url)
```
- Parameters full URL: `$url`.
- Returns: `domain`.
- Return type: `string`.
- Contoh :
``` php
<?php echo get_domain('http://github.com') ?>
```
Maka akan menghasilkan `github.com`.

#### uri_helper.php
Fungsi setUri :
``` php
setUri($str)
```
- @param string $str
- @return void
- Contoh :
``` php
<?php echo setUri('Lorem ipsum dolor sit amet.') ?>
```
Maka akan menghasilkan `lorem-ipsum-dolor-sit-amet`.

#### base64_helper.php
Fungsi base64ToImage :
``` php
base64ToImage($str, $width, $height)
```
- @param string $str (mandatory)
- @param int $width & $height (optional)
- @return image in tag `<img/>`
- Contoh :
``` php
<?php echo base64ToImage('iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHL.....') ?>
```
Maka akan menghasilkan `<img/>`.

## Install

- Download
    - Bisa download via arsip zip, tarball.
    - Bisa menggunakan git clone.
    - Bisa menggunakan bower.
    - Bisa menggunakan cURL.
    - dan lain sebagainya silakan pilih sesuka kalian.
- Ambil bagian helper yang diinginkan.
- Kemudian load pada `autoload.php` atau atau load secara manual setiap pemanggilan controller yang dimaksud.
- Baru bisa diguanakan

## Kontribusi

- [Panduan berkontribusi di Helper CodeIgniter Indonesia](CONTRIBUTING.md)

## Lisensi

- [MIT Lisensi](LICENSE)
