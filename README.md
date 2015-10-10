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
Fungsi beautyURI :
``` php
beautyURI($str)
```
- @param string $str
- @return void
- Contoh :
``` php 
<?php echo beautyURI('Lorem ipsum dolor sit amet.') ?>
```
Maka akan menghasilkan `lorem-ipsum-dolor-sit-amet`.

## Install
- Download arsip repository ini.
- Ambil bagian helper yang diinginkan.
- Kemudian load pada `autload.php` atau kostum setiap pemanggilan controller yang dimaksud.
- Beru bisa diguanakan

## Kontribusi
- [Bagaimana cara berkontribusi Helper CodeIgniter?](blob/master/CONTRIBUTING.md)