<?php
/**
 * Created by PhpStorm.
 * User: tetiana
 * Date: 24.10.17
 * Time: 23:23
 */
$objPQ = new SplPriorityQueue();

$objPQ->insert('A',3);
$objPQ->insert('B',6);
$objPQ->insert('C',1);
$objPQ->insert('D',2);

echo "COUNT->".$objPQ->count()."<BR>";

//mode of extraction
$objPQ->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

//Go to TOP
$objPQ->top();

while($objPQ->valid()){
    print_r($objPQ->current());
    echo "<BR>";
    $objPQ->next();
}