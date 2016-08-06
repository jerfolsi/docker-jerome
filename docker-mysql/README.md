### source tutorial
https://hub.docker.com/_/mysql/

### launch the mysql container
sans dockerfile
create + launch the image mysql (en cours...)
As the image doesn't exist locally, it will download and create the image locally

```
docker run --name jerome-mysql -e MYSQL_ROOT_PASSWORD=root -p 3316:3306 -d mysql:5.7
```

### test database with sequel pro
use sequel pro to connect database (OK)
`````
ip : 127.0.0.1
user : root
password : root
port : 3316 (and not 3306)
```

### launch your web server container
launch a site container linked to the mysql container (OK)

```
docker run --name some-app -p 8080:80 -v /Users/jerome/Sites/site1:/var/www/site --link jerome-mysql:mysql -d jerome/apache-php
```

### test that the app can communicate with the mysql database

code php to test connection to mysql
add an index.php in the host local directory /Users/jerome/Sites/site1/index.php
That files is binded

```
$servername = "172.17.0.2";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
```
