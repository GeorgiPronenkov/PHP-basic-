<?php
/**
 Serialize String
You have been tasked to serialize a string. The serialization is done in a special way,in which a character from that string
is saved with the indexes at which it is found.
The input will consist of a single input line, containing a single string, which may consist of ANY ASCII character.
 * Your task is to serialize the string in the following way:
{char}:{index1}/{index2}/{index3}
The char will be the character, and the indexes, will be the indexes it is found at in the string.
 */
$input = readline();
$arr = [];

for ($i = 0; $i < strlen($input); $i++) {
    $currentChar = $input[$i];
    $arr[$currentChar] [] = $i;      //в масива[arr] с ключ, който е тек.буква[currentChar],push-ни(вкарай) $i
}
foreach ($arr as $key => $positions) {
    echo "$key:".implode('/', $positions) . PHP_EOL;
}

/*
abababa
a:0/2/4/6
b:1/3/5
*/

//Deserialize string:
$input = readline();

while ($input !== 'end') {
    $args = explode(':', $input);
    $char = $args[0];
    $positions = explode('/', $args[1]);

    foreach ($positions as $position) {
        $output[$position] = $char;
    }
    $input = readline();
}
ksort($output);
echo implode($output) . PHP_EOL;

/*
a:0/2/4/6
b:1/3/5
end
abababa
 */