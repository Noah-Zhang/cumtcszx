<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>计算机学院部门申请</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
     padding-top: 50px;
   }
     .error {color: #FF0000;}
	
 </style>
</head>

    
<body> 



 
<?php


	$numberErr = "";
	$number = "";
	$flag = 1;


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    	if (empty($_POST["number"])) {
            $numberErr = "学号是必填的";
            $flag=2;
        
            } else {
            $number = test_input($_POST["number"]);
            // 检查学号是否有效
            if (strlen($number)<>8) {
                $numberErr = "请输入8位有效学号"; 
                $flag=3;
            } else $flag=0;
   	
        }
    }
    
	function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}


?>
    
    

    
	<div align="center">
        
        
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		学号：<input type="text" name="number">
    	<span class="error">* <?php echo $numberErr;?></span>
    	<br><br>  
    	<input type="submit" name="submit" value="查询"> 
    </form>

        
    <hr class="divider">
  	<footer>
    <p class="pull-right"><a href="index.html">返回首页</a></p>
    <p class="pull-left">©计算机学院新媒体工作室</p>
  	</footer>

    </div>
    

    
<?php 

if ($flag==0){
	
    $mysql = new SaeMysql();
	$sql = "select * from `BasicInfo` where number='$number'";
	$result=$mysql->getData($sql);
    echo is_null($result[0][0]);
    
    
    


    
	if ($mysql->errno() != 0){
    	die("Error:" . $mysql->errmsg());
    }
	$mysql->closeDb();
    

    
}


?>


    
</body>
</html>



