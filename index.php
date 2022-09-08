<?php

# Decode data
$key        = "vhj39s1321fmmberi9ph651u23ske4x7"; // 32 bytes
$iv         = "69gr0jn5iah702z2"; // 16 bytes
$value      = base64_decode("tX3vMGrgQPU/YisfXF3Ozg==");
$decrypted  = openssl_decrypt($value, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

// Output: 1196193