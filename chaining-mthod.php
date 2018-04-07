<?php

class Render{
    
  public function sanitize(){
      $slug=new Slug();
      return $slug;
  }

  public function camelcase(){
      $camel=new CamelCase();
      return $camel;  
  }

}

class CamelCase{
      public function camel($texto){
         $camel=strtoupper($texto);
         return $camel;
      }    
}


class Slug{
     public function render($original){
         $slug=str_replace(" ","-",$original);
         $slug=preg_replace('/[^\w\d\-\_]/i','',$slug);
         return strtolower($slug);
     } 
}


$slug= new Render();
echo $slug->camelcase()->camel($slug->sanitize()->render('Programación orientada a objetos'));