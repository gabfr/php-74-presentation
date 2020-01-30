<?php declare(strict_types=1);

if (PHP_VERSION_ID < 70400 || !extension_loaded("ffi")) {
    die("PHP 7.4 with FFI required\n");
}
if (PHP_SAPI != "cli") {
    Header('Content-Type: text/plain');
}
printf("PHP version %s\n", PHP_VERSION);

if (PHP_SAPI == "cli" && !class_exists("\\Remi\\Zstd")) {
    printf("Fallback on manual load\n");
    require_once __DIR__ . '/35_ffi_lzstd_example/preload-zstd.inc';
} else {
    printf("Use preloaded class\n");
}
if (class_exists("\\Remi\\Zstd")) {
    $t = microtime(true);

    $src = file_get_contents(PHP_BINARY);
    $comp = \Remi\Zstd::compress($src);
    printf("\nSrc length           = %d\n", \strlen($src));
    printf("ZSTD_compress        = %d\n", \strlen($comp));
    file_put_contents("/tmp/testffi.zstd", $comp);

    $comp = file_get_contents("/tmp/testffi.zstd");
    $out = \Remi\Zstd::decompress($comp);
    printf("Src length           = %d\n", \strlen($comp));
    printf("ZSTD_decompress      = %d\n", \strlen($out));
    file_put_contents("/tmp/testffi.orig", $out);

    printf("Check                = %s\n", $src === $out ? "OK" : "KO");

    $t = microtime(true) - $t;
    printf("Using FFI  extension = %.3f\"\n\n", $t);
} else {
    printf("\\Remi\\Zstd missing\n\n");
}

if (extension_loaded("zstd")) {
    $t = microtime(true);
    $src = file_get_contents(PHP_BINARY);
    $len = strlen($src);
    printf("Src length           = %d\n", $len);

    $comp = zstd_compress($src, 6);
    $clen = strlen($comp);
    printf("ZSTD_compress        = %d\n", $clen);
    $comp = substr($comp, 0, $clen);
    file_put_contents("/tmp/testzstd.zstd", $comp);

    $comp = file_get_contents("/tmp/testzstd.zstd");
    printf("Src length           = %d\n", \strlen($comp));
    $unco = zstd_uncompress($comp);
    $ulen = strlen($unco);
    printf("ZSTD_decompress      = %d\n", $ulen);
    file_put_contents("/tmp/testzstd.orig", $unco);

    printf("Check                = %s\n", $src === $unco ? "OK" : "KO");
    $t = microtime(true) - $t;
    printf("Using ZSTD extension = %.3f\"\n\n", $t);
} else {
    printf("ZSTD missing\n\n");
}

