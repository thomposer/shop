<?php defined('IN_IA') or exit('Access Denied');?><script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../addons/ewei_shop/static/js/dist/jquery.gcjs.js"></script>
<script type="text/javascript" src="../addons/ewei_shop/static/js/dist/jquery.form.js"></script>
<script type="text/javascript" src="../addons/ewei_shop/static/js/dist/tooltipbox.js"></script>
<style type="text/css">
.red {float:left;color:red}
.white{float:left;color:#fff}

.tooltipbox {
	background:#fef8dd;border:1px solid #c40808; position:absolute; left:0;top:0; text-align:center;height:20px;
	color:#c40808;padding:2px 5px 1px 5px; border-radius:3px;z-index:1000;
}
.red { float:left;color:red}
</style> 
<script language='javascript'>
    function preview_html(txt)
{
var win = window.open("", "win", "width=300,height=600"); // a window object
win.document.open("text/html", "replace");
win.document.write($(txt).val());
win.document.close();
}
</script>