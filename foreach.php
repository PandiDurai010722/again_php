<?php 

$names =array('Mark','Pandi','Durai','Patrik','July');

foreach($names as $name){
  echo $name.'<br>';
}


$student=array(array('Name'=>'Mark','Age'=>15,'Weight'=>45),array('Name'=>'Jhone','Age'=>13,'Weight'=>65),array('Name'=>'Tom','Age'=>32,'Weight'=>89));

foreach($student as $stu){

   foreach($stu as $ans){
    echo $ans;
   }
}

?>