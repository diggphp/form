<?php

declare(strict_types=1);

namespace DiggPHP\Form\Field;

use DiggPHP\Form\Builder;
use DiggPHP\Form\ItemInterface;
use ReflectionClass;

abstract class Common implements ItemInterface
{
    private $_data = [];

    public function __set($name, $value)
    {
        $this->_data[$name] = $value;
    }

    public function __get($name)
    {
        if ($name == 'id') {
            if (!isset($this->_data['id'])) {
                $this->_data['id'] = 'field_' . uniqid();
            }
        }
        return $this->_data[$name];
    }

    public function set($name, $value): self
    {
        $this->$name = $value;
        return $this;
    }

    public function __toString()
    {
        $ref = new ReflectionClass(get_called_class());
        return '<div id="' . $this->id . '">' . Builder::getTemplate()->renderFromFile(strtolower($ref->getShortName()) . '@form-builder', $this->_data) . '</div>';
    }
}
