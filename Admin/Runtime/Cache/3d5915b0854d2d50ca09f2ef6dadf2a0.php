<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="/Admin/Tpl/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/Admin/Tpl/Index/js/coupon.js"></script>
<style type="text/css">
<!--
.cha li{
	width:300px;
	float:left;
	list-style-type:none;
	text-align: right;	
	
}
.right {
	height: auto;
	width: 100%;
	background-color: #CCC;
	clear:both;
}
-->
</style>
</head>

<body>
<div class="left">
<form action="" method="post">
<ul class="cha">
<li>Cid: <select name="cid" style="width:200px; ">
<option value="<?php echo ($cid); ?>" selected="selected">&nbsp;<?php echo ($cid); ?></option>
<option value="0">所有分类</option>
<option value="99">&nbsp;网络游戏点卡</option>
<option value="50017708">&nbsp;网游装备、游戏币、帐号、代练</option>
<option value="40">&nbsp;腾讯QQ专区</option>
<option value="50004958">&nbsp;移动联通小灵通充值中心</option>
<option value="50008907">&nbsp;IP卡、网络电话、手机号码</option>
<option value="1512">&nbsp;品牌手机</option>
<option value="50019321">&nbsp;国货精品手机</option>
<option value="50018367">&nbsp;手机配件</option>
<option class="S" value="11">&nbsp;电脑硬件、台式整机、网络设备</option>
<option class="S" value="1101">&nbsp;笔记本电脑</option>
<option value="50018377">&nbsp;笔记本配件</option>
<option class="S" value="14">&nbsp;数码相机、摄像机、图形冲印</option>
<option class="S" value="1201">&nbsp;MP3、MP4、iPod、录音笔</option>
<option class="S" value="50008090">&nbsp;3C数码配件市场</option>
<option class="S" value="50007218">&nbsp;办公设备、办公用品及耗材</option>
<option class="S" value="50018627">&nbsp;电子辞典/学习机、文具</option>
<option class="S" value="50018908">&nbsp;影音电器</option>
<option value="50017285">&nbsp;国货精品视听</option>
<option class="S" value="50018957">&nbsp;生活电器</option>
<option class="S" value="50018930">&nbsp;厨房电器</option>
<option class="S" value="50008168">&nbsp;网络服务、电脑软件</option>
<option class="S" value="50019393">&nbsp;闪存卡、U盘、移动存储</option>
<option value="50010788">&nbsp;彩妆/香水/美发/工具</option>
<option value="1801">&nbsp;美容护肤/美体/精油</option>
<option value="50015926">&nbsp;珠宝、钻石、翡翠、黄金</option>
<option value="50005700">&nbsp;品牌手表、流行手表</option>
<option value="1705">&nbsp;饰品、流行首饰、时尚饰品</option>
<option value="16">&nbsp;女装、女士精品</option>
<option value="50006843">&nbsp;女鞋</option>
<option value="50006842">&nbsp;男女箱包、单肩包、手提包、旅行箱</option>
<option value="1625">&nbsp;女士内衣、男士内衣、家居服</option>
<option value="50016853">&nbsp;男鞋/皮鞋/休闲鞋</option>
<option value="30">&nbsp;男装</option>
<option value="50010404">&nbsp;配件、皮带、围巾、领带、帽子手套</option>
<option value="50010728">&nbsp;运动、瑜伽、健身、球迷用品</option>
<option value="50016756">&nbsp;运动服、运动包、颈环配件</option>
<option value="50010388">&nbsp;运动鞋</option>
<option value="2203">&nbsp;户外、登山、野营、涉水</option>
<option value="50018963">&nbsp;旅游度假、打折机票、特惠酒店</option>
<option value="50008165">&nbsp;童装、童鞋、婴儿服、孕妇装</option>
<option value="35">&nbsp;奶粉、尿片、母婴用品</option>
<option value="50005998">&nbsp;益智玩具、童车、童床、书包</option>
<option class="S" value="21">&nbsp;居家日用、厨房餐饮、卫浴洗浴</option>
<option class="S" value="2128">&nbsp;时尚家饰、工艺品、十字绣</option>
<option class="S" value="50002768">&nbsp;个人护理保健</option>
<option class="S" value="50008164">&nbsp;家具、家具定制、宜家代购</option>
<option class="S" value="50008163">&nbsp;家纺 床上用品 地毯 布艺</option>
<option class="S" value="27">&nbsp;装潢、灯具、五金、安防、卫浴</option>
<option value="50008825">&nbsp;保健食品</option>
<option value="50002766">&nbsp;食品、茶叶、零食、特产</option>
<option value="23">&nbsp;古董、邮币、字画、收藏</option>
<option value="26">&nbsp;汽车、配件、改装、摩托、自行车</option>
<option value="29">&nbsp;宠物、宠物食品及用品</option>
<option value="28">&nbsp;ZIPPO、瑞士军刀、眼镜</option>

