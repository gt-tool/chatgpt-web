<!DOCTYPE html>
<html>
<head>
    <title>修改密码</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 引入Bootstrap CSS框架 -->
  	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min2.css">
    		<link rel="stylesheet" href="/css/index.css">
    
    	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    
    

<style>

a {
  text-decoration: none!important;
}


.dha a:active {
    background-color: unset!important; 
  /*background: unset!important;*/
  color:unset!important;
}


.page-title {
    
        width: 850px;
    margin: 0 auto;
    
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
  background-color: black!important;
  color: #fff;
  padding: 0 20px;
}

.user-info {
  display: flex;
  align-items: center;
}

.avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}

.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


.dropdown-toggle {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.ftth{
    background:black!important;    
    background: black!important;
    left: 0;
    bottom: 0;
    width: 100%;
}

@media (max-width: 768px) {
  .page-title {
    width: 100%;
  }
  
  .ftth{
    background:black!important;    
    background: black!important;
    position: unset;
    left: 0;
    bottom: 0;
    width: 100%;
}
  
}


html, body {
  height: 100%!important;
}

body {
  display: flex!important;
  flex-direction: column!important;
}

.content {
  flex-grow: 1!important;
}




</style>
	
        
    
    
    <div style="    background-color: black!important;">



<div class="page-title">
  <h4><a style="color: white;    font-size: 20px;" href="/" class="el-tooltip el-icon-s-home item" aria-describedby="el-tooltip-9813" tabindex="0"></a> <span style="    font-size: 15px;"><a style="color:white;" href="index.php">返回首页</a></span></h4>
  <div class="user-info">
    <div class="dropdown">
      <a  style="color:white;" class="dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img style="width:50px;height:50px;left: -5px;
    position: relative;" src="/assets/pic.png" alt="avatar" class="rounded-circle">
        <span style="color:white;"><?php echo $_COOKIE['dengluname'];?></span>
      </a>
      <div style="min-width: 8rem;" class="dropdown-menu dha" aria-labelledby="userDropdown">
          
          
        <a class="dropdown-item" href="/taocan.php">购买套餐</a>
        <a class="dropdown-item" href="/yaoqing.php">邀请好友(可提现)</a>
        <a class="dropdown-item" href="/index.php?tcdl=1">退出登录</a>
      </div>
  
      
    </div>
    
    
    
  </div>
</div>


    
    </div>
    
    
        
        

    
        
	<div class="container content">
	    


	    
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
			    

		<br>	    
			    
			    
				<div class="card">
    
        <div class="container mt-5" style="    margin-bottom: 25px;">
        <h1 class="text-center mb-4">修改密码</h1>

            <div class="form-group">
                <label for="oldPassword">旧密码</label>
                <input type="password" class="form-control jiumima" id="oldPassword" placeholder="请输入旧密码">
            </div>
            <div class="form-group">
                <label for="newPassword">新密码</label>
                <input type="password" class="form-control xinmima" id="newPassword" placeholder="请输入新密码">
            </div>
            <div class="form-group">
                <label for="confirmPassword">确认密码</label>
                <input type="password" class="form-control chongfuxinmima" id="confirmPassword" placeholder="请再次输入新密码">
            </div>
            <button  class="btn btn-primary qdxg">确认修改</button>
            <a href="taocan.php" class="btn btn-secondary">返回</a>
   
    </div>
    
    
         </div>
    </div>
  </div>
      </div>
    
    
    	<br>			<br>			<br>
    	
	<footer class="bg-dark text-light py-3 ftth" style="">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Chatgpt用户中心</h5>
        <p>这是你的用户中心页面，你可以再次页面购买套餐和修改密码等操作！</p>
      </div>
      <div class="col-md-3">

      </div>
      <div class="col-md-3">
        <h5>联系方式</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt"></i>有问题联系网站客服！</li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 ChatGPT中文版. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

    
<script>
    

    
      $('.qdxg').click(function(event){
          




        var xinmima =  $('.xinmima').val();

        var jiumima =  $('.jiumima').val();
        
        var chongfuxinmima =  $('.chongfuxinmima').val();

        if(jiumima == '' || xinmima == ''){
            alert('请将表单填写完整');
             event.stopImmediatePropagation();
                return false;         
        }
        
        if(chongfuxinmima == ''){
            alert('请将表单填写完整');
             event.stopImmediatePropagation();
                return false;         
        }
        
        
        if(xinmima != chongfuxinmima){
             alert('两次密码输入不一致');
             event.stopImmediatePropagation();
                return false;    
        }
        

        

         $.ajax({
              url: '/tool/ajax.php', // 提交订单的后端接口
              type: 'POST',
              dataType: "json",
              data: {
                jiumima: jiumima,
                xinmima: xinmima,
                yonghu:"<?php echo $_COOKIE['dengluname'];?>",
                'biaoshi' : '修改密码',
              },
              success: function(response) {
                // 处理成功响应
        
        
                 if(response.zt == '1'){
                              alert(response.nr);
                             event.stopImmediatePropagation();
                             return false;
                        }else{
                             alert(response.nr);
                             event.stopImmediatePropagation();
                             return false;
                        }
        
        
        
        
              },
        
        
        
            });
        
        
      });
    

</script>
    



<script src="/assets/popper.min.js"></script>
<script src="/assets/bootstrap.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>