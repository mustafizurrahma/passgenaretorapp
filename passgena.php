<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Random Strong Password Genaretor</title>
</head>
<body>
<?php
$all_key = array(
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'q', 's', 't', 'u', 'v', '', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '5', '6', '7', '8', '9', '0', 'Q', 'W', '', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'L', 'K', 'J', 'H', 'G', 'F', 'D','S', 'A', 'Z', 'X', 'C', 'V', 'B', 'N', 'N', 'M',
);

$length = array(8, 9,10,11,12,13,14,15);

shuffle( $length );

$final_pass = $length[0];
echo "\n";
echo "<span class='password'> Password length : =>  $final_pass</span>";

$str = "";
for ( $i = 0; $i < $final_pass; $i++ ) {
    shuffle( $all_key );
    $str .= $all_key[0];

}
echo "<span class='strong'> Your Strong Password Is : => $str</span>";
?>

</body>
</html>