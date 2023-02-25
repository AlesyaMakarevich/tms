<?php

use interfaces\JSONWriter;

require_once 'Writer.php';
require_once 'JSONWriter.php';
require_once 'CSVWriter.php';

$content = [
    [
        "name" => "Alex",
        "position" => "Developer",
    ],
    [
        "name" => "Nik",
        "position" => "Manager",
    ]
];

$writer = new JSONWriter();
$formattedContent = $writer->generateContent($content);
$writer->write("file" . $formattedContent);