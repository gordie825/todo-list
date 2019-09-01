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


                    <?php
                        // Session Super Global
                            if(!empty($_SESSION['todo'])){
                                // Current Date Initialization
                                $date = date('Y-m-d');
                                // ForEach For Loop Starts
                                foreach($_SESSION['todo'] as $key => $value){
                                    // Displaying All The Items In A Div And In A Bootstrap Alert Box
                                    echo '<div class="alert alert-light border shadow-sm pb-4">';
                                    echo "<li>".$value['todo_item']." ".$date.
                                    '<a class="btn btn-danger float-right" href="index.php?to='. $key.'&action=delete">Delete</a>'."</li><br>";
                                    echo '</div>';
                                    // End Of Displaying Items
                                }
                                // End ForEach For Loop
                            }
                        // End Session Super Global    
                        ?>
                        </div>
                <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>