<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 01:12
 */

/**
 * @property string $name
 * @property int $sell_in
 * @property int $quality
 *
 * Class Item
 */
class Item
{
    public $name;
    public $sell_in;
    public $quality;

    /**
     * Item constructor.
     * @param $name
     * @param $sell_in
     * @param $quality
     */
    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    /**
     * @return string
     */
    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}