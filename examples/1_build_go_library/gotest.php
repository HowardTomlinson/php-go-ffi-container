<?php

// Creates a new FFI object with C definitions having parameters of:
// The name and type of function which is callable :
//      "void say_hello();",

// A location for the compiled shared library (.so) file which provides this function.
//      __DIR__ . "/my_library.so"

// Remember that you need to compile the Go into a library executable first before running this!
// go build -o my_library.so -buildmode=c-shared my_library.go

$my_go_library = FFI::cdef(
    "void say_hello();",
    __DIR__ . "/my_library.so"
);


// Call the Go function within the library.
$my_go_library->say_hello();

?>