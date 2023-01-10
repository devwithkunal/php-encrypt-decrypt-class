# PHP Encrypt/Decrypt Class
Simple, easy-to-use and effective PHP Encryption class.
It's a standalone single file PHP class to use on your projects. It requires no dependencies or no framework.

## How To Use
You only need only one file:

 - `Encryption.php`

You can run everything from the index.php file, see the file for usage.

### Step 1 - Initialize
```php
// Include the class file
require 'Encryption.php';

// Set a secret key
const KEY = 'secretkey';

// Message string to encode
$message = 'Hello world';
```

### Step 2 - Encrypt
```php
$encoded_text = Encryption::Encode($message, KEY);
//@return d1pXc2dsYVBqQ0NrSkJ1Zy85RWprUT09
```

### Step 3 - Decrypt
```php
$decoded_text = Encryption::Decode($encoded_text, KEY);
//@return Hello world
```

## More
- This code uses `openssl` for encrypt & decrypt data. See [PHP Manual](https://www.php.net/manual/en/book.openssl.php) for more information.
- Default encryption method is `AES-256-CBC`. You can change it on `Encryption.php` file at line `14` & `29`. Or you can enter it as thrid parameter on both static mathods.

## LICENSE
[MIT License](LICENSE)



