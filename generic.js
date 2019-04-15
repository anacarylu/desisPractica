
////////////nuevo voto/////////////
$('#form').submit(function(event){
  event.preventDefault();
  var postdata = $('#form').serialize();
  console.log(postdata);
  $.ajax({
    type: 'POST',
    url: 'addvote.php',
    data: postdata,
    dataType: 'json',
      success: function(response) {
        console.log(response);
        if (response.codigo == "01"){
          alert("gracias por votar");
        } else {
          alert(response.mensaje);
      }
      }
  })
})