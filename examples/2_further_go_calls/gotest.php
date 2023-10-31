<?php

/**
 * Declaration of FFI components
 *
 * GoString is a C Style struct for a string with a length.
 *
 * print : a function accepting a string
 * sum : a function accepting two ints and returning an int
 *
 * */
$my_go_library = FFI::cdef(
    "typedef struct { char* p; long n } GoString;
    int sum(int p0, int p1);
    void print(GoString out);    
    char* reverse(GoString to_be_reversed);
    ",
    __DIR__ . "/my_library.so"
);

/**
 * Converts a PHP string to a Go string structure that can be passed to a Go function by FFI.
 *
 * @param FFI $ffi
 * @param string $name
 * @return \FFI\CData
 */
function stringToGoString(FFI $ffi, string $name): FFI\CData
{
    $strChar = str_split($name);

    $c = FFI::new('char[' . count($strChar) . ']', false);
    foreach ($strChar as $i => $char) {
        $c[$i] = $char;
    }

    $goStr = $ffi->new("GoString");
    $goStr->p = FFI::cast(FFI::type('char *'), $c);
    $goStr->n = count($strChar);

    return $goStr;
}


// Example 1 : Passing two ints and receiving the return value.
$sum = $my_go_library->sum(123,456);
echo "Sum is $sum " , PHP_EOL;


// Example 2 : Passing a string into the function.
// The string requires converting into a GoString
$example_string = "This is a string!";
$my_go_library->print(stringToGoString($my_go_library, $example_string));



// Example 3 : Receive back a string from a function.
// The return is in the form of a C string, the FFI::string function will convert that
// back to a PHP string.

$test_string = "This string is to be reversed.";
echo FFI::string($my_go_library->reverse(stringToGoString($my_go_library, $test_string))) .PHP_EOL;



