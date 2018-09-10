<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"D:\phpStudy\PHPTutorial\WWW\da1\ecshop\ThinkPHP\public/../application/index\view\privilege\power.html";i:1536498680;}*/ ?>
﻿<!-- $Id: role_info.htm 14216 2010-01-08 02:27:21Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 分配权限 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/transport.js"></script><script type="text/javascript" src="static/js/common.js"></script>
<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>

<script>
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var user_name_empty = "管理员用户名不能为空!";
var password_invaild = "密码必须同时包含字母及数字且长度不能小于6!";
var email_empty = "Email地址不能为空!";
var email_error = "Email地址格式不正确!";
var password_error = "两次输入的密码不一致!";
var captcha_empty = "您没有输入验证码!";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2F127.0.0.1%2Fshixun%2FEC4%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
	    }
	}

	/*关闭按钮*/
	function btnCancel(item){
	  var par  = item.offsetParent;
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  par.style.display = 'none';
	  if(mask){mask.style.display = 'none';}
	  frame.src = '';
	}
</script>
</head>
<body>
<!--云起激活系统面板-->
<!-- <div class="panel-hint panel-icloud" id="panelCloud">
  <div class="panel-cross"><span onclick="btnCancel(this)">Ｘ</span></div>
  <div class="panel-title">
    <span class="tit">您需要激活系统</span>
    <p>用云起账号激活您的系统，享受物流查询，天工收银，手机短信等更多应用和服务</p>
  </div>
  <div class="panel-left">
    <span>没有云起账号吗？</span>
    <p>点击下列按钮一步完成注册激活！</p>
    <a href="https://account.shopex.cn/reg?refer=yunqi_ecshop" target="_blank" class="btn btn-yellow">免费注册云起账号</a>
  </div>
  <div class="panel-right">
    <h5 class="logo">云起</h5>
    <p>正在激活中</p>
    <iframe src="" frameborder="0" id="CFrame"></iframe>
    <div class="cloud-passw">
      <a target="_blank" href="https://account.shopex.cn/forget?">忘记密码？</a>
    </div>
  </div>
</div> -->
<!--云起激活系统面板-->
<!--遮罩-->
<div class="mask-black" id="CMask"></div>
<!--遮罩-->
<h1>
      <a class="btn btn-right" href="role.php?act=list">角色列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;分配权限 </span>
  <div style="clear:both"></div>
</h1><form method="POST" action="role.php" name="theFrom">
<div class="list-div">
<table width="100%">
  <tr>
    <td class="label">角色名</td>
    <td>
      <input type="text" name="user_name" maxlength="20" value="admin" size="34"/><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">角色描述</td>
    <td>
    <textarea name="role_describe" cols="31" rows="6">管理管理员</textarea>
<span class="require-field">*</span></td>
  </tr>
  </table>
