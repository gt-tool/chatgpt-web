<?php

require('./lib/init.php');


if(empty(uacc())){
    echo '<script>alert("未登录");location.href = "huihua.php";</script>';
    exit();
}

if($_GET['xxcx'] == '1'){
    $sql = 'select * from chat_huitutaocan';
    $sytc = $mysql->getAll($sql);
    print_r(json_encode($sytc));
    exit();
}
if($_GET['biaoshi'] == '获取提示'){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    $file = $dangqianlj.'admin/ddtanchuang.php';
    $sql = 'select sfkqddts from chat_admin where id = 1';
    $sfkqtc = $mysql->getOne($sql);
    if($sfkqtc == '1'){
        require($file);
        exit();
    }else{
        echo '';
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>GPT套餐购买</title>
	<!-- 引入Bootstrap框架 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
		    

	
	
	<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/bootstrap.min2.css">
		<script type="text/javascript" src="jquery.js"></script>
		<link rel="stylesheet" href="/css/index.css">
		
		
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
    /*position: fixed;*/
    left: 0;
    bottom: 0;
    width: 100%;
}

@media (max-width: 768px) {
  .page-title {
    width: 100%;
  }
  
  .ftth{
    background:black!important;    background: black!important;
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

</head>
<body>
    

    <div class="content" style="    background-color: black!important;">



<div class="page-title">
  <h4><a style="color: white;    font-size: 20px;" href="/" class="el-tooltip el-icon-s-home item" aria-describedby="el-tooltip-9813" tabindex="0"></a> <span style="    font-size: 15px;"><a style="color:white;" href="huihua.php">返回绘画</a></span></h4>
  <div class="user-info">
    <div class="dropdown">
      <a  style="color:white;" class="dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img style="width:50px;height:50px;left: -5px;
    position: relative;" src="/assets/pic.png" alt="avatar" class="rounded-circle">
        <span style="color:white;"><?php echo $_COOKIE['dengluname'];?></span>
      </a>
      <div style="min-width: 8rem;" class="dropdown-menu dha" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/xiugaimima.php">修改密码</a>
        <a class="dropdown-item" href="/yaoqing.php">邀请好友(可提现)</a>
        <a class="dropdown-item" href="/huihua.php?tcdl=1">退出登录</a>
      </div>
    </div>
  </div>
</div>


    
    </div>
    
    
	<div class="container content">
	    


	    
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
			    

		    
			    
			    <?php
			    
			    $sql = "select kamikaqim from chat_admin where id = 1";
			    $sfkqkm = $mysql->getOne($sql);
			    
			    
			    if($sfkqkm == '开启'){
			        echo '	<div class="card" style="display:;">';
			    }else{
			        echo '	<div class="card" style="display:none;">';
			    }
			    
			    ?>
			    
			    
			 
				    
				    
		<div>
			<div style="     background: linear-gradient(to right, #03A9F4, #00BCD4);" class="card-header bg-primary text-white">
						<h4 class="card-title">使用卡密充值</h4>
					</div>			
	<div class="card-body">
					    

<div class="mb-3">
								<label for="name" class="form-label">充值账号</label>
								<input disabled type="text" class="form-control" id="namezh" required value="<?php echo $_COOKIE['dengluname'];?> ">
							</div>

<div class="mb-3">
								<label for="name" class="form-label">卡密内容</label>
								<input type="text" class="form-control kmnr" required="" value="">
							</div>
    
    <button type="submit " class="btn btn-primary kmczye">充值</button>
    
    
 
    
    
    
   <br> <br>
<p>卡密购买链接:

<?php

$sql = "select kamilj from chat_admin where id = 1";
$kaml = $mysql->getOne($sql);

?>

<a href="<?php echo $kaml;?>">点我打开</a>




</p>



</div>



</div>

</div>

		<br>	 

		    
				<div class="card">
				    
				    
				    
					<div style="     background: linear-gradient(to right, #03A9F4, #00BCD4);" class="card-header bg-primary text-white">
						<h4 class="card-title">Midjourney Ai绘画点数 套餐购买</h4>
					</div>
					<div class="card-body">
						<form>
						    
							<br>
							
						<p><b>下单后会自动给你账号充值，然后你就可以到网站使用Ai绘画!</b></p>
				
						<p>对接的超强Ai绘画模型-Midjourney<a target="_blank" href="./assets/aihys.jpg">👉Ai绘画演示点我</a></p>
				
				
				
				    <?php
				    

	$yhm = $_COOKIE['dengluname'];
	
	
	if($yhm != ''){
	    


        $sql = "select huihuacs from chat_yonghu where yhmc='$yhm'";
        $huihuacs = $mysql->getOne($sql);
        
        if($huihuacs != '0'){
            echo '<p>你的剩余绘画次数:<b>'.$huihuacs.'</b></p>';
        }else{
            echo '<p><b style="color:red;">当前你的套餐已到期或未购买 请先购买！</b></p>';
        }
    
			

	
	
	
	
	//判断是否有余额
	$sql = "select ketixian from chat_yonghu where yhmc='$yhm'";
	$ketx = $mysql->getOne($sql);
	
	
	if($ketx != '0'){
	    echo '<p><b style="color:red;">你通过邀请好友获得剩余的余额：<span class="yaye">'.$ketx.'</span>元</b> 你可以用此余额开通套餐！</p>';
	}
	
	
	
	    
	}

   

		    
				    ?>
				
						
						
									
							
				      <?php
          
$sql = "select sfkqaihh from chat_admin where id = 1";
$sfkqaihh = $mysql->getOne($sql);


$sql = "select sfkqgpt4 from chat_admin where id = 1";
$sfkqgpt4 = $mysql->getOne($sql);

         if($sfkqgpt4 == '开启'){
             
             
             
                         echo '<div class="mb-3">
								<label for="payment" class="form-label">*选择套餐类型(以下均不通用)</label>
							
						
						
							
							<div class="form-check">		      
								<input  required="" class="form-check-input chatgpt3" type="radio">
								
								<label class="form-check-label" for="">
										ChatGPT Plus提问次数
									</label></div>
									
						
						
								<div class="form-check">		      
								<input  required="" class="form-check-input chatgpt4" type="radio" >
								
								<label class="form-check-label" for="">
										ChatGPT4.0 Plus提问次数
									</label></div>
									
									
				
							<div class="form-check">		
								<input  class="form-check-input aihty" type="radio" checked>
								
								<label  class="form-check-label" for="">
										Ai绘图次数-Midjourney模型
									</label>	</div>									
							
							
							</div>';
             
             
         
         }else{
             
             
                echo '<div class="mb-3">
								<label for="payment" class="form-label">*选择套餐类型(以下均不通用)</label>
							
						
						
							
							<div class="form-check">		      
								<input  required="" class="form-check-input chatgpt3" type="radio">
								
								<label class="form-check-label" for="">
										ChatGPT Plus提问次数
									</label></div>
									
						
						
						<div class="form-check">		
								<input  class="form-check-input aihty" type="radio" checked>
								
								<label  class="form-check-label" for="">
										Ai绘图次数-Midjourney模型
									</label>	</div>		
										
							
							
							</div>';
         }
          
          ?>
		
					
					
						
						<div class="mb-3" style="display:none;">
								<label for="name" class="form-label">充值账号</label>
								<input disabled type="text" class="form-control" id="name" required value="<?php echo $_COOKIE['dengluname'];?>">
							</div>
						
						
						
							<div class="mb-3">
								<label for="package" class="form-label">*选择套餐价格</label>
								<select class="form-select" id="package" required>
									<option value="">请选择</option>
						
						
						<?php
						
						
						$sql = 'select * from chat_huitutaocan';
						
                        $sytc = $mysql->getAll($sql);
    

						foreach ($sytc as $k => $value) {
						    
						    
						    echo '<option value="'.$k.'">套餐'.($k+1).':Ai绘图'.$value['taocangedu'].'次--'.$value['taocanjiage'].'元 限时特惠</option>';
			
					  
						}
						
				
						?>
						
						
									
								</select>
							</div>
							
							
				
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							<div class="mb-3">
								<label for="payment" class="form-label">*支付方式</label>
							
						
									
									<?php
									
									$sql = "select zffs from chat_admin where id = 1";
                                    $zzfs = $mysql->getOne($sql);
                                    									
									if($zzfs == '支付宝'){
									    echo '	<div class="form-check"><input required checked class="form-check-input" type="radio" name="payment" id="alipay" value="alipay" required><label class="form-check-label" for="alipay" >
										支付宝支付
									</label>	</div>';
									}else if($zzfs == '微信'){
									      echo '
								<div class="form-check">	<input required checked class="form-check-input" type="radio" name="payment" id="wxpay" value="wxpay" required><label class="form-check-label" for="wxpay" >
										微信
									</label>	</div>';
									}else{
									      echo '
							<div class="form-check">		      
								<input required checked class="form-check-input" type="radio" name="payment" id="alipay" value="alipay" required>
								
								<label class="form-check-label" for="alipay" >
										支付宝支付
									</label></div>
							<div class="form-check">		
								<input required class="form-check-input" type="radio" name="payment" id="wxpay" value="wxpay" >
								
								<label class="form-check-label" for="wxpay" >
										微信支付
									</label>	</div>';
									}
									
									
									
									
									
									
									
									if($ketx != '0'){
									    echo '
								<div class="form-check">	<input required checked class="form-check-input" type="radio" name="payment" id="yuecz" value="yuecz" required><label class="form-check-label" for="yuecz" >
										余额充值
									</label>	</div>';
									}
									
									
									
									
									
									
									
									?>
									
									
									
									
									
									
							
							</div>
							
							
							
							
							
							
							
							
							
							
							
							
							<div class="mb-3">
								<label for="amount" class="form-label">支付金额</label>
								<input type="text" class="form-control" id="amount" readonly>
							</div>
							<button type="submit" class="btn btn-primary tjdd">提交订单</button>
						</form>
		
						
					</div>
					
					
					
					
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
        <p>这是你的用户中心页面！</p>
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

	
	
	
	
<style>
    .card-title {
    margin-bottom: 0px;
}

.mt-5 {
    margin-top: 1rem!important;
}
</style>

<script src="/assets/popper.min.js"></script>
<script src="/assets/bootstrap.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

			
					<script>

				
				
					    $('.chatgpttz').click(function(){
					        
					        $(".chatgpttz").prop("checked", false);
					        
					      window.location.href = "taocan.php";
					        
					    });
					    
					    
					    
					        $('.chatgpt4').click(function(){
					        
					        $(".chatgpt4").prop("checked", false);
					        
					      window.location.href = "gpt4taocan.php";
					        
					    });
					    
					    
					    	        $('.chatgpt3').click(function(){
					        
					        $(".chatgpt3").prop("checked", false);
					        
					      window.location.href = "taocan.php";
					        
					    });
	 
					    
					    
					    
					    
					</script>
					

<script>





$(function() {
            
   
         
            
$('.kmczye').click(function(){
    

                 $('.kmczye').html('正在充值...');    
                
                var account = $('#namezh').val(); // 获取充值账号
                var kmnr = $('.kmnr').val();
                
                if(kmnr == ''){
                    alert('卡密不能为空');
                       event.stopImmediatePropagation();
                 return false;
}

                
$.ajax({
      url: 'tool.php', // 提交订单的后端接口
      type: 'POST',
      data: {
        account: account,
        kaminr:kmnr,
        'biaoshi' : '卡密充值额度',
      },
      success: function(response) {
          
          
        if(response == 0){
              alert('充值失败 联系管理员');
               $('.kmczye').html('充值');  
               event.stopImmediatePropagation();
                 return false;
            
          }
          
          
          if(response == 2){
              alert('卡密不存在');
               $('.kmczye').html('充值');  
               event.stopImmediatePropagation();
                 return false;
            
          }
 
 
    if(response == 3){
              alert('卡密已经使用');
               $('.kmczye').html('充值');  
               event.stopImmediatePropagation();
                 return false;
            
          }
    
 
          
           
 if(response == 5){
              alert('充值提问次数成功');
              
               $('.kmczye').html('充值');  
                       location.reload();      
               event.stopImmediatePropagation();
                 return false;
            
          } 
          


      },
      error: function(xhr, status, error) {
        // 处理错误响应
        
        alert('充值失败：' + error);
          
             $('.kmczye').html('充值');  
      }
    });
    
    
            });
        
        
        });


var datasj;	
$.ajax({
  url: "/taocanht.php?xxcx=1",
  type: "GET",
  async: false,
  success: function(data) {
      
      datasj = JSON.parse(data);
  },
  error: function(xhr, status, error) {
    console.log("Error: " + error);
  }
});
	

      	// 根据套餐选择更新支付金额
document.getElementById('package').addEventListener('change', function() {

			var amount = 0;
			if (this.value == '0') {
				amount = datasj[0].taocanjiage;
			}else if (this.value == '1') {
				amount = datasj[1].taocanjiage;
			}else if (this.value == '2') {
				amount = datasj[2].taocanjiage;
			}else if (this.value == '3') {
				amount = datasj[3].taocanjiage;
			}else if (this.value == '4') {
				amount = datasj[4].taocanjiage;
			}else if (this.value == '5') {
				amount = datasj[5].taocanjiage;
			}


			document.getElementById('amount').value = amount + '';
		});



          
var ddnr = '';  
$.ajax({
  url: 'taocanht.php',
  data: {'biaoshi': '获取提示'},
  type: 'GET',
  success: function(data) {
    // 请求成功，处理返回的数据
    ddnr = data;
  }
});          
       
	

$(function() {
  $('form').submit(function(event) {
      
    ddnr = ddnr.replace(/\s+/g, '');
       
       if(ddnr != ''){
              alert(ddnr);
       }
       
      
    $('.tjdd').html('正在加载 请稍后...');  
    
      
      
    event.preventDefault(); // 阻止表单默认提交行为

    var account = $('#name').val(); // 获取充值账号
    var package = $('#package').val(); // 获取套餐类型
    var payment = $('input[name="payment"]:checked').val(); // 获取支付方式
    var amount = $('#amount').val(); // 获取支付金额



    if(payment == 'yuecz'){
    
        
        //判断余额是否足够
        var yaye = $('.yaye').html();
        
        
        if(parseInt(amount) > parseInt(yaye)){
            
            alert('你的余额不足无法充值');
             $('.tjdd').html('提交订单');  
            
               event.stopImmediatePropagation();
                 return false;
            
        }
        
   
      
    $.ajax({
      url: '/tool/ht.php', // 提交订单的后端接口
      type: 'POST',
      data: {
        account: account,
        package: Number(package)+1,
        payment: payment,
        amount: amount,
        
        yhye:parseInt(yaye),
        'biaoshi' : '充值绘画额度二',
        // taocanhao : ,
      },
      success: function(response) {
          
 
  if(response == 1){
      
                  alert('充值成功');
                    $('.tjdd').html('提交订单');  
        location.reload();          
                 event.stopImmediatePropagation();
                 return false;
      }else{
          
            alert('充值失败');
                    $('.tjdd').html('提交订单');  
        location.reload();          
                 event.stopImmediatePropagation();
                 return false;
          
      }



      },
      error: function(xhr, status, error) {
        // 处理错误响应
        
        alert('订单提交失败：' + error);
        $('.tjdd').html('提交订单');  
      }
    });
    
        
        
    }else{
            // 发送Ajax请求
    $.ajax({
      url: '/tool/ht.php', // 提交订单的后端接口
      type: 'POST',
      dataType: "json",
      data: {
        account: account,
        package: Number(package)+1,
        payment: payment,
        amount: amount,
        'biaoshi' : '充值绘画额度',
        // taocanhao : ,
      },
      success: function(response) {
        // 处理成功响应

  if(response.yumwsq == '1'){
                  alert(response.nr);
                 event.stopImmediatePropagation();
                 return false;
              }

  
        window.location.href = response.data.url;

      },
      error: function(xhr, status, error) {
        // 处理错误响应
        alert('订单提交失败：' + error);
      }
    });
    }








  });
});
</script>

	
	
</body>
</html>