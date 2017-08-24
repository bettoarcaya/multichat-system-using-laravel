  $(document).ready(function() {

    $('#btnMensaje').click(function(){

      var txt = $('#txtMensaje').val();

      if(txt.length){
        $.get('sentMsj',function(){
          console.log(txt);

          var msj = '<div class="col-md-6 panel panel-default"><div class="panel-body">'+txt+'</div></div>'

          $('#contMsjs').append(msj);

        });
      }


    });
  });
