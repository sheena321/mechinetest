<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">first number</label>
    <input type="text" name="ftxt" id="">
    <label for="">operator</label>
    <input type="text" name="op" id="">
    <label for="">second number</label>
    <input type="text" name="stxt" id="">
    
    <button type="submit" name='btn1'>submit</button>
    </form>
</body>
</html>
<?php
class Calculator{
    function add($a,$b){
        $this->fn1=$a;
        $this->sn1=$b;
        $ans=$this->fn1+$this->sn1;
        echo "sum is".$ans;
    }
    function sub($a,$b){
        $this->fn1=$a;
        $this->sn1=$b;
        $ans=$this->fn1-$this->sn1;
        echo "differnce is".$ans;
    }
    function mul($a,$b){
        $this->fn1=$a;
        $this->sn1=$b;
        $ans=$this->fn1*$this->sn1;
        echo "product is".$ans;
    }
    function div($a,$b){
        $this->fn1=$a;
        $this->sn1=$b;
        $ans=$this->fn1/$this->sn1;
        echo "Quotient is".$ans;
    }
}
class Usecalculator extends Calculator{
    public $n1;
    function read(){
    $n1=$_POST['ftxt'];
    $n2=$_POST['stxt'];
    $n3=$_POST['op'];
    $ob1= new Calculator();
    if(isset($_POST['btn1'])){
        switch($n3)
    {
        
        case '+':echo "jjj";
            $ob1->add($n1,$n2);

        break;
        case '-':$ob1->sub($n1,$n2);
        
        break;
        case '*':$ob1->mul($n1,$n2);
    
        break;
        case '/':$ob1->div($n1,$n2);
    
        break;
    }

    }
    }
}
$ob2=new Usecalculator();
$ob2->read();
?>