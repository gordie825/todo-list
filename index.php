<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>THINGS TO DO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="text-center mt-5 container">
        <div class="row">
            <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <form method="post" action="todo.php">
                        <div class="input-group mt-5 mb-3">
                            <input type="text" class="form-control" name="todo_input" placeholder="Item Todo " aria-label="Todo Item" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" name="submit" type="submit" id="button-addon2">
                                        Add Todo
                                    </button>
                                </div>
                        </div>
                    </form>
</body>
</html>