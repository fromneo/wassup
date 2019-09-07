<template>
  <div>
  <div id="load"></div>
    <section class="convert_site mt-3 mb-3">
         <div class="container">
            <div class="custombox sidebarbox">
               <div class="row">
                  <div class="col-md-12">
                     <img src="svg/logo.svg" alt="#" class="upimg mb-5">  
                     <a class="myhome-button mt-3 mr-3" :href="appUrl">Back to Dashboard</a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 pr-md-0">
                     <div class="sidebar">
                            <div class="divnull" v-if="showActiveIcon">
                                <div class="usebox">
                                    <div class="rightarrow">
                                        <a href='javascript:void(0);' class="mt-3" data-toggle="modal" data-target="#exampleModal"  v-on:click="firstsectionshow(activeIcon.animation,activeIcon.id)">
                                            <img src="svg/Edit_Hero_Settings.svg" alt="#">
                                        </a>
                                    </div>
                                    <lottie-player :src="activeIcon.animation" mode="bounce" background="transparent" speed="1" loop autoplay class="showicons"></lottie-player>
                                    <p class="pt-4"><img src="images/ok.png" alt="#">Current Ambassador</p>
                                </div>
                            </div>
                            <hr class="line">
                       <!--  <p class="sideshadow">All</p> -->
                        <div id="accordionEx" role="tablist" aria-multiselectable="true" class="accordion md-accordion">
                        <div class="card mobileacdian pb-1">
                           <div class="card-header" role="tab" id="headingOne">
                           <span v-on:click="categoryfunction($event,0)" class="border-color head-active"><a class="border-color card-link allcategory" data-toggle="collapse" href="#collapseOne">
                              Important Marketing Dates
                             </a></span>
                           </div>
                           <div id="collapseOne" class="collapse show" data-parent="#accordionEx" role="tabpanel" aria-labelledby="headingOne">
                             <div class="card-body">
                               <span class="border-color"></span>
                             </div>
                           </div>
                        </div>
                        <hr class="line">
                         <div class="card mobileacdian pb-3" v-for="(category, index) in categories">
                           <div class="card-header" role="tab" :id="'headingOne' + index">  
                             <a class="card-link" data-toggle="collapse" :href="'#collapseOne' + index">
                             <span v-if="category.id == cat_id" v-on:click="categoryfunction($event,category.id)" class="border-color head-active">{{category.name}}</span><span v-else v-on:click="categoryfunction($event,category.id)" class="border-color">{{category.name}}</span>  <label class="rightarrow"><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                             </a>
                           </div>
                           <div :id="'collapseOne' + index" class="collapse" data-parent="#accordionEx" role="tabpanel" :aria-labelledby="'headingOne' + index" v-if="index == 0">
                             <div class="card-body "  v-if="category.children_list != 0">
                               <span class="pb-2 pt-2 border-color" v-for="(child, ind) in category.children_list" v-on:click="categoryfunction($event,child.id)">{{child.name}}</span>
                             </div>
                           </div>
                           <div :id="'collapseOne' + index" class="collapse" data-parent="#accordionEx" role="tabpanel" :aria-labelledby="'headingOne' + index" v-if="index != 0">
                             <div class="card-body"  v-if="category.children_list != 0">
                               <span class="pb-2 pt-2 border-color" v-for="(child, ind) in category.children_list" v-on:click="categoryfunction($event,child.id)">{{child.name}}</span>
                             </div>
                           </div>
                         </div>                      
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9 pl-md-0">
                     <!-- Tabs -->
                     <section id="tabs">
                        <nav class="cutomtab">
                           <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href='javascript:void(0);' role="tab" aria-controls="nav-home" aria-selected="true" v-on:click="filtersfunction('0')">All</a>
                              <a class="nav-item nav-link" data-toggle="tab" href='javascript:void(0);' role="tab" aria-controls="nav-profile" aria-selected="false" v-for="(filter, index) in filters" v-on:click="filtersfunction(filter.id)">{{filter.name}}</a>
                           </div>
                        </nav>
                        <div class="tab-content py-3 px-3 pl-2" id="nav-tabContent">
                           <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="row">
                                <!-- <div class="col-lg-4 divnull" v-for="(icon, index) in icons.data" v-show="(icon.category_id == cat_id || cat_id == 0) && (icon.filter_id == filt_id || filt_id == 0)"> -->
                                <div class="col-lg-4 divnull" v-for="(icon, index) in icons.data" v-show="(icon.filter_id == filt_id || filt_id == 0)">
                                <div class="usebox" v-show="setting.icon_id ==icon.id ">
                                <!-- <h4 v-if="icon.price !=0">Customer seen<span>25% improvement</span> <label>{{icon.plan}}</label></h4> -->
                                <div class="rightarrow">
                             <a href='javascript:void(0);' class="mt-3" data-toggle="modal" data-target="#exampleModal" v-on:click="firstsectionshow(icon.animation,icon.id)">
                               <!-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> -->
                               <img src="svg/Edit_Hero_Settings.svg" alt="#">
                             </a></div>    <lottie-player
                           :src="icon.animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay class="showicons"></lottie-player>
                                       <p class="pt-4"><img src="images/ok.png" alt="#">Current Ambassador</p>
                                    </div>
                                    <div class="usebox" v-show="setting.icon_id !=icon.id">
                                    <h4 v-if="icon.price !=0">Other store owners enjoy a 25%<span class="improv_span"> improvement on conversion.</span> <label>{{icon.plan}}</label></h4>
                                    <lottie :options="icon.defaultOptions" :height="180" :width="200" v-on:animCreated="handleAnimation"/>
                                    <!-- <lottie-player
                           :src="icon.animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay class="showicons"></lottie-player> -->
                             <a :href="planurl" class="btn btn-primary next mt-3 upgrad_plan" v-if="icon.charge=='active'">Upgrade Plan</a> 

                                <a href='javascript:void(0);' class="btn btn-primary next mt-3" data-toggle="modal" data-target="#exampleModal" v-on:click="firstsectionshow(icon.animation, icon.id)" v-if="icon.charge!='active'">Use This</a>
                                
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                <pagination v-if="icons.last_page > 1" :data="icons" :offset="5" @pagination-change-page="getResults" :limit="limit"></pagination> 
                                 <!--  <pagination :data="icons" @pagination-change-page="getResults" :limit="limit"> -->
                                    <!-- <span slot="prev-nav">&lt; Previous</span>
                                    <span slot="next-nav">Next &gt;</span>
                                  </pagination> -->
                                </div>
                              </div>
                             
                           </div>
                        </div>
                       </section>   
                  </div>
               </div>
      <div class="modal modals fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog cuponmodel" role="document">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" style="font-size: 30px;">&times;</span>
               </button>
               <div class="modal-body convert_site">
               <section class="convert_site m-5" v-show="sectionshow === 3">
                  <div class="row">
                     <div class="col-lg-6">
                        <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 pb-1">    
                        <h1 class="ambassador">Choose what the Hero says to make the first impression.</h1>
                        <div class="mainform pt-3 pb-2">
                           <label class="pb-2 font-weight-bold">Give them a reason to click on your Hero.</label>
                           <input class="form-control" maxlength="30" type="text" v-model="setting.welcome_msg_hdr" placeholder="Hey wassup!">
                           <label for="" class="pb-2 font-weight-bold"></label>
                           <input class="form-control" maxlength="110" type="text" v-model="setting.welcome_msg" placeholder="i have gift for you. want it?">  
                          <h6>Hint - Create a sense of curiosity to make sure your visitors click on your hero. Get creative.</h6> 
                        </div>
                        <h3 class="pt-3 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> Feel free to experiment.</h3>
                        <div class="hidemobile">
                        <a href="Javascript:void(0);" @click="nextsectionshow(4)" class="btn btn-primary next ">Next</a> </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="sidebox">
                           <div class="spaktext" :style="background_color">
                              <h1 class="pb-2" :style="font_color_style">{{setting.welcome_msg_hdr}}</h1>
                              <p :style="font_color_style">{{setting.welcome_msg}}</p>
                           </div>
                           <div id="animationdiv" class="spakimg firstlotii">
                           <!-- <lottie :options="animationData" :height="200" :width="200" v-on:animCreated="handleAnimation"/> -->
                        <lottie-player
                           v-bind:src="animation" mode="normal" background="transparent"  speed="1"  loop  autoplay></lottie-player>
                        </div>
                           <!-- <div class="spakimg">
                           <lottie-player
                           v-bind:src="animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay class="showicon"></lottie-player>   
                           </div> -->  
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 hidedesktop">
                        <a href="Javascript:void(0);" @click="nextsectionshow(4)" class="btn btn-primary next ">Next</a>       
                     </div>
                  </div>
                  </section>
                  <section class="convert_site m-5" v-show="sectionshow === 4">
                           <div class="row">
                              <div class="col-lg-6">
                                 <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 pb-1">    
                                 <h1 class="ambassador">Tailor your customer experience.</h1>
                                 <div class="mainform pt-3 pb-2 customradio">
                                    <label class="pb-2 font-weight-bold">Ask them for their contact details, (be polite yet persuasive)</label>
                                    <input class="form-control" type="text" placeholder="Hey wassup! i have gift for you. want it?" v-model="setting.newsletter_msg" maxlength="40"> 
                                    <input type="radio" id="mailchimp" value="mailchimp_url" name="radio-mailchimp" v-model="mailchimp_both_data" checked> 
                                    <label class="pb-2 font-weight-bold" for="mailchimp" @click="save_input_data()">Mailchimp Url</label>
                                    <input class="form-control" id="mailchimp_url" type="text" placeholder="Enter mailchimp url">
                                     <h6 class="pb-3 mb-3"> <a class="readblog" href="https://heywassup.io/how-to-get-action-url-from-mailchimp/" target="_blank">Learn how to get your Mailchimp url - Read Blog.</a> Mailchimp url example:('https://mailchimp.us19.list-manage.com/subscribe/post?u=64f5f677acbf99dccd8d116d6&amp;id=4a5610c345')</h6>
                                     <input type="radio" id="savetodatabs" name="radio-mailchimp" value="save in database" v-model="mailchimp_both_data" :checked="mailchimp_both_data == 'save in database'">
                                    <label for="savetodatabs" class="pb-2 font-weight-bold" @click="savedata()">Save In DataBase</label>
                                    <h6>The best way to get your visitors to click on your Hero is by creating curiosity in your messaging.</h6>
                                 </div>
                                 <h3 class="pt-3 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                                 <div class="hidemobile">
                                 <a href="Javascript:void(0);" @click="nextsectionshow(5)" class="btn btn-primary next">Next</a></div>
                              </div>
                              <div class="col-lg-5 ml-auto df">
                                   <div class="row sidebox"> 
                                 <div class="spaktext" :style="background_color">
                                    <p class="mb-2" :style="font_color_style">{{setting.newsletter_msg}}</p>
                                    <input class="form-control" type="text" placeholder="Enter Your Email here"> 
                                    <button class="btn btn-primary submit mt-1 font-weight-bold" :style="btn_background_color">Submit</button>     
                                 </div>
                                 <div class="spakimg" v-if="sectionshow === 4">
                                    <lottie-player
                           v-bind:src="animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay class=""></lottie-player>  
                                    </div> 
                                  </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 hidedesktop">
                                 <a href="Javascript:void(0);" @click="nextsectionshow(5)" class="btn btn-primary next ">Next</a>     
                              </div>
                           </div>
                  </section>
                  <section class="convert_site m-5 copycoupen" v-if="sectionshow === 5">
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 pb-1">    
                     <h1 class="ambassador pb-3 mb-1">Customize the look & feel of your Hero to match your store.</h1>
                     <div class="mainform">
                        <label class="pb-3 font-weight-bold">Reward your visitor</label> 
                        <div class="create_cupon">
                             <span class="customradio mb-2">   
                           <input type="radio" id="test1" name="radio-group" checked>
                           <label for="test1">Create Coupon Code-  <a :href="`https://${shop_domain}/admin/discounts/new`" target="_blank">Create now</a></label>
                           </span>
                             <span class="customradio mb-2 mt-2 customdropdown">    
                           <input type="radio" id="test2" name="radio-group" :checked="setting.discount_code != ''">
                           <label for="test2">Select Coupon Code </label>
                             <span class="customdropdown">
                              <select class="form-control customdrop" v-model="setting.discount_code" style="width: 180px;">
                                <option value=""> Select coupon code </option>
                                <option v-for="(discount, index) in discount_codes" :selected="setting.discount_code == discount.code">{{discount.code}}</option>
                              </select>
                           </span> 
                           <button class="refreshbtn" @click="fetchEventsList()"><i class="fa fa-refresh" aria-hidden="true" style="color: #949494" v-if="!seen"></i> <div class="spinner-border" v-if="seen"></div></button>     
                           </span>
                           <span class="customradio mb-2 mt-2 customdropdown"> 
                           <label for="discount_msg" class="pb-2">Coupon Code Message</label>
                            <input type="text" class="form-control" id="discount_msg_hdr" name="discount_msg_hdr" v-model="setting.discount_msg_hdr" maxlength="30">
                           
                           <input type="text" class="form-control" id="discount_msg" name="discount_msg" v-model="setting.discount_msg" maxlength="110">
                           </span>
                           </div>
                           <h6 class="pt-2 wassup_hint">Once they’ve given you their email address, keep to your Hero’s word and reward them.</h6>
                        </div>
                        <h3 class="pt-3 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                        <div class="hidemobile">
                        <a href="Javascript:void(0);" @click="nextsectionshow(6)" class="btn btn-primary next ">Next</a></div>
                     </div>
                     <div class="col-lg-5 ml-auto">
                        <div class="row sidebox"> 
                        <div class="spaktext" :style="background_color">
                          <h1 class="pb-2" :style="font_color_style">{{setting.discount_msg_hdr}}</h1>
                        <p class="mb-3" :style="font_color_style">{{setting.discount_msg}}</p>
                        <div class="copycode d-flex">  
                        <input class="form-control" type="text" placeholder="10OFF" :value="setting.discount_code" disabled>     
                        <button class="btn btn-primary">Copy Coupon</button>    </div> 
                       <button class="btn btn-primary submit mt-2 font-weight-bold" :style="btn_background_color">Go to Cart</button>  
                        </div>
                        <div class="spakimg">
                           <lottie-player
                                 v-bind:src="animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay class=""></lottie-player>
                           </div>  
                        </div>        
                     </div>
               </div>
               <div class="row">
                  <div class="col-md-12 hidedesktop">
                   <a href="Javascript:void(0);" @click="nextsectionshow(6)" class="btn btn-primary next">Next</a>
                  </div> 
               </div>
      </section>
      <section class="convert_site m-5 copycoupen" v-show="sectionshow === 6">
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 pb-1">    
                     <h1 class="ambassador pb-3 mb-1">Customize with your brand colors</h1>
                     <p class="pb-2 wassup_hint">Select the colors to help connect Wassup with the rest of your website’s experience.</p>
                      <!-- <p class="pt-1 pb-2">We're going to setup an instant boost leads software and grow revenue in 3 steps</p>  -->
                      <div class="mb-3" id="color-picker">
                        <div class="wrapper-dropdown">
                        <jscolor id="bg_color" v-model="setting.bg_color"></jscolor>
                        <!-- <input type="color" name="bg_color" class="form-control" value="#ffe29d" v-model="setting.bg_color"> -->
                        </div>
                     </div>
                     <div class="mainform mt-2 mb-2">
                        <p class="mb-2 font-weight-bold">Now, select a color for your text.</p>
                        <div class="wrapper-dropdown">
                        <jscolor id="text_color" v-model="setting.text_color"></jscolor>
                        <!-- <input type="color" name="text_color" class="form-control" value="#fafafa" v-model="setting.text_color"> -->
                        </div>
                     </div>
                     <div class="mb-3" id="color-picker">
                        <div class="wrapper-dropdown">
                         <p class="mb-2 font-weight-bold">Now, select a color for your button.</p>
                        <jscolor id="btn_bg_color" v-model="setting.btn_bg_color"></jscolor>
                       <!--  <input type="color" name="btn_bg_color" class="form-control" value="#6979f8" v-model="setting.btn_bg_color"> -->
                        </div>
                     </div>
                     <div class="mainform mt-2 mb-2">
                        <p class="mb-2 font-weight-bold">Now, select a color for your button's text.</p>
                        <div class="wrapper-dropdown">
                         <jscolor id="btn_text_color" v-model="setting.btn_text_color"></jscolor> 
                        <!-- <input type="color" name="btn_text_color" class="form-control" value="#333333" v-model="setting.btn_text_color"> -->
                        </div>
                     </div>  
                     <h3 class="pb-3 mb-2 mt-2 pt-3"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="nextsectionshow(7)" class="btn btn-primary next">Next</a></div>
                  </div>
                  <div class="col-lg-5 ml-auto mainimg">
                     <div class="row sidebox" > 
                        <div class="spaktext" :style="background_color">
                           <h1 class="pb-3" :style="font_color_style">{{setting.discount_msg_hdr}}</h1>
                           <p class="mb-4" :style="font_color_style"> {{setting.discount_msg}}</p>
                           <div class="copycode d-flex">  
                           <input class="form-control" type="text" placeholder="10OFF" :value="setting.discount_code" disabled>     
                           <button class="btn btn-primary">Copy Coupon</button>    </div> 
                          <button class="btn btn-primary submit mt-2 font-weight-bold" :style="btn_background_color">Go to Cart</button>   
                        </div>
                        <div class="spakimg" v-if="sectionshow === 6">
                           <lottie-player
                              v-bind:src="animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay ></lottie-player>
                        </div>  
                     </div> 
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 hidedesktop">
                   <a href="Javascript:void(0);" @click="nextsectionshow(7)" class="btn btn-primary next">Next</a>     
                  </div> 
               </div>
      </section>
      <section class="convert_site m-5 copycoupen" v-if="sectionshow === 7">   
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 pb-1">    
                      <h1 class="ambassador pb-3 mb-1">Configure your Hero.</h1>
                     <div class="mainform">
                        <label class="font-weight-bold pb-2">Give your Hero a spot on your website.</label>
                          <ul class="postion-set setimg pb-1">
                        <li><label @click="sevenactivate(1)" :class="{ 'color-border' : sevenactive_el == 1 || setting.widget_position == 'bottom_right'}"><input type="radio" name="widget_position" value="bottom_right" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition01.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(2)" :class="{ 'color-border' : sevenactive_el == 2 || setting.widget_position == 'bottom_left'}"><input type="radio" name="widget_position" value="bottom_left" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition02.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(3)" :class="{ 'color-border' : sevenactive_el == 3 || setting.widget_position == 'top_left'}"><input type="radio" name="widget_position" value="top_left" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition03.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(4)" :class="{ 'color-border' : sevenactive_el == 4 || setting.widget_position == 'top_right'}"><input type="radio" name="widget_position" value="top_right" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition04.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(5)" :class="{ 'color-border' : sevenactive_el == 5 || setting.widget_position == 'middle_left'}"><input type="radio" name="widget_position" value="middle_left" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition05.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(6)" :class="{ 'color-border' : sevenactive_el == 6 || setting.widget_position == 'middle_right'}"><input type="radio" name="widget_position" value="middle_right" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition06.svg" alt="#"></label></li>
                    </ul>
                         <label class="font-weight-bold pb-3">Your Hero should show up:</label> 
                        <div class="create_cupon intention">
                            <span class="customradio customdropdown pb-2">   
                           <input type="radio" id="test1" name="radio-group" checked>
                           <label for="test1">When a visitor is on the website for </label> 
                           <span class="customdropdown">
                              <select class="form-control customdrop" v-model="setting.load_timing">
                              <option value="0 seconds">0 seconds</option>
                                <option value="5 seconds">5 seconds</option>
                                <option value="20 seconds" selected="selected">20 seconds</option>
                                <option value="60 seconds">60 seconds</option>
                                <option value="120 seconds">120 seconds</option>
                                <option value="180 seconds">180 seconds</option>
                              </select>
                           </span>
                           </span>
                           <span class="customradio customdropdown pb-3">    
                              <input type="radio" id="test2" name="radio-group" value="exit" v-model="setting.load_timing">
                              <label for="test2"> Up on the intention of Exit.
                              <!-- <span class="customdropdown">
                                 <select class="form-control customdrop" v-model="load_timing">
                                    <option value="exit">Exit</option>
                                    
                                 </select>
                              </span> --> </label>     
                           </span> 
                           <span class="customradio customdropdown pb-2">    
                              <label for=""> Cookies Managment </label>
                              <span class="customdropdown">
                              <select class="form-control customdrop" v-model="setting.cookies_time">
                              <option value="Per session" selected="selected">Per session</option>
                                <option value="Daily">Daily</option>
                                <option value="Weekly" selected="selected">Weekly</option>
                                <option value="Monthly">Monthly</option>
                              </select>
                           </span>     
                           </span> 
                        </div>
                     </div>
                     <h3 class="pt-3 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="finish(setting.icon_id)" class="btn btn-primary next ">Finish</a></div>
                  </div>
               <div class="col-lg-5 ml-auto">
                  <div class="row sidebox"> 
                     <div class="spaktext" :style="background_color">
                        <h1 class="pb-3" :style="font_color_style">{{setting.discount_msg_hdr}}</h1>
                        <p class="mb-4" :style="font_color_style"> {{setting.discount_msg}}</p>
                        <div class="copycode d-flex">  
                        <input class="form-control" type="text" placeholder="10OFF" :value="setting.discount_code" disabled>     
                        <button class="btn btn-primary">Copy Coupon</button>    </div> 
                       <button class="btn btn-primary submit mt-2 font-weight-bold" :style="btn_background_color">Go to Cart</button>   
                     </div>
                     <div class="spakimg">
                        <lottie-player
                           v-bind:src="animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay ></lottie-player>
                     </div>   
                  </div>  
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 hidedesktop">
                <a href="Javascript:void(0);" @click="finish(setting.icon_id)" class="btn btn-primary next ">Finish</a>     
               </div> 
            </div>
      </section>
       <section class="convert_site m-5 chatdata" v-if="sectionshow === 10">
               <div class="row">
                  <div class="col-md-12">
                     <img src="svg/logo.svg" alt="#" class="upimg">
                    <div class="timer_sec text-center">  
                       <img src="images/Hangon.png" alt="#" class="pb-3">
                       <p>Hang tight! Your Hero is getting ready.</p> 
                    </div>    
                  </div>
               </div>
      </section>

       <!-- Modal -->
