<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style type="text/css">
    	div{
		}
        
		.H1{
			font-size:23px;/*设置文字字号为12px*/
            color:red;
		}
        

	</style>
</head>
    
    
<?php

	$mysql = new SaeMysql();
//团委
	$sql ="select count(*) from `BasicInfo` where C_Department='11'";
	$data11=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='12'";
	$data12=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='13'";
	$data13=$mysql->getVar($sql);
//学生会
	$sql ="select count(*) from `BasicInfo` where C_Department='21'";
	$data21=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='22'";
	$data22=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='23'";
	$data23=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='24'";
	$data24=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='25'";
	$data25=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='26'";
	$data26=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='27'";
	$data27=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='28'";
	$data28=$mysql->getVar($sql);
//青协
	$sql ="select count(*) from `BasicInfo` where C_Department='31'";
	$data31=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='32'";
	$data32=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='33'";
	$data33=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='34'";
	$data34=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='35'";
	$data35=$mysql->getVar($sql);
//新传
	$sql ="select count(*) from `BasicInfo` where C_Department='41'";
	$data41=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='42'";
	$data42=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='43'";
	$data43=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='44'";
	$data44=$mysql->getVar($sql);
//心助
	$sql ="select count(*) from `BasicInfo` where C_Department='51'";
	$data51=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='52'";
	$data52=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='53'";
	$data53=$mysql->getVar($sql);
	$sql ="select count(*) from `BasicInfo` where C_Department='54'";
	$data54=$mysql->getVar($sql);
//艺术团
	$sql ="select count(*) from `BasicInfo` where C_Department='61'";
	$data61=$mysql->getVar($sql);
//



	if ($mysql->errno() != 0){
    	die("Error:" . $mysql->errmsg());
    }
	$mysql->closeDb();

?>

    
    
    
    
<body>
    
    <!--配适屏幕-->
    <div class="haha">
        
        
        <!--插入图片文字-->      
        <div align="center">
            <div class="picture">
                <img src="img/success.png"/>
            </div>
        	<p align="center" class="H1" >报名申请已提交</p>
        </div>
                
        <!--表格--> 
        <div align="center">
            <table align="center" class="table-striped" >
            <thead align="left">
            <tr>
                <th>   </th>
                <th>  部门</th>
                <th>已报/名额</th>
            </tr>
            </thead>
                
            <tbody>
            <!--团委-->
            <tr>
                <td>团委</td>
                <td>组织部</td>
                <td><?php echo $data11;?>/12</td>
            </tr>
            <tr>
                <td>   </td>
                <td>宣教部</td>
                <td><?php echo $data12;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>社团管理办公室</td>
                <td><?php echo $data13;?>/80</td>
            </tr>
            
            <!--学生会-->
            <tr>
                <td>学生会</td>
                <td>办公室</td>
                <td><?php echo $data21;?>/12</td>
            </tr>
            <tr>
                <td>   </td>
                <td>生活部</td>
                <td><?php echo $data22;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>体育部</td>
                <td><?php echo $data23;?>/80</td>
            </tr>
            <tr>
                <td>   </td>
                <td>文艺部</td>
                <td><?php echo $data24;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>外联部</td>
                <td><?php echo $data25;?>/80</td>
            </tr>
            <tr>
                <td>   </td>
                <td>女生部</td>
                <td><?php echo $data26;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>宣传部</td>
                <td><?php echo $data27;?>/80</td>
            </tr>
            <tr>
                <td>   </td>
                <td>学习部</td>
                <td><?php echo $data28;?>/85</td>
            </tr>
            <!--青协-->
            <tr>
                <td>青协</td>
                <td>实践部</td>
                <td><?php echo $data31;?>/12</td>
            </tr>
            <tr>
                <td>   </td>
                <td>外宣部</td>
                <td><?php echo $data32;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>秘书部</td>
                <td><?php echo $data33;?>/80</td>
            </tr>
            <tr>
                <td>  </td>
                <td>奔腾特勤队</td>
                <td><?php echo $data34;?>/12</td>
            </tr>
            <tr>
                <td>   </td>
                <td>E线服务队</td>
                <td><?php echo $data35;?>/85</td>
            </tr>
                
            <!--新传-->
            <tr>
                <td>新传</td>
                <td>秘书部</td>
                <td><?php echo $data41;?>/12</td>
            </tr>
            <tr>
                <td>   </td>
                <td>新闻部</td>
                <td><?php echo $data42;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>编辑部</td>
                <td><?php echo $data43;?>/80</td>
            </tr>
            <tr>
                <td>  </td>
                <td>新媒体</td>
                <td><?php echo $data44;?>/12</td>
            </tr>
        
            <!--心自助-->
            <tr>
                <td>心助</td>
                <td>办公室</td>
                <td><?php echo $data51;?>/12</td>
            </tr>
            <tr>
                <td>   </td>
                <td>团辅部</td>
                <td><?php echo $data52;?>/85</td>
            </tr>
            <tr>
                <td>   </td>
                <td>宣教部</td>
                <td><?php echo $data53;?>/80</td>
            </tr>
            <tr>
                <td>  </td>
                <td>编辑部</td>
                <td><?php echo $data54;?>/12</td>
            </tr>
        
            <!--心自助-->
            <tr>
                <td>花海艺术团 </td>
                <td> </td>
                <td><?php echo $data61;?>/12</td>
            </tr>
            </tbody>
            </table>
        </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                 <button class="btn btn-block" type="button"><a href="query.php">继续申请</a></button>
            </div>
        </div>
    </div>
    </div>
    <hr class="divider">
  	<footer>
    <p class="pull-right"><a href="index.html">返回首页&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
    <p class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;©计算机学院新媒体工作室</p>
  	</footer>

</body>
</html>