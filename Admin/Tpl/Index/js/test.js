function startRequest(){
	//alert("long");
	$("#target").load("test.php");

}
jQuery(document).ready(function($) {
//超链接的rel属性是否具有facebox
  $('a[rel*=facebox]').facebox() 
}) 