<!--       <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog custommodel" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-7">
                        <div class="modeldata">
                           <h1 class="mt-3 mb-3 ambassador">Welcome to Wassup!</h1> 
                           <p class="mb-4">You are ready to show your Hero to your visitors and <br>convert them to customers to grow your revenue.</p>
                           <ul>
                             <li>
                              <div><img src="images/popup_icon.png" alt="#"></div>
                              <div class="ml-2"> Select from over 500 Heroes.</div>
                               </li>
                             <li>
                             <div><img src="images/popup_heart.png" alt="#"> </div>
                             <div class="ml-2">Select from over 200 themes (Valentine's day, Fathers Day and so on)</div></li>
                             <li>
                             <div><img src="images/popup_rocket.png" alt="#"></div> 
                             <div class="ml-2">Grow your Revenue</div></li>      
                           </ul> 
                           <div class="publish">
                             <button  class="btn btn-primary next mt-3" @click="publish()">Publish </button> <a href="javascript:void(0);" class="ml-2" @click="ambasdorpublish()">Select a different Hero</a>    
                           </div>      
                        </div>   
                     </div>
                     <div class="col-md-5">
                        <img src="svg/Popup.svg" alt="#" class="w-100"> 
                     </div>     
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      </div>
      </div>
   </div>
</div>
            </div>
         </div>
      </section>
      
    </div>
</template>
<script>
import Lottie from './lottie.vue';
export default {
  components: {
      'lottie': Lottie
    },
      data() {
        return {
         setting: {
          setting_id: '',
          shop_id: '',
          icon_id: '',
          welcome_msg: '',
          welcome_msg_hdr: '',
          newsletter_msg: '',
          bg_color: '',
          text_color: '',
          widget_position: '',
          load_timing: '',
          widget_trigger: '',
          product_type: '',
          annual_revenue: '',
          discount_code: '',
          discount_msg: '',
          discount_msg_hdr: '',
          btn_bg_color: '',
          btn_text_color: '',
          status: '',
          cookies_time: 'Weekly',
          mailchimp_url:''
         },
         icons:{},
         categories:'',
         filters:'',
         plans:'',
         cat_id:308,
         filt_id:'0',
         animation:'',
          lottieplayer: '',
          shop_domain: '',
          icons_data :[],
          icon_id: '',
          sectionshow: 3,
          active_el: 0,
          sevenactive_el:'',
          ninthactivate_el: 1,
          active: false,
          discount_codes: '',
          timer:'',
          error: '',
          datas: '',
          seen: false,
          planurl:'',
          icon_data:'',
          limit: 9,
          mailchimp_both_data: '',
          animationData: {},
          activeIcon: {},
          appUrl: '',
          showActiveIcon: false,
        }
      },
       mounted() {
          console.log('Ambassador Component mounted.');
          //this.shop_id = window.whatssupShop.id;
         // this.setting = window.setting;
           var notification =localStorage.getItem('wassup_value');
          if(notification !=null){
              ShopifyApp.flashError(notification);
            localStorage.removeItem('wassup_value');
          }
         // console.log(window.setting);
          this.setting = {
            setting_id: window.setting.id,
            shop_id: window.whatssupShop.id,
            icon_id: window.setting.icon_id,
            welcome_msg: window.setting.welcome_msg,
            welcome_msg_hdr: window.setting.welcome_msg_hdr,
            newsletter_msg: window.setting.newsletter_msg,
            bg_color: window.setting.bg_color,
            text_color: window.setting.text_color,
            widget_position: window.setting.widget_position,
            load_timing: window.setting.load_timing,
            widget_trigger: window.setting.widget_trigger,
            product_type: window.setting.product_type,
            annual_revenue: window.setting.annual_revenue,
            discount_code: window.setting.discount_code,
            discount_msg: window.setting.discount_msg,
            discount_msg_hdr: window.setting.discount_msg_hdr,
            btn_bg_color: window.setting.btn_bg_color,
            btn_text_color: window.setting.btn_text_color,
            status: window.setting.status,
            cookies_time: window.setting.cookies_time,
            mailchimp_url: window.setting.mailchimp_url
          }
          if(this.setting.mailchimp_url !='save in database')
          {

              $('#mailchimp_url').val(this.setting.mailchimp_url);
          }
          this.mailchimp_both_data =this.setting.mailchimp_url; 
          this.shop_domain = window.whatssupShop.shopify_domain; 
          this.planurl = window.app_url+'/plan';
          this.amburl = window.app_url+'/ambassador';
          //this.icon_data = window.icon_data;
          this.categories = window.categories;
          this.filters = window.filters;
          this.plans = window.plans;
          this.active_charge = window.active_charge;
          this.active_charge_status = window.active_charge_status;
          this.activeIcon = window.active_icon; 
          this.appUrl = window.app_url;
          if (!_.isEmpty(this.activeIcon)) {
            this.showActiveIcon = true;
          }
          $('head').append('<style>.spaktext:before{border-top :15px solid '+this.setting.bg_color+' !important;} .spaktext{ background: '+this.setting.bg_color+'; } .submit{ background: '+this.setting.btn_bg_color+'; color: '+this.setting.btn_text_color+'}</style>'); 
             // console.log(this.settings_icon_id);
         // this.discount_codes = window.discount_codes;
      },
      computed: {
          background_color(){
           return {
               backgroundColor : this.isActive  ? '' : this.setting.bg_color,
           }
         },
         font_color_style(){
           return {
               color : this.isActive  ? '' : this.setting.text_color,
           }
         },
          btn_background_color(){
           return {
               background : this.isActive  ? '' : this.setting.btn_bg_color,
               color : this.isActive  ? '' : this.setting.btn_text_color,
           }
         },
      },
      created: function() {
         this.fetchEventsList();
          this.getResults(1,this.cat_id);
         //this.timer = setInterval(this.fetchEventsList, 20000)
      },
      methods: {
        handleAnimation: function (anim) {
          this.anim = anim;
        },
        savedata: function(){
          $('#mailchimp_url').val('');
        },
        save_input_data: function(){
          if(this.setting.mailchimp_url !='save in database')
          {
              $('#mailchimp_url').val(this.setting.mailchimp_url);
          }
        },

        getResults: function(page, cat_id) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                if(page > 1 && page < this.icons.last_page){
                  this.limit =4;
                }else{
                  this.limit =9;
                }

                if (typeof cat_id === 'undefined') {
                  if(this.cat_id == '')
                  {
                    cat_id =0;
                  }else{
                    cat_id = this.cat_id;
                  }
                }
               
                $("#load").css("visibility","visible");
                this.icons = {};;
                this.axios.get(window.app_url+'/ambassadordata?page=' + page+'&cat_id='+cat_id)
                    .then(response => {
                      this.icons = response.data;
                      this.icon_data = response.data.data;
                      for(var i = 0; i< this.icon_data.length; i++){
                         this.icon_data[i].defaultOptions={ animationData: this.icon_data[i].animation};
                        if(this.setting.icon_id == this.icon_data[i].id)
                        {
                          this.animation =this.icon_data[i].animation;
                        }
                       
                        for(var j = 0; j< this.plans.length; j++){
                           if(this.plans[j].id ==this.icon_data[i].plan_id){
                            if(this.plans[j].name =='EXPERT' && this.active_charge =='ADVANCE' && this.active_charge_status =='active')
                              {
                                this.icon_data[i].charge = 'active';
                               
                              }
                               else if((this.plans[j].name =='ADVANCE' || this.plans[j].name =='EXPERT') && (this.active_charge =='ADVANCE' || this.active_charge =='EXPERT') && this.active_charge_status =='cancelled')
                              {
                                this.icon_data[i].charge = 'active';
                              }
                              else if((this.plans[j].name =='ADVANCE' || this.plans[j].name =='EXPERT') && this.active_charge =='BEGINNERS' && this.active_charge_status =='active'){
                                this.icon_data[i].charge = 'active';
                              }
                              else{   
                                this.icon_data[i].charge = 'cancelled';
                              }
                              this.icon_data[i].plan = this.plans[j].name;
                              if(this.plans[j].name =='ADVANCE')
                              {
                                this.icon_data[i].plan = 'ADVANCE';
                              }
                              if(this.plans[j].name =='EXPERT')
                              {
                                this.icon_data[i].plan = 'EXPERT';
                              }
                              this.icon_data[i].price = this.plans[j].price;
                           }
                      }
                    }
                    this.icons.data = this.icon_data;
                     $("#load").css("visibility","hidden");
                     //   return response.json();
                    // }).then(data => {
                    //   console.log("2");
                    //   console.log(data);
                    //    this.icons = data;

                    });
            },

        firstsectionshow: function(animation, icon_id){
         window.$("#animationdiv").html('<lottie-player src="'+animation+'" mode="normal" background="transparent"  speed="1"  loop  autoplay></lottie-player>');
         // this.animationData = {animationData : animation};
         // window.$("#animationdiv").html('<lottie :options="'+this.animationData+'" :height="200" :width="200" v-on:animCreated="handleAnimation"/>');
          this.animation = animation;
          this.icon_id = icon_id;
          this.sectionshow = 3;
        // window.$("#animationdiv").html('<lottie-player src="'+animationss+'" mode="normal" background="transparent"  speed="1"  loop  autoplay></lottie-player>');
        },
         fetchEventsList: function(){
             let currentObj = this;
            this.seen = true;
            let url = window.app_url+'/discount';
            //let url = '/discount';
            this.axios.get(url).then(function (response) {
                  currentObj.seen = false;
               currentObj.discount_codes = response.data;
                })
                .catch(function (error) {
                  currentObj.seen = false;
                  //this.discount_codes = response.data;
                });
         },
        categoryfunction: function(ev,id){
          this.cat_id = id;
            if(this.cat_id == '0'){
              this.filt_id = '0'; 
            }

            this.getResults(1,this.cat_id);
            $('.border-color').removeClass('head-active');
            $(ev.target).addClass('head-active');
         //$(ev.target).parent().addClass('head-active').siblings().removeClass('head-active');
        },
        filtersfunction: function (id) {
            this.filt_id = id;
            if(this.filt_id == '0'){
              this.cat_id = '0';
            }
            //$(ev.target).parent().addClass('active').siblings().removeClass('active'); 
         },
         nextsectionshow:function(elem){
         document.getElementById('load').style.visibility="visible";
         setTimeout(function(){
                document.getElementById('interactive');
                document.getElementById('load').style.visibility="hidden";
              },1000);
            this.sectionshow = elem;

        },
        sevenactivate:function(elem){
            this.sevenactive_el = elem;
        },
        ninthactivate:function(elem){
            this.ninthactivate_el = elem;
        },
        setColor: function(color, colorName) {
          this.selectedColor = color;
          this.selectedColorName = colorName;
          this.bg_color=this.selectedColorName;
          this.active = false;
          //window.$(".spaktext").pseudo(":before","border-top","15px solid #36373a");
        },
        toggleDropdown: function() {
          this.active = !this.active;
        },
        finish: function(icon_id) {
         let currentObj = this;
         let mailchimp_url = $('#mailchimp_url').val();
          this.sectionshow = 10;
         if(this.mailchimp_both_data !='save in database')
         {
          this.setting.mailchimp_url = mailchimp_url;
         }else{
          this.setting.mailchimp_url = this.mailchimp_both_data;
         }
        this.setting.icon_id =this.icon_id;
         let uri = window.app_url+'/settings';
          this.axios.post(uri, this.setting)
                .then(function (response) {
                    currentObj.output = response.data;
                    window.location.href = window.app_url;
                    localStorage.setItem("wassup_value", "Your icon change successfully");
                    window.$('#exampleModal').modal();
                })
                .catch(function (error) {
                    currentObj.output = error;
                    currentObj.error = 'Error in add settings';
                    setTimeout(function(){
                      window.location.href = window.app_url+'/ambassador';
                      localStorage.setItem("wassup_error", "Your icon not changed");
                    },5000);
                });
               // window.$('#exampleModal').modal();
         },
         publish: function(){
            window.location.href = window.app_url;
          //   this.axios.get(uri).then(response => {
          // });
         },
         ambasdorpublish: function(){
            window.location.href = window.app_url+'/ambassador';
          //   this.axios.get(uri).then(response => {
          // });
         }
      } 
} 

 document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
      //document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
     setTimeout(function(){
       document.getElementById('interactive');
       document.getElementById('load').style.visibility="hidden";
       //document.getElementById('contents').style.visibility="visible";
     },1000);
  }
}
</script>
  
