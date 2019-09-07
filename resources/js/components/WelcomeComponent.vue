<template>
  <div>
    <div id="load"></div>
    <section class="convert_site mt-3 mb-3" v-if="sectionshow === 1">
         <div class="container">
            <div class="custombox bg-white">  
               <div class="row">
                 <div class="col-md-12">
                  <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
               </div>    
               <div class="row">
                  <div class="col-lg-6">
                     <h1 class="ambassador">Give your visitors an assured reason to convert.</h1>
                     <p class="pt-3 mb-1 mt-1 pb-3 small_title">Complete this simple 3 step setup and convert <br>visitors to customers.</p>
                     <ul>
                        <li><img src="svg/Ambassador.svg" alt="#"> Select a friendly 'Hero'</li>
                        <li><img src="svg/Target.svg" alt="#"> Make personalized offers with behavior automation.</li>
                        <li><img src="svg/Test.svg" alt="#"> Test and tweak your Hero in real time.</li>
                     </ul>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="nextsectionshow(2)" class="btn btn-primary next mt-3 pt-3">Next</a><span class="timetake">This should take about 2 minutes.</span></div>
                  </div>
                   <div class="col-lg-6">
                   <img src="svg/Home.svg" alt="#" class="w-100">
                   </div> 

               </div>
              <div class="row">
                <div class="col-md-12 hidedesktop">
                  <a href="Javascript:void(0);" @click="nextsectionshow(2)" class="btn btn-primary next mt-3 pt-3 ">Next</a><span class="timetake">This should take about 2 minutes.</span>
                </div>
              </div>

            </div>
         </div>
      </section>
      <section class="convert_site mt-3 mb-3" v-if="sectionshow === 2">
         <div class="container">
            <div class="custombox bg-white">  
               <div class="row">
                 <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
              </div>      
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 mb-1">    
                     <h1 class="ambassador">Choose a Hero</h1>
                     <p  class="pt-3 mb-1 mt-1 pb-3 secndsecp">This will be the first customer interaction with your hero and will set a tone for opt-in experience.<br><br>By default, your hero will be on the bottom right of the screen.</p>
                     <div class="changeimg animateicon">
                     <span v-for="(icons, index) in icons_data">
                       <input type="radio" name="icon" :id="icons.id" v-bind:value="icons.id" class="radiodata" v-model="setting.icon_id"><label :for="icons.id" @click="activateicon(index,icons.animation)" :class="{ 'color-border' : active_el == index }"><lottie-player
                           :src="icons.animation" mode="bounce" background="transparent"  speed="1"  loop  autoplay> </lottie-player></label>
                     </span>
                     </div>
                     <h3 class="pb-3 mb-2 mt-2 pt-3"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> Just like true Heroes, you can place him wherever you think your Hero looks best.</h3>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="nextsectionshow(3)" class="btn btn-primary next">Next</a></div> 
                  </div>
                  <div class="col-lg-6 d-md-flex justify-content-center align-items-center show-image">
                     <div v-if="animation">
                        <div id="animationdiv" class="animationdivc">
                        <lottie-player
                           v-bind:src="animation" mode="normal" background="transparent"  speed="1"  loop  autoplay class="lottie_player_size"></lottie-player>
                        </div>
                     </div>
                     <div v-else>
                        <img src="images/Ambassador05.png" alt="#">
                     </div>  
                   </div>
               </div>
               <div class="row">
                  <div class="col-md-12 hidedesktop">
                     <a href="Javascript:void(0);" @click="nextsectionshow(3)" class="btn btn-primary next">Next</a>     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="convert_site mt-3 mb-3" v-if="sectionshow === 3">
         <div class="container">
            <div class="custombox bg-white"> 
               <div class="row">
                 <div class="col-md-12">
                  <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3 pb-1">    
                     <h1 class="ambassador pb-3 mb-1">Choose what the Hero says to make the first impression.</h1>
                     <div class="mainform">
                        <label class="pb-2 font-weight-bold">Give them a reason to click on your Hero.</label>
                        <input class="form-control" type="text" placeholder="Hey wassup!"  v-model="setting.welcome_msg_hdr" maxlength="30">
                        <input class="form-control" type="text" placeholder="I have a surprise gift for you. I know you want it." maxlength="110" v-model="setting.welcome_msg">  
                        <h6 class="pb-3 mb-3">Hint - Create a sense of curiosity to make sure your visitors click on your hero. Get creative.</h6> 
                     </div>
                     <h3 class="mb-1 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> Feel free to experiment.</h3>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="nextsectionshow(4)" class="btn btn-primary next">Next</a></div>
                  </div>
                  <div class="col-lg-5 ml-auto dt">
                     <div class="row sidebox"> 
                        <div class="spaktext">
                           <h1 class="pb-2">{{setting.welcome_msg_hdr}}</h1>  
                           <p>{{setting.welcome_msg}} </p>
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
                     <a href="Javascript:void(0);" @click="nextsectionshow(4)" class="btn btn-primary next">Next</a>     
                  </div>
               </div>
            </div>      
         </div>
      </section>
      <section class="convert_site mt-3 mb-3" v-show="sectionshow === 4">
        <div class="container">
            <div class="custombox bg-white"> 
               <div class="row">
               <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="pb-1 mb-3">    
                     <h1 class="ambassador pb-3 mb-1">Tailor your customer experience.</h1>
                     <div class="mainform customradio">
                        <label class="pb-2 font-weight-bold">Ask them for their contact details, (be polite yet persuasive)</label>
                        <input class="form-control" type="text" placeholder="Hey wassup! i have gift for you. want it?" v-model="setting.newsletter_msg" maxlength="40"> 
                        <input type="radio" id="mailchimp" value="mailchimp_url" name="radio-mailchimp" v-model="mailchimp_both_data"> 
                        <label class="pb-2 font-weight-bold" for="mailchimp" @click="save_input_data()">Mailchimp Url</label>
                        <input class="form-control" id="mailchimp_url" type="text" placeholder="Enter mailchimp url">
                        <h6 class="pb-3 mb-3"> <a class="readblog" href="https://heywassup.io/how-to-get-action-url-from-mailchimp/" target="_blank">Learn how to get your Mailchimp url - Read Blog.</a> Mailchimp url example:('https://mailchimp.us19.list-manage.com/subscribe/post?u=64f5f677acbf99dccd8d116d6&amp;id=4a5610c345')</h6>
                        <input type="radio" id="savetodatabs" name="radio-mailchimp" value="save in database" v-model="mailchimp_both_data" checked>
                        <label for="savetodatabs" class="pb-2 font-weight-bold" @click="savedata()">Save In DataBase</label>
                        <h6 class="pb-3 mb-3">The best way to get your visitors to click on your Hero is by creating curiosity in your messaging.</h6>
                     </div>
                     <h3 class="mb-1 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="nextsectionshow(5)" class="btn btn-primary next">Next</a></div>
                  </div>
                  <div class="col-lg-5 ml-auto df">
                       <div class="row sidebox"> 
                     <div class="spaktext">
                        <p class="mb-3">{{setting.newsletter_msg}}</p>
                        <input class="form-control" type="text" placeholder="Enter Your Email here"> 
                        <button class="btn btn-primary submit font-weight-bold">Submit</button>
							
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
                     <a href="Javascript:void(0);" @click="nextsectionshow(5)" class="btn btn-primary next">Next</a>     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="convert_site mt-3 mb-3 copycoupen" v-if="sectionshow === 5">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                 <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="pb-1 mb-3">    
                     <h1 class="ambassador pb-3 mb-1">Customize the look & feel of your Hero to match your store.</h1>
                     <div class="mainform">
                        <label class="pb-3 font-weight-bold">Reward your visitor</label> 
                        <div class="create_cupon">
                             <span class="customradio mb-2">   
                           <input type="radio" id="test1" name="radio-group" checked>
                           <label for="test1">Create Coupon Code-  <a :href="`https://${shop_domain}/admin/discounts/new`" target="_blank">Create now</a></label>
                           </span>
                             <span class="customradio mb-3 pb-1 mt-2 customdropdown">    
                           <input type="radio" id="test2" name="radio-group">
                           <label for="test2">Select Coupon Code </label>
                             <span class="customdropdown">
                              <select class="form-control customdrop" v-model="setting.discount_code" style="width: 200px;">
                                <option value=""> Select coupon code </option>
                                 <option v-for="(discount, index) in discount_codes">{{discount.code}}</option>
                              </select>
                           </span> 
                           <button class="refreshbtn" @click="fetchEventsList()"><i class="fa fa-refresh" aria-hidden="true" style="color: #949494" v-if="!seen"></i> <div class="spinner-border" v-if="seen"></div></button>       
                           </span>
                           <span class="customradio customdropdown"> 
                           <label for="discount_msg" class="mb-2">Coupon Code Message</label>
                           <input type="text" class="form-control" id="discount_msg_hdr" name="discount_msg_hdr" v-model="setting.discount_msg_hdr" maxlength="30">
                           <input type="text" class="form-control" id="discount_msg" name="discount_msg" v-model="setting.discount_msg" maxlength="110">
                           </span>
                           </div>
                           <h6 class="pb-3 mb-3 wassup_hint">Once they’ve given you their email address, keep your Hero’s word and reward them.</h6>
                        </div>
                        <h3 class="mb-1 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                        <div class="hidemobile">
                        <a href="Javascript:void(0);" @click="nextsectionshow(6)" class="btn btn-primary next">Next</a></div>
                     </div>
                     <div class="col-lg-5 ml-auto">
                        <div class="row sidebox"> 
                        <div class="spaktext">
                          <h1 class="pb-2">{{setting.discount_msg_hdr}}</h1>
                        <p class="mb-3">{{setting.discount_msg}}</p>
                        <div class="copycode d-flex">  
                        <input class="form-control" type="text" placeholder="10OFF" :value="setting.discount_code" disabled>     
                        <button class="btn btn-primary">Copy Coupon</button>    </div> 
                       <button class="btn btn-primary submit mt-2 font-weight-bold">Go to Cart</button>  
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
                   <a href="Javascript:void(0);" @click="nextsectionshow(6)" class="btn btn-primary next">Next</a>     
                  </div> 
               </div>
             </div>
         </div>
      </section>
      <section class="convert_site mt-3 mb-3 copycoupen" v-show="sectionshow === 6">
          <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                 <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="pb-1 mb-3">    
                     <h1 class="ambassador">Customize with your brand colors</h1>
                     <p class="pt-3 mb-1 pb-2 wassup_hint">Select the colors to help connect Wassup with the rest of your website’s experience.</p>
                      <!-- <p class="pt-1 pb-2">We're going to setup an instant boost leads software and grow revenue in 3 steps</p>   --> 
                     <div class="mb-3" id="color-picker">
                        <div class="wrapper-dropdown">
                          <jscolor id="bg_color" v-model="setting.bg_color"></jscolor>
                        </div>
                     </div>
                     
                     <div class="mainform mt-2 mb-2">
                        <p class="mb-2 font-weight-bold">Now, select a color for your text.</p>
                        <div class="wrapper-dropdown">
                       <jscolor id="text_color" v-model="setting.text_color"></jscolor>
                        </div>
                     </div>
                     <div class="mb-3" id="color-picker">
                        <div class="wrapper-dropdown">
                        <p class="mb-2 font-weight-bold">Now, select a color for your button.</p>
                         <jscolor id="btn_bg_color" v-model="setting.btn_bg_color"></jscolor>          
                        </div>
                     </div>
                     <div class="mainform mt-2 mb-2">
                        <p class="mb-2 font-weight-bold">Now, select a color for your button's text.</p>
                        <div class="wrapper-dropdown">
                       <jscolor id="btn_text_color" v-model="setting.btn_text_color"></jscolor> 
                        </div>
                        
                     </div>
                     <h3 class="pb-3 mb-2 mt-2 pt-3"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                     <div class="hidemobile">
                    <a href="Javascript:void(0);" @click="nextsectionshow(7)" class="btn btn-primary next">Next</a></div>
                  </div>
                  <div class="col-lg-5 ml-auto mainimg">
                     <div class="row sidebox" > 
                        <div class="spaktext" id="bgclr" :style="background_color">
                           <h1 class="pb-2" :style="font_color_style">{{setting.discount_msg_hdr}}</h1>
                           <p class="mb-3" :style="font_color_style"> {{setting.discount_msg}}</p>
                           <div class="copycode d-flex">  
                           <input class="form-control" type="text" placeholder="10OFF" :value="setting.discount_code" disabled>     
                           <button class="btn btn-primary">Copy Coupon</button>    </div> 
                          <button class="btn btn-primary submit mt-2 font-weight-bold" :style="btn_background_color">Go to Cart</button>  
                        </div>
                        <div class="spakimg" v-if="sectionshow === 6">
                        <lottie-player
                           v-bind:src="animation" mode="normal" background="transparent"  speed="1"  loop  autoplay></lottie-player>
                        </div> 
                         
                     </div> 
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 hidedesktop">
                   <a href="Javascript:void(0);" @click="nextsectionshow(7)" class="btn btn-primary next">Next</a>     
                  </div> 
               </div>
            </div>
         </div>
      </section>
      <section class="convert_site mt-3 mb-3 copycoupen" v-if="sectionshow === 7">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                 <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
               </div>     
               <div class="row">
                  <div class="col-lg-6">
                     <img src="svg/ChangeAmb.svg" alt="#"  class="pb-1 mb-3">    
                     <h1 class="ambassador pb-3 mb-1">Configure your Hero.</h1>
                     <div class="mainform">
                        <label class="font-weight-bold pb-1">Give your Hero a spot on your website.</label>
                          <ul class="postion-set setimg pb-3">
                        <li><label @click="sevenactivate(1)" :class="{ 'color-border' : sevenactive_el == 1 && setting.widget_position == 'bottom_right'}"><input type="radio" name="widget_position" value="bottom_right" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition01.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(2)" :class="{ 'color-border' : sevenactive_el == 2 && setting.widget_position == 'bottom_left'}"><input type="radio" name="widget_position" value="bottom_left" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition02.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(3)" :class="{ 'color-border' : sevenactive_el == 3 }"><input type="radio" name="widget_position" value="top_left" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition03.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(4)" :class="{ 'color-border' : sevenactive_el == 4 }"><input type="radio" name="widget_position" value="top_right" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition04.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(5)" :class="{ 'color-border' : sevenactive_el == 5 }"><input type="radio" name="widget_position" value="middle_left" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition05.svg" alt="#"></label></li>
                        <li><label @click="sevenactivate(6)" :class="{ 'color-border' : sevenactive_el == 6  && setting.widget_position == 'middle_right'}"><input type="radio" name="widget_position" value="middle_right" class="radiodata" v-model="setting.widget_position"><img src="svg/APosition06.svg" alt="#"></label></li>
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
                           <span class="customradio customdropdown pb-2">    
                              <input type="radio" id="test2" name="radio-group" value="exit" v-model="setting.load_timing">
                              <label for="test2"> Up on the intention of Exit.</label>     
                           </span> 
                           <span class="customradio customdropdown">    
                              <label for="test3"> Cookies Managment </label>
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
                     <h3 class="mb-1 pb-3 mb-2"><img src="svg/Display_Settings.svg" alt="#" class="lightimg mr-1"> You can change this any time in your Hero’s settings.</h3>
                     <div class="hidemobile">
                     <a href="Javascript:void(0);" @click="nextsectionshow(8)" class="btn btn-primary next">Next</a></div>
                  </div>
               <div class="col-lg-5 ml-auto">
                  <div class="row sidebox"> 
                     <div class="spaktext" :style="background_color">
                        <h1 class="pb-2" :style="font_color_style">{{setting.discount_msg_hdr}}</h1>
                        <p class="mb-3" :style="font_color_style"> {{setting.discount_msg}}</p>
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
                <a href="Javascript:void(0);" @click="nextsectionshow(8)" class="btn btn-primary next">Next</a>     
               </div> 
            </div>
         </div>
         </div>
      </section>
      <section class="convert_site mt-3 mb-3 chatdata" v-if="sectionshow === 8">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                 <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
              </div>       
               <div class="row">
                  <div class="col-md-12">
                     <div class="text-center">
                        <img src="images/computor.png" alt="#"> 
                        <h1 class="ambassador mb-4 pb-2 mt-3">What kind of products do you sell?</h1> 
                        <select class="form-control customdrop mb-3"  v-model="setting.product_type">
                          <option value="Fashion & Apparel" selected="selected">Fashion & Apparel</option>
                          <option value="Health & Beauty">Health & Beauty</option>
                          <option value="Home & Furniture">Home & Furniture</option>
                          <option value="Food & Drinks">Food & Drinks</option>
                          <option value="Music">Music</option>
                          <option value="Pets">Pets</option>
                          <option value="Others">Others</option>
                        </select>      
                     </div>      
                  </div>    
               </div> 
               <div class="row">
                  <div class="col-md-12 text-center">
                   <a href="Javascript:void(0);" @click="nextsectionshow(9)" class="btn btn-primary next mt-4">Next</a>     
                  </div> 
               </div> 
            </div>         
         </div>          
      </section>
      <section class="convert_site mt-3 mb-3 chatdata" v-if="sectionshow === 9">
         <div class="container">
            <div class="custombox bg-white"> 
               <div class="row">
                 <div class="col-md-12">
                 <img src="svg/logo.svg" alt="#" class="upimg">    
                 </div>    
              </div>      
               <div class="row">
                  <div class="col-md-12">
                     <div class="text-center">
                     <img src="svg/Ambassador03.svg" alt="#"> 
                     <h1 class="ambassador mb-4 pb-4 mt-3 pt-1">What is your annual revenue?</h1>
                       <ul class="selectsec col-md-8 col-sm-12 mb-3">
                        <li @click="ninthactivate(1)" :class="{ 'color-border' : ninthactivate_el == 1 }"><input type="radio"  id="annual_revenue1" name="annual_revenue" value="$0-$10k" class="radiodata" v-model="setting.annual_revenue"><label for="annual_revenue1" class="annual_lilabel rd9">$0-$10k</label></li>
                        <li  @click="ninthactivate(2)" :class="{ 'color-border' : ninthactivate_el == 2 }"><input type="radio" name="annual_revenue" v-model="setting.annual_revenue" id="annual_revenue2" value="$10-$100k" class="radiodata"><label for="annual_revenue2" class="rd9">$10-$100k</label></li> 
                        <li  @click="ninthactivate(3)" :class="{ 'color-border' : ninthactivate_el == 3 }"><input type="radio" name="annual_revenue" v-model="setting.annual_revenue" id="annual_revenue3" value="$100k-$1m" class="radiodata"><label for="annual_revenue3" class="rd9">$100k-$1m</label></li> 
                        <li  @click="ninthactivate(4)" :class="{ 'color-border' : ninthactivate_el == 4 }"><input type="radio" name="annual_revenue" v-model="setting.annual_revenue" id="annual_revenue4" value="$1m-$10m" class="radiodata"><label for="annual_revenue4" class="rd9">$1m-$10m</label></li>
                        <li  @click="ninthactivate(5)" :class="{ 'color-border' : ninthactivate_el == 5 }"><input type="radio" name="annual_revenue" v-model="setting.annual_revenue" id="annual_revenue5" value="$10m-$100m" class="radiodata"><label for="annual_revenue5" class="rd9">$10m-$100m</label></li> 
                        <li  @click="ninthactivate(6)" :class="{ 'color-border' : ninthactivate_el == 6 }"><input type="radio" name="annual_revenue" v-model="setting.annual_revenue" id="annual_revenue6" value="More than $ 50m" class="radiodata"><label for="annual_revenue6" class="rd9">More than $ 50m</label></li>
                        <li  @click="ninthactivate(7)" :class="{ 'color-border' : ninthactivate_el == 7 }"><input type="radio" name="annual_revenue" v-model="setting.annual_revenue" id="annual_revenue7" value="I don't know" class="radiodata"> <label for="annual_revenue7" class="rd9">I don't know</label></li>     
                       </ul> 
                     </div>      
                  </div>    
               </div> 
                <div class="row">
               <div class="col-md-12 text-center">
                <a href="Javascript:void(0);" @click="finish()" class="btn btn-primary next mt-4">Finish</a>     
               </div> 
               </div>  
             </div>      
         </div>      
      </section>
       <section class="convert_site mt-3 mb-3 chatdata" v-if="sectionshow === 10">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                  <div class="col-md-12">
                     <img src="svg/logo.svg" alt="#" class="upimg">
                    <div class="timer_sec text-center">  
                    <img src="images/Hangon.png" alt="#" class="pb-3">
                    <p>Hang tight! Your Hero is getting ready.</p> 
                    </div>    
                  </div>
               </div>
           
            </div>
         </div>
      </section>
       
       <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                             <button  class="btn btn-primary next mt-3" @click="publish()">Publish </button> <a :href="amburl" class="ml-2">Select a different Hero</a>    
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
      </div>
   </div>
