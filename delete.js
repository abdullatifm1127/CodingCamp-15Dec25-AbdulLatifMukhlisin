$(document).ready(function(){
    $("#btn-del").click(function(e){
      var idss = []; // nama variable harus beda dengan key saat post
      $('.centang:checked').each(function(){ //melooping cek box yang memiliki class centang yang di check(Dicentang)
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