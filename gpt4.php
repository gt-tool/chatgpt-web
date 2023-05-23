<?php
require('./gpt4code.php');
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$expiration = time() + (30 * 24 * 60 * 60); 
setcookie("yhip", $ip, $expiration, "/");
require('./tool/coo.php');
require('./tool/pu.php');
if(($sfvip != '') || ($time2 < $time1)){
    $shihuiyuan = '是会员';
}
if($nsfkqgpt4 != '开启'){
    setcookie("gpt4", '0', $expiration, "/");  
    echo "<script>window.location.href='index.php';</script>";
    exit();
}else{
    if(empty($_COOKIE['gpt4'])){
        echo "<script>window.location.href='index.php';</script>";
        exit();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $wzmc;?></title>
    <meta name="description" content="<?php echo $wzms;?>">
    
<script type="text/javascript" src="/jquery.js"></script>
<script src="/assets/jquery.cookie.min.js"></script>          
<div id="cssah"></div>
<div id="cssah2"></div>
<script src="/assets/anse.js"></script>    
<style>
</style>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/index.css">
    <script src="/assets/vue@2.62.js"></script>
    <!--<script src="/assets/index.js"></script>-->
    <link rel="stylesheet" href="/assets/css.css">
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/common.css?v1.1">
	<link rel="stylesheet" href="/css/wenda.css?v1.1">
	<link rel="stylesheet" href="/css/hightlight.css">
	<link rel="stylesheet" href="/zidingyi.css">
	<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/assets/lm.css">
    <link rel="stylesheet" href="/css/css/jiazai.css">
</head>
<?php
require('./tool/head.php');
?>
<body style="background: white;">
    
<div id="moxicon" class="zbsc" style="display:none;">

    <!--<el-tooltip class="item" effect="dark" content="导出文档" placement="left" v-if="talkId">-->
    <!--<a class="el-icon-document daochu" download="talk.pdf" :href="'/index/talk/pdf?id='+talkId" ></a>-->
    <!--</el-tooltip>-->

    
    <transition name="el-zoom-in-center">
    
    
<div  class="con-left" v-show="left_show||dw>800" style="height: 100%; 
    
    
    
  top: 0;
  bottom: 0;
  
  background-color: #fff;
  z-index: 999;">
        <div style="padding: 10px;position: relative;flex: 1;overflow: auto">
            <div style="display: flex;flex-direction: column">
            
               
               
    
    
    <?php
    
$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    
    
    
    if($shihuiyuan == '是会员'){
        echo '<div class="p-4 gmtc2" style="text-align: center; cursor: pointer;padding: 1rem;"><span class="n-avatar" style="--n-font-size:14px; --n-border:none; --n-border-radius:50%; --n-color:rgba(204, 204, 204, 1); --n-color-modal:rgba(204, 204, 204, 1); --n-color-popover:rgba(204, 204, 204, 1); --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-merged-size:var(--n-avatar-size-override, 40px);width: var(--n-merged-size);
    height: var(--n-merged-size);
    color: #FFF;
    font-size: var(--n-font-size);
    display: inline-flex;
    position: relative;
    overflow: hidden;
    text-align: center;
    border: var(--n-border);
    border-radius: var(--n-border-radius);
    --n-merged-color: var(--n-color);
    background-color: var(--n-merged-color);
    transition: border-color .3s var(--n-bezier), background-color .3s var(--n-bezier), color .3s var(--n-bezier);"><img style="width: 100%;
    height: 100%;" class="" loading="eager" src="https://q1.qlogo.cn/g?b=qq&nk='.$_COOKIE['txx'].'&s=100" width="30" alt="a" data-v-d44900b1="" data-image-src="https://q1.qlogo.cn/g?b=qq&nk='.$_COOKIE['txx'].'&s=100" width="30" alt="a" data-v-d44900b1=""><!----></span><p style="margin-top: 10px;"><span class="" style="color: white;">Hi,'.$sfyjdl.' <span data-v-bf40dc81="" class="bg-yellow-200 text-yellow-900 py-0.5 px-1.5 text-xs md:text-sm rounded-md uppercase" style="text-transform: uppercase; font-size: 0.275rem; line-height: 1.25rem; --un-bg-opacity:1; background-color: rgba(254,240,138,var(--un-bg-opacity)); --un-text-opacity:1; color: rgba(113,63,18,var(--un-text-opacity)); padding: 0.125rem 0.375rem; border-radius: 0.375rem;"> 尊贵会员 </span></span></p></div>';
    }else{
        echo '<div class="p-4 gmtc2" style="text-align: center; cursor: pointer;padding: 1rem;"><span class="n-avatar" style="--n-font-size:14px; --n-border:none; --n-border-radius:50%; --n-color:rgba(204, 204, 204, 1); --n-color-modal:rgba(204, 204, 204, 1); --n-color-popover:rgba(204, 204, 204, 1); --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-merged-size:var(--n-avatar-size-override, 40px);width: var(--n-merged-size);
    height: var(--n-merged-size);
    color: #FFF;
    font-size: var(--n-font-size);
    display: inline-flex;
    position: relative;
    overflow: hidden;
    text-align: center;
    border: var(--n-border);
    border-radius: var(--n-border-radius);
    --n-merged-color: var(--n-color);
    background-color: var(--n-merged-color);
    transition: border-color .3s var(--n-bezier), background-color .3s var(--n-bezier), color .3s var(--n-bezier);"><img style="width: 100%;
    height: 100%;" class="" loading="eager" src="https://q1.qlogo.cn/g?b=qq&nk='.$_COOKIE['txx'].'&s=100" width="30" alt="a" data-v-d44900b1="" data-image-src="https://q1.qlogo.cn/g?b=qq&nk='.$_COOKIE['txx'].'&s=100" width="30" alt="a" data-v-d44900b1=""><!----></span><p style="margin-top: 10px;"><span class="" style="color: white;">Hi,'.$sfyjdl.' <span data-v-bf40dc81="" class="bg-yellow-200 text-yellow-900 py-0.5 px-1.5 text-xs md:text-sm rounded-md uppercase" style="text-transform: uppercase; font-size: 0.275rem; line-height: 1.25rem; --un-bg-opacity:1; background-color: rgba(254,240,138,var(--un-bg-opacity)); --un-text-opacity:1; color: rgba(113,63,18,var(--un-text-opacity)); padding: 0.125rem 0.375rem; border-radius: 0.375rem;"> 升级会员 </span></span></p></div>';
    }
    
    
    
    
    
    
}else{
    echo '<div class="p-4 dlzc" style="text-align: center; cursor: pointer;padding: 1rem;"><span class="n-avatar" style="--n-font-size:14px; --n-border:none; --n-border-radius:50%; --n-color:rgba(204, 204, 204, 1); --n-color-modal:rgba(204, 204, 204, 1); --n-color-popover:rgba(204, 204, 204, 1); --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-merged-size:var(--n-avatar-size-override, 40px);width: var(--n-merged-size);
    height: var(--n-merged-size);
    color: #FFF;
    font-size: var(--n-font-size);
    display: inline-flex;
    position: relative;
    overflow: hidden;
    text-align: center;
    border: var(--n-border);
    border-radius: var(--n-border-radius);
    --n-merged-color: var(--n-color);
    background-color: var(--n-merged-color);
    transition: border-color .3s var(--n-bezier), background-color .3s var(--n-bezier), color .3s var(--n-bezier);"><img style="width: 100%;
    height: 100%;" class="dlzc" loading="eager" src="/assets/anonymous.jpg" data-image-src="/assets/anonymous.jpg"><!----></span><p style="margin-top: 10px;"><span class="dlzc" style="color: white;">点击登录</span></p></div>';
}
    
    
    
    ?>
    
    <!--<a href="" target="_blank" style="background-color: green; color: white; padding: 5px; border-radius: 5px; text-align: center;">切换ChatGPT4.0</a>-->
          
          <br>
               
               <div class="talk-add tjxhh"><i class="el-icon-plus all-talk-icon"></i>
                    新会话
                </div>
               
               
               
               <div id="xdh">
                   
        
                   
               </div>
               
 
               
               
            </div>
        </div>
        <div class="left-bottom" style="">
            <ul style="" >
          <br>

          
          
          
          <?php
          
          $sql = "select sfkqaihh from chat_admin where id = 1";
$sfkqaihh = $mysql->getOne($sql);
         if($sfkqaihh == '开启'){
             echo ' <li class="huitutz">
                  <i class="fa fa-image" aria-hidden="true" /></i> 超强Ai绘图模式
                </li>';
         } 
          
          ?>
          
    
    
    <?php
    
    $sql = "select sfkqkf from chat_admin where id = 1";
$sfkqkf = $mysql->getOne($sql);
    if($sfkqkf == '开启'){
        echo '<li class="lxkfyx">
    <i class="fa fa-wechat" aria-hidden="true" /></i>
                    <a> 联系客服</a>
                </li>';
    }
    
    ?>
    
    
               

          
          
          
          
                    <?php

$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    echo '
								
						<li class="cxsycs">
              <i class="el-icon-search"></i>
                    <a></i>查询剩余次数</a>
                </li>
						  <li class="yqhy">
              
<i class="fa fa-share-alt" aria-hidden="true" /></i> 邀请好友(可提现)</a>
                </li>		';
    
}else{
    
    
    echo '  <li class="dlzc">
              
<i class="fa fa-share-alt" aria-hidden="true" /></i> 邀请好友(可提现)</a>
                </li>';
    
}


