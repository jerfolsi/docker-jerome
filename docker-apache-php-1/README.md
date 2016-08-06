# This a simple Dockerfile config

### To build the image
````
docker build -t jerome/apache-php .
```

### To launch the container
we declare a shared directory between host "/users/jerome/Sites/site1" and the docker container "/var/www/site"

```
docker run -d -p 8080:80 --name jerome-apache -v /Users/jerome/Sites/site1:/var/www/site jerome/apache-php
```

### to launch the container and bind to a mysql container
```
docker run --name jerome-apache -p 8080:80 -v /Users/jerome/Sites/site1:/var/www/site --link some-mysql:mysql -d jerome/apache-php
```
