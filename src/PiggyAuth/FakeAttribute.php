<?php

//Credits to @thebigsmileXD
namespace PiggyAuth;
use pocketmine\entity\Attribute;

/**
 * Class FakeAttribute
 * @package PiggyAuth
 */
class FakeAttribute extends Attribute
{
    public $min, $max, $value, $name;

    /**
     * FakeAttribute constructor.
     * @param $min
     * @param $max
     * @param $value
     * @param $name
     */
    public function __construct($min, $max, $value, $name)
    {
        $this->min = $min;
        $this->max = $max;
        $this->value = $value;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMinValue(): float
    {
        return $this->min;
    }

    /**
     * @return mixed
     */
    public function getMaxValue(): float
    {
        return $this->max;
    }

    /**
     * @return mixed
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue(): float
    {
        return $this->min;
    }

}