?>
     

       
                
                <?php
                
                
                if($ansems){
                    echo '         <li class="anhms">
             <i class="fa fa-moon-o"></i>

                    <a> 白天模式</a>
           
                    
                </li>';
                }else{
                     echo '         <li class="anhms">
            <i class="fa fa-sun-o" aria-hidden="true" /></i>

                    <a> 暗黑模式</a>
           
                    
                </li>';
                }
                
                
                
                ?>

              
    
                
              <?php

$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    
    if($shihuiyuan == '是会员'){
        
          echo '<li  @click.stop="nydl()" class="" style="display: flex;flex-direction: row;position: relative" >
                    <a><i class="el-icon-s-custom"></i> Hi,'.$sfyjdl.'</a>     <span class="" style="background: linear-gradient(to right,#ce9434,#fcb848);
                    font-size: 12px;padding: 1px 2px;border-radius: 4px;margin-left: 10px" >尊贵会员</span>
                    
            <li>
                 <i class="el-icon-switch-button"></i>
                  <a href="gpt4.php?tcdl=1"></i>退出登录</a>
                
                </li>    ';
        
    }else{
          echo '<li  @click.stop="nydl()" class="" style="display: flex;flex-direction: row;position: relative" >
                    <a><i class="el-icon-s-custom"></i> Hi,'.$sfyjdl.'</a>     <span class="" style="background: linear-gradient(to right,#ce9434,#fcb848);
                    font-size: 12px;padding: 1px 2px;border-radius: 4px;margin-left: 10px" >升级会员</span>
                    
            <li>
                 <i class="el-icon-switch-button"></i>
                  <a href="gpt4.php?tcdl=1"></i>退出登录</a>
                
                </li>    ';
    }
    
    
  
    
    
    
}else{
    echo '  <li  @click.stop="loginOut()" class="dlzc" style="display: flex;flex-direction: row;position: relative" >
                    <a><i class="el-icon-s-custom"></i> 登录or注册</a>     <span class="dlzc" style="background: linear-gradient(to right,#ce9434,#fcb848);
                    font-size: 12px;padding: 1px 2px;border-radius: 4px;margin-left: 10px" >升级会员</span>';
}


    ?>
    
  


                </li>


            </ul>
            
            <br><br>
            
        </div>
    </div>

    </transition>