<option value="2813">&nbsp;成人用品、避孕用品、情趣内衣</option>
<option value="33">&nbsp;书籍、杂志、报纸</option>
<option value="34">&nbsp;音乐、影视、明星、乐器</option>
<option value="20">&nbsp;电玩、配件、游戏、攻略</option>
<option value="25">&nbsp;模型、娃娃、人偶、毛绒、KITTY</option>
<option value="50008075">&nbsp;演出、旅游、吃喝玩乐折扣券</option>
<option value="50007216">&nbsp;鲜花速递、蛋糕配送、园艺花艺</option>
<option value="50003754">&nbsp;网店装修、用品、物流快递、图片存储</option>
</select>      </li>
<li>keyword:<input type="text" name="Keyword" value="<?php echo ($Keyword); ?>" /></li>
<li>ShopType:<select name="ShopType">
<option value="<?php echo ($ShopType); ?>"><?php echo ($ShopType); ?></option>  
<option value='b'>商城</option>  
<option value='all'>所有</option>  
<option value='c'>集市</option>  
</select> </li>
<li>start_credit:      <select name="StartCredit">
      <option value="<?php echo ($StartCredit); ?>"><?php echo ($StartCredit); ?></option>  
      <option value="1heart">(一心)</option>      
      <option value="2heart">(两心)</option>      
      <option value="3heart">(四心)</option>      
      <option value="4heart">(一心)</option>      
      <option value="5heart">(五心)</option>                              
      <option value="1diamond">(一钻)</option>      
      <option value="2diamond">(两钻)</option>      
      <option value="3diamond">(三钻)</option>      
      <option value="4diamond">(四钻)</option>      
      <option value="5diamond">(五钻)</option>                              
      <option value="1crown">(一冠)</option>      
      <option value="2crown">(两冠)</option>      
      <option value="3crown">(三冠)</option>   
      <option value="4crown">(四冠)</option>            
      <option value="5crown">(五冠)</option>      
      <option value="1goldencrown">(一黄冠)</option>                              
      <option value="2goldencrown">(二黄冠)</option>      
      <option value="3goldencrown">(三黄冠)</option>      
      <option value="4goldencrown">(四黄冠)</option>      
      <option value="5goldencrown">(五黄冠)</option>      
      </select></li>
<li>end_credit:      <select name="EndCredit">
      <option value="<?php echo ($EndCredit); ?>"><?php echo ($EndCredit); ?></option>  
      <option value="1heart">(一心)</option>      
      <option value="2heart">(两心)</option>      
      <option value="3heart">(四心)</option>      
      <option value="4heart">(一心)</option>      
      <option value="5heart">(五心)</option>                              
      <option value="1diamond">(一钻)</option>      
      <option value="2diamond">(两钻)</option>      
      <option value="3diamond">(三钻)</option>      
      <option value="4diamond">(四钻)</option>      
      <option value="5diamond">(五钻)</option>                              
      <option value="1crown">(一冠)</option>      
      <option value="2crown">(两冠)</option>      
      <option value="3crown">(三冠)</option>   
      <option value="4crown">(四冠)</option>            
      <option value="5crown">(五冠)</option>      
      <option value="1goldencrown">(一黄冠)</option>                              
      <option value="2goldencrown">(二黄冠)</option>      
      <option value="3goldencrown">(三黄冠)</option>      
      <option value="4goldencrown">(四黄冠)</option>      
      <option value="5goldencrown">(五黄冠)</option>      
      </select></li>
