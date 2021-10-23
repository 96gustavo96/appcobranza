<?php
$servername = "185.28.21.52";
$database = "u980751347_appcobranza";
$username = "u980751347_cobranza";
$password = "SionCobranza2021";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
$sql="SELECT * FROM users WHERE id = 1";
                $resultado=mysqli_query($conn,$sql);
                $fila = $resultado ->fetch_assoc();
                
                echo "<h3>".$fila['name']."</h3>";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>