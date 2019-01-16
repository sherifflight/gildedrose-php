<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 01:11
 */

/**
 * Class GildedRose
 */
class GildedRose
{
    private $items;

    /**
     * GildedRose constructor.
     * @param $items
     */
    function __construct($items) {
        $this->items = $items;
    }

    /**
     * update array of items
     */
    function updateQualityOfItems() {
        /** @var BaseItem $item */
        foreach ($this->items as $item) {
            $item->updateItem();
        }
    }
}