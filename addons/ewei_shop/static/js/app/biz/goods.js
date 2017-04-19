/*
 * 微信分销
 * 
 * weichengtech
 */
define(['jquery','core'], function($,core){
    var shop = {
        category: { }
    };
    //获取店铺分类
    shop.getCategory = function(callback){
             core.json('shop/util/category',{},function(ret){
              shop.category = ret;
              if(callback){
                  callback(ret);
              }
           });
    }
    return shop;
});

