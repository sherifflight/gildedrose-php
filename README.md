# gildedrose-php
emilybache/GildedRose-Refactoring-Kata - https://github.com/emilybache/GildedRose-Refactoring-Kata

php 7.3

- composer install
- phpunit

======================================
Технические требования «Gilded Rose»
======================================

Привет и добро пожаловать в команду «Gilded Rose». Как вы знаете, мы небольшая гостиница удобно расположенная
в известном городе под руководством дружественного управляющего по имени Эллисон. Также мы занимаемся покупкой
и продажей только самых лучших товаров. К несчастью, качество наших товаров постоянно ухудшается по мере приближения
к максимальному сроку хранения. Существует информационная система, которая ведет переучет всех товаров. Система
была разработана рубаха-парнем, по имени Leeroy, который отправился за поисками новых приключений. Ваша задача
заключается в том, чтобы добавить новый функционал в нашу систему, чтобы мы могли начать продавать новую категорию
товаров.

В общих чертах система работает следующим образом:

	- Все товары имеют свойство «sellIn» (срок хранения), которое обозначает количество
	дней в течение которых мы должны продать товар;
	- Все товары имеют свойство «Quality» (качество), которое обозначает насколько качественным является товар;
	- В конце дня наша система снижает значение обоих свойств для каждого товара.

Довольно просто, не правда ли? Тут-то и начинается самое интересное:

	- После того, как срок храния прошел, качество товара ухудшается в два раза быстрее;
	- Качество товара никогда не может быть отрицательным;
	- Для товара «Aged Brie» качество увеличивается пропорционально возрасту;
	- Качество товара никогда не может быть больше, чем 50;
	- «Sulfuras» является легендарным товаром, поэтому у него нет срока хранения и не подвержен ухудшению качества;
	- Качество «Backstage passes» также, как и «Aged Brie», увеличивается по мере приближения к сроку хранения.
	Качество увеличивается на 2, когда до истечения срока хранения 10 или менее дней и на 3,
	если до истечения 5 или менее дней. При этом качество падает до 0 после даты проведения концерта.

Недавно мы нашли поставщика магических товаров. Для того, чтобы продавать его товары необходимо обновить нашу
систему следующим образом:

	- «Conjured» товары теряют качество в два раза быстрее, чем обычные товары.

Не стесняйтесь вносить любые изменения в метод «UpdateQuality» и добавлять любой новый код до тех пор,
пока система работает корректно. Тем не менее, не меняйте класс «Item» или его свойства, так как он принадлежит
сидящему в углу гоблину, который очень яростен и поэтому выстрелит в вас поскольку не верит в принцип
совместного владения кодом (вы можете сделать метод «UpdateQuality» и свойства класса «Item» статическими
если хотите, мы вас прикроем).

Просто для уточнения, товар никогда не может иметь качество выше чем 50, однако легендарный товар «Sulfuras»
имеет качество 80 и оно никогда не меняется.

======================================
Gilded Rose Requirements Specification
======================================

Hi and welcome to team Gilded Rose. As you know, we are a small inn with a prime location in a
prominent city ran by a friendly innkeeper named Allison. We also buy and sell only the finest goods.
Unfortunately, our goods are constantly degrading in quality as they approach their sell by date. We
have a system in place that updates our inventory for us. It was developed by a no-nonsense type named
Leeroy, who has moved on to new adventures. Your task is to add the new feature to our system so that
we can begin selling a new category of items. First an introduction to our system:

	- All items have a SellIn value which denotes the number of days we have to sell the item
	- All items have a Quality value which denotes how valuable the item is
	- At the end of each day our system lowers both values for every item

Pretty simple, right? Well this is where it gets interesting:

	- Once the sell by date has passed, Quality degrades twice as fast
	- The Quality of an item is never negative
	- "Aged Brie" actually increases in Quality the older it gets
	- The Quality of an item is never more than 50
	- "Sulfuras", being a legendary item, never has to be sold or decreases in Quality
	- "Backstage passes", like aged brie, increases in Quality as its SellIn value approaches;
	Quality increases by 2 when there are 10 days or less and by 3 when there are 5 days or less but
	Quality drops to 0 after the concert

We have recently signed a supplier of conjured items. This requires an update to our system:

	- "Conjured" items degrade in Quality twice as fast as normal items

Feel free to make any changes to the UpdateQuality method and add any new code as long as everything
still works correctly. However, do not alter the Item class or Items property as those belong to the
goblin in the corner who will insta-rage and one-shot you as he doesn't believe in shared code
ownership (you can make the UpdateQuality method and Items property static if you like, we'll cover
for you).

Just for clarification, an item can never have its Quality increase above 50, however "Sulfuras" is a
legendary item and as such its Quality is 80 and it never alters.
