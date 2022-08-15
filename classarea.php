<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class Area{

  public function calculateArea($l,$b){
    $this->l1=$l;
    $this->b1=$b;
    return $this->l1*$this->b1;
  }


        
    }
    class circle extends Area{
        public function calculateArea($r,$r1){
            $this->l1=$r;
            $this->b1=$r1;
            $ob1=new Area();
            echo "area of circle is ";
            echo  3.14 * $ob1->calculateArea($this->l1,$this->b1);
            echo "<br>";
        }

    }
    class rectangle extends Area{
        public function calculateArea($l,$b){
            $this->l1=$l;
            $this->b1=$b;
            $ob1=new Area();
            echo "area of rectangle".$ob1->calculateArea($this->l1,$this->b1);
        }

    }    
    $ob2=new circle();
    $ob2->calculateArea(4,4);
    $ob3=new rectangle();
    $ob3->calculateArea(4,7);
    
    



?>