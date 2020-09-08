<html>
   <head>
       
      <meta name="viewport" content="width=device-width, initial-scale=1">     
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   

<style>
body {font-family: Arial, Helvetica, sans-serif;}

input{
   width:100%;
   height:100%;
}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>

   </head>
   
   <body>

   <div class="navbar">
     <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
     <a href="#"><i class="fa fa-fw fa-calculator"></i> Scientific </a> 
     <a href="#"><i class="fa fa-fw fa-exchange"></i> Convertor </a>
   </div>
      
      <div>
         <br>         
      </div>

   <center>
      <form name="calculator">
         <table class="table table-responsive-md table-dark table-bordered" style="width:10%;height:10%;">
            <tr>
               <td colspan="4">
                  <input class="form-control" type="text" name="display" id="display"/>
               </td>
            </tr>
            <tr>
               <td><input class="btn btn-light" type="button" name="one" value="1" onclick="calculator.display.value += '1'"></td>
               <td><input class="btn btn-light" type="button" name="two" value="2" onclick="calculator.display.value += '2'"></td>
               <td><input class="btn btn-light" type="button" name="three" value="3" onclick="calculator.display.value += '3'"></td>
               <td><input class="btn btn-light" type="button" class="operator" name="plus" value="+" onclick="calculator.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input class="btn btn-light" type="button" name="four" value="4" onclick="calculator.display.value += '4'"></td>
               <td><input class="btn btn-light" type="button" name="five" value="5" onclick="calculator.display.value += '5'"></td>
               <td><input class="btn btn-light" type="button" name="six" value="6" onclick="calculator.display.value += '6'"></td>
               <td><input class="btn btn-light" type="button" class="operator" name="minus" value="-" onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input class="btn btn-light" type="button" name="seven" value="7" onclick="calculator.display.value += '7'"></td>
               <td><input class="btn btn-light" type="button" name="eight" value="8" onclick="calculator.display.value += '8'"></td>
               <td><input class="btn btn-light" type="button" name="nine" value="9" onclick="calculator.display.value += '9'"></td>
               <td><input class="btn btn-light" type="button" class="operator" name="times" value="x" onclick="calculator.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input class="btn btn-light" type="button" id="clear" name="clear" value="c" onclick="calculator.display.value = ''"></td>
               <td><input class="btn btn-light" type="button" name="zero" value="0" onclick="calculator.display.value += '0'"></td>
               <td><input class="btn btn-success" type="button" name="doit" value="=" onclick="calculator.display.value = eval(calculator.display.value)"></td>
               <td><input class="btn btn-light" type="button" class="operator" name="div" value="/" onclick="calculator.display.value += '/'"></td>
            </tr>
         </table>
      </form>
   </center>
   </body>
</html>