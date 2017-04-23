<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_header', TEMPLATE_INCLUDEPATH)) : (include template('web/_header', TEMPLATE_INCLUDEPATH));?> 
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('tabs', TEMPLATE_INCLUDEPATH)) : (include template('tabs', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-default">
	<div class="panel-heading">查找订单</div>
	<div style="padding: 10px; padding-bottom: 0px;" class="panel-body">
		<div class="alert alert-info">数据量大可能会引起卡顿，请在搜索前根据需要选择您的搜索条件。</div>
		<form id="form1" role="form" class="form-horizontal" method="get" action="./index.php">
			<input type="hidden" value="site" name="c">
			<input type="hidden" value="entry" name="a">
			<input type="hidden" value="ewei_shop" name="m">
			<input type="hidden" value="plugin" name="do">
			<input type="hidden" value="exhelper" name="p">
			<input type="hidden" value="singleprint" name="method">
			<div class="form-group">
				<div class="col-sm-8 col-lg-9 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">订单号</div>
						<input type="text" placeholder="订单号" value="" name="keyword" class="form-control">
						<div class="input-group-addon">快递单号</div>
						<input type="text" placeholder="快递单号" value="" name="expresssn" class="form-control">
						<div class="input-group-addon">用户信息</div>
						<input type="text" placeholder="用户手机号/姓名/昵称, 收件人姓名/手机号 " value="" name="member" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12 col-lg-12 col-xs-12"> 
					<div class="input-group">
						<div class="input-group-addon">订单状态</div>
						<select class="form-control" name="status">
							<option value="">全部</option>
							<option value="0">待付款</option>
							<option value="1" selected="">待发货</option>
							<option value="2">已发货</option>
							<option value="3">已完成</option>
							<option value="5">已退款</option>
							<option value="-1">已关闭</option>
						</select>
						<div class="input-group-addon">快递单打印状态</div>
						<select class="form-control" name="printstate">
							<option value="">全部</option>
							<option value="0" selected="">未打印</option>
							<option value="1">部分打印</option>
							<option value="2">打印完成</option>
						</select>
						<div class="input-group-addon">发货单打印状态</div>
						<select class="form-control" name="printstate2">
							<option selected="" value="">全部</option>
							<option value="0" selected="">未打印</option>
							<option value="1">部分打印</option>
							<option value="2">打印完成</option>
						</select>
						<div class="input-group-addon">下单时间
							<label style="margin-top:-7px;" class="radio-inline">
								<input type="radio" name="searchtime" value="0">不搜索
							</label>
							<label style="margin-top:-7px;" class="radio-inline">
								<input type="radio" name="searchtime" value="1" checked="" >搜索
							</label>
						</div>
						<div style="height: 34px; float: left;">
							<script type="text/javascript">
								require(["daterangepicker"], function($) {
									$(function() {
										$(".daterange.daterange-time").each(function() {
											var elm = this;
											$(this).daterangepicker({
												startDate: $(elm).prev().prev().val(),
												endDate: $(elm).prev().val(),
												format: "YYYY-MM-DD HH:mm",
												timePicker: true,
												timePicker12Hour: false,
												timePickerIncrement: 1,
												minuteStep: 1
											}, function(start, end) {
												$(elm).find(".date-title").html(start.toDateTimeStr() + " 至 " + end.toDateTimeStr());
												$(elm).prev().prev().val(start.toDateTimeStr());
												$(elm).prev().val(end.toDateTimeStr());
											});
										});
									});
								});
							</script>

							<input type="hidden" value="<?php  echo date('Y-m-d H:m')?>" name="time[start]">
							<input type="hidden" value="<?php  echo date('Y-m-d H:m')?>" name="time[end]">
							<button type="button" class="btn btn-default daterange daterange-time" data-original-title="" title=""><span class="date-title">1970-01-01 08:00 至 1970-01-01 08:00</span> <i class="fa fa-calendar"></i></button>
						</div>
						<div style="height: 34px; width: 150px; float: left; padding-left: 5px;">
							<button id="search-btn" onclick="search()" class="btn btn-primary" type="button" data-original-title="" title=""><i class="fa fa-search"></i> 搜索</button>
						</div>
					</div>

				</div>
			</div>
		</form>
	</div>
</div>
<div id="orderresult" style="height: auto; overflow: hidden;"></div>
<script language='javascript' src="../addons/ewei_shop/plugin/exhelper/static/js/LodopFuncs.js"></script>
<script src='http://<?php  if(empty($printset["ip"])) { ?>localhost<?php  } else { ?><?php  echo $printset["ip"];?><?php  } ?>:<?php  if(empty($printset["port"])) { ?>8000<?php  } else { ?><?php  echo $printset["port"];?><?php  } ?>/CLodopfuncs.js'></script>

<script language="javascript">
	var LODOP=getCLodop();
	// 执行搜索
    function search(){
        var data = {
          keyword: $.trim($(":input[name='keyword']").val()),
          expresssn: $.trim($(":input[name='expresssn']").val()),
          member: $.trim($(":input[name='member']").val()), 
          status: $.trim($("select[name='status']").val()),
          printstate: $.trim($("select[name='printstate']").val()),
          printstate2: $.trim($("select[name='printstate2']").val()),
          print_type: "<?php  echo $type;?>",
          searchtime: $(":input[name='searchtime']:checked").val(),
          time: {start: $(":input[name='time[start]']").val(),end: $(":input[name='time[end]']").val()}
        };
        $('#search-btn').html("<i class='fa fa-spinner fa-spin'></i> 正在搜索..."); 
        $.ajax({
            url: "<?php  echo $this->createPluginWebUrl('exhelper/doprint',array('op'=>'search','type'=>$type))?>",
            data: data,
            success:function(html){
            	$('#search-btn').html("<i class='fa fa-search'></i> 搜索")
                $('#orderresult').html(html);
                
                $('.order_item').click(function(){
                       $('#orders').find('.panel-body').html("<i class='fa fa-spinner fa-spin'></i> 正在加载...")
                    $.ajax({
                          url: "<?php  echo $this->createPluginWebUrl('exhelper/doprint',array('op'=>'detail','type'=>$type))?>",
                          data: {orderids: $(this).data('orderids')},
                          success:function(html){
                              $('#orders').html(html);
                          }
                      });

                  })
                  
            }
        });
    }  
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_footer', TEMPLATE_INCLUDEPATH)) : (include template('web/_footer', TEMPLATE_INCLUDEPATH));?>