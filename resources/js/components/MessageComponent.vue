<template>
	<div class="container">
    <div class="row no-gutters contact-msg-box">
      <!-- contact content -->
      <div class="col-md-4 contact-box">
        <div 
					v-for="recent in recentChats" 
					:key="recent.id" 
					class="row padd-l-10"
					v-on:click="openChat(recent.user_id)">
          <div class="col-md-3">
						<img 
							class="round-img img-fluid" 
							:src="`/assets/images/${recent.img}`"
							:alt="`${recent.name}`">
          </div>
          <div class="col-md-9">
            <p><strong>{{recent.name}}</strong></p>
            <span>{{recent.bio}}</span>
            <p>{{recent.state}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-8 left-border">
				<div class="padd-10" v-if='showChat'>
					<img 
							class="round-img img-fluid w-5-percent" 
							:src="`/assets/images/${contactInfo.img}`"
							alt="">
					<strong>{{contactInfo.name}}</strong>
				</div>
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
					let self = this;
					axios.get('chat/recent-chats')
							 .then( response => {
								 self.recentChats = response.data.recent_chats;
							 })
							 .catch( error => {
								 console.log(error);
							 });
				},
				data() {
					return {
						recentChats: [],
						chat: [],
						contactInfo: {},
						showChat: false,
					}
				},
				methods: {
					openChat: function(contactId){
						let self = this;
						axios.get(`chat/chat-content/${contactId}`)
								 .then( response => {
									 self.showChat = true;
									 self.chat = response.data.chat;
									 self.contactInfo = response.data.contact_info;
									 console.log(response);
								 })
								 .catch( error => {
									 console.log(error);
								 });
					}
				}
    }
</script>