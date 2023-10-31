package main

import (
    "C"
    "fmt"
)

//export print
func print(out *C.char) {
    fmt.Println("Printed from Go : " + C.GoString(out))
}


//export sum
func sum(a C.int, b C.int) C.int {
    return a + b
}


//export reverse
func reverse(to_be_reversed string) *C.char {

    rns := []rune(to_be_reversed) // convert to rune
    for i, j := 0, len(rns)-1; i < j; i, j = i+1, j-1 {

        // swap the letters of the string,
        // like first with last and so on.
        rns[i], rns[j] = rns[j], rns[i]
    }

    // return the reversed string.
    return C.CString(string(rns))
}

func main() {}