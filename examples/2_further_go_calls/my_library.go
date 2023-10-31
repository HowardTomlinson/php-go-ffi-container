package main

import (
    "C"
    "fmt"
    "net/http"
    "io/ioutil"
)

//export print
func print(out *C.char) {
    fmt.Println("Printed from Go : " + C.GoString(out))
}


//export sum
func sum(a C.int, b C.int) C.int {
    return a + b
}


//export httpGet
func httpGet(url string) *C.char {
    resp, err := http.Get(url)
    if err != nil {
    	panic(err)
    }

    defer resp.Body.Close()

    body, err := ioutil.ReadAll(resp.Body)
    if err != nil {
    	panic(err)
    }

    return C.CString(string(body))
}



//export reverse
func reverse(to_be_reversed string) *C.char {

   //s := C.GoString(to_be_reversed)

    rns := []rune(to_be_reversed) // convert to rune
    for i, j := 0, len(rns)-1; i < j; i, j = i+1, j-1 {

        // swap the letters of the string,
        // like first with last and so on.
        rns[i], rns[j] = rns[j], rns[i]
    }

    // return the reversed string.
    return C.CString(string(rns))

    //return C.CString("test")
}

func main() {}