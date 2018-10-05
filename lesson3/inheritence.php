<?php
class Corolla
{
    public $wheels = 4;
    
    public function foo()
    {
        echo "Hello, i am in Corolla class.";
    }
}

class CorollaWith6Wheels extends Corolla
{
    public $wheels = 6;
    
    public function foo()
    {
        parent::foo();
        echo "I have over written foo();";
    }
    
    public function bar()
    {
        echo "Hello, i am in CorollaWith6Wheels class!";
    }
}

$car = new CorollaWith6Wheels();
echo $car->wheels . "</br>";

echo $car->foo() . "</br>";
echo $car->bar();

?>