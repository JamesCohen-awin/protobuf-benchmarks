apt-get update
apt-get install -y protobuf-compiler
apt-get install -y php5-dev

pear channel-discover pear.pollinimini.net
pear install drslump/Protobuf-beta
