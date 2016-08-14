#!/bin/bash

#execute le script suivant dans le shel current (interet de la commande source)
source /etc/apache2/envvars

tail -F /var/log/apache2/* &

exec apache2 -D FOREGROUND
