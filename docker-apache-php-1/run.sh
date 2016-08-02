#!/bin/bash
#change les droits de propriété du répertoire /app
#chown www-data:www-data /app -R

#if [ "$ALLOW_OVERRIDE" = "**False**" ]; then
#    unset ALLOW_OVERRIDE
#else
#    #remplace les termes 'AllowOverride None' par 'AllowOverride All'
#    sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf
#    
#    #Le module mod_rewrite utilise un moteur de réécriture à base de règles,
#    #basé sur un interpréteur d'expressions rationnelles PCRE, pour réécrire les URLs à la volée.
#    #active le module mod_rewrite
#    a2enmod rewrite
#fi

#execute le script suivant dans le shel current (interet de la commande source)

source /etc/apache2/envvars

tail -F /var/log/apache2/* &

exec apache2 -D FOREGROUND
