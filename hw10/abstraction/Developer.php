<?php

class Developer extends People
{
    public function greeting()
    {
        print_r('Hello world! My name is ' . $this->getName() . 'My profession is ' . $this->getPosition());
    }
}