<?php
use \Defuse\Crypto\Crypto;
use \Defuse\Crypto\Key;
require "./vendor/autoload.php";
//$key = Key::createNewRandomKey();
//$asciKey = $key->saveToAsciiSafeString();
//echo $asciKey;
$asciKey = "def00000234eb1a8013ab29e18a937e67a6b649f7cbe73fd68f4bb98520fd9db7e3cd620fb4d8d70061e2ad2ae49bb93a5a297eca367443f9db80747078a2bcfef6c0eea";
$key = Key::loadFromAsciiSafeString($asciKey);
/*
$message = 'test';
$cryptText = Crypto::encrypt($message, $key);
*/
?>