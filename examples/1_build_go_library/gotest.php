<?php

// Creates a new FFI object with C definitions having parameters of:
// The name and type of function which is callable :
//      "void say_hello();",

// A location for the compiled shared library (.so) file which provides this function.
//      __DIR__ . "/my_library.so"

$my_go_library = FFI::cdef(
    "void say_hello();",
    __DIR__ . "/my_library.so"
);


// Call the Go function within the library.
$my_go_library->say_hello();

?>