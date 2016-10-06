<?

$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5); //创建一个关联数组
$json = json_encode($arr);//json 转换数组为json 结果：{"a":1,"b":2,"c":3,"d":4,"e":5}
echo "var json = {$json};"; //输出数组对象