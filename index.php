class Animal{
  public $name = "Rex";
  public function makeSound(){
    echo "Woof!";
  }
}

$dog = new Animal();
$dog->makeSound();

class Cat extends Animal{
  public $name = "Tom";
  public function makeSound(){
    echo "Meow!";
  }
}

$cat = new Cat();
$cat->makeSound();
