<?php

class Render {

    protected $data=[];
    protected $built=null;

public function words(array $data){  
    foreach($data as $word){
        $this->data[]=$word;
    }  
    return $this;
 }

public function link($caracter){
      foreach($this->data as $word){
          $this->built.=$word . $caracter;
      }
     return $this;  
}

public function get(){
    return $this->built;
}
    
}

$render = new Render();
echo $render->words(['Vue js','Angular','React'])->link('-')->get();


