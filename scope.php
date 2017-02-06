<?php
$number = 23;
function add_ten($num){
  return $num += 10;
}
$number = add_ten($number);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scope Stuffs</title>
  </head>
  <body>
<?php echo add_ten($number); ?>
  </body>
</html>
