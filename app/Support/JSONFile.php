<?php

namespace App\Support;

use Illuminate\Support\Collection;
use JsonMachine\Items;
use JsonMachine\JsonDecoder\PassThruDecoder;
use function Psy\debug;

/**
 * @codeCoverageIgnore
 */
class JSONFile
{
    public static function toCollection(...$filenames): Collection
    {
        return self::load(...$filenames);
    }

    public static function toArray(...$filenames): array
    {
        return self::load(...$filenames)->toArray();
    }

    private static function load(...$filenames): Collection
    {
        $data = collect([]);
        foreach ($filenames as $filename) {
            $items = Items::fromFile($filename, ['decoder' => new PassThruDecoder()]);

            foreach ($items as $item) {
                $row = json_decode($item, true);
                $data->push($row);
            }
        }

        return $data;
    }
}
