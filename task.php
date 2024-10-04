<?php   
class A {
    public function foo() {
    static $x = 0;
    echo ++$x;
    }
    }
    $a1 = new A();
    $a2 = new A();
    $a1->foo();
    $a2->foo();
    $a1->foo();
    $a2->foo();
// Каждый объект класса A использует статическую переменную $x для хранения счетчика. Это значит, что значение переменной $x сохраняется между вызовами метода foo() для всех объектов класса A. 
    class B extends A {
    }
    $a1 = new A();
    $b1 = new B();
    $a1->foo();
    $b1->foo();
    $a1->foo();
    $b1->foo();

    // В данной ситуации каждый объект наследует от родительского класса A. Это значит, что каждый экземпляр классов A и B будет использовать одну и ту же статическую переменную $x.
    // Статические переменные принадлежат классу, а не отдельным объектам, поэтому значение $x будет одинаковым для всех объектов независимо от их типа.