<?php
$name = "";
$gender = "";
$education = "";
$maleChecked = "";
$femaleChecked = "";
$educationz = array();
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$city = $_POST['city'];
	
	if(isset($_POST['gender'])){
	$gender = $_POST['gender'];
	if($gender == 'male'){
		$maleChecked = "checked='checked'";
	}if($gender == 'female'){
		$femaleChecked = "checked='checked'";
	}
	}
	
	if(isset($_POST['education'])){
	$educationz = $_POST['education'];
	$education = implode(', ', $educationz);
	}
	
	echo "Name : $name<br>";
	echo "Gender : $gender<br>";
	echo "City : $city<br>";
	echo "Education : $education<br>";
}
?>


<form action="" method='post'>
Name : <input type='text' name='name' value='<?php echo $name;?>'><br>
Gender : Male <input type='radio' name='gender' value='male' <?=$maleChecked;?>> Female <input type='radio' name='gender' value='female' <?=$femaleChecked;?>><br>
Select City : <select name='city'>
<?php
$cityArr = ['Faisalabad', 'Lahore', 'Islamabad', 'Peshawar', 'Sialkot', 'Karachi'];
forEach($cityArr as $cities){
$isSelected = "";
if($cities == $city){
$isSelected = "selected";
}
echo "<option $isSelected value='$cities'>$cities</option>";
}
?>
</select><br>
Education : 
<?php
$educationArr = array('Matic', 'FSc', 'BCom', 'ICom','BTech');
forEach($educationArr as $educations){
	if(in_array($educations, $educationz)){
	echo "$educations <input type='checkbox' value='$educations' name='education[]' checked> ";
	}else{
	echo "$educations <input type='checkbox' value='$educations' name='education[]'> ";
	}
}
?>
<br><input type="submit" name='submit'>
</form>