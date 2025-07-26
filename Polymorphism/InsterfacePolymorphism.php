<?php

// Define a common interface
interface Animal
{
    public function speak();
}

// Implement the interface in multiple classes
class Dog implements Animal
{
    public function speak()
    {
        return "Woof!";
    }
}

class Cat implements Animal
{
    public function speak()
    {
        return "Meow!";
    }
}

class Cow implements Animal
{
    public function speak()
    {
        return "Moo!";
    }
}

// A function that accepts any Animal
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
