<?php

#Arquivos diretórios raizes DIRPAGE é o http://apagina.com.br 
$PastaInterna="";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}{$PastaInterna}");

#Caminho fisico do servidor , requerer uma arquivo e etc ...
// If para as vezes no local host nao tem a / , entao testa uma condição if 
// para verificar se tem a '/'  
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Criar definicoes especificos / Diretorios especificos
//define('DIRIMG', "http://{$_SERVER['HTTP_HOST']}{$PastaInterna}/public/img/");
//define('DIRCSS', "http://{$_SERVER['HTTP_HOST']}{$PastaInterna}/public/css/");
//define('DIRJS', "http://{$_SERVER['HTTP_HOST']}{$PastaInterna}/public/js/");
#Criar definicoes especificos / Diretorios especificos -> FACILITANDO
define('DIRIMG', DIRPAGE."/public/img/");
define('DIRCSS', DIRPAGE."/public/css/");
define('DIRJS', DIRPAGE."/public/js/");


#Acesso ao banco de Dados 
define('HOST', "localhost");
define('DB', "db");
define('USER', "user");
define('PASS', "test");
define('PASS', "test");
