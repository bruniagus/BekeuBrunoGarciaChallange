<?php


namespace Core\Shared\Infrastructure;


use ReflectionClass;


abstract class Mapper
{
    public static function map($data)
    {
        $data = (array)$data; # tmp fix here not cool
        $class = (new ReflectionClass(static::getClassToMap()))->newInstanceWithoutConstructor();
        $reflection = new ReflectionClass((static::getClassToMap()));
        foreach ($reflection->getProperties() as $property) {
            $property->setAccessible(true);
            $index = static::mapping()[$property->getName()] ? static::mapping()[$property->getName()] : $property->getName();
            $newValue = 0;
            if ($property->getType()->isBuiltin()) {
                $newValue = $data[$index];
            } else {
                $newValue = (new ReflectionClass($property->getType()->getName()))->newInstanceWithoutConstructor();
                $newReflectedValue = (new ReflectionClass($property->getType()->getName()))->getProperties()[0]; # not cool
                $newReflectedValue->setAccessible(true);
                $newReflectedValue->setValue($newValue, $data[$index]);
                $newReflectedValue->setAccessible(false);
            };
            $property->setValue($class, $newValue);
            $property->setAccessible(false);
        }
        return $class;
    }

    abstract protected static function getClassToMap();

    abstract protected static function mapping(): ?array;
}
