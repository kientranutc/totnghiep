$(document).ready(function(){
	var pathArray = location.href.split('/');
    var protocol = pathArray[0];
    var host = pathArray[2];
    var url = protocol + '//' + host;
  $("body").on("click","a.addcart", function(e){
  	
    var id=$(this).attr('value');
    var _csrf=$("#_csrf").val();
    var name =$(this).attr('name');
    $("#name-pro-add-cart").html(name);
    $.post(url+'/shopcart/addcart', {id: id,_csrf:_csrf}, function(data) {
   	$("#modal-add-cat").modal();
    $(".cart").load(" .cart");

   });

 });
});