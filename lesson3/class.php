<?php
class Hello
{
    public $name = "Michael";
    
    public function say($salutation="Evening")
    {
        return "Good $salutation, " . $this->name . "!";
    }
}

$a = new Hello();
echo $a->say("Afternoon") . "<br/>";

$b = new Hello();
$b->name = "Vivien";
echo $b->say("Night");

$c = new Hello();

?>