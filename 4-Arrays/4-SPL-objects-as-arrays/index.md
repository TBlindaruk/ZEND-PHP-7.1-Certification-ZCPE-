### SPL, Objects as arrays
http://php.net/manual/en/book.spl.php

#### Datastructures
http://php.net/manual/en/spl.datastructures.php

##### SplDoublyLinkedList

http://php.net/manual/en/class.spldoublylinkedlist.php

<p>The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.</p>

```PHP
SplDoublyLinkedList implements Iterator , ArrayAccess , Countable
```

- SplDoublyLinkedList::add — Add/insert a new value at the specified index
- SplDoublyLinkedList::bottom — Peeks at the node from the beginning of the doubly linked list
- SplDoublyLinkedList::__construct — Constructs a new doubly linked list
- SplDoublyLinkedList::count — Counts the number of elements in the doubly linked list.
- SplDoublyLinkedList::current — Return current array entry
- SplDoublyLinkedList::getIteratorMode — Returns the mode of iteration
- SplDoublyLinkedList::isEmpty — Checks whether the doubly linked list is empty.
- SplDoublyLinkedList::key — Return current node index
- SplDoublyLinkedList::next — Move to next entry
- SplDoublyLinkedList::offsetExists — Returns whether the requested $index exists
- SplDoublyLinkedList::offsetGet — Returns the value at the specified $index
- SplDoublyLinkedList::offsetSet — Sets the value at the specified $index to $newval
- SplDoublyLinkedList::offsetUnset — Unsets the value at the specified $index
- SplDoublyLinkedList::pop — Pops a node from the end of the doubly linked list
- SplDoublyLinkedList::prev — Move to previous entry
- SplDoublyLinkedList::push — Pushes an element at the end of the doubly linked list
- SplDoublyLinkedList::rewind — Rewind iterator back to the start
- SplDoublyLinkedList::serialize — Serializes the storage
- SplDoublyLinkedList::setIteratorMode — Sets the mode of iteration
- SplDoublyLinkedList::shift — Shifts a node from the beginning of the doubly linked list
- SplDoublyLinkedList::top — Peeks at the node from the end of the doubly linked list
- SplDoublyLinkedList::unserialize — Unserializes the storage
- SplDoublyLinkedList::unshift — Prepends the doubly linked list with an element
- SplDoublyLinkedList::valid — Check whether the doubly linked list contains more nodes

<dd>

<p class="para">
There are two orthogonal sets of modes that can be set:
</p>
<ul class="itemizedlist">
<li class="listitem">
<span class="simpara">The direction of the iteration (either one or the other):</span>
<ul class="itemizedlist">
 <li class="listitem"><span class="simpara"><strong><code>SplDoublyLinkedList::IT_MODE_LIFO</code></strong> (Stack style)</span></li>
 <li class="listitem"><span class="simpara"><strong><code>SplDoublyLinkedList::IT_MODE_FIFO</code></strong> (Queue style)</span></li>
</ul>
</li>
<li class="listitem">
<span class="simpara">The behavior of the iterator (either one or the other):</span>
<ul class="itemizedlist">
 <li class="listitem"><span class="simpara"><strong><code>SplDoublyLinkedList::IT_MODE_DELETE</code></strong> (Elements are deleted by the iterator)</span></li>
 <li class="listitem"><span class="simpara"><strong><code>SplDoublyLinkedList::IT_MODE_KEEP</code></strong> (Elements are traversed by the iterator)</span></li>
</ul>
</li>
</ul>

<p class="para">
The default mode is: <strong><code>SplDoublyLinkedList::IT_MODE_FIFO</code></strong> | <strong><code>SplDoublyLinkedList::IT_MODE_KEEP</code></strong>
</p>
</dd>

##### SplStack
http://php.net/manual/en/class.splstack.php

<p>The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.</p>

`SplStack extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable`

<dd>
<p class="para">
There is only one iteration parameter you can modify.
</p>
<ul class="itemizedlist">
<li class="listitem">
<span class="simpara">The behavior of the iterator (either one or the other):</span>
<ul class="itemizedlist">
 <li class="listitem"><span class="simpara">SplDoublyLinkedList::IT_MODE_DELETE (Elements are deleted by the iterator)</span></li>
 <li class="listitem"><span class="simpara">SplDoublyLinkedList::IT_MODE_KEEP (Elements are traversed by the iterator)</span></li>
</ul>
</li>
</ul>

<p class="para">
The default mode is 0x2 : SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_KEEP
</p>

<div class="warning"><strong class="warning">Warning</strong>
<p class="para">
The direction of iteration can no longer be changed for SplStacks. 
Trying to do so will result in a <a href="class.runtimeexception.php" class="classname">RuntimeException</a> being thrown.
</p>
</div>
</dd>

##### SplQueue
http://php.net/manual/en/class.splqueue.php

<p>The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.</p>

`SplQueue extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable`

<ul class="chunklist chunklist_reference">
    <li>
        <span>SplQueue::__construct</span>
         — Constructs a new queue implemented using a doubly linked list
     </li>
     <li>
        <span>SplQueue::dequeue</span> 
        — Dequeues a node from the queue
    </li>
    <li>
        <span>SplQueue::enqueue</span> 
        — Adds an element to the queue.
    </li>
    <li>
        <span>SplQueue::setIteratorMode</span>
         — Sets the mode of iteration
     </li>
</ul>


