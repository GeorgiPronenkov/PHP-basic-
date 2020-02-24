<?php
/**
 * Created by PhpStorm.
 * User: Mihail
 * Date: 10/29/2018
 * Time: 15:38
 */

namespace Core;


class DataBinder implements DataBinderInterface
{


    /**
     * @param array $from
     * @param $className
     * @return mixed
     * @throws \ReflectionException
     */
    public function bind(array $from, $className)
    {
        $classInfo = new \ReflectionClass($className);

        $object = new $className;
        foreach ($from as $key => $value){
            if($classInfo->hasProperty($key)){
                $property = $classInfo->getProperty($key);
                $property->setAccessible(true);
                $property->setValue($object, $value);
            }
        }

        return $object;
    }
}