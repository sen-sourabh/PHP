<?php
$data = json_decode(file_get_contents("php://input"));
if(isset($data->sum)){
	$num1 = $data->num1;
	$num2 = $data->num2;
	$result = $num1 + $num2;
}else if(isset($data->mul)){
	$num1 = $data->num1;
	$num2 = $data->num2;
	$result = $num1 * $num2;
}else if(isset($data->sub)){
	$num1 = $data->num1;
	$num2 = $data->num2;
	$result = $num1 - $num2;
}else if(isset($data->div)){
	$num1 = $data->num1;
	$num2 = $data->num2;
	$result = $num1 / $num2;
}
echo "Result : ".$result;

?>