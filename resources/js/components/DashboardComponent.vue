<template>
<div>
<div id="load"></div>
	 <section class="convert_site mt-3 mb-3 chatdata">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                  <div class="col-md-12">     
                      <!-- <input type="checkbox" v-if="setting.status==1" checked="checked" v-model="setting.status" class="setting_status" id="switchss">
                       <input type="checkbox" v-if="setting.status!=1" v-model="setting.status" class="setting_status" id="switchss"> -->
                    
                     <img src="images/logo_withoutshdw.png" alt="#" class="upimg">
                     <span class="form-group float-right">
                      <input type="checkbox" id="html" v-if="setting.status==1" checked @change="changstatus(setting.status)">
                      <input type="checkbox" id="html" v-if="setting.status!=1" @change="changstatus(setting.status)">
                      <label for="html"></label>
                    </span>
                     <h1 class="ambassador pb-5 text-center">Welcome to Wassup</h1>
                      
                  </div>
               </div>
               <div class="row pr-5 pl-5">
                  <div class="col-md-6">
                     <div class="box1 mb-4" @click="changeambassador()" >
                        <img src="images/ChangeAmb.png" alt="#"  class="mb-3">
                        <h1 class="pb-2">Change Buddy</h1>
                        <p>Select from over 500 Heroes. We’ve categorized them based on marketing days and store types.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box1 mb-4" @click="changeplan()">
                        <img src="images/Plans.png" alt="#"  class="mb-3">
                        <h1 class="pb-2">Paid Plans</h1>
                        <p>Check out our paid plans for additional features and Super-Heroes that help you convert better. HINT - Our customers see a 40% increase in conversion in the paid plans.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box1 mb-4">
                        <img src="images/Integrations.png" alt="#"  class="mb-3">
                        <h1 class="pb-2">Integrations</h1>
                        <p>Our 3rd party integrations allow you to build workflows and automate conversions.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box1 mb-4" @click="changefaq()">
                        <img src="images/FAQs.png" alt="#"  class="mb-3">
                        <h1 class="pb-2">FAQs & Support</h1>
                        <p>Need help? Talk to us right now with our award-winning customer support team. All your questions answered in real-time chat in less than 20 minutes. Alternatively, you may also refer to our frequently asked questions. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
</template>
<script>

export default {
      data() {
        return {
         setting: {
          id:'',
          staus:''
         },
         shop_id: '',
        }
      },
       mounted() {
          console.log('Dashboard Component mounted.');
          this.shop_id = window.whatssupShop.id;
          this.setting = {
            id:window.setting.id,
            status:window.setting.status,
          };
         //this.discount_codes = window.discount_codes;
      },
      computed: {
         //
      },
      methods: {
        changeambassador: function(){
        document.getElementById('load').style.visibility="visible";
          window.location.href = window.app_url+'/ambassador';
            
        },
        changeplan: function(){
        document.getElementById('load').style.visibility="visible";
           window.location.href = window.app_url+'/plan';
        },
        changefaq: function(){
        document.getElementById('load').style.visibility="visible";
            window.location.href = window.app_url+'/faq';
        },
        changstatus: function(status){
          status != status;
          console.log(status);
          if(status =='1'){
            status = '0';
          }else{
            status = '1';
          }
          this.setting.status = status;
          let uri = window.app_url+'/changestatus';
       //let uri = '/settings';
          this.axios.post(uri, this.setting)
                .then(function (response) {
                console.log(response.data);  
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
      }
}   
</script>