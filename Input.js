
$(document).ready(function(){
 $("#FM").submit(function(e){
    e.preventDefault();

    var kondisi = true;
    var formData = $(this).serialize();
    $('.centang').each(function(){
        if( $(this).val() == $("#id-mobil").val()){ 
            kondisi = false;
        }
    })

    if(kondisi){
        $.ajax({
            url: "Input1.php",
            type: "Post",
            data: formData,
            success : function(response){
                location.reload();
            }
        })
    }else{
        alert('Error');
    }
 })
})
