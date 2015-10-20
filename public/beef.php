<?php 

    $host ="localhost";
for ($i=0; $i < 70; $i++) { 


        $connect = mysql_connect($host,"root","")or die("Couldn't connect to the database!");
    $select_db = mysql_select_db("catalog") or die("Couldn't find database");
    $query = mysql_query("SELECT * FROM meat WHERE id = '$i'");
    $numrows = mysql_num_rows($query);
    if($numrows!==0){
        while($row = mysql_fetch_assoc($query)){
            $dbid = $row['id'];
            $dbname = $row['name'];
            $dbprice = $row['price'];
            echo "
    <tr>
        <td>".$dbname."</td>
        
    </tr>
";

        }
    }
?>