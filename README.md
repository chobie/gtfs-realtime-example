# gtfs-realtime-proto

https://developers.google.com/transit/gtfs-realtime/gtfs-realtime-proto

# install

* you need to install PECL protocolbuffers

````
git clone https://github.com/chobie/php-protocolbuffers.git
cd php-protocolbuffers
phpize
./configure
make
make install
# please add following line to your php.ini
# extension=protocolbuffers.so
````

* you also might need protoc-gen-php for PECL protocolbuffers and protoc compiler

https://github.com/chobie/protoc-gen-php

````
protoc --php_out=php gtfs-realtime.proto
````

# play

````
php example.php
````