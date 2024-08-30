<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Utils;

use JMS\Serializer\Type\ParserInterface;
use phpDocumentor\Reflection\Type;

/**
 * Class PhpDocTypeParser
 *
 * This class translates from types in the formats supported byphpDocumentor
 * to the nested array format used by JMS/serializer.
 * 
 */
class PhpDocTypeParser implements ParserInterface
{

    private \phpDocumentor\Reflection\TypeResolver $typeResolver;
    public function __construct()
    {
        $this->typeResolver = new \phpDocumentor\Reflection\TypeResolver();
    }

    /**
     * @param  string  $typeString
     * @return array<string, mixed>
     */
    public function parse(string $typeString): array
    {
        $type = $this->typeResolver->resolve($typeString);

        return $this->convertRecursive($type);
    }

    /**
     * @param  Type  $type
     * @return array<string, mixed>
     */
    public function convertRecursive(Type $type): array
    {
        if (\is_a($type, \phpDocumentor\Reflection\Types\AggregatedType::class)) {
            return [
                'name' => 'union',
                'params' => \array_map(function ($type) {
                    return $this->convertRecursive($type);
                }, iterator_to_array($type->getIterator())),
            ];
        } elseif (\is_a($type, \phpDocumentor\Reflection\Types\Array_::class)) {
            $params = [];
            $keyType = $type->getKeyType();
            if (\is_a($keyType, \phpDocumentor\Reflection\Types\AggregatedType::class)) {
                // The Default key that the phpdoc type system returns for *maps* is string|int, so if we see that, exclude it (which is the JMS/Serializer default).
                if (! ($keyType->getIterator()->count() == 2 && $keyType->contains(new \phpDocumentor\Reflection\Types\String_()) && $keyType->contains(new \phpDocumentor\Reflection\Types\Integer()))) {
                    $params[] = $this->convertRecursive($keyType);
                }
            } else {
                $params[] = $this->convertRecursive($keyType);
            }
            $valueType = $type->getValueType();
            $params[] = $this->convertRecursive($valueType);

            return [
                'name' => 'array',
                'params' => $params,
            ];
        } elseif (\is_a($type, \phpDocumentor\Reflection\Types\Object_::class)) {
            $className = $type->__toString();
            if (class_exists($className)) {
                $objectClass = new \ReflectionClass($className);
                if ($objectClass->isEnum()) {
                    return [
                        'name' => 'enum',
                        'params' => [
                            [
                                'name' => $objectClass->getName(),
                                'params' => [],
                            ],
                        ],
                    ];
                }
            }
        } elseif (\is_a($type, \phpDocumentor\Reflection\Types\Null_::class)) {
            return [
                'name' => 'NULL',
                'params' => [],
            ];
        }


        return [
            'name' => $type->__toString(),
            'params' => [],
        ];
    }
}