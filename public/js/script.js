  $(document).ready(function() {

    $('#btnMensaje').click(function(){

      var txt = $('#txtMensaje').val();

      if(txt.length){
        $.get('sentMsj',function(){
          console.log(txt);

          var msj ='<div class="col-md-6 bg bg-info msj"><p>'+txt+'</p></div>';

          $('#contMsjs').append(msj);

        });
      }


    });
  });
