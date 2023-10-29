<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW-USERS</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div>
        <?php
        if(session()->has('success')){
            ?><h2>
                {{session('success')}}
        </h2><?php
        }
        ?>
    </div>
<table border="1">
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>EMAIL</th>
        <th>LOCATION</th>
        <th>DOB</th>
        <th>GENDER</th>

        <?php
        foreach($viewFormVal as $separateUSER){
            ?> <tr>
                <td><?php echo $separateUSER->id ?></td>
                <td><?php echo $separateUSER->username ?></td>
                <td><?php echo $separateUSER->password ?></td>
                <td><?php echo $separateUSER->dob ?></td>
                <td><?php echo $separateUSER->location ?></td>
                <td><?php echo $separateUSER->email ?></td>
                <td><?php echo $separateUSER->gender ?></td>
                <td>
                <a href="{{ route('newUser.edit', ['viewUserID' => $separateUSER]) }}"><button class="button1">EDIT</button></a>
                </td>
                <td>
                    <!-- A form is needed to come up with a delete button -->
                <form method="POST" action="{{ route('newUser.delete', ['viewUserID' => $separateUSER]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="button2">DELETE</button>
                </form>
                </td>
                </tr>
        <?php } 
        ?>
    </tr>
</body>
</html>