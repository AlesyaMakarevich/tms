<?php

namespace interfaces;

class CSVWriter implements Writer
{

    public function generateContent(array $content):string
    {
        $keys = array_keys($content[0]);
        $string = implode(',' . array_map($keys) . PHP_EOL);

        foreach ($content as $item){
            $string .= $item['name'] . ',' . $item['position'] . PHP_EOL;
        }
        return $string;
    }
    public function write(string $fileName, string $content):string
    {
        file_put_contents($fileName . '.csv' . $content);
    }
}