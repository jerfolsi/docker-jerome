#source tutorial
>https://hub.docker.com/_/mysql/

#step. sans dockerfile
#step. create + launch the image mysql (en cours...)
As the image doesn't exist locally, it will download and create the image locally
>docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=root -p 3316:3306 -d mysql:5.7

#step : use sequel pro to connect database (OK)
>ip : 127.0.0.1
>user : root
>password : root
>port : 3316 (and not 3306)

#step. launch a site container linked to the mysql container (OK)
>docker run --name some-app -p 8080:80 -v /Users/jerome/Sites/site1:/var/www/site --link some-mysql:mysql -d jerome/apache-php

#step. test that the app can communicate with the mysql database
yes it worksl

#code php to test connection to mysql
add an index.php in the host local directory /Users/jerome/Sites/site1/index.php
That files is binded

>
$servername = "172.17.0.2";
$username = "root";
$password = "root";

>// Create connection
$conn = new mysqli($servername, $username, $password);

>// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
