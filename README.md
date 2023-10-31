# php-go-ffi-container
A container with PHP and Go installed with examples of how to call from PHP to Go via FFI

## Contents

### Getting Started

This guide assumes you are starting from a linux command line with git available - most likely under WSL in Windows, or on MacOS.

* Install Docker Desktop
* Clone this repo
* Build and run the docker container
* Shell into the docker container
* cd into the example directories
  * Run a quick PHP test
  * Run a quick Go test

The further example directories include
 
 * Build the Go code into a library
 * Run the PHP Code that in turn calls your new library.
 * Extend the Go library with functions taking parameters and returning output
 * Extend the PHP FFI code to call these functions


#### Install Docker Desktop

#### Clone this repo

From your command line, create a suitable directory, cd into it, and then:

```git clone git@github.com:HowardTomlinson/php-go-ffi-container.git```

cd into this directory

```cd php-go-ffi-container```

#### Build and run the docker container

This will build a new container called 'phpgo' (as defined in the docker-compose.yml file), and then 'up' an instance of it, with the '-d' meaning that it will keep the instance running in the background.

```docker-compose up -d```

_Note : you can stop the container by running ```docker-compose down``` from the same directory._

Building takes a few minutes the first time as the images and installation files are downloaded and run, but will be fast on subsequent runs.

#### Shell into the new phpgo container.

Run a bash terminal inside the newly created container with

```docker exec -it phpgo bash```

_Note : you can exit the shell whenever you wish with ```exit``` ._

#### cd into the example directories

cd into the examples directory and into each of the subdirectories - the README.md in each has the instructions on how 


