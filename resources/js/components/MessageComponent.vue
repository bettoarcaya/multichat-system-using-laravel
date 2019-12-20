<template>
	<div class="container">
    <div class="row no-gutters contact-msg-box">
      <!-- contact content -->
      <div class="col-md-4 contact-box">
        <div class="row padd-l-10">
          <div class="col-md-3">
            <img 
							class="round-img img-fluid" 
							:src="'/assets/images/avatar-m.jpeg'" 
							alt="">
          </div>
          <div class="col-md-9">
            <p><strong>Nombre contacto</strong></p>
            <span>Mensja de contacto</span>
            <p>estado</p>
          </div>
        </div>
        <div class="row padd-l-10">
          <div class="col-md-3">
            <img 
							class="round-img img-fluid" 
							:src="'/assets/images/avatar-m.jpeg'" 
							alt="">
          </div>
          <div class="col-md-9">
            <p><strong>Nombre contacto</strong></p>
            <span>Mensja de contacto</span>
            <p>estado</p>
          </div>
        </div>
        <div class="row padd-l-10">
          <div class="col-md-3">
            <img 
							class="round-img img-fluid" 
							:src="'/assets/images/avatar-m.jpeg'" 
							alt="">
          </div>
          <div class="col-md-9">
            <p><strong>Nombre contacto</strong></p>
            <span>Mensja de contacto</span>
            <p>estado</p>
          </div>
        </div>

      </div>
      <div class="col-md-8 left-border">
        <div class="msg-box">
          <!-- msj content -->

        </div>
        <div>
        	<form method="post">
            <div class="input-group">
							<textarea 
									class="form-control" 
									name="content"
									cols="42" 
									rows="2.5" 
									placeholder="Escribe tu mensaje" 
									style="border-right-color: white; resize: none;">
							</textarea>
							<div class="input-group-prepend">
									<div class="input-group-text bg-white" style="border-left-color: white;">
											<a href="javascript:void(0)">
													<img :src="'/assets/images/SendIcon.png'">
											</a>
									</div>
							</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        beforeMount(){
					console.log('before mounted');
				}
    }
</script>