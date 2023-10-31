package main

import (
    "C"
    "fmt"
)

// The 'export' line is required in order to make the function available when
// the library is being built.

//export say_hello
func say_hello() {
    fmt.Println("We just outputted this string from Go!")
}

// Note the main function itself is empty!

func main() {}