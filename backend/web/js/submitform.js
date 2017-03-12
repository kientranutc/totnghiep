$(document).ready(function($) {
  $('#btn-modal').click(function(e){   
       $('#modal-from').modal('show')
            .find('#modal-content')
            .load($(this).attr('value'));  
   });
});

