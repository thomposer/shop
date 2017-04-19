<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<title><?php  echo $goods['title'];?></title>
<link rel="stylesheet" type="text/css" href="../addons/ewei_shop/template/mobile/jingwaigou/new/detail.css">
<link rel="stylesheet" type="text/css" href="../addons/ewei_shop/template/mobile/jingwaigou/new/baozheng.css">
<style type="text/css">
    /*.调用index.css，下面css失效
body {margin:0px; background:#f3f3f3; font-family:'微软雅黑'; -moz-appearance:none; -webkit-appearance: none;}
ul,li {padding:0px; margin:0px;}
.good_topbar { width:100%;position:fixed; top:0px; height:40px;z-index: 8;line-height:35px;}
.good_topbar .left { float:left; width:30px;height:30px;margin-left:10px;margin-top:5px;}
.good_topbar .right { float:right; width:80px;height:30px;margin-left:10px;margin-top:5px;}

.good_topbar .btn { background:rgba(237,237,237,0.5); width:30px;height:30px;margin-left:5px;border-radius:30px;float:left;background:#efefef;color:#333;line-height:30px;text-align:center; }

.good_img {height:300px; width:100%; background:#ccc;}
.good_img img {height:100%; width:100%;}
.good_info1 {height:auto; width:94%; background:#fff; padding:0px 3%; border-bottom:1px solid #e2e2e2;}
.good_info1 .info1 {height:38px; width:100%; border-bottom:1px dashed #f3f3f3; padding:11px 0px;}
.good_info1 .info1 .name {height:38px; width:65%; border-right:1px solid #e3e3e3; float:left; font-size:14px; color:#666;}
.good_info1 .info1 .sub1 {height:38px; width:30%; background:#ff6500; float:right; border-radius:5px; color:#fff; text-align:center; line-height:38px;}
.good_info1 .info1 .sub1 i {height:16px; width:16px; margin-right:2px; background:#fff; border-radius:5px; color:#ff6500; line-height:18px; font-size:14px;}
.good_info1 .info2  {height:38px; width:100%; border-bottom:1px dashed #f3f3f3; padding:11px 0px;color:#666;}
.good_info1 .price {height:45px; width:100%; padding-top:15px; font-size:18px; color:#ff6500; line-height:16px;}
.good_info1 .price span {font-size:12px; color:#999;}
.good_info1 .other {border-top:1px dashed #f3f3f3;  height:34px; width:100%;  line-height:34px; font-size:14px; color:#999;}
.good_info1 .other .left { float:left; text-align:right;}
.good_info1 .other .right { float:right; text-align:right;}

.good_speci {height:44px; width:94%; overflow: hidden; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #e2e2e2; border-top:1px solid #e2e2e2; line-height:44px; color:#666; font-size:14px;}

.good_shop {height:130px; width:94%; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #e2e2e2; border-top:1px solid #e2e2e2;}
.good_shop .shop1 {height:50px; width:100%; padding:10px 0px; border-bottom:1px solid #e2e2e2;}
.good_shop .shop1 img {height:50px; width:50px; margin-right:10px; float:left;}
.good_shop .shop1 .shop_info {height:50px; width:auto; float:left; font-size:16px; color:#666; line-height:25px;}
.good_shop .shop1 .shop_info span {font-size:14px; color:#ccc;}
.good_shop .shop2 {height:59px; width:100%; padding:10px 0px;}
.good_shop .shop2 .sub1 {height:37px; width:47%; float:left; border:1px solid #ccc; border-radius:5px; text-align:center; line-height:37px; font-size:16px; color:#999;}
.good_shop .shop2 .sub2 {height:37px; width:47%; float:right; border:1px solid #ccc; border-radius:5px; text-align:center; line-height:37px; font-size:16px; color:#999;}

.good_info2 {height:auto; width:100%; background:#fff; margin-top:14px; border-top:1px solid #e2e2e2;}
.good_info2 .menu {height:40px; width:100%; background:#fafafa;}
.good_info2 .menu .nav {height:40px; width:25%; border-right:1px solid #e3e3e3; float:left; font-size:14px; color:#666; text-align:center; line-height:40px; border-bottom:1px solid #e3e3e3;}
.good_info2 .menu .navon {color:#ff6500; height:37px; line-height:35px; background:#fff; border-top:3px solid #ff6500; border-bottom:0px;}
.good_info2 .tab_con {height:auto; width:94%; padding:10px 3%;}
.good_info2 .tab_con .con {height:auto; display:none;color:#333;word-break:break-all;}
.good_info2 .tab_con .con .param { padding:10px; border-bottom:1px solid #ccc}
.good_info2 .tab_con .con img { width:100%;}
.copyright {height:14px; width:100%; font-size:14px; line-height:14px; padding:10px 0px; margin-bottom:50px; text-align:center; color:#aaa;}

.good_bottom {height:50px; width:100%; background:#ff6801; position:fixed; bottom:0px; left:0px;}
.good_bottom span {font-size:14px; line-height:10px;}
.good_bottom .buy {height:50px; width:35%; background:#ff6801; float:left; font-size:16px; line-height:50px; text-align:center; color:#fff;}
.good_bottom .add {height:50px; width:35%; background:#fd9a34; float:left; font-size:16px; line-height:50px; text-align:center; color:#fff;}
.good_bottom .cart {height:42px; width:15%; background:#fdfdfd; float:left; padding-top:7px; border-top:1px solid #e1e1e1; text-align:center; font-size:20px; color:#666;line-height:10px; position:relative;}
.good_bottom .cart b {height:16px; width:16px; background:#f30; border-radius:8px; position:absolute; top:2px; right:5px; font-size:12px; color:#fff; line-height:16px; font-weight:100;}
.good_bottom .like {height:42px; width:14%; background:#fdfdfd; float:left; padding-top:7px; border-top:1px solid #e1e1e1; border-right:1px solid #e1e1e1; text-align:center; font-size:20px; color:#666; line-height:10px;}


.good_img{overflow:hidden;position:relative;}
.main_image{width:100%;position:relative;top:0;left:0;}
.main_image ul{;position:absolute;top:0;left:0}
.main_image li{float:left;}
.main_image li img{display:block;width:100%; height:100%;}
.main_image li a{display:block;width:100%;}

div.flicking_con{position:absolute;bottom:9px;z-index:1;width:100%;height:12px;}
div.flicking_con .inner { width:100%;height:9px;text-align:center;}
div.flicking_con a{position:relative; width:9px;height:9px;background:url('../addons/ewei_shop/template/mobile/default/static/images/dot.png') 0 0 no-repeat;display:inline-block;text-indent:-1000px}
div.flicking_con a.on{background-position:0 -9px}

   .comment { padding:5px; border-bottom:1px solid #ccc;overflow:hidden;}
                    .comment .info { padding:5px;height:35px;width:100%;}
                    .comment .info .head { float:left; width:30px;height:30px;}
                    .comment .info .head img { width:100%;height:100%; }
                    .comment .info .nickname { float:left;width:100%;margin-left:-30px;margin-right:-100px;height:30px;line-height:30px;}
                    .comment .info .nickname .inner { margin-left:35px;margin-right:100px;overflow:hidden; }
                    .comment .info .level { width:100px;float:right;margin-left:-100px; text-align:right;height:30px;line-height:30px;color:#ff6600}
                    .comment .info .level i {width:13px;}
                   
                    .comment .content { overflow:hidden;color:#555;font-size:13px;padding-left:5px;}
                    .comment .time { padding:5px; color:#666;font-size:13px;padding-left:5px;}
                    .comment .imgs { overflow:hidden;padding-top:5px;padding-left:5px;}
                    .comment .imgs img { padding:1px;border:1px solid #ccc;float:left;margin-right:5px;}
                   #comment_loading { width:94%;padding:10px;color:#666;text-align: center;} 
        #recommand_container  {height:auto; min-height:100px; width:100%; background:#fff; overflow:hidden;float:left;padding-bottom:40px;} 
    #recommand_container .good {height:160px; width:46%; padding:0px 2% 10px; float:left;}
    #recommand_container .good img {height:120px; width:100%;}
    #recommand_container .good .name {height:20px; width:100%; font-size:15px; line-height:20px; color:#666; overflow:hidden;}
    #recommand_container .good .price {height:20px; width:100%; color:#f03; font-size:14px;}
    #recommand_container .good .price span {color:#aaa; font-size:12px; text-decoration:line-through;}
    */
