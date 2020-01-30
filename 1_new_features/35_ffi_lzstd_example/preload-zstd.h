#define FFI_SCOPE "_REMI_ZSTD_"
#define FFI_LIB   "libzstd.so.1"

size_t ZSTD_compress(void* dst, size_t dstCapacity, const void* src, size_t srcSize, int compressionLevel);
size_t ZSTD_decompress(void* dst, size_t dstCapacity, const void* src, size_t compressedSize);
size_t ZSTD_compressBound(size_t srcSize);
unsigned long long ZSTD_decompressBound(const void* src, size_t srcSize);
unsigned ZSTD_isError(size_t code);
