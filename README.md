# learn Laravel - MongoDb
# Requirements
- Install Mongo Db in ubuntu 16.04
```
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 2930ADAE8CAF5059EE73BB4B58712A2291FA4AD5
echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.6 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.6.list
sudo apt-get update
sudo apt-get install -y mongodb-org
```

- Or create MongoDB cloud
[link](https://cloud.mongodb.com/v2/6131cd0bb8f8a36621bb3ce9#clusters?fastPoll=true)

- Install MongoDB Compass [link](https://docs.mongodb.com/compass/current/install)

- Install driver computer with mongoDB
```
git clone https://github.com/mongodb/mongo-php-driver.git
cd mongo-php-driver
git submodule update --init
sudo apt-get install php-dev
phpize
./configure
make all
sudo make install
```

- Start mongoDB
```
sudo systemctl enable mongod
sudo systemctl start mongod
```

- Enable php mongo /ect/php/version/cli/php.init
```
extension=mongodb.so
```

- Install package Laravel [Link](https://github.com/jenssegers/laravel-mongodb):
```
composer require jenssegers/mongodb:3.7 --ignore-platform-reqs
```
# Doc
- Eloquent: https://github.com/jenssegers/laravel-mongodb

# CRUD
- Send request in file requests.http