<table cellspacing='1' id="list-table">
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,virualcard,picture_batch,goods_export,goods_batch,gen_goods_script',this);" class="checkbox">商品管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="goods_manage"><input type="checkbox" name="action_code[]" value="goods_manage" id="goods_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'goods_manage')" title=""/>
    商品添加/编辑</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="remove_back"><input type="checkbox" name="action_code[]" value="remove_back" id="remove_back" class="checkbox"  checked="true"  onclick="checkrelevance('', 'remove_back')" title=""/>
    商品删除/恢复</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="cat_manage"><input type="checkbox" name="action_code[]" value="cat_manage" id="cat_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'cat_manage')" title=""/>
    分类添加/编辑</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="cat_drop"><input type="checkbox" name="action_code[]" value="cat_drop" id="cat_drop" class="checkbox"  checked="true"  onclick="checkrelevance('cat_manage', 'cat_drop')" title="cat_manage"/>
    分类转移/删除</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="attr_manage"><input type="checkbox" name="action_code[]" value="attr_manage" id="attr_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'attr_manage')" title=""/>
    商品属性管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="brand_manage"><input type="checkbox" name="action_code[]" value="brand_manage" id="brand_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'brand_manage')" title=""/>
    商品品牌管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="comment_priv"><input type="checkbox" name="action_code[]" value="comment_priv" id="comment_priv" class="checkbox"  checked="true"  onclick="checkrelevance('', 'comment_priv')" title=""/>
    用户评论管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="tag_manage"><input type="checkbox" name="action_code[]" value="tag_manage" id="tag_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'tag_manage')" title=""/>
    标签管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="goods_type"><input type="checkbox" name="action_code[]" value="goods_type" id="goods_type" class="checkbox"  checked="true"  onclick="checkrelevance('', 'goods_type')" title=""/>
    商品类型</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="goods_auto"><input type="checkbox" name="action_code[]" value="goods_auto" id="goods_auto" class="checkbox"  checked="true"  onclick="checkrelevance('', 'goods_auto')" title=""/>
    商品自动上下架</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="virualcard"><input type="checkbox" name="action_code[]" value="virualcard" id="virualcard" class="checkbox"  checked="true"  onclick="checkrelevance('', 'virualcard')" title=""/>
    虚拟卡管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="picture_batch"><input type="checkbox" name="action_code[]" value="picture_batch" id="picture_batch" class="checkbox"  checked="true"  onclick="checkrelevance('', 'picture_batch')" title=""/>
    图片批量处理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="goods_export"><input type="checkbox" name="action_code[]" value="goods_export" id="goods_export" class="checkbox"  checked="true"  onclick="checkrelevance('', 'goods_export')" title=""/>
    商品批量导出</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="goods_batch"><input type="checkbox" name="action_code[]" value="goods_batch" id="goods_batch" class="checkbox"  checked="true"  onclick="checkrelevance('', 'goods_batch')" title=""/>
    商品批量上传/修改</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="gen_goods_script"><input type="checkbox" name="action_code[]" value="gen_goods_script" id="gen_goods_script" class="checkbox"  checked="true"  onclick="checkrelevance('', 'gen_goods_script')" title=""/>
    生成商品代码</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto',this);" class="checkbox">文章管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="article_cat"><input type="checkbox" name="action_code[]" value="article_cat" id="article_cat" class="checkbox"  checked="true"  onclick="checkrelevance('', 'article_cat')" title=""/>
    文章分类管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="article_manage"><input type="checkbox" name="action_code[]" value="article_manage" id="article_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'article_manage')" title=""/>
    文章内容管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="shopinfo_manage"><input type="checkbox" name="action_code[]" value="shopinfo_manage" id="shopinfo_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'shopinfo_manage')" title=""/>
    网店信息管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="shophelp_manage"><input type="checkbox" name="action_code[]" value="shophelp_manage" id="shophelp_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'shophelp_manage')" title=""/>
    网店帮助管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="vote_priv"><input type="checkbox" name="action_code[]" value="vote_priv" id="vote_priv" class="checkbox"  checked="true"  onclick="checkrelevance('', 'vote_priv')" title=""/>
    在线调查管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="article_auto"><input type="checkbox" name="action_code[]" value="article_auto" id="article_auto" class="checkbox"  checked="true"  onclick="checkrelevance('', 'article_auto')" title=""/>
    文章自动发布</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage',this);" class="checkbox">会员管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="feedback_priv"><input type="checkbox" name="action_code[]" value="feedback_priv" id="feedback_priv" class="checkbox"  checked="true"  onclick="checkrelevance('', 'feedback_priv')" title=""/>
    会员留言管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="integrate_users"><input type="checkbox" name="action_code[]" value="integrate_users" id="integrate_users" class="checkbox"  checked="true"  onclick="checkrelevance('', 'integrate_users')" title=""/>
    会员数据整合</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="sync_users"><input type="checkbox" name="action_code[]" value="sync_users" id="sync_users" class="checkbox"  checked="true"  onclick="checkrelevance('integrate_users', 'sync_users')" title="integrate_users"/>
    同步会员数据</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="users_manage"><input type="checkbox" name="action_code[]" value="users_manage" id="users_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'users_manage')" title=""/>
    会员管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="users_drop"><input type="checkbox" name="action_code[]" value="users_drop" id="users_drop" class="checkbox"  checked="true"  onclick="checkrelevance('users_manage', 'users_drop')" title="users_manage"/>
    会员删除</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="user_rank"><input type="checkbox" name="action_code[]" value="user_rank" id="user_rank" class="checkbox"  checked="true"  onclick="checkrelevance('', 'user_rank')" title=""/>
    会员等级管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="surplus_manage"><input type="checkbox" name="action_code[]" value="surplus_manage" id="surplus_manage" class="checkbox"  checked="true"  onclick="checkrelevance('account_manage', 'surplus_manage')" title="account_manage"/>
    会员余额管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="account_manage"><input type="checkbox" name="action_code[]" value="account_manage" id="account_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'account_manage')" title=""/>
    会员账户管理</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('template_manage,admin_manage,admin_drop,allot_priv,logs_manage,logs_drop,agency_manage,suppliers_manage,role_manage',this);" class="checkbox">权限管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="template_manage"><input type="checkbox" name="action_code[]" value="template_manage" id="template_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'template_manage')" title=""/>
    模板管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="admin_manage"><input type="checkbox" name="action_code[]" value="admin_manage" id="admin_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'admin_manage')" title=""/>
    管理员添加/编辑</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="admin_drop"><input type="checkbox" name="action_code[]" value="admin_drop" id="admin_drop" class="checkbox"  checked="true"  onclick="checkrelevance('admin_manage', 'admin_drop')" title="admin_manage"/>
    删除管理员</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="allot_priv"><input type="checkbox" name="action_code[]" value="allot_priv" id="allot_priv" class="checkbox"  checked="true"  onclick="checkrelevance('admin_manage', 'allot_priv')" title="admin_manage"/>
    分派权限</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="logs_manage"><input type="checkbox" name="action_code[]" value="logs_manage" id="logs_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'logs_manage')" title=""/>
    管理日志列表</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="logs_drop"><input type="checkbox" name="action_code[]" value="logs_drop" id="logs_drop" class="checkbox"  checked="true"  onclick="checkrelevance('logs_manage', 'logs_drop')" title="logs_manage"/>
    删除管理日志</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="agency_manage"><input type="checkbox" name="action_code[]" value="agency_manage" id="agency_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'agency_manage')" title=""/>
    办事处管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="suppliers_manage"><input type="checkbox" name="action_code[]" value="suppliers_manage" id="suppliers_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'suppliers_manage')" title=""/>
    供货商管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="role_manage"><input type="checkbox" name="action_code[]" value="role_manage" id="role_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'role_manage')" title=""/>
    角色管理</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('shop_config,ship_manage,payment,shiparea_manage,area_manage,friendlink,db_backup,db_renew,flash_manage,navigator,cron,affiliate,affiliate_ck,sitemap,file_priv,file_check,reg_fields,shop_authorized,webcollect_manage',this);" class="checkbox">系统设置  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="shop_config"><input type="checkbox" name="action_code[]" value="shop_config" id="shop_config" class="checkbox"  checked="true"  onclick="checkrelevance('', 'shop_config')" title=""/>
    商店设置</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="ship_manage"><input type="checkbox" name="action_code[]" value="ship_manage" id="ship_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'ship_manage')" title=""/>
    配送方式管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="payment"><input type="checkbox" name="action_code[]" value="payment" id="payment" class="checkbox"  checked="true"  onclick="checkrelevance('', 'payment')" title=""/>
    支付方式管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="shiparea_manage"><input type="checkbox" name="action_code[]" value="shiparea_manage" id="shiparea_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'shiparea_manage')" title=""/>
    配送区域管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="area_manage"><input type="checkbox" name="action_code[]" value="area_manage" id="area_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'area_manage')" title=""/>
    地区列表管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="friendlink"><input type="checkbox" name="action_code[]" value="friendlink" id="friendlink" class="checkbox"  checked="true"  onclick="checkrelevance('', 'friendlink')" title=""/>
    友情链接管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="db_backup"><input type="checkbox" name="action_code[]" value="db_backup" id="db_backup" class="checkbox"  checked="true"  onclick="checkrelevance('', 'db_backup')" title=""/>
    数据备份</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="db_renew"><input type="checkbox" name="action_code[]" value="db_renew" id="db_renew" class="checkbox"  checked="true"  onclick="checkrelevance('db_backup', 'db_renew')" title="db_backup"/>
    数据恢复</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="flash_manage"><input type="checkbox" name="action_code[]" value="flash_manage" id="flash_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'flash_manage')" title=""/>
    首页主广告管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="navigator"><input type="checkbox" name="action_code[]" value="navigator" id="navigator" class="checkbox"  checked="true"  onclick="checkrelevance('', 'navigator')" title=""/>
    自定义导航栏</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="cron"><input type="checkbox" name="action_code[]" value="cron" id="cron" class="checkbox"  checked="true"  onclick="checkrelevance('', 'cron')" title=""/>
    计划任务</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="affiliate"><input type="checkbox" name="action_code[]" value="affiliate" id="affiliate" class="checkbox"  checked="true"  onclick="checkrelevance('', 'affiliate')" title=""/>
    推荐设置</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="affiliate_ck"><input type="checkbox" name="action_code[]" value="affiliate_ck" id="affiliate_ck" class="checkbox"  checked="true"  onclick="checkrelevance('', 'affiliate_ck')" title=""/>
    分成管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="sitemap"><input type="checkbox" name="action_code[]" value="sitemap" id="sitemap" class="checkbox"  checked="true"  onclick="checkrelevance('', 'sitemap')" title=""/>
    站点地图管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="file_priv"><input type="checkbox" name="action_code[]" value="file_priv" id="file_priv" class="checkbox"  checked="true"  onclick="checkrelevance('', 'file_priv')" title=""/>
    文件权限检验</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="file_check"><input type="checkbox" name="action_code[]" value="file_check" id="file_check" class="checkbox"  checked="true"  onclick="checkrelevance('', 'file_check')" title=""/>
    文件校验</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="reg_fields"><input type="checkbox" name="action_code[]" value="reg_fields" id="reg_fields" class="checkbox"  checked="true"  onclick="checkrelevance('', 'reg_fields')" title=""/>
    会员注册项管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="shop_authorized"><input type="checkbox" name="action_code[]" value="shop_authorized" id="shop_authorized" class="checkbox"  checked="true"  onclick="checkrelevance('', 'shop_authorized')" title=""/>
    授权证书</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="webcollect_manage"><input type="checkbox" name="action_code[]" value="webcollect_manage" id="webcollect_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'webcollect_manage')" title=""/>
    网罗天下管理</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view',this);" class="checkbox">订单管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="order_os_edit"><input type="checkbox" name="action_code[]" value="order_os_edit" id="order_os_edit" class="checkbox"  checked="true"  onclick="checkrelevance('', 'order_os_edit')" title=""/>
    编辑订单状态</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="order_ps_edit"><input type="checkbox" name="action_code[]" value="order_ps_edit" id="order_ps_edit" class="checkbox"  checked="true"  onclick="checkrelevance('order_os_edit', 'order_ps_edit')" title="order_os_edit"/>
    编辑付款状态</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="order_ss_edit"><input type="checkbox" name="action_code[]" value="order_ss_edit" id="order_ss_edit" class="checkbox"  checked="true"  onclick="checkrelevance('order_os_edit', 'order_ss_edit')" title="order_os_edit"/>
    编辑发货状态</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="order_edit"><input type="checkbox" name="action_code[]" value="order_edit" id="order_edit" class="checkbox"  checked="true"  onclick="checkrelevance('order_os_edit', 'order_edit')" title="order_os_edit"/>
    添加编辑订单</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="order_view"><input type="checkbox" name="action_code[]" value="order_view" id="order_view" class="checkbox"  checked="true"  onclick="checkrelevance('', 'order_view')" title=""/>
    查看未完成订单</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="order_view_finished"><input type="checkbox" name="action_code[]" value="order_view_finished" id="order_view_finished" class="checkbox"  checked="true"  onclick="checkrelevance('', 'order_view_finished')" title=""/>
    查看已完成订单</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="repay_manage"><input type="checkbox" name="action_code[]" value="repay_manage" id="repay_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'repay_manage')" title=""/>
    退款申请管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="booking"><input type="checkbox" name="action_code[]" value="booking" id="booking" class="checkbox"  checked="true"  onclick="checkrelevance('', 'booking')" title=""/>
    缺货登记管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="sale_order_stats"><input type="checkbox" name="action_code[]" value="sale_order_stats" id="sale_order_stats" class="checkbox"  checked="true"  onclick="checkrelevance('', 'sale_order_stats')" title=""/>
    订单销售统计</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="client_flow_stats"><input type="checkbox" name="action_code[]" value="client_flow_stats" id="client_flow_stats" class="checkbox"  checked="true"  onclick="checkrelevance('', 'client_flow_stats')" title=""/>
    客户流量统计</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="delivery_view"><input type="checkbox" name="action_code[]" value="delivery_view" id="delivery_view" class="checkbox"  checked="true"  onclick="checkrelevance('', 'delivery_view')" title=""/>
    查看发货单</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="back_view"><input type="checkbox" name="action_code[]" value="back_view" id="back_view" class="checkbox"  checked="true"  onclick="checkrelevance('', 'back_view')" title=""/>
    查看退货单</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('topic_manage,snatch_manage,ad_manage,gift_manage,card_manage,pack,bonus_manage,auction,group_by,favourable,whole_sale,package_manage,exchange_goods',this);" class="checkbox">促销管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="topic_manage"><input type="checkbox" name="action_code[]" value="topic_manage" id="topic_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'topic_manage')" title=""/>
    专题管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="snatch_manage"><input type="checkbox" name="action_code[]" value="snatch_manage" id="snatch_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'snatch_manage')" title=""/>
    夺宝奇兵</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="ad_manage"><input type="checkbox" name="action_code[]" value="ad_manage" id="ad_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'ad_manage')" title=""/>
    广告管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="gift_manage"><input type="checkbox" name="action_code[]" value="gift_manage" id="gift_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'gift_manage')" title=""/>
    赠品管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="card_manage"><input type="checkbox" name="action_code[]" value="card_manage" id="card_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'card_manage')" title=""/>
    祝福贺卡</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="pack"><input type="checkbox" name="action_code[]" value="pack" id="pack" class="checkbox"  checked="true"  onclick="checkrelevance('', 'pack')" title=""/>
    商品包装</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="bonus_manage"><input type="checkbox" name="action_code[]" value="bonus_manage" id="bonus_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'bonus_manage')" title=""/>
    红包管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="auction"><input type="checkbox" name="action_code[]" value="auction" id="auction" class="checkbox"  checked="true"  onclick="checkrelevance('', 'auction')" title=""/>
    拍卖活动</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="group_by"><input type="checkbox" name="action_code[]" value="group_by" id="group_by" class="checkbox"  checked="true"  onclick="checkrelevance('', 'group_by')" title=""/>
    团购活动</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="favourable"><input type="checkbox" name="action_code[]" value="favourable" id="favourable" class="checkbox"  checked="true"  onclick="checkrelevance('', 'favourable')" title=""/>
    优惠活动</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="whole_sale"><input type="checkbox" name="action_code[]" value="whole_sale" id="whole_sale" class="checkbox"  checked="true"  onclick="checkrelevance('', 'whole_sale')" title=""/>
    批发管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="package_manage"><input type="checkbox" name="action_code[]" value="package_manage" id="package_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'package_manage')" title=""/>
    超值礼包</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="exchange_goods"><input type="checkbox" name="action_code[]" value="exchange_goods" id="exchange_goods" class="checkbox"  checked="true"  onclick="checkrelevance('', 'exchange_goods')" title=""/>
    积分商城商品</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('attention_list,email_list,magazine_list,view_sendlist',this);" class="checkbox">邮件管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="attention_list"><input type="checkbox" name="action_code[]" value="attention_list" id="attention_list" class="checkbox"  checked="true"  onclick="checkrelevance('', 'attention_list')" title=""/>
    关注管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="email_list"><input type="checkbox" name="action_code[]" value="email_list" id="email_list" class="checkbox"  checked="true"  onclick="checkrelevance('', 'email_list')" title=""/>
    邮件订阅管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="magazine_list"><input type="checkbox" name="action_code[]" value="magazine_list" id="magazine_list" class="checkbox"  checked="true"  onclick="checkrelevance('', 'magazine_list')" title=""/>
    杂志管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="view_sendlist"><input type="checkbox" name="action_code[]" value="view_sendlist" id="view_sendlist" class="checkbox"  checked="true"  onclick="checkrelevance('', 'view_sendlist')" title=""/>
    邮件队列管理</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('template_select,template_setup,library_manage,lang_edit,backup_setting,mail_template',this);" class="checkbox">模板管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="template_select"><input type="checkbox" name="action_code[]" value="template_select" id="template_select" class="checkbox"  checked="true"  onclick="checkrelevance('', 'template_select')" title=""/>
    模板选择</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="template_setup"><input type="checkbox" name="action_code[]" value="template_setup" id="template_setup" class="checkbox"  checked="true"  onclick="checkrelevance('', 'template_setup')" title=""/>
    模板设置</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="library_manage"><input type="checkbox" name="action_code[]" value="library_manage" id="library_manage" class="checkbox"  checked="true"  onclick="checkrelevance('', 'library_manage')" title=""/>
    库项目管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="lang_edit"><input type="checkbox" name="action_code[]" value="lang_edit" id="lang_edit" class="checkbox"  checked="true"  onclick="checkrelevance('', 'lang_edit')" title=""/>
    语言项编辑</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="backup_setting"><input type="checkbox" name="action_code[]" value="backup_setting" id="backup_setting" class="checkbox"  checked="true"  onclick="checkrelevance('', 'backup_setting')" title=""/>
    模板设置备份</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="mail_template"><input type="checkbox" name="action_code[]" value="mail_template" id="mail_template" class="checkbox"  checked="true"  onclick="checkrelevance('', 'mail_template')" title=""/>
    邮件模板管理</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('db_backup,db_renew,db_optimize,sql_query,convert',this);" class="checkbox">数据库管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="db_backup"><input type="checkbox" name="action_code[]" value="db_backup" id="db_backup" class="checkbox"  checked="true"  onclick="checkrelevance('', 'db_backup')" title=""/>
    数据备份</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="db_renew"><input type="checkbox" name="action_code[]" value="db_renew" id="db_renew" class="checkbox"  checked="true"  onclick="checkrelevance('', 'db_renew')" title=""/>
    数据恢复</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="db_optimize"><input type="checkbox" name="action_code[]" value="db_optimize" id="db_optimize" class="checkbox"  checked="true"  onclick="checkrelevance('', 'db_optimize')" title=""/>
    数据表优化</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="sql_query"><input type="checkbox" name="action_code[]" value="sql_query" id="sql_query" class="checkbox"  checked="true"  onclick="checkrelevance('', 'sql_query')" title=""/>
    SQL查询</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="convert"><input type="checkbox" name="action_code[]" value="convert" id="convert" class="checkbox"  checked="true"  onclick="checkrelevance('', 'convert')" title=""/>
    转换数据</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('sms_send,sms_sign',this);" class="checkbox">短信管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="sms_send"><input type="checkbox" name="action_code[]" value="sms_send" id="sms_send" class="checkbox"  checked="true"  onclick="checkrelevance('', 'sms_send')" title=""/>
    发送短信</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="sms_sign"><input type="checkbox" name="action_code[]" value="sms_sign" id="sms_sign" class="checkbox"  checked="true"  onclick="checkrelevance('', 'sms_sign')" title=""/>
    短信签名</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('banner_mobile,lead,mobile_setting,h5_setting,leancloud,wxa_setting',this);" class="checkbox">移动端管理  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="banner_mobile"><input type="checkbox" name="action_code[]" value="banner_mobile" id="banner_mobile" class="checkbox"  checked="true"  onclick="checkrelevance('', 'banner_mobile')" title=""/>
    移动端广告配置</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="lead"><input type="checkbox" name="action_code[]" value="lead" id="lead" class="checkbox"  checked="true"  onclick="checkrelevance('', 'lead')" title=""/>
    店铺二维码</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="mobile_setting"><input type="checkbox" name="action_code[]" value="mobile_setting" id="mobile_setting" class="checkbox"  checked="true"  onclick="checkrelevance('', 'mobile_setting')" title=""/>
    APP应用配置</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="h5_setting"><input type="checkbox" name="action_code[]" value="h5_setting" id="h5_setting" class="checkbox"  checked="true"  onclick="checkrelevance('', 'h5_setting')" title=""/>
    H5应用配置</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="leancloud"><input type="checkbox" name="action_code[]" value="leancloud" id="leancloud" class="checkbox"  checked="true"  onclick="checkrelevance('', 'leancloud')" title=""/>
    APP推送管理</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="wxa_setting"><input type="checkbox" name="action_code[]" value="wxa_setting" id="wxa_setting" class="checkbox"  checked="true"  onclick="checkrelevance('', 'wxa_setting')" title=""/>
    小程序应用配置</label>
    </div>
    </td></tr>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="chkGroup" type="checkbox" value="checkbox" onclick="check('certificate,service_market,sms_resource,logistic_tracking',this);" class="checkbox">云服务中心  </td>
  <td>
        <div style="width:200px;float:left;">
    <label for="certificate"><input type="checkbox" name="action_code[]" value="certificate" id="certificate" class="checkbox"  checked="true"  onclick="checkrelevance('', 'certificate')" title=""/>
    授权绑定</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="service_market"><input type="checkbox" name="action_code[]" value="service_market" id="service_market" class="checkbox"  checked="true"  onclick="checkrelevance('', 'service_market')" title=""/>
    服务市场</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="sms_resource"><input type="checkbox" name="action_code[]" value="sms_resource" id="sms_resource" class="checkbox"  checked="true"  onclick="checkrelevance('', 'sms_resource')" title=""/>
    短信平台</label>
    </div>
        <div style="width:200px;float:left;">
    <label for="logistic_tracking"><input type="checkbox" name="action_code[]" value="logistic_tracking" id="logistic_tracking" class="checkbox"  checked="true"  onclick="checkrelevance('', 'logistic_tracking')" title=""/>
    云起物流</label>
    </div>
    </td></tr>
  <tr>
    <td align="center" colspan="2" >
      <input type="checkbox" name="checkall" value="checkbox" onclick="checkAll(this.form, this);" class="checkbox" />全选      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit"   name="Submit"   value=" 保存 " class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value=" 重置 " class="button" />
      <input type="hidden"   name="id"    value="1" />
      <input type="hidden"   name="act"   value="update" />
    </td>
  </tr>
