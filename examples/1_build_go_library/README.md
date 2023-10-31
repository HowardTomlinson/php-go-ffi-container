## 1_build_go_library

This first step includes
* Compiling the included Go files into a library that PHP can use
* Executing the PHP that in turn references the new library to echo some additional output :

From within this directory, run:

```go build -o my_library.so -buildmode=c-shared my_library.go```

You'll see that it creates two new files : 
* my_library.so - the 'Shared Object' compiled code.
* my_library.h - a set of headers which will be used by the FFI system to identify which functions (and types) are available.



Run the PHP with

```php gotest.go```



