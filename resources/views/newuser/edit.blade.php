<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT-FORM</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
<body>
    <div class="div00">
    <div class="div1">
        <div>
            <?php
            if($errors->any())
            ?>
            <ul>
                <?php
                foreach($errors->all() as $error){
                ?><li><?php $error?></li> 
                <?php } ?>
            </ul>
        </div>
        <h1>INPUT FORM</h1>
        <hr>
        <form method="POST" action="{{ route('newUser.update', ['viewUserID' => $UserIDset]) }}" autocomplete="off">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="div2">
                <label>Username:</label>
                <br>   <!-- $userIDset is gotten from edit function in controller-->
                <input type="text" name="username" placeholder="Enter username" value="<?php echo $UserIDset->username?>" autofocus/>
            </div>
           
            <div class="div2">
                <label>Password:</label>
                <br>
                <input type="password" name="password" placeholder="Enter password" value="<?php echo $UserIDset->password ?>">
            </div>
            
            <div class="div2">
                <label>DOB:</label>
                <br>
                <input type="text" name="dob" placeholder="Enter date of birth" value="<?php echo $UserIDset->dob ?>">
            </div>
           
            <div class="div2">
                <label>Location:</label>
                <br>
                <input type="text" name="location" placeholder="Enter location" value="<?php echo $UserIDset->location ?>">
            </div>

            <div class="div2">
                <label>Email:</label>
                <br>
                <input type="email" name="email" placeholder="Enter email" value="<?php echo $UserIDset->email ?>">
            </div>
            <div class="div2">
                <label>Gender:</label> <br>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
            </div>
            <input type="submit" name="update" value="update">
        </form>
    </div>
    <div>

    </div>
</div>
</body>
</html>