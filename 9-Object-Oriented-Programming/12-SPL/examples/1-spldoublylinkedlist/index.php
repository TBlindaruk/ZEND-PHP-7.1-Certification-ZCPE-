<?php

$dllist = new SplDoublyLinkedList();

/**
 * add to the and of the list
 */
$dllist->push('first one');
$dllist->push('second one');
$dllist->push('3 one');

/** the list contains
* first one
* second one
* 3 one
*/
var_dump($dllist);

//while an unshift inserts an object at top of the list
$dllist->unshift(1);
$dllist->unshift(2);
$dllist->unshift(3);

/** the list contains
 * 3
 * 2
 * 1
 * first one
 * second one
 * 3 one
 */
var_dump($dllist);

//you can delete an item from the bottom of the list by using pop
echo $dllist->pop();

/** the list contains
 * 3
 * 2
 * 1
 * first one
 * second one
 */
var_dump($dllist);


//you can delete an item from the top of the list by using shift()
$dllist->shift();

/** the list contains
 * 2
 * 1
 * first one
 * second one
 */
var_dump($dllist);

/* if you want to replace an item at particular index you can use a method named add , note that if you want to replace an item that does not exist , an exception will be thrown*/

$dllist->add(0 , 2.24);

/** the list contains
 * 2.24
 * 1
 * first one
 * second one
 */
var_dump($dllist);

for($dllist->rewind();$dllist->valid();$dllist->next()){

    echo 'VALUE: ' . $dllist->current() . PHP_EOL;
}

$dllist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for($dllist->rewind();$dllist->valid();$dllist->next()){

    echo 'LIFO VALUE:' . $dllist->current(). PHP_EOL;;
}