</style>
<div id='container'></div>
<div id='cover'><img src='../addons/ewei_shop/static/images/guide.png' style='width:100%;' /></div>

<script id='goods_info'  type='text/html'>
    <div class="good_topbar">
        <div class="left">
            <div class="btn back" onclick="history.back();"><i class="fa fa-chevron-left"></i></div>
        </div>
        <div class="right">
            <div class="btn cart" onclick="location.href='<?php  echo $this->createMobileUrl('shop/cart')?>'"><i class="fa fa-shopping-cart"></i></div>
            <div class="btn share" id="btnshare" onclick="share()"><i class="fa fa-share"></i></div>
        </div>
        
    </div>
    <div class="good_choose_layer"></div>
    <div class="good_choose">
        <div class="info">
             <div class="left">
                 <img id="chooser_img" src="<%goods.thumb%>"/>
             </div>
             <div class="right">
                   <div class="price">￥<span id='option_price'><%goods.marketprice%></span></div>
                   <div class="stock">库存:<span id='option_stock'><%goods.total%></span>件</span> </div>
                   <div class="option">请选择规格</div>
             </div>
            <div class="close" onClick="choose2(true)"><i class="fa fa-remove-o"></i></div>
        </div>
        <div class="other">
            <input type='hidden' id='optionid' value='' />
                <%each specs as spec%>
                <input type='hidden' name="optionid[]" class='optionid optionid_<%spec.id%>' value="" title="<%spec.title%>">
                <div class="spec"><%spec.title%></div>
                <div class="spec_items options_<%spec.id%>"  title="<%spec.title%>">
                      <%each spec.items as o%>
                      <div class="option option_<%spec.id%>" specid='<%spec.id%>' oid="<%o.id%>" sel='false' title='<%o.title%>' thumb='<%o.thumb%>'><%o.title%></div>
                     <%/each%>
                </div>
                <%/each%>

                <div class='number'> 
                    <div class='label'>购买数量</div>
                  <div class='num'>
                            <button id='btn_minus' onclick='reduceNum()'><i class='fa fa-minus'></i></button>
                            <input type='text' id='total' value='1' />
                            <button id='btn_plus' onclick='addNum()'><i class='fa fa-plus'></i></button>
                  </div>
                    
                </div>
        </div>
        <div class="close" onClick="choose2(true)"><i class="fa fa-times-circle-o"></i></div>
        <div class="sub <%if specs.length>0%>disabled<%/if%>" onClick="choose2()">确认</div>
    </div>

    <div class="good_img">
        <%if pics.length>1%>
        <div class="flicking_con">
            <div class="inner">
            <%each pics as value index %>
            <a class="<%if index==0%>on<%/if%>" href="#@"><%index%></a>
            <%/each%>
            </div>
        </div>
        <%/if%>
        <div class="main_image">
            <ul>
                <%each pics as p %>
                <li> <img src="<%p%>"></li>
                <%/each%>
            </ul>
        </div>
    </div>
    <div class="good_info1">
        <%if commission%>
        <div class="info1">
            <div class="name"><%goods.title%></div>
            <div class="sub1" onclick="location.href='<?php  echo $this->createPluginMobileUrl('commission/shares',array('goodsid'=>$_GPC['id']))?>'"><i class="fa fa-cny"></i><%commission_text%></div>
        </div>
        <%else%>
        <div class="info2"><%goods.title%></div>
        <%/if%>
        <div class="price">￥<d id='marketprice'>
                <%if goods.minprice !=goods.maxprice%>
                <%goods.minprice%> - <%goods.maxprice%>
                <%else%>
                <%goods.marketprice%>
                <%/if%>
            </d><br>
            <span id='productpricecontainer'>
                国内参考价￥<span id='productprice'><%goods.productprice%></span></span>
        </div>
       
        <div class="other">
            <div class='right'>
                 <span id="stockcontainer">库存:<span id="stock"><%goods.total%></span></span> 销量:<%goods.sales%><%goods.unit%></div>
            </div>
       
      <%if level.id && goods.isnodiscount=='0'%>
         <div class="other">
            <div class='left'>
                您是<%level.levelname%>, 可享 <span style='color:#ff6600'><%level.discount%></span> 折优惠
            </div>
         </div>
        <%/if%>  </div>
      </div>
    <div class="good_speci" <%if goods.canbuy && goods.timebuy=='0' && goods.userbuy=='1'  && goods.groupbuy=='1'  && goods.levelbuy=='1'%> onClick="choose()"<%/if%>>
        <%if goods.canbuy%>
            <%if goods.istime=='1'%>
                  <%if goods.timebuy=='0'%><span id="optiondiv">请选择商品规格及数量</span><%/if%>
                  <%if goods.timebuy=='-1'%><span>限购时间未到</span><%/if%>
                  <%if goods.timebuy=='1'%><span>限购时间已过</span><%/if%>
              <%else%>
              
                 <%if goods.userbuy=='0'%>
                       <span>您已超出购买上限</span>
                 <%else%>
                       <%if goods.groupbuy=='0' || goods.levelbuy=='0'%>
                          <span>您不能购买此商品,请联系客服</span>
                        <%else%>
                        <span id="optiondiv">请选择商品规格及数量</span>
                        <%/if%>
                 <%/if%>
                  
           <%/if%>
             
        <%else%>
            商品已下架
        <%/if%>
       <i class="fa fa-angle-right" style="float:right; line-height:44px; font-size:26px;"></i></div>
    <div class="good_shop">
        <div class="shop1" onclick="location.href='<%shop.url%>'"><img src="<%shop.logo%>"><div class="shop_info"><%shop.name%><br><span>全部宝贝<%goodscount%>个</span></div></div>
        <div class="shop2">
            <div class="sub1" onclick="location.href='<?php  echo $this->createMobileUrl('shop/list')?>'"><i class="fa fa-list"></i> 查看所有商品</div>
            <div class="sub2" onclick="location.href='<%shop.url%>'"> <i class="fa fa-gift" o></i> 进店逛逛</div>
        </div>
    </div>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('new/baozheng', TEMPLATE_INCLUDEPATH)) : (include template('new/baozheng', TEMPLATE_INCLUDEPATH));?><div style="height:-10px"></div>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('new/good_info2', TEMPLATE_INCLUDEPATH)) : (include template('new/good_info2', TEMPLATE_INCLUDEPATH));?>
    <!--
    <div class="good_info2">
        <div class="menu">
            <div id="nav_1" class="nav navon" onClick="tab(1)">图文详情</div>
            <div id="nav_2" class="nav" onClick="tab(2)">产品参数</div>
            <div id="nav_3" class="nav" onClick="tab(3)">用户评价</div>
            <div id="nav_4" class="nav" onClick="tab(4)" style="border-right:0px; width:24%">同店推荐</div>
        </div>
        <div class="tab_con">
            <div class="con" id="con_1"  style='display:block'><%=goods.content%></div>
            <div class="con" id="con_2">
                <%each params as value%>
                <p class='param'><%value.title%>: <%value.value%> </p>
                <%/each%>
            </div>
            <div class="con" id="con_3" ><div id='comment_container'></div></div>
            <div class="con" id="con_4"><div id='recommand_container'></div></div>
        </div>
    </div>
    <div class="copyright">© 版权所有 <%if shop.name!=''%><%shop.name%><%else%><?php  echo $_W['account']['name'];?><%/if%></div>
    -->

    <%if goods.canbuy && goods.timebuy=='0' && goods.userbuy=='1' && goods.groupbuy=='1'  && goods.levelbuy=='1'%>
    <div class="good_bottom">
        <div class="like" >
            <i class="fa <%if isfavorite%>fa-star<%else%>fa-star-o<%/if%>" <%if isfavorite==1%>style="color:#f90"<%/if%>></i>
            <br><span>收藏</span>
        </div>
        <div class="cart" onclick="location.href='<?php  echo $this->createMobileUrl('shop/cart')?>'"><i class="fa fa-shopping-cart"></i><br><span>购物车</span>
            <%if cartcount>0%><b><%cartcount%></b><%/if%>
        </div>
        <div class="add" onclick="choose('cart')">加入购物车</div>
        <div class="buy" onclick="choose('buy')">立即购买</div>
