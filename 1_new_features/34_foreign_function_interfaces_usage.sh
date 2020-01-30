# Most simple usage

$ php 34_foreign_function_interfaces.php

# With preloading the wrapper

$ php -d opcache.preload=35_ffi_lzstd_example/preload-zstd.inc 34_foreign_function_interfaces.php

# With preloading the wrapper and the native C library

$ php d ffi.preload=35_ffi_lzstd_example/preload-zstd.h \
      -d opcache.preload=35_ffi_lzstd_example/preload-zstd.inc \
      34_foreign_function_interfaces.php
