## 0_php_and_go_tests

This _step zero_ is just to confirm that you have PHP set up and working:

From within this directory, run:

```php hello.php```

It should execute the PHP and echo out its welcome to the terminal.

Likewise, build and run the test.go file with:

```go run test.go```

#### Keeping it simple

All of these container examples are terminal based, and there is no web-server component required or included.

If you are working in the context of a typical PHP/Webserver/Database set of containers, then the same PHP/Go examples will still work, as long as you have a version of PHP that supports it (8+ is fine!) and you have ```ffi.enable=true``` in the php.ini.

For references on where to look to get further resources, look in the references directory at the root of this repo.