</div>
    <%/if%>
</script>
<script id='tpl_comment' type='text/html'>
    <%each list as comment%>
    <div class='comment'>
                    <div class='info'>
                        <div class='head'><img src='<%comment.headimgurl%>' style='width:30px;height:30px;' /></div>
                        <div class='nickname'><div class='inner'><%comment.nickname%></div></div>
                        <div class='level'>
                            <%if comment.level>=1%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=2%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=3%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=4%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            <%if comment.level>=5%><i class='fa fa-star'></i><%else%><i class='fa fa-star-o'></i><%/if%>
                            </div>
                    </div>
                    <div class='content'><%comment.content%></div>
                    <%if comment.images.length>0%>
                       <div class='imgs'>
                          <%each comment.images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                    </div>
                    <%/if%>
                   <%if comment.reply_content!=''%>
                         <div class='content' style='margin-top:5px;'><span style='color:#ff6600'>[回复]</span><%comment.reply_content%></div>
                        <%if comment.reply_images.length>0%>
                            <div class='imgs'>
                               <%each comment.reply_images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                         </div>
                   <%/if%>
                      <%/if%>
              
                     <%if comment.append_content!=''%>
                         <div class='content' style='margin-top:5px;'><span style='color:#ff6600'>[追加]</span><%comment.append_content%></div>
                        <%if comment.append_images.length>0%>
                            <div class='imgs'>
                               <%each comment.append_images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                         </div>
                      <%/if%>
                     <%/if%>
                
                  <%if comment.append_reply_content!=''%>
                         <div class='content' style='margin-top:5px;'><span style='color:#ff6600'>[回复]</span><%comment.append_reply_content%></div>
                        <%if comment.append_reply_images.length>0%>
                            <div class='imgs'>
                               <%each comment.append_reply_images as img%><img src='<%img%>' style='width:30px;height:30px;' /><%/each%>
                         </div>
                      <%/if%>
                     <%/if%>
             <div class='time'><%comment.createtime%></div>
     </div>
     <%/each%>
