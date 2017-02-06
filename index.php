<?php
//define your variables heyah at ze top, but don't echo anything before the doctype
$username = 'ariel';
$favorite_number = 23;
$favorite_number ++;
$favorite_number += 10;
//define a really simple function

function todays_date(){
  echo '<br>';
  echo date('l, F, j, Y' );
  echo ' at ';
  echo date( ' h:i' );
}
function convert_timestamp($ugly){
  $date = new DateTime($ugly);
  //echo $date->format('l, F, jS, Y');
  //if echo was not present, it would not be spit out
  return $date->format('l, F, jS, Y');
}
function add_ten($number){
  return $number += 10;
}
//case sensitive - php variables are not camelcase '_' is more common
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Day_1 - My first PHP Stuff</title>
    <style type="text/css">
      body {
        font-family: sans-serif;
        color: teal;
      }
      .menu {
        background-color: darkgrey;
      }
      .menu li {
        display: inline-block;
        padding: .5em;
        list-style-type: none;
      }
      .menu a {
        text-decoration: none;
        color: lightcyan;
      }
      .menu a:hover {
        color: teal;
      }
    </style>
  </head>
  <body>
    <h1>Start Here>></h1>
    <?php include('nav.php'); ?>
<?php
//escape into the PHP realm
echo 'Hello, ' . $username;
echo '<br>Your Favorite Number is Now ' . $favorite_number;
# this a comment
// this is a comment
/* this is a comment*/
 ?>
 <br />
 <?php echo add_ten(1) + 5; ?>
 <br />
 <?php echo convert_timestamp('2017-02-03'); ?>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
