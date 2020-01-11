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

       <form action="">
            <div class="form-group">
                <label for="">Number 1</label>
                <input id="number1"  type="number" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Operator</label>
                <input id="operator" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Number 2</label>
                <input id="number2" type="number" class="form-control">
            </div>

            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
           
            <h1 id="get-result" style="float:right">
              result
            </h1>
        </form>


       </div>
   </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
  $(function(){
     $('#submit').click(function(e){

         // Stop page reload.
        e.preventDefault();
         
        var num1 = $('#number1').val();
        var num2 = $('#number2').val();
        var opr = $('#operator').val(); 
       
        $.ajax({
            url: "action.php",
            method: "POST",
            data : { 
                'number1' : num1,
                'number2' : num2,
                'operator' : opr,
             },


            success : function(res){
                  $('#get-result').html(res);
             },

        });  
        

     });  
  });
</script>

</body>
</html>