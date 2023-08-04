<?php 

$student=array(array('Name'=>'Mark','Age'=>15,'Weight'=>45),array('Name'=>'Jhone','Age'=>13,'Weight'=>65),array('Name'=>'Tom','Age'=>32,'Weight'=>89));

// print_r($student);
// echo '<br>';
// echo $student[0][2];
echo $student[0]['Name']." "; echo $student[0]['Age']." ";echo $student[0]['Weight'].'<br>';
echo $student[1]['Name']." "; echo $student[1]['Age']." ";echo $student[1]['Weight'].'<br>';
echo $student[2]['Name']." "; echo $student[2]['Age']." ";echo $student[2]['Weight'].'<br>';

?>