<?php


$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/(iPhone|Android|Windows Phone)/i', $user_agent)) { ?>
   
   
   
<div style="z-index: 9;
    width: 910px;
    left: 250px;
    position: fixed;
    height: unset;
    top: 35%;    height: 200px;" class="con-right" id="con-right" :style="'width: '+con_w+'px;left:'+left_w+'px;'" >
    
    
   <?php } else { ?>

<div style="z-index: 9;
    width: 910px;
    left: 250px;
    position: fixed;
    height: unset;
    top: 35%;    height: 200px;" class="con-right" id="con-right" :style="'width: '+con_w+'px;left:'+left_w+'px;'" >
    
    
    
   <?php } ?> 


    
    
    
    <div class="content" style="margin: 0px auto;"><h4 onclick="resetHeight()" class="title" style="">ChatGPT4.0<span style="    text-transform: uppercase;font-size: .875rem;
    line-height: 1.25rem;    --un-bg-opacity: 1;
    background-color: rgba(254,240,138,var(--un-bg-opacity));--un-text-opacity: 1;
    color: rgba(113,63,18,var(--un-text-opacity));    padding-top: .125rem;
    padding-bottom: .125rem;    padding-left: .375rem;
    padding-right: .375rem;border-radius: .375rem;" class="bg-yellow-200 text-yellow-900 py-0.5 px-1.5 text-xs md:text-sm rounded-md uppercase" data-v-bf40dc81=""> Plus </span></h4> 
