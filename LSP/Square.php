<?php

class Square extends Rectangle {

    public function setLength($x){
        $this->height = $x;
        $this->length = $x;
    }

    public function setHeight($y){
        $this->height = $y;
        $this->length = $y;
    }
} 