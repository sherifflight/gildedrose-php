<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 02:10
 */

require_once 'Item.php';

/**
 * Class BaseItem
 */
class BaseItem extends Item
{
    const MIN_QUALITY = 0;
    const MAX_QUALITY = 50;

    /**
     * @return bool
     */
    public function isExpiredItem()
    {
        return $this->sell_in < 0;
    }

    /**
     * Update sellIn and quality of item
     */
    public function updateItem()
    {
        $this->addSellIn(-1);

        if ($this->isExpiredItem()) {
            $this->addQuality(-2);
        } else {
            $this->addQuality(-1);
        }
    }

    /**
     * @param int $sellIn
     */
    public function addSellIn($sellIn = 1)
    {
        $this->sell_in = $this->sell_in + $sellIn;
    }

    /**
     * @param int $quality
     */
    public function addQuality($quality = 1)
    {
        $this->quality = $this->quality + $quality;
        $this->quality = min($this->quality, self::MAX_QUALITY);
        $this->quality = max($this->quality, self::MIN_QUALITY);
    }
}