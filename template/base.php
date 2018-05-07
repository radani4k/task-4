<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Lesson 4</title>
</head>
<body>
<div class="container">
    <h1>Lesson 4</h1>
    <br>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Age</th>
            <th>Telephone Number</th>
            <th>Room</th>
            <th>Control panel</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $item => $user): ?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['age']?></td>
                <td><?php echo $user['phone']?></td>
                <td><?php echo $user['room']?></td>
                <td width="160">
                    <a href="./?action=edit&id=<?php echo $item?>">Edit</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="./?action=delete&id=<?php echo $item?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="?action=add" class="btn btn-primary">Add user</a>
    <br>

</div>
</body>
</html>