</script>
<script id='tpl_recommand' type='text/html'>
     <%each list as g%>
    <div class="good" data-goodsid='<%g.id%>'>
        <img src="<%g.thumb%>">
        <div class="name"><%g.title%></div>
        <div class="price">￥<%g.marketprice%> <%if g.productprice>0 && g.marketprice!=g.productprice%><span>￥<%g.productprice%></span><%/if%></div>
    </div>
    <%/each%>
</script>
<script language="javascript">
    var hasoption = false;
    var maxbuy = 0;
    var options = [];
    var specs = [];
    var tip = null;
    var action="";
    var alpha = 0;
    function share(){
        
           $('#cover').fadeIn(200).unbind('click').click(function(){
                    $(this).fadeOut(100);
          })
    }
    require(['tpl', 'core','jquery.touchslider','swipe'], function(tpl, core) {
    

        core.json('shop/detail',{id:'<?php  echo $_GPC['id'];?>',mid:"<?php  echo $mid;?>"},function(json){
     
          tip = core.tip;
          if(json.status<=0){
              core.message('没有找到您想要的宝贝哦~',"<?php  echo $this->createMobileUrl('shop/list')?>",'error');
              return;
          }
            
        $(window).scroll(function(){
         
           var top = $(document).scrollTop() ;
           alpha = top/270 ;
           if(alpha>0.5){
               alpha = 0.5;
           }
           $('.good_topbar').css("background","rgba(237,237,237,"+ alpha + ")");
             $('.good_topbar .btn').css("background","rgba(237,237,237,"+ (0.5-alpha) + ")");
        });
         $('body').on("touchmove",function(){
         
           var top = $(document).scrollTop() ;
           alpha = top/270 ;
           if(alpha>0.6){
               alpha = 0.6;
           }
          $('.good_topbar').css("background","rgba(237,237,237,"+ alpha + ")");
          $('.good_topbar .btn').css("background","rgba(237,237,237,"+ (0.5-alpha) + ")");
        });
        
          $('#container').html(  tpl('goods_info',json.result) ); 
         // alert(document.body.clientWidth);
         $('.good_img').height( document.body.clientWidth + "px");
             
          $('#con_1 img,#con_1 table,#con_1 div').width('100%');
           var ua = navigator.userAgent.toLowerCase();
           var isWX = ua.match(/MicroMessenger/i) == "micromessenger";
           var z = []; 
           $(".main_image img").each(function() {
                z.push($(this).attr("src"));
            });
            var current;
            if (isWX) {
                $(".main_image img").click(function(e) {
                    e.preventDefault();
                    var startingIndex = $(".main_image img").index($(e.currentTarget));
                    var current = null;
                    $(".main_image img").each(function(B, A) {
                        if (B === startingIndex) {
                            current = $(A).attr("src");
                        }
                    });
                    WeixinJSBridge.invoke("imagePreview", {
                        current: current,
                        urls: z
                    });
                });
            }
            
              var z1 = []; 
           $("#con_1 img").each(function() {
                z1.push($(this).attr("src"));
            });
            var current1;
            if (isWX) {
                $("#con_1 img").click(function(e) {
                    e.preventDefault();
                    var startingIndex = $("#con_1 img").index($(e.currentTarget));
                    var current = null;
                    $("#con_1 img").each(function(B, A) {
                        if (B === startingIndex) {
                            current1 = $(A).attr("src");
                        }
                    });
               
                    WeixinJSBridge.invoke("imagePreview", {
                        current: current1,
                        urls: z1
                    });
                });
            }
            
           document.title = json.result.goods.title;
           hasoption = json.result.options.length>0;
           goods = json.result.goods;
           maxbuy = json.result.goods.maxbuy;
           options = json.result.options;
           specs = json.result.specs;
           if(options.length>0){
             $('#productpricecontainer').html('');
           }
   
           $('#total').blur(function(){
              var total = $("#total");
	if(!total.isInt()){
	     total.val("1");
                       return;
	}
                  if(parseInt(total.val())<=0){
	     total.val("1");
                       return;
	}
	var stock = $("#stock").html()==''?-1:parseInt($("#stock").html());
	var num = parseInt(total.val() ) + 1;
                  if(num>maxbuy && maxbuy>0){
		tip.show("您最多可购买 " + maxbuy + " 件!");
		num = maxbuy;
	}
	else if(num>stock && stock!=-1){
		tip.show("您最多可购买 " + stock + " 件");
		num = stock;
	}
	
	total.val(num);
        
               
           });
 
               
                    new Swipe($('.main_image')[0], {
			speed:300,
			auto:4000,
			callback: function(){
			  
                                 $(".flicking_con  .inner  a").removeClass("on").eq(this.index).addClass("on");
		}
	  });
     
 
            $(".option").click(function() {
               
			 var specid = $(this).attr("specid");
			 var oid = $(this).attr("oid");
			$(".optionid_"+specid).val(oid);
			$(".options_" + specid + "  .option").removeClass("on").attr("sel", "false");
			$(this).addClass("on").attr("sel", "true");
	 
             var titles='已选: ';
			     $('.spec_items').each(function(){
                                 if($(this).find('.on').length>0){
			        titles+= $(this).find('.on').attr('title')+";";   
                            }
			     });
                             
                             $('.good_choose .info .right .option').html(titles);
         var thumb = $(this).attr('thumb');
         if(thumb!=''){
             $("#chooser_img").attr('src',thumb);
         }
         else{
             
             $("#chooser_img").attr('src',json.result.goods.thumb);
         }
			var optionid = "";
			var stock =0;
			var marketprice = 0;
			var productprice = 0;
			 var ret = option_selected();
  
			if(ret.no==''){
				var len = options.length;
				for(var i=0;i<len;i++) {
					var o = options[i];
					var ids = ret.all.join("_");
					if( o.specs==ids){
						optionid = o.id;
						stock = o.stock;
						marketprice = o.marketprice;
						productprice = o.productprice;
						break;
					}
					
				}
                                
			   $("#optionid").val(optionid); 
			    
				if(stock!="-1"){
					$("#stockcontainer").html("库存:<span id='stock'>" + stock + "</span>");
				}
				else{
				  $("#stockcontainer").html("<span id='stock'></span>");
				}
				if(ret.no==''){
					if(stock==0){
					   $('.sub').addClass('disabled').html('库存不足,无法购买');
					}
					else{
					 $('.sub').removeClass('disabled').html('确认');
					}
				} 
				$("#marketprice").html(marketprice);
				
		     	$("#option_price").html(marketprice);	
		     	$("#option_stock").html(stock);	
				 
				$("#productprice").html(productprice);
				if(productprice<=0){
				$('#productpricecontainer').html("");
				}
				else{
			
				   $('#productpricecontainer').html("市场价￥<span id='productprice'>" + productprice + "</span>");
				}
			}
		});
                
           
                $('.like').click(function(){
                    var self = $(this);
                    require(['core'],function(core){
                       core.json('shop/favorite',{op:'set', id:'<?php  echo $_GPC['id'];?>'},function(ret){
                           if(ret.status==1){
                
                                if(ret.result.isfavorite){
                                   self.find('i').removeClass('fa-star-o').addClass('fa-star').css('color','#f90');
                                }
                                else{
                                   self.find('i').addClass('fa-star-o').removeClass('fa-star').css('color','#999');
                                }
                           }
                           else{
                               core.tip.show('操作失败');
                           }
                       });
                      },false,true);
                });
                var page = 1;
          function bindCommentImages(){
                var z = []; 
                          $(".comment .imgs img").each(function() {
                             z.push($(this).attr("src"));
                         });
                         var current;
                         if (isWX) {
                             $(".comment .imgs  img").click(function(e) {
                                 e.preventDefault();
                                 var startingIndex = $(".comment .imgs  img").index($(e.currentTarget));
                                 var current = null;
                                 $(".comment .imgs  img").each(function(B, A) {
                                     if (B === startingIndex) {
                                         current = $(A).attr("src");
                                     }
                                 });
                                 WeixinJSBridge.invoke("imagePreview", {
                                     current: current,
                                     urls: z
                                 });
                             });
                         }
          }
                $('#nav_3').click(function(){
                    page = 1;
                     core.json('shop/util',{op:'comment', page:page,goodsid:'<?php  echo $_GPC['id'];?>'},function(json){
                         if(json.result.list.length<=0){
                             $('#comment_container').html('暂时没有任何评价');
                             return;
                         }
                         $('#comment_container').html( tpl('tpl_comment',json.result));
                       bindCommentImages();
                            var loaded = false;
                              var stop=true; 
                              $(window).scroll(function(){ 
                                  if(loaded){
                                      return;
                                  }
                                    totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop()); 
                                    if($(document).height() <= totalheight){ 

                                        if(stop==true){ 
                                            stop=false; 
                                            $('#comment_container').append('<div id="comment_loading"><i class="fa fa-spinner fa-spin"></i> 正在加载...</div>');
                                            page++;
                                            core.json('shop/util', {op:'comment',page:page,goodsid:'<?php  echo $_GPC['id'];?>'}, function(morejson) {  
                                                stop = true;
                                                $('#comment_loading').remove();
                                                $("#comment_container").append(tpl('tpl_comment', morejson.result));
                                                  bindCommentImages();
                                                if (morejson.result.list.length <morejson.result.pagesize) {

                                                    $("#comment_container").append('<div id="comment_loading">已经加载完全部评价</div>');
                                                    loaded = true;
                                                    $(window).scroll = null;
                                                    return;
                                                }
                                            },true); 
                                        } 
                                    } 
                                });
                     });
                 });
                 
                 $('#nav_4').click(function(){
                      core.json('shop/util',{op:'recommand'},function(json){
                         if(json.result.list.length<=0){
                             $('#recommand_container').html('暂时没有同店推荐');
                             return;
                         }
                         $('#recommand_container').html( tpl('tpl_recommand',json.result));
                         $('#recommand_container .good').click(function(){
                            location.href = core.getUrl('shop/detail',{id:$(this).data('goodsid') });
                         });
                         
                     });
                 });
        },true);
        
    })
