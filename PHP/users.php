<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "BANK_MANAGEMENT";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// Display the rows returned by the sql query
if($num> 0){
    

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
       
        
        echo "<tr>";
    echo '<form method ="post" action = "Details.php">';
    echo "<td>" . $row["S.No."]. "</td><td>" . $row["Name"] . "</td>
    <td>" . $row["Email Id"] . "</td><td>" . $row["Gender"] . "</td><td>" . $row["Balance"] . "</td>";
    echo "<td ><a href='Details.php?user={$row["Name"]}&message=no' type='button' name='user'  id='users1' ><span>Expand</span></a></td>";
    echo "</tr>";
}
echo "</table>";
}
?>