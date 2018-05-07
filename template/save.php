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
    <div class="row">
        <div class="col-8 offset-md-2">

            <form action="?action=save" method="POST">
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           id="inputName"
                           value=""
                           required>
                </div>
                <div class="form-group">
                    <label for="inputAge">Age</label>
                    <input type="text"
                           name="age"
                           class="form-control"
                           id="inputAge"
                           value=""
                           required>
                </div>
                <div class="form-group">
                    <label for="inputNumber">Phone</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           id="inputNumber"
                           value=""
                           required>
                </div>
                <div class="form-group">
                    <label for="inputRoom">Room</label>
                    <input type="text"
                           name="room"
                           class="form-control"
                           id="inputRoom"
                           value=""
                           required>
                </div>
                <div class="text-right">
                    <a href="./" class="btn btn-outline-primary">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>

</div>
</body>
</html>