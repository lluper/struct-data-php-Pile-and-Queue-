<?php

class Pile {

    private $arrayPile = [];
    private $arrayEmpty = [];
    private $top = -1;

    public function length(){
        return $this->top +1;
    }

    public function top(){
        return $this->arrayPile[$this->top];
    }

    public function push($value):void {
        $this->top++;
        if($this->top == count($this->arrayPile)){
           $this->arrayPile[$this->top] = $value;
        }
    }

    public function pop(){
        if($this->top >= 0){
           $this->arrayPile = $this->duplicateArray();
           $this->top--;
        }
        else return null;
    }

    public function get(){
        return $this->arrayPile;
    }

    public function getInPosition(int $position){
        if($position < 0||$position > $this->top){
            return null;
        }
        return $this->arrayPile[$position];

    }


    private function duplicateArray(){
        $newArray = $this->arrayEmpty;
         
        for($count = 0; $this->top-- ; $count++){
            $newArray[$count] = $this->arrayPile[$count];
        }

        return $newArray;
    }

}
