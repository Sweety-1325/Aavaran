<html>
    <head>

        <style type="text/css">
              table{
                  border-collapse:collapse;
                  width:100%;
                  color:#8B008B;
                  font-family:monospace;
                  font-size:20px;
                  text-align:left;

              }
              th{
                  background-color :#FF1493;
                  color:white;
              }
              tr:nth-child(even) {background-color:#FFC0CB}
        </style>
    </head>
    <body>
        <h1>Rent Data</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>house</th>
                <th>bhk</th>
                <th><code></code></th>
            </tr>
            <?php
               $conn=new mysqli("localhost","root","","aavaran");
               $sql="Select * from rent";
               $result= $conn->query($sql);

               if($result->num_rows>0)
               {
                   while($row=$result->fetch_assoc()){
                       echo "<tr><td>" .$row["Name"] . "</td><td>" .$row["Number"] . "</td><td>" .$row["Email"]. "</td><td>" .$row["house"] . "</td><td>" .$row["bhk"]  . "</td><td>" .$row["code"] . "</td></tr>";
                   }
               }
               else{
                   echo "No Results";
               }
               $conn->close();
            ?>
        </table>
    </body>
</html>