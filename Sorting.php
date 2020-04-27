<?php 
$result_newarray = array();           
 array_multisort (array_column($result_newarray, 'distance'), SORT_ASC, $result_newarray);
echo '<pre>';
print_r($result_newarray);
exit;
