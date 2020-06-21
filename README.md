# Struct data in Php
## Pile And Queue


Data structures are objects that store data
efficiently, offering certain “services” for the
user (efficient data classification, search by means of
keywords, etc.).


## Stack

These are LIFO data structures (last to enter, first to leave), where the last element to be inserted will be the first to be removed. Thus, a stack allows access to only one data item - the last one inserted. To process the penultimate item inserted, you must remove the last one.

### Usage

Import file **Stack.php** on your project.

Example:

```php
require_once("classes/Pile.php");

$pile = new Pile();

$pile->push(10);
$pile->push(20);
$pile->push(30);

$pile->pop();

var_dump($pile->length();
var_dump($pile->top());
var_dump($pile->get());

var_dump($pile->getInPosition(2);
```

### Description
| comands       	| description                               	| parameters 	| parameters type 	| exemple                                                                    	|
|---------------	|-------------------------------------------	|------------	|-----------------	|----------------------------------------------------------------------------	|
| push          	|  inserts a value at the end of the stack  	| $value     	| any             	| $pile->push(10); $pile->push("php is very good"); $pile->push([10,20,30]); 	|
| pop           	|  removes a value at the end of the stack  	| n/a        	|                 	| $pile->pop();                                                              	|
| length        	|  returns the stack length value           	| n/a        	|                 	| $pile->length();                                                           	|
| top           	|  returns the top of the stack value       	| n/a        	|                 	| $pile->top();                                                              	|
| get           	| return stack                              	| n/a        	|                 	| $arrayPile = $pile->get();                                                 	|
| getInPosition 	|  returns value at specific stack position 	| $position  	| int             	| $value1 = $pile->getInPosition(3); $value2 = $pile->getInPosition(2);      	|


-------

## Queue

They are FIFO data structures (first-in first-out), where the first element to be inserted will be the first to be removed, that is, items are added at the end and removed from the beginning.

### Usage

Import file **Stack.php** on your project.

Example:

```php
require_once("classes/Queue.php");

$Queue = new Queue(10); // creates a queue with size 10, with all values ​​filled with NULL

$Queue = new Queue(10, 'new Queue'); // creates a queue with size 10, with all values ​​filled with "new Queue"

$Queue = new Queue(10, 5); // creates a queue with size 10, with all values ​​filled with 5

$Queue->insert(10);
$Queue->insert(20);
$Queue->insert(30);

$Queue->remove();

var_dump($Queue->size());
var_dump($Queue->isEmpty());
var_dump($Queue->isFull());

var_dump($Queue->getQueue());

$Queue->clear();
```

Example:
| comands  	| description                                           	| parameters 	| parameters type 	| exemple                                                                             	|
|----------	|-------------------------------------------------------	|------------	|-----------------	|-------------------------------------------------------------------------------------	|
| insert   	|  inserts the value in the last position of the queue  	| $value     	| any             	| $queue->insert(10); $queue->insert("php is very good"); $queue->insert([10,20,30]); 	|
| remove   	|  removes the value at the first position in the queue 	| n/a        	|                 	| $queue->remove();                                                                   	|
| size     	|  returns the queue length value                       	| n/a        	|                 	| $queue->size();                                                                     	|
| isEmpty  	|  returns true if the queue is empty                   	| n/a        	|                 	| if($queue->isEmpty() == true)                                                       	|
| isFull   	|  returns true if the queue is full                    	| n/a        	|                 	| if($queue->isFull() == true)                                                        	|
| getQueue 	|  returns an array with the queue                      	| n/a        	|                 	| $array = $queue->getQueue();                                                        	|
| clear    	|  empty the queue                                      	| n/a        	|                 	| $queue->clear();                                                                    	|


## notes

A queue has different properties than a stack example:

```php
require_once("classes/Queue.php");
$queue = new Queue(5);
```

when executing the command "new Queue (5)", a row of 5 positions was created, with the values ​​filled in with "null"

| null 	| null 	| null 	| null 	| null 	|
|------	|------	|------	|------	|------	|

------

```php
require_once("classes/Queue.php");
$queue = new Queue(5);
$queue->insert(10);
$queue->insert(20);
```
we now insert two values ​​into our list.

| 10 	| 20 	| null 	| null 	| null 	|
|------	|------	|------	|------	|------	|

------

```php
require_once("classes/Queue.php");
$queue = new Queue(5);
$queue->insert(10);
$queue->insert(20);
$queue->remove();
```

however when executing the command to remove an element it will be retired or the first item in the queue.

| null	| 20 	| null 	| null 	| null 	|
|------	|------	|------	|------	|------	|

-------

```php
require_once("classes/Queue.php");
$queue = new Queue(5);
$queue->insert(10);
$queue->insert(20);
$queue->remove();
$queue->insert(30);
```

if we enter one more value it will be added after the value 20.
| null	| 20 	| 30 	| null 	| null 	|
|------	|------	|------	|------	|------	|

------

if, for example, a queue of 5 positions is created and you try to enter 6 values ​​in it, the 5 positions will be filled and the first position will be overlaid.


```php
require_once("classes/Queue.php");
$queue = new Queue(5);
$queue->insert(10);
$queue->insert(20);
$queue->insert(30);
$queue->insert(40);
$queue->insert(50);
$queue->insert(60);
```

if we enter one more value it will be added after the value 20.

| 60	| 20 	| 30 	| 40 	| 50 	|
|------	|------	|------	|------	|------	|



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)