#!/bin/bash

VERSION=0.10

wget https://github.com/allegro/php-protobuf/archive/$VERSION.tar.gz
tar -xvzf $VERSION.tar.gz
rm $VERSION.tar.gz

cd php-protobuf-$VERSION

phpize && ./configure && sudo make install
sudo sh -c "echo extension=protobuf.so > /etc/php5/cli/conf.d/protobuf.ini"

cd ..
rm -rf php-protobuf-$VERSION
