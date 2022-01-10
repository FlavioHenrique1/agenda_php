<?php
#Caminhos absolutos

$dirInt="agenda_php/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");

$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#banco de Dados
define('HOST','localhost');
define('DB','sistema');
define('USER','root');
define('PASS','');

#incluir arquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');