</script>
<script type="text/javascript">
	function tab(n){
		$('#con_'+n).fadeIn();
		$('#con_'+n).siblings().hide();
		$('#nav_'+n).addClass('navon');
		$('#nav_'+n).siblings().removeClass('navon');
                      
	}
	function choose(act){
                          
	    action = act;
		$('.good_choose_layer').fadeIn(200);
                                    $('.good_choose_layer').unbind('click').click(function(){
                                   closechoose();
                               })
		$('.good_choose').fadeIn(200);
	}
	function choose2(direct){
	    if(!direct){
		    if($('.sub').hasClass('disabled')){
		       return;A
		    }
		    else{
		     var titles = '';
                     
		    if(hasoption){
			     
			     titles+='已选: ';
			     $('.spec_items').each(function(){
			     
			        titles+= $(this).find('.on').attr('title')+";";   
			     });
			    
			    }
		    }
		   
		    $("#optiondiv").html(titles);
		  
	    } else {
                action = "";
            }
		$('.good_choose_layer').fadeOut(100);
		$('.good_choose').fadeOut(100); 
	 
		if(action=='cart'){
                                                require(['core'],function(core){

                                                                           core.json('shop/cart',{op:'add', id:'<?php  echo $_GPC['id'];?>',optionid:$('#optionid').val(),total:$('#total').val()},function(ret){
                                                                                                       if(ret.status==1){
                                                                                                           core.tip.show(ret.result.message);
                                                                                                           var cartdiv = $('.cart');
                                                                                                                               if( cartdiv.find('b').length<=0){
                                                                                                                                  cartdiv.append('<b>'+ ret.result.cartcount +"</b>");
                                                                                                                               }
                                                                                                                               else {
                                                                                                                                  cartdiv.find('b').html(ret.result.cartcount);
                                                                                                                               }

                                                                                                       } else{
                                                                                                           core.message(ret.result,'','error');
                                                                                                       }
                                                                               },true,true);
                                                 });
                                    }else if(action=='buy'){
                                         location.href = "<?php  echo $this->createMobileUrl('order/confirm')?>&id=<?php  echo $_GPC['id'];?>&optionid=" +$("#optionid").val() + "&total=" + $("#total").val();
                                    }

	}
  function addNum(){
	var total = $("#total");
	if(!total.isInt()){
		total.val("1");
	}
	var stock = $("#stock").html()==''?-1:parseInt($("#stock").html());
	var num = parseInt(total.val() ) + 1;
                  if(num>maxbuy && maxbuy>0){
		tip.show("您最多可购买 " + maxbuy + " 件!");
		num = maxbuy;
	}
	else if(num>stock && stock!=-1){
		tip.show("您最多可购买 " + stock + " 件");
		num = stock;
	}
	total.val(num);
}
function reduceNum(){
	var total = $("#total");
	if(!total.isInt()){
		total.val("1");
	}
	var num = parseInt( total.val() );
	if(num-1<=0){
		return;
	}
	num--;
	total.val(num);
}

	function option_selected(){
	var ret= {
		no: "",
		all: []
	};
	if(!hasoption){
		return ret;
	}
			$(".optionid").each(function(){
				ret.all.push($(this).val());
				if($(this).val()==''){
					ret.no = $(this).attr("title");
					return false;
				}
	})
	return ret;
}
</script>
<?php  $hide_footer=1?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>