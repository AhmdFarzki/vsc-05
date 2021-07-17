<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E</title>
</head> 
    <h3>PHP Calculator</h3>
     <form method="post" action="index.php">
         <input name="number1" type="text" />
         <select name="operation">
          <option value="plus">+</option>
             <option value="minus">-</option>
             <option value="multiply">*</option>
             <option value="divided by">/</option>
         </select>
         <input name="number2" type="text" />
         <input name="submit" type="submit" value="Calculate" />
     </form>

     <?php
 

 if(isset($_POST['submit']))
 {
 // cek form 1 & 2
 if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
 {
 // hitung total
 if($_POST['operation'] == 'plus')
 {
 $total = $_POST['number1'] + $_POST['number2']; 
 }
 if($_POST['operation'] == 'minus')
 {
 $total = $_POST['number1'] - $_POST['number2']; 
 }
 if($_POST['operation'] == 'multiply')
 {
 $total = $_POST['number1'] * $_POST['number2']; 
 }
 if($_POST['operation'] == 'divided by')
 {
 $total = $_POST['number1'] / $_POST['number2']; 
 }
 
 echo "<p> The result is: {$total}</p>";
 
 } else {

 echo 'Masukan nilai yang benar';
 
 }
 }

 ?>

 
 </body>
</html>