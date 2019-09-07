<template>
	<section class="convert_site mt-3 mb-3 chatdata">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                  <div class="col-md-12">
                     <img src="images/logo_withoutshdw.png" alt="#" class="upimg">
                     <h1 class="ambassador pb-5 text-center">Select Plan</h1>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4" v-for="(plan, index) in plans">
                     <div class="plan text-center">
                         <h4 class="pb-3 text-uppercase" v-if="plan.header!=null">{{plan.header}}</h4>
                        <img :src="plan.icons" alt="#" class="mb-2">
                        <h2 class="pb-2 pt-4 text-uppercase">{{plan.name}}</h2>
                        <p class="pb-4">{{plan.description}}</p>
                        <h1 v-if="plan.price == 0">Free</h1>
                        <h1 v-if="plan.price != 0">${{plan.price}}</h1>
                        <a :href='"/billing/"+plan.id' class="btn btn-primary next bg-transparent text-primary mt-4" >Select Plan</a> 
                        <hr class="line mt-4 mb-4">
                        <div v-html="plan.feature"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
</template>
<script>

export default {
      data() {
        return {
         plans: '',
         shop_id: '',
        }
      },
       mounted() {
          console.log('Dashboard Component mounted.');
          this.shop_id = window.whatssupShop.id;
          this.plans = window.plans;
          console.log(this.plans);
         // this.discount_codes = window.discount_codes;
      },
      computed: {
         //
      },
      methods: {
        changeplan: function(ev, id){
          console.log(id);
          //let uri = window.app_url+'/billing';
          let uri = '/billing';
          this.axios.post(uri, {
            id:id
          }).then(function (response) {
                    currentObj.output = response.data;
                    //window.location.href = window.app_url;
                })
                .catch(function (error) {
                    currentObj.output = error;
                    currentObj.error = 'Error in add settings';
                    // setTimeout(function(){
                    //   window.location.href = window.app_url+'/ambassador';
                    // },5000);
                });
        }
        // changeambassador: function(){
        // document.getElementById('load').style.visibility="visible";
        //   // window.location.href = window.app_url+'/ambassador';
        //    window.location.href = '/ambassador';
        // },
        // changeplan: function(){
        // document.getElementById('load').style.visibility="visible";
        //     // window.location.href = window.app_url+'/plan';
        //     window.location.href = '/plan';
        // },
        // changefaq: function(){
        // document.getElementById('load').style.visibility="visible";
        //     window.location.href = window.app_url+'/faq';
        // }
      }
}   
</script>