<li>PageNo:<select name="PageNo">
<option value="<?php echo ($PageNo); ?>"><?php echo ($PageNo); ?></option>  
<option value='1'>1</option>  
<option value='2'>2</option>  
<option value='3'>3</option>  
<option value='4'>4</option>  
<option value='5'>5</option>  
<option value='6'>6</option>  
<option value='7'>7</option>  
<option value='8'>8</option>  
<option value='9'>9</option>  
<option value='10'>10</option>  
<option value='11'>11</option>  
<option value='12'>12</option>  
<option value='13'>13</option>  
<option value='14'>14</option>  
<option value='15'>15</option>  
<option value='16'>16</option>  
<option value='17'>17</option>  
<option value='18'>18</option>  
<option value='19'>19</option>  
<option value='20'>20</option>  
<option value='21'>21</option>  
<option value='22'>22</option>  
<option value='23'>23</option>  
<option value='24'>24</option>  
<option value='25'>25</option>  
<option value='26'>26</option>  
<option value='27'>27</option>  
<option value='28'>28</option>  
<option value='29'>29</option>  
<option value='30'>30</option>  
<option value='31'>31</option>  
<option value='32'>32</option>  
<option value='33'>33</option>  
<option value='34'>34</option>  
<option value='35'>35</option>  
<option value='36'>36</option>  
<option value='37'>37</option>  
<option value='38'>38</option>  
<option value='39'>39</option>  
<option value='40'>40</option>  
<option value='41'>41</option>  
<option value='42'>42</option>  
<option value='43'>43</option>  
<option value='44'>44</option>  
<option value='45'>45</option>  
<option value='46'>46</option>  
<option value='47'>47</option>  
<option value='48'>48</option>  
<option value='49'>49</option>  
<option value='50'>50</option>  
<option value='51'>51</option>  
<option value='52'>52</option>  
<option value='53'>53</option>  
<option value='54'>54</option>  
<option value='55'>55</option>  
<option value='56'>56</option>  
<option value='57'>57</option>  
<option value='58'>58</option>  
<option value='59'>59</option>  
<option value='60'>60</option>  
<option value='61'>61</option>  
<option value='62'>62</option>  
<option value='63'>63</option>  
<option value='64'>64</option>  
<option value='65'>65</option>  
<option value='66'>66</option>  
<option value='67'>67</option>  
<option value='68'>68</option>  
<option value='69'>69</option>  
<option value='70'>70</option>  
<option value='71'>71</option>  
<option value='72'>72</option>  
<option value='73'>73</option>  
<option value='74'>74</option>  
<option value='75'>75</option>  
<option value='76'>76</option>  
<option value='77'>77</option>  
<option value='78'>78</option>  
<option value='79'>79</option>  
<option value='80'>80</option>  
<option value='81'>81</option>  
<option value='82'>82</option>  
<option value='83'>83</option>  
<option value='84'>84</option>  
<option value='85'>85</option>  
<option value='86'>86</option>  
<option value='87'>87</option>  
<option value='88'>88</option>  
<option value='89'>89</option>  
<option value='90'>90</option>  
<option value='91'>91</option>  
<option value='92'>92</option>  
<option value='93'>93</option>  
<option value='94'>94</option>  
<option value='95'>95</option>  
<option value='96'>96</option>  
<option value='97'>97</option>  
<option value='98'>98</option>  
<option value='99'>99</option>  
<option value='100'>100</option>  
</select></li>
<li>PageSize:<input type="text" name="PageSize" value="<?php echo ($PageSize); ?>" /></li>
<li>sort:<select name="Sort" style="width:200px;">
      <option value="<?php echo ($Sort); ?>"><?php echo ($Sort); ?></option>
      <option value="price_asc">(价格从低到高)</option>
      <option value="price_desc">(价格从高到低)</option>      
      <option value="credit_desc">(信用等级从高到低)</option>
      <option value="commissionRate_desc">(佣金比率从高到底</option>
      <option value="commissionRate_asc">(佣金比率从低到高)</option>
      <option value="commissionNum_desc">(成交量成高到低) </option>
      <option value="commissionNum_asc">(成交量从低到高</option>
      <option value="commissionVolume_desc">(总支出佣金从高到底)</option>
      <option value="commissionVolume_asc">(总支出佣金从低到高)</option>
      <option value="delistTime_desc()">(商品下架时间从高到底)</option>
      <option value="delistTime_asc">(商品下架时间从低到高)</option>
</select></li>
<li><input type="checkbox" name="addgood" value="checkbox">批量入库</li>
<li><input type="submit" value="查询" name="sub_cha"/></li>
</form>
</div>
<div class="right">

<table border="1">
  <tr>
    <th scope="col">图</th>
    <th scope="col">标题</th> 
    <th scope="col">优惠价</th>
    <th scope="col">原价</th>
    <th scope="col">nick</th>
    <th scope="col">结束</th>
    <th scope="col">开始</th>
    <th scope="col">信誉</th>
    <th scope="col">操作</th>
  </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="sql" method="post" class="f_item" target="_blank"> 
 <div style="display:none">
<input type='text' value='<?php echo ($vo["num_iid"]); ?>' name='num_iid'/>
<input type='text' value='<?php echo ($vo["title"]); ?>' name='title'/>
<input type='text' value='<?php echo ($vo["nick"]); ?>' name='nick'/>
<input type='text' value='<?php echo ($vo["pic_url"]); ?>' name='pic_url'/>
<input type='text' value='<?php echo ($vo["price"]); ?>' name='price'/>
<input type='text' value='<?php echo ($vo["click_url"]); ?>' name='click_url'/>
<input type='text' value='<?php echo ($vo["commission"]); ?>' name='commission'/>
<input type='text' value='<?php echo ($vo["commission_rate"]); ?>' name='commission_rate'/>
<input type='text' value='<?php echo ($vo["commission_num"]); ?>' name='commission_num'/>
<input type='text' value='<?php echo ($vo["commission_volume"]); ?>' name='commission_volume'/>
<input type='text' value='<?php echo ($vo["shop_click_url"]); ?>' name='shop_click_url'/>
<input type='text' value='<?php echo ($vo["seller_credit_score"]); ?>' name='seller_credit_score'/>
<input type='text' value='<?php echo ($vo["item_location"]); ?>' name='item_location'/>
<input type='text' value='<?php echo ($vo["volume"]); ?>' name='volume'/>
<input type='text' value='<?php echo ($vo["coupon_price"]); ?>' name='coupon_price'/>
<input type='text' value='<?php echo ($vo["coupon_rate"]); ?>' name='coupon_rate'/>
<input type='text' value='<?php echo ($vo["coupon_start_time"]); ?>' name='coupon_start_time'/>
<input type='text' value='<?php echo ($vo["coupon_end_time"]); ?>' name='coupon_end_time'/>
<input type='text' value='<?php echo ($vo["shop_type"]); ?>' name='shop_type'/>
 </div>
  <tr>
    <td><img src="<?php echo ($vo["pic_url"]); ?>_80x80.jpg" /></td>
    <td><a href="<?php echo ($vo["click_url"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></td>
    <td><?php echo ($vo["coupon_price"]); ?></td>
    <td><?php echo ($vo["price"]); ?></td>
    <td><?php echo ($vo["nick"]); ?></td>
	<td><?php echo ($vo["coupon_end_time"]); ?></td>
	<td><?php echo ($vo["coupon_start_time"]); ?></td>
	<td><?php echo ($vo["seller_credit_score"]); ?></td>
    <td>
 <input type="submit" value="入库" name="add"/>
 <input type="submit" value="更新" name="update"/>
 有
    </td>
  </tr>
  </form><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>
</body>
</html>