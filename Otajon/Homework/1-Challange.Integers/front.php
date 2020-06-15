<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integers</title>
</head>
<body>
<?php include "Integers.php"; ?>
   <div class="container-fluid">
       <table class="table table-bordered">
           <form method="GET" class="form1">
               <tr>
               <td>First Integer:</td>
               <td><input name="number1" type="number" value="<?=$a?>"></td>
               </tr>
               <tr>
                   <td>Second Integer:</td>
                   <td><input name="number2" type="number" value="<?=$b?>"></td>
               </tr>
               <tr>
                   <td>Third Integer:</td>
                   <td><input name="number3" type="number" value="<?=$c?>"></td>
               </tr>
               <td class="last_td" colspan="2">
                   <button class="btn btn-success" type="submit">Submit</button>
               </td>
           </form>
       </table>
       <div class="Result">
       <?php
       echo getMax($a, $b, $c); echo"<br>";
       echo getMin($a, $b ,$c); echo"<br>";
       echo getMiddle($a, $b ,$c); echo"<br>";
       ?>
       </div>
   </div>
<style>
  .table{
      text-align: center;
  }
    .Result{
        font-size: xx-large;
    }
    .container-fluid{
        width:800px;
        height:600px;
        background-color: whitesmoke;
        text-align: center;
        margin-left:200px;
        margin-top:0px;
    }
    body{
        background-color: antiquewhite;
    }
</style>
</body>
</html>
