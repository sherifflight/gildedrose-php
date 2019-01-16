<?php

require_once __DIR__ . '/../src/GildedRose.php';
require_once __DIR__ . '/../src/ConcertTicketItem.php';
require_once __DIR__ . '/../src/RareItem.php';

class GildedRoseTest extends PHPUnit\Framework\TestCase {

    public function testQualityNeverMoreThan50Test()
    {
        $items = [
            $firstItem = new RareItem('RareItem', 0, 50),
            $secondItem = new ConcertTicketItem('TicketItem', 5, 50)
        ];

        $app = new GildedRose($items);
        $app->updateQualityOfItems();

        $this->assertEquals(50, $firstItem->quality);
        $this->assertEquals(50, $secondItem->quality);
    }


}
