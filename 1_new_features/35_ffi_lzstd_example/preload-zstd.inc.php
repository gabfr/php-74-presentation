<?php

namespace Remi;

class Zstd {
    static private $ffi = null;

    private static function init() {
        if (self::$ffi) {
            return;
        }
        // Try if preloaded
        try {
            self::$ffi = \FFI::scope("_REMI_ZSTD_");
            echo "Using FFI::scope OK\n";
        } catch (\FFI\Exception $e) {
            // Try direct load
            self::$ffi = \FFI::load(__DIR__ . '/preload-zstd.h');
            echo "Using FFI::load OK\n";
        }
        if (!self::$ffi) {
            throw new \RuntimeException("FFI parse fails");
        }
    }

    public static function compress(string $src): string {
        self::init();

        $len = strlen($src);
        $max = self::$ffi->ZSTD_compressBound($len);

        $comp = str_repeat(' ', $max);
        $clen = self::$ffi->ZSTD_compress($comp, $max, $src, $len, 6);
        if (self::$ffi->ZSTD_isError($clen)) {
            throw new \RuntimeException("Compression fails");
        }

        return substr($comp, 0, $clen);
    }

    public static function decompress(string $comp): string {
        self::init();

        $clen = strlen($comp);
        $max = self::$ffi->ZSTD_decompressBound($comp, $clen);

        $unco = str_repeat(' ', $max);
        $ulen = self::$ffi->ZSTD_decompress($unco, $max, $comp, $clen);
        if (self::$ffi->ZSTD_isError($clen)) {
            throw new \RuntimeException("Decompression fails");
        }

        return substr($unco, 0, $ulen);
    }
}