</table>
</div>
</form>


<script language="javascript">
function checkAll(frm, checkbox)
{
  for (i = 0; i < frm.elements.length; i++)
  {
    if (frm.elements[i].name == 'action_code[]' || frm.elements[i].name == 'chkGroup')
    {
      frm.elements[i].checked = checkbox.checked;
    }
  }
}

function check(list, obj)
{
  var frm = obj.form;

    for (i = 0; i < frm.elements.length; i++)
    {
      if (frm.elements[i].name == "action_code[]")
      {
          var regx = new RegExp(frm.elements[i].value + "(?!_)", "i");

          if (list.search(regx) > -1) {frm.elements[i].checked = obj.checked;}
      }
    }
}

function checkrelevance(relevance, priv_list)
{
  if(document.getElementById(priv_list).checked && relevance != '')
  {
    document.getElementById(relevance).checked=true;
  }
  else
  {
    var ts=document.getElementsByTagName("input");
    
    for (var i=0; i<ts.length;i++)
    {
      var text=ts[i].getAttribute("title");

      if( text == priv_list) 
      {
        document.getElementById(ts[i].value).checked = false;
      }
    }
  }
}
</script>

<div id="footer">
共执行 6 个查询，用时 0.018998 秒，Gzip 已禁用，内存占用 1.170 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<script type="text/javascript" src="static/js/utils.js"></script><!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="static/picture/msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>

<!--
<embed src="static/flash/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background-color: #eee;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>
</body>
</html>