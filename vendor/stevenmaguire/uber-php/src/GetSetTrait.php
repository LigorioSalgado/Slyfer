<?php namespace Stevenmaguire\Uber;

trait GetSetTrait
{
    public function __call($method, $parameters)
    {
        if ($this->isGetMethod($method)) {
            $property = $this->convertMethodToProperty($method);
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        } elseif ($this->isSetMethod($method)) {
            $property = $this->convertMethodToProperty($method);
            if (property_exists($this, $property)) {
                $this->$property = $parameters[0];
                return $this;
            }
        } // @codeCoverageIgnore

        throw new Exception('Method not implemented');
    }

    public function isGetMethod($method)
    {
        return preg_match("/^get[A-Za-z]+$/", $method);
    }

    public function convertMethodToProperty($method)
    {
        $property = preg_replace("/[g|s]{1}et(.*)/", "$1", $method);
        return strtolower(preg_replace('/(.)(?=[A-Z])/', '$1'.'_', $property));
    }

    public function isSetMethod($method)
    {
        return preg_match("/^set[A-Za-z]+$/", $method);
    }
}
