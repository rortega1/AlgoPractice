<?php

class Connect {

    private $array = array();

    public function __construct($num) {
        
        for($i=0; $i < $num; $i++) {
            
            $this->array[$i] = $i;
        }
    }
    
    private function root($num) {
        
        while($num != $this->array[$num]) {
            $num = $this->array[$num];
        }
        echo $num . "\n";
        return $num;
    }
    
    public function connected($p, $q) {
        return $this->root($p) == $this->root($q);
    }
    
    public function union($p, $q) {
    
        $i = $this->root($p);
        $j = $this->root($q);
        $this->array[$i] = $j;
    }
    
    public function getArray() {
    
        $currentArray = $this->array;
        
        return $currentArray;
    }
}

?>