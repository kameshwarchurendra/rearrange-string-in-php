<?php 
#Rearrange  repeated chararcter
function arrangestring($input){
 $charCount=array_count_values(str_split($input));
    arsort($charCount);
    $result='';
    $lastchar='';

    while(!empty($charCount)){
        foreach($charCount as $char => $count){
            if($char!=$lastchar){
              $result .=$char;
              $charCount[$char]--;
              if($charCount[$char]==0){
                unset($charCount[$char]);

              }
              $lastchar =$char;
              break;

            }

        }
    }
    return $result;

} 
$string="aaaabbbc";
$output= arrangestring($string);
echo $output;
?>