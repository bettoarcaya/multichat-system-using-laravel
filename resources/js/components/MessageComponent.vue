<template>
	<div class="container">
    <div class="row no-gutters contact-msg-box">
      <!-- contact content -->
      <div class="col-md-4 contact-box">
				<div class="padd-5 margin-b-10 full-width bg-white">
					<form method="post" @submit.prevent="search">
						<a
							class="margin-l-5"
							href="javascript:void(0)">
							<img
								class="pc-5-width"
								src="/assets/images/address-book-solid.svg">
						</a>
						<a
							class="margin-l-5"
							href="javascript:void(0)"
							v-on:click="showHiddeSB">
							<img
								class="pc-5-width"
								src="/assets/images/search-solid.svg">
						</a>
						<input
							class="search-bar"
							placeholder="Buscar"
							type="text"
							v-if="searchBar"
							v-model="searchContent"/>
					</form>
				</div>
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
				<div class="padd-10 contact-bg-color" v-if='showChat'>
					<img 
							class="round-img img-fluid w-5-percent" 
							:src="`/assets/images/${contactInfo.img}`"
							alt="">
					<strong>{{contactInfo.name}}</strong>
				</div>
        <div class="msg-box padd-10">
          <!-- msg content -->
					<div 
						v-for="chat in chatContent" 
						:key="chat.id">
						<div 
							class="float-left guest-msg-color padd-10 border-r-5"
							v-if="contactInfo.id != chat.to_user">
							{{ chat.msg_content }}
						</div>
						<div 
							class="float-right user-msg-color padd-10 border-r-5" 
							v-else>
							{{ chat.msg_content }}
						</div>
						<br>
						<br>
					</div>
						<!-- end msg content -->
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
									@input="change()"
									style="border-right-color: white; resize: none;"
									v-model="textMsg">
							</textarea>
							<div class="input-group-prepend" v-if="submitBtn">
								<div class="input-group-text bg-white" style="border-left-color: white;">
									<button
										class="submit-btn active-btn"
										type="button"
										v-on:click="submit">
										<img :src="'/assets/images/SendIcon.png'">
									</button>
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
						chatContent: [],
						contactInfo: {},
						showChat: false,
						textMsg: '',
						submitBtn: false,
						searchBar: false,
						searchContent: '',
					}
				},
				methods: {
					openChat: function(contactId){
						let self = this;
						axios.get(`chat/chat-content/${contactId}`)
								 .then( response => {
									 self.showChat = true;
									 self.chatContent = response.data.chat;
									 self.contactInfo = response.data.contact_info;
								 })
								 .catch( error => {
									 console.log(error);
								 });
					},
					change: function() {
						this.submitBtn = (this.textMsg.length > 0);
					},
					showHiddeSB: function(){
						this.searchBar = !this.searchBar;
					},
					search: function(){
						alert('search');
					},
					submit: function(){
						let self = this;
						const data = { 
							contact_id: this.contactInfo.id,
							msg_content: this.textMsg 
						};
						axios.post('chat/send', data)
								 .then( response => {
									 self.textMsg = '';
									 self.chatContent.push(response.data.chat);
								 })
								 .catch( error => {
									 console.log(error.response);
									 alert('Ha ocurrido un error por favor intenta de nuevo');
								 });
						
					}
				}
    }
</script>