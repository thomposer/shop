<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../addons/ewei_shop/static/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <script>var require = {urlArgs: 'v=<?php  echo date('YmdHis');?>'};</script>
        <script language="javascript" src="../addons/ewei_shop/static/js/require.js"></script>
        <script language="javascript" src="../addons/ewei_shop/static/js/app/config.js"></script>
        <script language="javascript" src="../addons/ewei_shop/static/js/dist/jquery-1.11.1.min.js"></script>
        <script language="javascript" src="../addons/ewei_shop/static/js/dist/jquery.gcjs.js"></script>
       
        <link rel="stylesheet" type="text/css" href="../addons/ewei_shop/template/mobile/jingwaigou/static/css/style.css">
        <script type="text/javascript" src="http://tajs.qq.com/stats?sId=46950365" charset="UTF-8"></script>

    </head>
    <body>
<script language="javascript">
    require(['core','tpl'],function(core,tpl){
        core.init({
            siteUrl: "<?php  echo $_W['siteroot'];?>",
            baseUrl: "<?php  echo $this->createMobileUrl('ROUTES')?>"
        });
       
    })
</script>
<?php  if(is_array($this->header)) { ?>
<div class="follow_topbar"><div class="headimg"><img src="<?php  echo $this->header['icon']?>"></div><div class="info"><div class="i"><?php  echo $this->header['text']?></div><div class="i">海淘正品，安心海淘</div></div><div class="sub" onclick="location.href='<?php  echo $this->header['url']?>'">立即关注</div></div>
<div style='height:44px;'>&nbsp;</div>
<?php  } ?>