<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>计算机学院部门申请查询</title>

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
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation"> 
    <div class="container-fluid">
      <div class="navbar-header">

       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="index.html">首页</a>
     </div>
     
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="apply.php">申请<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="query.php">查询</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">了解更多 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">团委</a></li>
            <li><a href="#">学生会</a></li>
            <li><a href="#">青协</a></li>
            <li><a href="#">新传</a></li>
            <li><a href="#">心助</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">花海艺术团</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>


 
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
    <p class="pull-right"><a href="index.html">返回首页&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
    <p class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;©计算机学院新媒体工作室</p>
  	</footer>

    </div>
    

    
<?php 

    $mysql = new SaeMysql();
  $sql = "select D_Name from `BasicInfo`,`DepartmentInfo` where number='$number' AND DepartmentInfo.D_Code=BasicInfo.C_Department";
  $mysql->setCharset(UTF8);
    $result=$mysql->getData($sql);
    echo '<br>';
    echo '学号：'.$number.'<br>';
    echo '已报部门：<br>';
    $len=sizeof($result);
    for($i=0;$i<$len;$i++){
        echo $result[$i][D_Name]."<br>";
    }
    
    


    
  if ($mysql->errno() != 0){
      die("Error:" . $mysql->errmsg());
    }
  $mysql->closeDb();
    

}


?>


    
</body>
</html>



