  $(document).ready(function() {

    $('#btnMensaje').click(function(){

      var txt = $('#txtMensaje').val();
      if(txt.length){
        $.get('sentMsj',function(){
          console.log(txt);

          var ntxt = txt.split(' ');
          var texto = '';
          for (var i = 0, cnt = 0; i < ntxt.length; i++) {
            if (cnt === 10) {
              texto = texto + '\n';
              cnt = 0;
            }
            texto = texto + ntxt[i] + ' ';
            cnt++;
          }

          var msj = '<div class="col-md-6 panel panel-default msj"><div class="panel-body">'+texto+'</div></div>'

          $('#contMsjs').append(msj);

        });
      }


    });
  });
