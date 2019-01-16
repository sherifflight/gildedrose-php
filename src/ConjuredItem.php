<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 01:58
 */

require_once 'BaseItem.php';

/**
 * Class ConjuredItem
 */
class ConjuredItem extends BaseItem
{
    public function updateItem()
    {
        $this->addSellIn(-1);

        if ($this->isExpiredItem()) {
            $this->addQuality(-4);
        } else {
            $this->addQuality(-2);
        }
    }
}