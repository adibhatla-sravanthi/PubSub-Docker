#!/bin/bash

#sudo chmod -R o+rw /var/www

#this will get the output of terminal in file which is displayed on the webpage.

sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 777 /var/www/html/

docker build -t python-barcode . > OutputFile.txt
docker run python-barcode >outputFile1.txt