<br><br>

<div style="width: 100%; display:none;"><div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-chat-dot-square" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">使用示例</span> <ul><li>“用简单的术语解释量子计算”</li> <li>“对于一个10岁的孩子的生日，有什么创意吗”</li> <li>“如何用Javascript发出HTTP请求?”</li></ul></div> <div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-cpu" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">能力</span> <ul><li>记住用户之前在对话中说过的话</li> <li>允许用户提供后续修正</li> <li>接受或拒绝不适当请求的培训</li></ul></div> <div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-warning-outline" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">局限性</span> <ul><li>可能偶尔会产生不正确的信息</li> <li>可能偶尔会产生有害的指令或有偏见的内容</li> <li>对2021年后的世界和事件的了解有限</li></ul></div></div></div> <div class="call-box"></div></div>



        
        <div class="call-box" style="display:;   " :style="'width: '+con_w+'px;left:'+left_w+'px;'" >

        
            <div class="sjdh" v-show="dw<=800" style="width: 100%;height: 60px;background: #474646;position: fixed;left: 0;top: 0;text-align: center;color: #fff;z-index: 100;line-height: 60px;">
        
        ChatGPT   
        
        
        
        <div class="jzbb" v-if="left_show" style="width: 100%;height: 100vh;background: rgba(140,147,157,0.46);position: fixed;left: 0;top: 0" @click="left_show=false"></div>
        
        
        <span :class="left_show?'el-icon-s-fold fold-icon left_menu_icon':'el-icon-s-unfold fold-icon left_menu_icon sjdhdj'" :style="left_show?'left:'+lw+'px':'' " @click="left_show = !left_show"></span>

    </div>
        
        
        
