<?php

namespace App\Support;

class ChecksumID
{
    public static function make($data): string
    {
        static $map = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $hash = bcadd(sprintf('%u', crc32($data)), 0x100000000);
        $str = '';
        do {
            $str = $map[bcmod($hash, 62)] . $str;
            $hash = bcdiv($hash, 62);
        } while ($hash >= 1);

        return $str;
    }

    public static function check($data, $id): bool
    {
        return self::make($data) === $id;
    }
}
