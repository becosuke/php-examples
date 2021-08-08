<?php

class MyParent
{
    protected static function foo() {
        return "parent";
    }

    public static function bar() {
        print(static::foo() . PHP_EOL);
    }
}

class MyChild extends MyParent
{
    protected static function foo() {
        return "child";
    }
}

MyParent::bar();
MyChild::bar();
