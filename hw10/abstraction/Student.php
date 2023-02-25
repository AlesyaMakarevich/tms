<?php

class Student extends People
{
    public function greeting()
    {
        print_r("Hi, I'm " . $this->getPosition() .", my name is " . $this->getName());
    }
}