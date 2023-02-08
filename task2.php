<?php

// 1) Create a basic calculator with the only Add and Subtract functionality.

<?php
class calculator{                                               

   public $a,$b,$c;
   public function __construct($a,$b){
    $this->a=$a;
    $this->b=$b;


   }
  function add(){
    echo " the addition is = ".$this->c = $this->a + $this->b ."<br>";
   }
   function sub(){
    echo " the subtraction is =" .$this->c = $this->a - $this->b."<br>";
   

   }

   }
$obj1 = new calculator(10,5);
$obj1->add();
$obj1->sub();




//  2.   Create a function of Divide using Trait.

trait division{
    public function div($a,$b){
        echo "perform division is= " .$a/$b;
    }
}
class divide{
    use division;

}
$obj1=new divide();
$obj1->div(10,5);    





//  3.  Create a calculator with the only Add, Multiply & Divide functionality by using the inheritance and using Trait

trait addition{
    public $a,$b,$c;
   public function __construct($a,$b){
    $this->a=$a;
    $this->b=$b;
 }
    function add(){
        echo " the addition is = ".$this->c = $this->a + $this->b ."<br>";
       }
       
}

trait multiplification{
    public $a,$b,$c;
   public function __construct($a,$b){
    $this->a=$a;
    $this->b=$b;
 }
    function mul(){
        echo " the Multiplification is = ".$this->c = $this->a * $this->b ."<br>";
       }
 }

trait divisions{
  public $a,$b,$c;
    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    
        }
        function div(){
            echo " the Divisions is =" .$this->c = $this->a / $this->b."<br>";
           
        }
    }


class traitcalculator1{
    use addition;
}

class traitcalculator2 extends traitcalculator1{
    use multiplification;
}
    class traitcalculator3 extends traitcalculator2 {
        use divisions;
    }
$obj= new traitcalculator3(20,5);
$obj->add();
$obj->mul();
$obj->div();




//4 . Create a complete calculator with Add, Subtract, Multiply, and Divide functionality using the inheritance.

<?php
class addition{
    public $a,$b,$c;
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
function add(){
    $this->c = $this->a + $this->b;
    echo 'addition of number= '. $this->c . "<br>";
}
        
    }
class subtraction extends addition{
    function sub(){
    $this->c = $this->a - $this->b;
    echo 'subtractions of number= ' . $this->c  . "<br>";
    
}
}
class multiplation extends subtraction{
     function mul(){
    $this->c = $this->a * $this->b;
    echo 'multiplations of number= '. $this->c . "<br>";
     }
}
class division extends multiplation{
     function div(){
    $this->c = $this->a / $this->b;
    echo 'multiplations of number= '. $this->c;
     }
}
    

$d1=new division(12,10);
$d1->add();
$d1->sub();
$d1->mul();
$d1->div();






// 5.Create an interface that can be used for calculator functionality.



interface aditions{
	function add($a,$b);
    
}
interface subtractions{
	function sub($a,$b);
}

interface multiplications{
	function mul($a,$b);
    
}
interface divsions{
	function div($a,$b);
}

class calculato implements aditions,subtractions,multiplications,divsions{
	public function add($a,$b){
    	echo $a + $b . "<br>";
	}
    

	public function sub($a,$b){
            	echo  $a - $b . "<br>";

	}

	public function mul($a,$b){
            	echo 'the multiplication is = '. $a * $b ."<br>";

	}

	public function div($a,$b){
            	echo 'the division is = '. $a / $b;

	}
}

$cal=new calculato();
$cal->add(10,5);
$cal->sub(10,5);
$cal->mul(10,5);
$cal->div(10,5);



    
    






