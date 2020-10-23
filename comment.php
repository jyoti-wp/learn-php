<?php

            // commenting 
// commenting is very important so that you can refer back to codes 
// comments can be added above in line or below but not before the values 

// example 

/*
 * This fucntion takes string and stripes white space
 * more text
*/

// function removedWhiteSpace() {

// }



            // finding php function 
// The function we are gonna look at is determening the lenght of a string 
// make sure to use php.net for examples 
// name is strlen 

// Description ¶
// strlen ( string $string ) : int
// Returns the length of the given string.

// Parameters ¶
// string
// The string being measured for length.

// Return Values ¶
// The length of the string on success, and 0 if the string is empty.

// Examples ¶
// Example #1 A strlen() example

// <?php
// $str = 'abcdef';
// echo strlen($str); // 6

// $str = ' ab cd ';
// echo strlen($str); // 7
// 


// example 

// echo strlen('Jyoti');



// we can test the above example with var_dump as well 


// var_dump(strlen('Jyoti'));


// If you to change the format to upper case 
// example 

// $name = 'Jyoti';

// echo strtoupper($name);

// for lower case 

// $name = 'Jyoti';

// echo strtolower($name);



// ltrim
// (PHP 4, PHP 5, PHP 7)

// ltrim — Strip whitespace (or other characters) from the beginning of a string

// Description ¶
// ltrim ( string $str [, string $character_mask ] ) : string
// Strip whitespace (or other characters) from the beginning of a string.

// Parameters ¶
// str
// The input string.

// character_mask
// You can also specify the characters you want to strip, by means of the character_mask parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.

// Return Values ¶
// This function returns a string with whitespace stripped from the beginning of str. Without the second parameter, ltrim() will strip these characters:

// " " (ASCII 32 (0x20)), an ordinary space.
// "\t" (ASCII 9 (0x09)), a tab.
// "\n" (ASCII 10 (0x0A)), a new line (line feed).
// "\r" (ASCII 13 (0x0D)), a carriage return.
// "\0" (ASCII 0 (0x00)), the NUL-byte.
// "\x0B" (ASCII 11 (0x0B)), a vertical tab.
// Examples ¶
// Example #1 Usage example of ltrim()

// <?php

// $text = "\t\tThese are a few words :) ...  ";
// $binary = "\x09Example string\x0A";
// $hello  = "Hello World";
// var_dump($text, $binary, $hello);

// print "\n";


// $trimmed = ltrim($text);
// var_dump($trimmed);

// $trimmed = ltrim($text, " \t.");
// var_dump($trimmed);

// $trimmed = ltrim($hello, "Hdle");
// var_dump($trimmed);

// // trim the ASCII control characters at the beginning of $binary
// // (from 0 to 31 inclusive)
// $clean = ltrim($binary, "\x00..\x1F");
// var_dump($clean);

// addcslashes


// addcslashes — Quote string with slashes in a C style

// Description ¶
// addcslashes ( string $str , string $charlist ) : string
// Returns a string with backslashes before characters that are listed in charlist parameter.

// Parameters ¶
// str
// The string to be escaped.

// charlist
// A list of characters to be escaped. If charlist contains characters \n, \r etc., they are converted in C-like style, while other non-alphanumeric characters with ASCII codes lower than 32 and higher than 126 converted to octal representation.

// When you define a sequence of characters in the charlist argument make sure that you know what characters come between the characters that you set as the start and end of the range.

// <?php
// echo addcslashes('foo[ ]', 'A..z');
// // output:  \f\o\o\[ \]
// // All upper and lower-case letters will be escaped
// // ... but so will the [\]^_`
// 
// Also, if the first character in a range has a higher ASCII value than the second character in the range, no range will be constructed. Only the start, end and period characters will be escaped. Use the ord() function to find the ASCII value for a character.
// <?php
// echo addcslashes("zoo['.']", 'z..A');
// // output:  \zoo['\.']
// 
// Be careful if you choose to escape characters 0, a, b, f, n, r, t and v. They will be converted to \0, \a, \b, \f, \n, \r, \t and \v, all of which are predefined escape sequences in C. Many of these sequences are also defined in other C-derived languages, including PHP, meaning that you may not get the desired result if you use the output of addcslashes() to generate code in those languages with these characters defined in charlist.

// Return Values ¶
// Returns the escaped string.


// $escaped = addcslashes($not_escaped, "\0..\37!@\177..\377");



// chop — Alias of rtrim()

// Description ¶
// This function is an alias of: rtrim().

// Notes ¶
// Note:

// chop() is different than the Perl chop() function, which removes the last character in the string.

/*
chunk_split — Split a string into smaller chunks

Description ¶
chunk_split ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] ) : string
Can be used to split a string into smaller chunks which is useful for e.g. converting base64_encode() output to match RFC 2045 semantics. It inserts end every chunklen characters.

Parameters ¶
body
The string to be chunked.

chunklen
The chunk length.

end
The line ending sequence.

<?php
// format $data using RFC 2045 semantics
$new_string = chunk_split(base64_encode($data));
?>

convert_cyr_string — Convert from one Cyrillic character set to another

Description ¶
convert_cyr_string ( string $str , string $from , string $to ) : string
Converts from one Cyrillic character set to another.

Parameters ¶
str
The string to be converted.

from
The source Cyrillic character set, as a single character.

to
The target Cyrillic character set, as a single character.

Supported characters are:

k - koi8-r
w - windows-1251
i - iso8859-5
a - x-cp866
d - x-cp866
m - x-mac-cyrillic
Return Values ¶
Returns the converted string.




convert_uudecode — Decode a uuencoded string

Description ¶
convert_uudecode ( string $data ) : string
convert_uudecode() decodes a uuencoded string.

Note: convert_uudecode() neither accepts the begin nor the end line, which are part of uuencoded files.

Parameters ¶
data
The uuencoded data.

Return Values ¶
Returns the decoded data as a string or FALSE on failure.

Examples ¶
Example #1 convert_uudecode() example

<?php
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");
?>
*/