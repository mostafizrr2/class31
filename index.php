<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JQuery</title>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>



<div class="container">
   <br><br>
   <div class="row">
       <div class="col-md-8 offset-md-2">

       <form action="action.php" method="post">
            <div class="form-group">
                <label for="">Number 1</label>
                <input name="number1" type="number" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Operator</label>
                <input name="operator" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Number 2</label>
                <input name="number2" type="number" class="form-control">
            </div>

            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>


       </div>
   </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



</body>
</html>