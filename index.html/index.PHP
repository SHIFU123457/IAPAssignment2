<?php 
require_once "kichwa.php";
require_once "PDOcon.php";
$DBConnection = new DBConnection();
$pdo = $DBConnection->getPDO();
?>
<body>
    <div class="div1">
        <h1>INPUT FORM</h1>
        <form action="" method="POST" autocomplete="off">
            <div class="div2">
                <label>Username:</label>
                <br>
                <input type="text" name="username" placeholder="Enter username" autofocus/>
            </div>
           
            <div class="div2">
                <label>Password:</label>
                <br>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            
            <div class="div2">
                <label>DOB:</label>
                <br>
                <input type="text" name="dob" placeholder="Enter date of birth">
            </div>
           
            <div class="div2">
                <label>Location:</label>
                <br>
                <input type="text" name="location" placeholder="Enter location">
            </div>

            <div class="div2">
                <label>Email:</label>
                <br>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="div2">
                <label>Gender:</label> <br>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
            </div>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    <div>

    </div>

    <?php
if(isset($_POST["submit"])){
    $username = addslashes(ucwords(strtolower($_POST["username"])));
    $email = $_POST["email"];
    $passsword = $_POST["password"];
    $dob = $_POST["dob"];
    $location = $_POST["location"];
    $gender = $_POST["gender"];

    $stm = $DBConnection->addUser($username, $passsword, $dob, $location, $email, $gender);

    if ($stm) {
        echo "USER ENTERED SUCCESSFULLY";
        header("Location: readFromDB.php");
    } else {
        echo "ANOTHER ANOMALY";
    }
}
    ?>
</body>
</html>