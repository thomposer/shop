<?php defined('IN_IA') or exit('Access Denied');?>    <div class="good_info2">
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
            <div class="con" id="con_3" ><div id='comment_container'style="text-align: center;padding-top:10px"></div></div>
            <div class="con" id="con_4"><div id='recommand_container'></div></div>
        </div>
    </div>