<div name="content-query" >

	<div class="layout-content" style="    background: white; color:white; ">
			<div class="">
				<article class="article" id="article">
					<div class="article-box">
				
				
						<div  style="    display:none;" class="precast-block" data-flex="main:left">
							<div class="input-group">
							
								<!--<span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;连续对话：</span>-->
								<!--<input  type="checkbox" id="keep"  checked style="min-width:220px;display:none;">-->
								<!--<label for="keep"></label>-->
								
								
								<span style="   display:none; text-align: center;color:#9ca2a8">&nbsp;&nbsp;输入你的APIKEY(输入之后即可使用)：👉</span>
						
		
						
								<input   style="    display:none;
    
             height: 25px;
    padding: 0px 5px;
    font-size: 15px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    border: 1px solid #000;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;" class="" type="text"  placeholder="sk-xxxxxxxxxx" maxlength="100" id="key" value="<?php echo $_COOKIE['key'];?>" style="    background-color: rgb(234, 235, 241);min-width:200px;max-width:280px">



<?php

$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    echo '<div style="" class="right-btn layout-bar">
								    
									<p style="    width: 100px;
    margin: 0px 0 0 40px;    width: 100px;
    margin-left: 14px;
    text-align: center;
    height: 24px;
    line-height: 24px;
    font-size: 14px;
    border-radius: var(--zhuluan-primary-border-radius);
  
    cursor: pointer;
    transition: all .4s;" class="cxsycs  bright-btn" id=""  data-flex="main:center cross:center">查询剩余次数</p>
    

    
								</div>';
    
}


?>




							</div>
						</div>
				


<ul id="article-wrapper" class="ztsc">



</ul>



						
	
						<div class="creating-loading" data-flex="main:center dir:top cross:center">
							<div class="semi-circle-spin"></div>
						</div>
		
					</div>
				</article>
			</div>
		</div>
		
		
				</div>

<div class="containersrk" :style="'width: '+con_w+'px;left:'+left_w+'px;'">
  



  <div class="childsrk">
      <div class="input-containersrk shurk40" style="    position: absolute;
    bottom: 10px;">
          
          


          
        
            
     <?php
     
  
         echo '<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-secondary qhgpt3" style="margin: 0px 10px 0px 0px;background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important;border: 1px solid rgb(140, 147, 157);">GPT3.5</button>';
     
     
     ?> 
        
        
        
          
          
           <textarea oninput="autoHeight(this)" type="text" autocomplete="off" id="kw-target" placeholder="您好，想问点什么？" class="el-input__inner form-controltw dtsrk" rows="1"></textarea>
       
       
        <div class="button-containersrk">
              <span onclick="resetHeight()" style="   " @click.stop="fasong(event)" id="ai-btn" class="fasong ai-btn ">
        <i class="el-tooltip el-icon-s-promotion item" aria-describedby="el-tooltip-6447" tabindex="0" style="color: rgb(167, 161, 161); cursor: pointer;"></i>
      </span> 
        </div>
      </div>
      
      

    </div>
    

  
</div>

				
		</div>

</div>
    

<div style="display: none;" class="register-login-modal">
        <div class="modal-content">
            <div class="modal-body">
                
                
              
                    <ul class="nav nav-tabs">
                        <li class="active dlzccss dldd" style="opacity: 1;"><a href="javascript:;" data-toggle="login">登录</a>
                        </li>
                        <li><a class="dlzccss zcdd" href="javascript:;" data-toggle="signup" style="opacity: 0.3;">注册</a>
                        </li>
                    </ul>
                    
                    
                    
                    
                    
                    <div class="tab-content">
                        
                        <div class="tab-pane fade in active" id="login666" style="display: block;">
                            <div class="signup-form-container text-center">
                                <form class="mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control yhhyx" name="username" placeholder="*输入用户名(邮箱无法登录)">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control yhhyx" name="password" placeholder="*密码">
                                        </div>
                                        <button type="button" class="ljdl go-login btn btn--primary btn--block"><i class="fa fa-bullseye"></i> 安全登录</button> 
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="signup666" style="display: none;">
                            <form class="mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control yhhyx ywyhm" name="user_name" placeholder="输入英文用户名">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control yhhyx yxxxx" name="user_email" placeholder="绑定邮箱">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control yhhyx" name="user_pass" placeholder="密码最小长度为6">
                                    </div>
                                    <div class="form-group yaoqing">
                                        <input type="password" class="form-control yhhyx" name="user_pass2" placeholder="再次输入密码">
                          
                                    </div>
                               
                               
                               <?php
                               
                               if($yanzhengma){
                                   echo '<div class="form-group">
                                        <div class="input-group">
                                          <input type="text" class="form-control yhhyx yxyzmm" name="captcha" placeholder="邮箱验证码">
                                          <span class="input-group-btn">
                                            <button class="go-captcha_email btn btn--secondary fsyzm" type="button">发送验证码</button>
                                          </span>
                                        </div>
                                    </div>';
                               }
                               
                               
                               
                               ?>
                        
                            
                            
                                    
                                    
                               
                                    <button type="button" class="ljzc go-register btn btn--primary btn--block yqmc"><i class="fa fa-bullseye"></i> 立即注册</button>
                            </form>
                        </div>
                    </div>
                    
                    <a target="_blank" href="./tool/mimazhaohui.php" class="rest-password">忘记密码？</a>
                    
            </div>
        </div>
    </div>


