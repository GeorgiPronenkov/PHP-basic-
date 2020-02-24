<?php
/**
Write a program that reads the path to a file and subtracts the file name and its extension.
 *
 * C:\Internal\training-internal\Template.pptx
 */

$fullName = readline();

$file = substr($fullName, strrpos($fullName, "\\") + 1);
$extension = substr($file, strrpos($file, ".") + 1);
$fileName = substr($file, 0, strrpos($file, '.'));

echo "File name: $fileName\n" . PHP_EOL;
echo "File extension: $extension" . PHP_EOL;

/*
/C:\Internal\training-internal\Template.pptx
File name: Template
File extension: pptx