<?php

namespace interfaces;

interface Writer
{
    public function write(string $fileName, string $content);
    public function generateContent(array $content);
}