# This a simple Dockerfile config

To build the image
````
docker build -t jerome/apache-php .
```

To launch the container
```
docker run -d -p 8080:80 --name jerome-apache jerome/apache-php
```