</template>

<script>
// import jscolor from './colorpickerComponent';
//var Chrome = VueColor.Chrome;
    export default {

      data() {
        return {
         animation:'',
         setting: {
          setting_id: '0',
          shop_id: '',
          icon_id: '',
          welcome_msg: 'I have a surprise gift for you. I know you want it.',
          welcome_msg_hdr:'Hey Wassup!',
          newsletter_msg: 'I’ll drop your gift in your mailbox!',
          bg_color:'#6979f8',
          btn_bg_color: '#ffe29d',
          btn_text_color:'#333',
          text_color:'#F0F0F0',
          widget_position: 'bottom_left',
          load_timing: '20 seconds',
          widget_trigger: '',
          product_type: 'Fashion & Apparel',
          annual_revenue: '$0-$10k',
          discount_code: '',
          discount_msg:'your 10% Discount Voucher',
         discount_msg_hdr: 'Awesome!',
         status: 1,
         cookies_time: 'Weekly',
         mailchimp_url:'save in database'
         },
          shop_domain: '',
          icons_data :[],
          icons_select: '',
          sectionshow: 1,
          active_el: 0,
          sevenactive_el:1,
          ninthactivate_el: 1,
          active: false,
          activeb: false,
          selectedColor: '',
          selectedColorName: '',
          discount_codes: '',
          timer:'',
          error: '',
          amburl: '',
          datas: '',
          seen: false,
          mailchimp_both_data: 'save in database'
        }
      },
      mounted() {
          console.log('Component mounted.');
          this.icons_data = window.icons;
          this.setting.shop_id = window.whatssupShop.id;
          this.shop_domain = window.whatssupShop.shopify_domain; 
          this.animation = this.icons_data[0].animation;
          this.setting.icon_id = this.icons_data[0].id;
          this.amburl = window.app_url+'/ambassador';
          $('head').append('<style>.spaktext:before{border-top :15px solid '+this.setting.bg_color+' !important;}</style>');
          // if(this.setting.mailchimp_url !='save in database')
          // {

          //     $('#mailchimp_url').val(this.setting.mailchimp_url);
          // }
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
         // btn_font_color_style(){
         //   return {
               
         //   }
         // },
      },
      created: function() {
         this.fetchEventsList();
      },
      methods: {
        savedata: function(){
          $('#mailchimp_url').val('');
        },
        save_input_data: function(){
          if(this.setting.mailchimp_url !='save in database')
          {
              $('#mailchimp_url').val(this.setting.mailchimp_url);
          }
        },
        toggle: function() {
          this.isOpen = !this.isOpen
          this.colors.source = 'hex'
        },
         fetchEventsList: function(){
             let currentObj = this;
            this.seen = true;
            let url =window.app_url+'/discount';
            //let url ='/discount';
            this.axios.get(url).then(function (response) {
                  currentObj.seen = false;
               currentObj.discount_codes = response.data;
                })
                .catch(function (error) {
                  currentObj.seen = false;
                  //this.discount_codes = response.data;
                });
         },
        activateicon:function(elem, animationss){ 
         this.animation = animationss;
        window.$("#animationdiv").html('<lottie-player src="'+animationss+'" mode="normal" background="transparent"  speed="1"  loop  autoplay></lottie-player>');
            this.active_el = elem;
        },
        nextsectionshow:function(elem){
         // console.log(jscolor);
         // jscolor.installByClassName("jscolor");
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
        
        finish: function() {
         let currentObj = this;
         this.sectionshow = 10;
         let mailchimp_url = $('#mailchimp_url').val();
          this.sectionshow = 10;
         if(this.mailchimp_both_data !='save in database')
         {
          this.setting.mailchimp_url = mailchimp_url;
         }else{
          this.setting.mailchimp_url = this.mailchimp_both_data;
         }
        let uri = window.app_url+'/settings';
       //let uri = '/settings';
          this.axios.post(uri, this.setting)
                .then(function (response) {
                    currentObj.output = response.data;
                    window.$('#exampleModal').modal();
                })
                .catch(function (error) {
                    currentObj.output = error;
                    currentObj.error = 'Error in add settings';
                    setTimeout(function(){
                      window.location.href = window.app_url;
                    },5000);
                });
           //      window.$('#exampleModal').modal();
         },
         publish: function(){
          //window.location.href = '/';
            window.location.href = window.app_url;
          //   this.axios.get(uri).then(response => {
          // });
         }
       }, 
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
