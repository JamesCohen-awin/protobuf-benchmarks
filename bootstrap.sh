apt-get update
apt-get install -y protobuf-compiler
apt-get install -y php5-dev

pear channel-discover pear.pollinimini.net
pear install drslump/Protobuf-beta


# installing the php-protobuf module
VERSION=0.10
cd /tmp
curl https://codeload.github.com/allegro/php-protobuf/tar.gz/$VERSION | tar -xvz

cd php-protobuf-$VERSION
phpize && ./configure && make install
echo extension=protobuf.so > /etc/php5/cli/conf.d/protobuf.ini
cd ..
rm -rf php-protobuf-$VERSION
