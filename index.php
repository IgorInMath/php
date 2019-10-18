<?php

/*
$gg = array('date' => '2019-03-19');
if(isset($gg['date']))
	$da = date('Y-m-d');
$sql = sprintf('SELECT * FROM weather WHERE day = "%s"', $da);
echo $sql;
*/
/*
function is_leap_year($year) { 
$p1 = ($year % 4 == 0);
$p2 = (($year % 100 == 0) and 
        ($year % 400 == 0));
if($p1 or $p2)
    return ' - високос';
return ' - простой';
}

$year = 2036; 
$res = is_leap_year($year);

print('Год ' . $year . $res);
*/

/*
$va = ['a','b','c'];
$va2 = ['a' =>1, 'b'=>2, 'c'=>[1,2,3]];
if (!isset($va2)){
    print('No!');
    return;
}
foreach($va2 as $k=>$v){
   if(is_array($v)) 
     foreach($v as $k2)
        print($k2);
   else
    print($v);
    
}
*/
?>