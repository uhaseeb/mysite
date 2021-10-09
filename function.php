<?php
$title = "Functions PHP";
include 'header.php';
function add($num1, $num2, &$num)
{
    $sum = $num1 +$num2;
    $num = $num +10;
    echo "Sum is:" . $sum;
    //echo "<br> Number is:" . $num;
    // the scope of the modifed num variable is only inside the function
    // but its value doenot change outside the function if we want to get the modified value even outside the
    //function then we have to pass the reference in the parameter
}
function changeNum(&$num)
{
    $num = $num + $num;
}
function multiply($num1, $num2)
{
    $prod = $num1 * $num2;
    return $prod;
}
$num=500;
add(10,20, $num);
echo "<br> Number is:" . $num;
changeNum($num);
echo "<br> Modified Number is:" . $num;
$returnvalue= multiply(10 , 20);
echo"<br> the product is:" . $returnvalue;
?>
