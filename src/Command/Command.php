<?php

namespace Tomaj\Evostream\Command;

abstract class Command
{
    abstract public function valid();

    abstract public function name();

    public function getParams()
    {
        $classParams = get_class_vars(get_class($this));
        $outputParams = array();
        foreach (array_keys($classParams) as $name) {
            if (isset($this->$name)) {
                $outputParams[$name] = $this->$name;
            }
        }
        return $outputParams;
    }

    public function getEncodedParams()
    {
        $result = array();
        foreach ($this->getParams() as $key => $value) {
            $result[] = "$key=$value";
        }
        return base64_encode(implode(' ', $result));
    }

    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) == 'set' && strlen($name) > 3) {
            $fieldName = $this->fieldName($name);

            if (!isset($arguments[0])) {
                throw new CommandException("There is no field '$name' in this command config");
            }

            $this->$fieldName = $arguments[0];
            return $this;
        }
        if (substr($name, 0, 3) == 'get' && strlen($name) > 3) {
            $fieldName = $this->fieldName($name);
            return $this->$fieldName;
        }

        throw new CommandException("You are trying to set unknown property '$name' to command config");
    }

    private function fieldName($name)
    {
        $fieldName = substr($name, 3);
        $fieldName[0] = strtolower($fieldName[0]);
        return $fieldName;
    }
}
