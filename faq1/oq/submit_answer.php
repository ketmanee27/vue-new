<?php 

include 'db_connect.php';

extract($_POST);
$points = 0;
foreach ($question_id as $key => $value) {
	$data = ' user_id = '.$user_id;
	$data .= ', quiz_id =  '.$quiz_id;
	$data .= ', question_id = "'.$question_id[$key].'" ';
	// ตรวจสอบว่ามี option_id หรือไม่ หากมีให้บันทึกข้อมูล option_id และ is_right ลงในฐานข้อมูล
	$is_right = 0;
	if(isset($option_id[$key])){
		$data .= ', option_id = "'.$option_id[$key].'" ';
		$is_right = $conn->query("SELECT * FROM question_opt where id = '".$option_id[$key]."' ")->fetch_array()['is_right'];
	}
	$data .= ', is_right = "'.$is_right.'" ';
	$insert = $conn->query("INSERT INTO answers set ".$data);

	// ถ้าบันทึกข้อมูลสำเร็จและคำตอบที่เลือกถูกต้อง ให้เพิ่มคะแนนให้กับผู้ใช้
	if($insert && $is_right > 0)
		$points++;
	// echo("INSERT INTO answers set ".$data);
}
// คำนวณคะแนน
$score = $points + $qpoints;
$total = count($question_id) + $qpoints;
	$data = ' quiz_id =  '.$quiz_id;
	$data .= ', user_id = '.$user_id;
	$data .= ', score =  '.$score;
	$data .= ', total_score =  '.$total;
	$insert2 = $conn->query("INSERT INTO history set ".$data);
	if($insert2)
	echo json_encode(array('status'=>1,'score'=>$score.'/'.$total));
?>