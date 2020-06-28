<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//  Encripta el contenido de la variable, enviada como parametro.
function encriptar($valor, $method, $clave, $iv) {
     return openssl_encrypt ($valor, $method, $clave, false, $iv);
 };


//  Desencripta el texto recibido
function desencriptar($valor, $method, $clave, $iv) {
    //  $encrypted_data = base64_decode($valor);
     return openssl_decrypt($valor, $method, $clave, false, $iv);
 };


//  Genera un valor para IV
function getIV($method) {
    return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
};