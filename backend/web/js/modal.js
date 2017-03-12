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

// slideshow
$("#image_slideshow").click(function(event){
    $("#slideshow_img").modal();
  });
  $('#slideshow_img').on('hidden.bs.modal', function () {
   var imgslideshow=$("#image_slideshow").val();
   if(imgslideshow!="")
   {
     $("#attr_image").attr({

      'src':imgslideshow,
      'width':150,
      'height':100,
    });
   }
 });
  // categories
  $("#cat_image").click(function(event){
    $("#imagecat").modal();
  });
  $('#imagecat').on('hidden.bs.modal', function () {
    var imgcat=$("#cat_image").val();
    if(imgcat!="")
    {
      $("#atr_cate").attr({

        'src':imgcat,
        'width':150,
        'height':100,
      });
    }
  });

    // 
    $("input[name='selection[]").click(function(){
     if($("input[name='selection[]']").is(':checked'))
     {
       $('#deletenews').removeClass('disabled');

     }
     else
     {

      $('#deletenews').addClass('disabled');
      
    }
  });

    $("input[name='selection_all']").click(function(){
     if($("input[name='selection_all']").is(':checked'))
     {
       $('#deletenews').removeClass('disabled');

     }
     else
     {

      $('#deletenews').addClass('disabled');
      
    }
  });
     // add field image product
  var max_fields      = 15; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" placeholder="click để thêm ảnh" count="'+x+'" id="imageproduct_'+x+'" value="" class="imagepro" name="imagepro[]"/><a href="#" class="remove_field"> <span class="glyphicon glyphicon-remove"></span></a></div>'); //add input box
          }
        });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    //  modal image products
    var count;
    $("body").on("click","input.imagepro", function(e){
      e.preventDefault();
      $("#imageproduct").modal();
      count=$(this).attr('count');
      $('#imageproduct').on('hidden.bs.modal', function () {
        var val=$("#hidden-product").val();
        $("#imageproduct_"+count).val(val);
      });
    });

  $("#myform").submit( function(e){
      var form = $(this);
      $.ajax({
            url    : '/create',
            type   : 'POST',
            data   : form.serialize(),
            success: function (response) 
            {                  
               console.log(response);
            },
            error  : function (e) 
            {
                console.log(e);
            }
        });
    return false;        
  })


  
  });

    