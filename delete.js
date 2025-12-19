$(document).ready(function(){
    $("#btn-del").click(function(e){
      var idss = [];
      $('.centang:checked').each(function(){
        idss.push($(this).val())
      })
      if(idss.length > 0){
        $.ajax({
            type : "Post",
            url : "delete.php",
            data : {ids: idss},
            success : function(response){
                location.reload();
            }
        })
      }

    })
   })