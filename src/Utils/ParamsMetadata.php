<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Utils;

class ParamsMetadata
{
    private function __construct(
        public string $type,
        public string $style,
        public bool $explode,
        public string $name,
        public string $serialization,
        public string $dateTimeFormat,
    ) {
    }

    public static function parse(string $metadata): ?ParamsMetadata
    {
        $prefix = explode(':', $metadata, 2);
        if (count($prefix) !== 2) {
            return null;
        }

        $type = $prefix[0];

        $metadata = removePrefix($metadata, $type.':');

        $style = '';
        $explode = false;
        $name = '';
        $serialization = '';
        $dateTimeFormat = '';

        switch ($type) {
            case 'queryParam':
                $style = 'form';
                $explode = true;
                break;
            case 'header':
                $style = 'simple';
                $explode = false;
                break;
            case 'pathParam':
                $style = 'simple';
                $explode = false;
                break;
        }

        $options = explode(',', $metadata);

        foreach ($options as $opt) {
            $parts = explode('=', $opt);
            if (count($parts) < 1 || count($parts) > 2) { /** @phpstan-ignore-line */
                continue;
            }

            match ($parts[0]) {
                'name' => $name = $parts[1],
                'style' => $style = $parts[1],
                'explode' => $explode = $parts[1] === 'true',
                'serialization' => $serialization = $parts[1],
                'dateTimeFormat' => $dateTimeFormat = $parts[1],
                default => throw new \RuntimeException('Failed to parse options'),
            };
        }

        return new ParamsMetadata(
            type: $type,
            style: $style,
            explode: $explode,
            name: $name,
            serialization: $serialization,
            dateTimeFormat: $dateTimeFormat,
        );
    }
}
