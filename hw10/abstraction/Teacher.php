<?php

class Teacher extends People
{
    public function greeting()
    {
        print_r('Good morning, my students, my name is ' . $this->getName() . '. My specialisation is ' . $this->getPosition());
    }
}