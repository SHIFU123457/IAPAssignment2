<?php
require_once "PDOcon.php";
require_once "kichwa.php";
session_start();
$DBConnection = new DBConnection();
$pdo = $DBConnection->getPDO();
?><table>
    <tr>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>EMAIL</th>
        <th>LOCATION</th>
        <th>DOB</th>
        <th>GENDER</th>
    </tr>
<?php
$sql = "SELECT * FROM user";
$stmt = $pdo->query($sql);

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?><tr>
        <td><?php echo $row["username"]?></td>
        <td><?php echo $row["passsword"]?></td>
        <td><?php echo $row["email"]?></td>
        <td><?php echo $row["location"]?></td>
        <td><?php echo $row["dob"]?></td>
        <td><?php echo $row["gender"]?></td>
    </tr>
        <?php
}
?>
</table>