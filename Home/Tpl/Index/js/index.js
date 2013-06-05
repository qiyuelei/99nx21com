$(document).ready(function(){
      $('a[rel*=facebox]').facebox({
        loading_image : 'loading.gif',
        close_image   : 'closelabel.gif'
      }) 
$(".cat ul li a").corner("5px");
$(".cor").corner("5px");
//$(".intr").hide();
      
var myDate = new Date();
myDate.getYear();        //获取当前年份(2位)
myDate.getFullYear();    //获取完整的年份(4位,1970-????)
myDate.getMonth();       //获取当前月份(0-11,0代表1月)
myDate.getDate();        //获取当前日(1-31)
myDate.getDay();         //获取当前星期X(0-6,0代表星期天)
myDate.getTime();        //获取当前时间(从1970.1.1开始的毫秒数)
myDate.getHours();       //获取当前小时数(0-23)
myDate.getMinutes();     //获取当前分钟数(0-59)
myDate.getSeconds();     //获取当前秒数(0-59)
myDate.getMilliseconds();    //获取当前毫秒数(0-999)
myDate.toLocaleDateString();     //获取当前日期

var LTime = myDate.getMonth()+1+"/"+myDate.getDate()+"/"+myDate.getFullYear()+" 23:59:59";
//var LTime = myDate.getMonth();
Etime = new Date(LTime).getTime();
	 // alert(Etime);
	 // alert(e_time);
	 
lxfEndtime();	 
});

function lxfEndtime(){
          $(".lxftime").each(function(){
                var lxfday=$(this).attr("lxfday");//用来判断是否显示天数的变量
                var endtime = new Date($(this).attr("endtime")).getTime();//取结束日期(毫秒值)
                //var endtime = new Date($(this).attr("endtime"));//取结束日期(毫秒值)				
				//alert(endtime);
				if (isNaN(endtime)) {
					endtime = Etime;
					//alert("long");
				 }
				//alert(endtime);
               // var endtime = "05/21/2013 0:0:0";//取结束日期(毫秒值)				
                var nowtime = new Date().getTime();        //今天的日期(毫秒值)
                var youtime = endtime-nowtime;//还有多久(毫秒值)
                var seconds = youtime/1000;
                var minutes = Math.floor(seconds/60);
                var hours = Math.floor(minutes/60);
                var days = Math.floor(hours/24);
                var CDay= days ;
                var CHour= hours % 24;
                var CMinute= minutes % 60;
                var CSecond= Math.floor(seconds%60);//"%"是取余运算，可以理解为60进一后取余数，然后只要余数。
                if(endtime<=nowtime){
                        $(this).html("已过期")//如果结束日期小于当前日期就提示过期啦
                        }else{
                                if($(this).attr("lxfday")=="no"){
                                        $(this).html("<i>剩余时间：</i><span>"+CHour+"</span>时<span>"+CMinute+"</span>分<span>"+CSecond+"</span>秒");          //输出没有天数的数据
                                        }else{
                        $(this).html("<i>剩余时间：</i><span>"+days+"</span><em>天</em><span>"+CHour+"</span><em>时</em><span>"+CMinute+"</span><em>分</em><span>"+CSecond+"</span><em>秒</em>");          //输出有天数的数据
                                }
                        }
          });
   setTimeout("lxfEndtime()",1000);
  };