<div style="display: none;" class="zuiwaimt"></div>

<?php
        $sql = "select gglx from chat_admin where id = 1";
        $gglx = $mysql->getOne($sql);
 
 
        $sql = "select gpt4cs from chat_yonghu where yhmc = '$sfyjdl'";
        $gpt4cs = $mysql->getOne($sql);
 
 
        if($gglx == '1'){
            
            if(empty(uacc())){
                echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                $file = $dangqianlj.'admin/ggnr.php';
                require($file);
                echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
            }
            
      
        }else if($gglx == '2'){
            
            if(!empty(uacc())){
                echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                 $file = $dangqianlj.'admin/ggnr.php';
                require($file);
                echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
             
            }
            
            
        }else if($gglx == '3'){
            
            if(!empty(uacc())){
                
          
               
                if($gpt4cs != '0'){
                    
                    echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                    $file = $dangqianlj.'admin/ggnr.php';
                    require($file);
                    echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
       
                     
                     
                }else{
                    
                    if(($sfvip != '') || ($time2 < $time1)){
                        echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                         $file = $dangqianlj.'admin/ggnr.php';
                        require($file);
                        
                        echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
                           
                    }   
                    
                }
      
            }
            
        }
?>

<!--公告-->

<!--加载-->
    
<div class="loading-wrap">
	<div class="balls">
			<div></div>
			<div></div>
			<div></div>
	</div>
</div>



<?php
require('./tool/kefu.php');
?>



</body>

<style>

    .form-control{
            height: unset!important;
            -webkit-box-shadow:unset!important;
    }
    

    .con-right{
        position: relative;
    }
    
    .jzbb{
        background: white;
    }
    
    
    .containersrk{
        position: relative;
    }
    
    @media (min-width: 640px){
        .sjdh{
            display: none;
        }
 
    }
    
.dtsrk {
      padding: 0.7rem 0.5rem;
    line-height: 1.3 !important;
}
</style>




<script>
setTimeout(function() {
  $.ajax({
  url: "tool/ip.php",
  type: "POST",
  data:{ip:$.cookie("yhip")},
  success: function(response) {
        console.log(1)
  }
});
}, 200);
$(function() {
    setTimeout(function() {
if (!(isMobile())) {
  $(".con-right").css("height", 'unset');
   
}
  }, 1);

});
</script>  
<script src="/assets/lm.js?id=1"></script>
<script src="/zidingyi.js"></script>
<script src="js/remarkable.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.min.js"></script>
<script src="js/layer.min.js" type="application/javascript"></script>
<script src="js/chat.js?v2.8"></script>
<script src="js/highlight.min.js"></script>
<script src="js/showdown.min.js"></script>

<script>
    $(window).on('load', function() {
       $('.zbsc').css('display','unset');
       $('.loading-wrap').css('display','none');
       
       
    });
</script>

</html>