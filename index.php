<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 16/01/2019
 * Time: 03:11
 */

require_once 'src/GildedRose.php';
require_once 'src/BaseItem.php';
require_once 'src/Item.php';
require_once 'src/RareItem.php';
require_once 'src/LegendaryItem.php';
require_once 'src/ConcertTicketItem.php';
require_once 'src/ConjuredItem.php';

echo "OMGHAI!\n";

$items = [
    new BaseItem('+5 Dexterity Vest', 10, 20),
    new RareItem('Aged Brie', 2, 1),
    new BaseItem('Elixir of the Mongoose', 5, 7),
    new LegendaryItem('Sulfuras, Hand of Ragnaros', 0, 80),
    new LegendaryItem('Sulfuras, Hand of Ragnaros', -1, 80),
    new ConcertTicketItem('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new ConcertTicketItem('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new ConcertTicketItem('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this conjured item does not work properly yet
    new ConjuredItem('Conjured Mana Cake', 3, 6)
];

$app = new GildedRose($items);

$days = 2;
if (count($argv) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------\n");
    echo("name, sellIn, quality\n");
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->updateQualityOfItems();
}
