<?php
class Queue{
    private $arrayQueue;
    private $size;
    private $primaryValue = 0;
    private $lastValue = -1;
    private $numitems =0;

    public function __construct(int $size , $fill = null){
        $this->clear();
        if($fill == null) $this->arrayQueue = new SplFixedArray($size);
        else $this->arrayQueue =  array_fill(0,$size, $fill);
        $this->size = $size;
    }
    
    public function size(){
        return $this->size;
    }

    public function insert(int $value){
        if($this->lastValue == $this->size -1){
            $this->lastValue = -1;
        }

        $this->lastValue++;
        $this->arrayQueue[$this->lastValue] = $value;
        $this->numitems++;
    }

    public function remove(){
        if($this->primaryValue == $this->size){
            $this->primaryValue = 0;
        }
        $valueTemporary =$this->arrayQueue[$this->primaryValue];
        $this->arrayQueue[$this->primaryValue] = null;
        $this->primaryValue++;
        $this->numitems--;
        return $valueTemporary;
    }

    public function isEmpty(){
        return $this->numitems == 0 ? true : false;
    }

    public function isFull(){

        return $this->numitems == $this->size ? true : false;
    }

    public function getQueue(){
        return $this->arrayQueue;
    }
    

   // enfileirar (enqueue) 
   // desenfileirar (dequeue)

    public function clear():void{
        $this->size = 0;
        $this->arrayQueue = -1;
    }
    
}

?>