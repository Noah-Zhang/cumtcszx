
<!DOCTYPE HTML> 
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	.error {color: #FF0000;}
    body{padding-bottom: 50px;}
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
        <li class="active"><a href="apply.php">申请<span class="sr-only">(current)</span></a></li>
        <li ><a href="query.php">查询</a></li>
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
  // 定义变量并设置为空值
  $nameErr = $numberErr = $genderErr = $telErr =$departmentErr= "";
  $name = $number = $tel = $gender =$department= "";
  
  //设置flag为错误变量
  $flag = 0;

    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
      if (empty($_POST["name"])) {
        $nameErr = "姓名是必填的";
        $flag=1;
      } else {
        $name = test_input($_POST["name"]);
        // 检查姓名是否包含字母和空白字符
        if (preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "不只允许字母和空格"; 
          $flag=2;
        }
      }
        
      if (empty($_POST["number"])) {
        $numberErr = "学号是必填的";
        $flag=3;
      } else {
        $number = test_input($_POST["number"]);
        // 检查学号是否有效
        if (strlen($number)<>8) {
          $numberErr = "请输入8位有效学号"; 
          $flag=4;
        }
      }

      if (empty($_POST["tel"])) {
        $telErr = "电话是必填的";
        $flag=5;
      } else {
        $tel = test_input($_POST["tel"]);
        // 检查电话是否有效
        if (strlen($tel)<>11) {
          $telErr = "无效的手机号码";
          $flag=6;
        }
      }
        
      if (empty($_POST["gender"])) {
        $genderErr = "性别是必选的";
        $flag=7;
      } else {
        $gender = test_input($_POST["gender"]);
      }
       
      if (empty($_POST["department"])) {
        $departmentErr = "部门是必选的";
        $flag=8;
      } else {
        $department = test_input($_POST["department"]);

      }

    }else{
      $flag=-1;
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <h2>计算机学院2015级部门招新申请</h2>
        <br>
        <p><span class="error">* 必需的字段</span></p>
      </div>
  </div>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form"> 
     
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">  
        <h3>基本信息</h3>
        姓名：<input type="text" name="name" >
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        学号：<input type="text" name="number">
        <span class="error">* <?php echo $numberErr;?></span>
        <br><br>
        电话：<input type="text" name="tel">
        <span class="error">* <?php echo $telErr;?></span>
        <br><br>
        性别：
        <input type="radio" name="gender" value="男">男性
        <input type="radio" name="gender" value="女">女性
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
      </div>
    </div>
      
      
      
    <!-- 部门选择 -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <h3>部门选择<span class="error">* <?php echo $departmentErr;?></span></h3>
        
        <h4>团委：</h4>
        <div class="radio"><input type="radio" name="department" value="11">组织部</div>
        <div class="radio"><input type="radio" name="department" value="12">宣教部</div>
        <div class="radio"><input type="radio" name="department" value="13">社团管理办公室</div>
        <h4>学生会：</h4>
        <div class="radio"><input type="radio" name="department" value="21">办公室</div>
        <div class="radio"><input type="radio" name="department" value="22">生活部</div>
        <div class="radio"><input type="radio" name="department" value="23">体育部</div>
        <div class="radio"><input type="radio" name="department" value="24">文艺部</div>
        <div class="radio"><input type="radio" name="department" value="25">外联部</div>
        <div class="radio"><input type="radio" name="department" value="26">女生部</div>
        <div class="radio"><input type="radio" name="department" value="27">宣传部</div>
        <div class="radio"><input type="radio" name="department" value="28">学习部</div>
        <h4>青年志愿者协会：</h4>
        <div class="radio"><input type="radio" name="department" value="31">实践部</div>
        <div class="radio"><input type="radio" name="department" value="32">外宣部</div>
        <div class="radio"><input type="radio" name="department" value="33">秘书部</div>
        <div class="radio"><input type="radio" name="department" value="34">奔腾特勤队</div>
        <div class="radio"><input type="radio" name="department" value="35">E线服务队</div>
        <h4>新闻传播中心：</h4>
        <div class="radio"><input type="radio" name="department" value="41">秘书部</div>
        <div class="radio"><input type="radio" name="department" value="42">新闻部</div>
        <div class="radio"><input type="radio" name="department" value="43">编辑部</div>
        <div class="radio"><input type="radio" name="department" value="44">新媒体</div>
        <h4>心理自助中心：</h4>
        <div class="radio"><input type="radio" name="department" value="51">办公室</div>
        <div class="radio"><input type="radio" name="department" value="52">団辅部</div>
        <div class="radio"><input type="radio" name="department" value="53">宣教部</div>
        <div class="radio"><input type="radio" name="department" value="54">编辑部</div>
        <h4>花海艺术团：</h4>
        <div class="radio"><input type="radio" name="department" value="61">花海艺术团</div>
        <br>
      </div>
    </div>
      
      
      
      
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
    <br>
      
  </form>
    
  <hr class="divider">
  <footer>
    <p class="pull-right"><a href="index.html">返回首页</a></p>
    <p>©计算机学院新媒体工作室</p>
  </footer>

    
    
        
  <?php
    if ($flag==0){
        
      //数据录入数据库
      
      $mysql = new SaeMysql();
  
      $sql = "INSERT  INTO `BasicInfo` ( `Number`, `Name`, `Gender`,`Tel`,`C_Department`) VALUES ('$number','$name','$gender','$tel','$department') ";
  
      $mysql->runSql($sql);
      if ($mysql->errno() != 0){
        die("Error:" . $mysql->errmsg());
      }
      $mysql->closeDb();
      
      
      //申请成功页面跳转
      $url  =  "http://cumtcszxphp.sinaapp.com/success.php" ;  
      echo " <script language = 'javascript'  type = 'text/javascript' > ";  
      echo " window.location.href = '$url' ";  
      echo " </script> ";  
      
  }
  ?>
</body>
</html>