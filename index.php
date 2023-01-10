<?php
// Include the class file
require 'Encryption.php';

// Set a secret key
const KEY = 'secretkey';

// Message string to encode
$message = 'Hello world';

// Encrypt message
$encoded_text = Encryption::Encode($message, KEY);
//@return d1pXc2dsYVBqQ0NrSkJ1Zy85RWprUT09

// Decrypt message
$decoded_text = Encryption::Decode($encoded_text, KEY);
//@return Hello world
