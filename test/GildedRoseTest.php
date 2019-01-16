<?php

require_once __DIR__ . '/../src/GildedRose.php';
require_once __DIR__ . '/../src/ConcertTicketItem.php';
require_once __DIR__ . '/../src/RareItem.php';
require_once __DIR__ . '/../src/LegendaryItem.php';

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

    public function testLegendaryItemSelinAndQualityNotChangeTest()
    {
        $firstItemSellin = 5;
        $firstItemQuality = 80;
        $secondItemSellin = -1;
        $secondItemQuality = 80;

        $items = [
            $firstItem = new LegendaryItem('Sulfuras, Hand of Ragnaros', $firstItemSellin, $firstItemQuality),
            $secondItem = new LegendaryItem('Sulfuras, Hand of Ragnaros', $secondItemSellin, $secondItemQuality)
        ];

        $app = new GildedRose($items);
        $app->updateQualityOfItems();

        $this->assertEquals($firstItemSellin, $firstItem->sell_in);
        $this->assertEquals($firstItemQuality, $firstItem->quality);
        $this->assertEquals($secondItemSellin, $secondItem->sell_in);
        $this->assertEquals($secondItemQuality, $secondItem->quality);
    }
}
