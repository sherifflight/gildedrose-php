<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 02:07
 */

require_once 'BaseItem.php';

/**
 * Class RareItem
 */
class RareItem extends BaseItem
{
    public function updateItem()
    {
        $this->addSellIn(-1);

        if ($this->isExpiredItem()) {
            $this->addQuality(2);
        } else {
            $this->addQuality(1);
        }
    }
}