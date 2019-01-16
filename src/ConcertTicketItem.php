<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 02:06
 */

require_once 'BaseItem.php';

/**
 * Class ConcertTicketItem
 */
class ConcertTicketItem extends BaseItem
{
    public function updateItem()
    {
        $this->addSellIn(-1);

        switch (true) {
            case $this->isExpiredItem():
                $this->quality = 0;
                break;
            case $this->sell_in <= 5:
                $this->addQuality(3);
                break;
            case $this->sell_in <= 10:
                $this->addQuality(2);
                break;
            default:
                $this->addQuality(1);
        }
    }
}