class Animal{
  public $name = "Rex";
  public function makeSound(){
    echo "Woof!";
  }
}

$dog = new Animal();
$dog->makeSound();
