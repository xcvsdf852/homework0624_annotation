<?php
  header("Content-Type:text/html; charset=utf-8");
  $x = getdate(); //用Array方式取得訊息
  echo gettype($x), "<br>";//array  取得變數目前型態
  // var_dump($x);
  echo "<hr>";
  
  $x = date('Y-m-d H:i:s');//date(format,timestamp)format必需。规定时间戳的格式。
  echo $x, "<br>";         //timestamp 沒寫表示目前時間
  echo gettype($x), "<br>";//string
  
  // format
  // d - 表示月里的某天（01-31）
  // m - 表示月（01-12）
  // Y - 表示年（四位数）
  // 1 - 表示周里的某天
  
  //如果从代码返回的不是正确的时间，有可能是因为您的服务器位于其他国家或者被设置为不同时区。
  date_default_timezone_set("Asia/Shanghai");
  echo "目前時間是 " . date("h:i:sa");
  echo "<hr>";
  
  $x = gmdate('Y-m-d H:i:s');//返回的时间是格林威治标准时（GMT）
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));//函数将任何英文文本的日期时间描述解析为 Unix 时间戳
  echo $x, "<br>";//1466705186  自 January 1 1970 00:00:00 GMT 起的秒数
  echo gettype($x), "<br>";
  
  echo "<hr>";
  echo(strtotime("now"));
  echo "<br>";
  echo(strtotime("3 October 2005"));
  echo "<br>";
  echo(strtotime("+5 hours"));
  echo "<br>";
  echo(strtotime("+1 week"));
  echo "<br>";
  echo(strtotime("+1 week 3 days 7 hours 5 seconds"));
  echo "<br>";
  echo(strtotime("next Monday"));
  echo "<br>";
  echo(strtotime("last Sunday"));
  
  
  //若要做到跨國處理時間，建議儲存格林威治時間
  //然後再根據不同的區域進行轉換
  /*
  array
  2016-06-23 06:47:47
  string
  2016-06-23 06:47:47
  1466664467
  integer
  
  

array(11) {
  'seconds' =>
  int(42)
  'minutes' =>
  int(48)
  'hours' =>
  int(6)
  'mday' =>
  int(23)
  'wday' =>
  int(4)
  'mon' =>
  int(6)
  'year' =>
  int(2016)
  'yday' =>
  int(174)
  'weekday' =>
  string(8) "Thursday"
  'month' =>
  string(4) "June"
  [0] =>
  int(1466664522)
}

  
  
  */
  
?>