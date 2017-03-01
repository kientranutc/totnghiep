$(document).ready(function(){
    $("#image-news").click(function(event){
      $("#modalimagenews").modal();
    });
    $('#modallsp').on('hidden.bs.modal', function () {
    	var imgnews=$("#image-news").val();
    	if(imgnews!="")
    	{
    	$("#imagenews").attr({
             
    		'src':imgnews,
    		'width':150,
    		'height':100,
    	});
    }
  });
});
    