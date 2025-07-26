<?php

// Parent class or interface
abstract class Animal
{
    abstract public function speak();
}

// Child classes with different implementations
class Dog extends Animal
{
    public function speak()
    {
        return "Woof!";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        return "Meow!";
    }
}

class Cow extends Animal
{
    public function speak()
    {
        return "Moo!";
    }
}

// A function that accepts any Animal and uses the same method
function makeAnimalSpeak(Animal $animal)
{
    echo $animal->speak() . "<br>";
}

// Usage
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

makeAnimalSpeak($dog);  // Woof!
makeAnimalSpeak($cat);  // Meow!
makeAnimalSpeak($cow);  // Moo!
