@extends('shopify-app::layouts.default')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" >
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

@endsection
@section('content')
<div id="load"></div>
    <section class="convert_site mt-3 mb-3 chatdata">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                  <div class="col-md-12">
                     <img src="svg/logo.svg" alt="#" class="upimg">
                     <a class="myhome-button" href="{{ route('home') }}">Back to Dashboard</a>
                  </div>
                  <div class="col-md-12">
                     <h1 class="ambassador pb-5 text-center">FAQs & Support</h1>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div id="accordion" role="tablist" aria-multiselectable="true" class="questionsec accordion md-accordion">
                        <div class="card">
                           <div class="card-header" role="tab" id="headingOne">
                              <h5 class="mb-0">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Installation<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
							 We’ve made Wassup exclusively for Shopify Stores and are proud of our award-winning support. If you need any help Installing or configuring Wassup, drop us a message and we’ll get back to you before you finish your coffee.

To Install Wassup, you need to go to apps.shopify.com and search for ‘Wassup!’. Tap on the Add App button. 

While Shopify is preparing the installation, you’ll see this screen.

This is the permissions screen. For Wassup! to work smoothly, the app needs certain store permissions. Don’t worry, none of your data is sent to us. Shopify is extremely conscious about your data and your privacy, and so are we. Simply tap the Install App button.

Woo Hoo! You’ve successfully installed the app. But Hold On! You still need to configure wassup for your store.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" role="tab" id="headingTwo">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Configure Wassup!<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                Yes, we’ll ship your package anywhere that can accept deliveries. Welcome to the configuration section of Wassup!<br><br>
<strong>If you’ve installed Wassup for the first time, continue reading.</strong><br>
<strong>If you’re looking to Reconfigure your Wassup or Change your Hero in Wassup, scroll up.</strong><br><br>
A quick recap on Wassup!. Wassup! is a Contextual Lead Generation Shopify app that non-intrusively pushes your users to give their email id in exchange for a surprise gift. Once you’ve finished (the earlier step off) installing the App, You’ll be shown this Welcome screen. Read through it and click on Next.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" role="tab" id="headingThree">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Selecting a Hero<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                In Wassup!, we offer you over 500 different Heroes. You can choose them based on your liking. Can be style, marketing day, attitude or whatever.The ones listed in front of on this screen are the most popular ones. Go ahead and select one out of the four that you think suits your website. Don’t worry, before you publish it to your website, you can change it. Click on Next, once you’ve selected a hero.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" role="tab" id="headingfour">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Can I add my own hero in this?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
                              <div class="card-body">
                                 We offer over 500 Heroes. We’re sure, there will be more than one Hero, similar to the one you want to add. But the answer to your question is, sorry, no. You won’t be allowed to add your own hero in Wassup.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" role="tab" id="headingfive">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Will these Heroes increase my website load time?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
                              <div class="card-body">
                                These animations are made with a technology called JSON. None of them are made with images but rather programmed. Therefore, their size is in KBS. So, to answer your question, No, they won’t increase the load time of your site.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" role="tab" id="headingsix">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                 But I don’t like any of these heroes. How do I see your full catalog of heroes?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingsix" data-parent="#accordion">
                              <div class="card-body">
                                 Don’t worry. We have over 500 heroes segregated by category and marketing dates. You can select any one from them once we’ve shown you how to configure a hero for your site.
                              </div>
                           </div>
                        </div>
						   <div class="card">
                           <div class="card-header" role="tab" id="headingseven">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                 Are these heroes too big for my website?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseseven" class="collapse" role="tabpanel" aria-labelledby="headingseven" data-parent="#accordion">
                              <div class="card-body">
                                You can choose the size of the hero that you want to show on your website. You can select from Small, Medium and Large size. That option is later in the configuration.
                              </div>
                           </div>
                        </div>
					 <div class="card">
                           <div class="card-header" role="tab" id="headingeight">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Give your Hero a message to welcome your Visitors. <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeight" class="collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion">
                              <div class="card-body">
                              This is where your hero gives out a welcome message to your visitors.<br><br>

The first text box is the greeting box. Welcome them. Say something like:<br><br>

<strong>Hey! Hows It Going?</strong><br>
<strong>Welcome to Your Store Name></strong><br>
<strong>Hey! Wassup!</strong><br><br>
Don’t exceed 30 characters here.

The next text box is the message you want to give out to your visitors asking them to click on your hero. That’s the signal for your hero to show ask your visitors for their contact details.<br><br>

The best messages are the ones that create curiosity. Here are a few examples:<br>

<strong>I have a surprise for you, Want it?</strong><br>
<strong>Looks like you are having a bad day. Let me light it up!</strong><br>
<strong>I have something in my pocket. I know you want it!</strong><br><br>
Click on Next, once you’ve selected a hero.
                              </div>
                           </div>
                        </div>
						<div class="card">
                           <div class="card-header" role="tab" id="headingnine">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                    Can I change this later?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapsenine" class="collapse" role="tabpanel" aria-labelledby="headingnine" data-parent="#accordion">
                              <div class="card-body">
                                Absolutely. You can change this whenever you want. To change this, simply select your hero from the ‘Change Hero’ section and type the new welcome text that you want.
                              </div>
                           </div>
                        </div>
							<div class="card">
                           <div class="card-header" role="tab" id="headingten">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                    Ask your visitors for Contact Info.<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseten" class="collapse" role="tabpanel" aria-labelledby="headingten" data-parent="#accordion">
                              <div class="card-body">
                               This is where your hero asks them to share their contact info so that he can send them an email with their gift. This is like a handshake your visitors do with your hero. Give me something and I’ll give you back something.<br> <br>

Keep this text simple and professional. You are asking for someone’s personal information. Don’t make them feel awkward.<br><br>

Don’t exceed 40 characters.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                    What contact info will visitors share with me?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven" class="collapse" role="tabpanel" aria-labelledby="headingeleven" data-parent="#accordion">
                              <div class="card-body">
                              At this stage of Wassup!, we currently just offer the capability to collect email addresses. In later versions, we will give you the option to ask for their mobile number too and then you can choose what you want to ask them.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven1">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven1" aria-expanded="false" aria-controls="collapseeleven1">
                    Is this email validated?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven1" class="collapse" role="tabpanel" aria-labelledby="headingeleven1" data-parent="#accordion">
                              <div class="card-body">
                             The hero currently checks if the email format is correct, but he doesn’t check if the email is valid. Your Heroes will have this capability in the future versions of Wassup!.
                              </div>
                           </div>
                        </div>
						<div class="card">
                           <div class="card-header" role="tab" id="headingeleven2">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven2" aria-expanded="false" aria-controls="collapseeleven2">
                    Can I change this later?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven2" class="collapse" role="tabpanel" aria-labelledby="headingeleven2" data-parent="#accordion">
                              <div class="card-body">
                            Absolutely. You can change this whenever you want. To change this, simply select your hero from the ‘Change Hero’ section and type the text that you want.
                              </div>
                           </div>
                        </div>
							<div class="card">
                           <div class="card-header" role="tab" id="headingeleven3">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven3" aria-expanded="false" aria-controls="collapseeleven3">
                    Reward Your Visitor<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven3" class="collapse" role="tabpanel" aria-labelledby="headingeleven3" data-parent="#accordion">
                              <div class="card-body">
                           This is where your hero keeps its word. In exchange for the contact information, the hero should now reward your visitor. In this version of Wassup!, Heroes can reward your customer with a coupon. In later versions, you’ll be given other options as well.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven4">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven4" aria-expanded="false" aria-controls="collapseeleven4">
                    Creating a Coupon<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven4" class="collapse" role="tabpanel" aria-labelledby="headingeleven4" data-parent="#accordion">
                              <div class="card-body">
                           If you have not created a coupon yet, click the Create Now. This will open the discount code creation screen in a new tab. Once you’ve created the coupon, add on the refresh icon. Our integration with Shopify discounts section will fetch all the coupons for you.
                              </div>
                           </div>
                        </div>
									<div class="card">
                           <div class="card-header" role="tab" id="headingeleven5">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven5" aria-expanded="false" aria-controls="collapseeleven5">
                    Selecting a Coupon<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven5" class="collapse" role="tabpanel" aria-labelledby="headingeleven5" data-parent="#accordion">
                              <div class="card-body">
                          If you already have a discount coupon, you can select that from the select coupon code dropdown.
Once you’ve selected a code, you’ll see that the code appears in the preview section on the right. Your users will be able to copy the coupon code or if they have an item in their cart, directly go to the cart and apply the coupon there.
                              </div>
                           </div>
                        </div>
												<div class="card">
                           <div class="card-header" role="tab" id="headingeleven6">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven6" aria-expanded="false" aria-controls="collapseeleven6">
                    I don’t see my coupon code in the dropdown.<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven6" class="collapse" role="tabpanel" aria-labelledby="headingeleven6" data-parent="#accordion">
                              <div class="card-body">
                          If you’ve just created a new coupon code, please wait for a few minutes before you click on the refresh button. In some rare cases, Shopify needs some time to give us the coupon.
                              </div>
                           </div>
                        </div>
						<div class="card">
                           <div class="card-header" role="tab" id="headingeleven7">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven7" aria-expanded="false" aria-controls="collapseeleven7">
                    Can I change the coupon?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven7" class="collapse" role="tabpanel" aria-labelledby="headingeleven7" data-parent="#accordion">
                              <div class="card-body">
                         Yes. You can change the coupon whenever you want to whatever you want.
                              </div>
                           </div>
                        </div>
							<div class="card">
                           <div class="card-header" role="tab" id="headingeleven8">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven8" aria-expanded="false" aria-controls="collapseeleven8">
                    Let’s Choose Your Brand Colors<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven8" class="collapse" role="tabpanel" aria-labelledby="headingeleven8" data-parent="#accordion">
                              <div class="card-body">
                        On this page, you can customize your brand colors for the Hero’s dialog box, buttons, and text color.
                              </div>
                           </div>
                        </div>
							<div class="card">
                           <div class="card-header" role="tab" id="headingeleven9">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven9" aria-expanded="false" aria-controls="collapseeleven9">
                   Changing the Background<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven9" class="collapse" role="tabpanel" aria-labelledby="headingeleven9" data-parent="#accordion">
                              <div class="card-body">
                       You can change the color of the background to match your store and brand colors. Click on the color picker and select the one that you like. Once you select it, your hero’s dialogs will show only those colors. It goes without saying that you can change it later if you want.Similarly, you can change the color of the text, button, and text on buttons.
                              </div>
                           </div>
                        </div>
							<div class="card">
                           <div class="card-header" role="tab" id="headingeleven10">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven10" aria-expanded="false" aria-controls="collapseeleven10">
                   Can I change the color of the Hero?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven10" class="collapse" role="tabpanel" aria-labelledby="headingeleven10" data-parent="#accordion">
                              <div class="card-body">
                      These Hero’s have been designed and fashion with love. Therefore, you won’t be able to change the color of these heroes. How would you like if Superman came with a yellow color cape?
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven11">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven11" aria-expanded="false" aria-controls="collapseeleven11">
                   Can I change this later?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven11" class="collapse" role="tabpanel" aria-labelledby="headingeleven11" data-parent="#accordion">
                              <div class="card-body">
                     Absolutely. You can change this whenever you want. To change this, simply select your hero from the ‘Change Hero’ section and type the text that you want.
                              </div>
                           </div>
                        </div>
									<div class="card">
                           <div class="card-header" role="tab" id="headingeleven12">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven12" aria-expanded="false" aria-controls="collapseeleven12">
                   Configure your Hero<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven12" class="collapse" role="tabpanel" aria-labelledby="headingeleven12" data-parent="#accordion">
                              <div class="card-body">
                    In this section, you give your Hero a position, and guidelines to appear. You can change this whenver you want from the Change Hero section.
                              </div>
                           </div>
                        </div>
						<div class="card">
                           <div class="card-header" role="tab" id="headingeleven13">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven13" aria-expanded="false" aria-controls="collapseeleven13">
                   Give your Hero a Spot<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven13" class="collapse" role="tabpanel" aria-labelledby="headingeleven13" data-parent="#accordion">
                              <div class="card-body">
                    Wassup Heroes are pretty flexible and can show up on any one of these 6 spots.<br><br>
<strong>Bottom Right</strong><br>
<strong>Bottle Left</strong><br>
<strong>Top Right</strong><br>
<strong>Top Left</strong><br>
<strong>Center Left</strong><br>
<strong>Center Right</strong><br><br>
Place the hero strategically for your visitors to see and engage.<br><br>

Tip – bottom right sees the maximum engagement.
                              </div>
                           </div>
                        </div>
						<div class="card">
                           <div class="card-header" role="tab" id="headingeleven14">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven14" aria-expanded="false" aria-controls="collapseeleven14">
                   I want the hero to be on the bottom right, but that spot is taken by another app. What do I do?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven14" class="collapse" role="tabpanel" aria-labelledby="headingeleven14" data-parent="#accordion">
                              <div class="card-body">
                   Wassup Heroes are pretty flexible. Select another spot for the hero. If you still want the hero to be at the bottom right, check with the other app if you can change the position of that app.
                              </div>
                           </div>
                        </div>
							<div class="card">
                           <div class="card-header" role="tab" id="headingeleven15">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven15" aria-expanded="false" aria-controls="collapseeleven15">
                   When do you want your hero to show up?<label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven15" class="collapse" role="tabpanel" aria-labelledby="headingeleven15" data-parent="#accordion">
                              <div class="card-body">
                  This section allows you to configure the time or intent for the hero to show up. In Wassup!, you have 2 options;<br><br>
       <strong>You can ask your hero to show up after the visitor is on your site for some time or,</strong><br>
       <strong>Upon intent of Exit.</strong>				  
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven16">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven16" aria-expanded="false" aria-controls="collapseeleven16">
                   Time Configuration <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven16" class="collapse" role="tabpanel" aria-labelledby="headingeleven16" data-parent="#accordion">
                              <div class="card-body">
          				  When you select this option, your hero will appear after the visitor is on your site for the selected number of seconds. Example, if you’ve selected 20 seconds, your hero will appear 20 seconds after your visitor is on your site.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven17">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven17" aria-expanded="false" aria-controls="collapseeleven17">
                   What happens if the visitor leaves before 20 seconds? <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven17" class="collapse" role="tabpanel" aria-labelledby="headingeleven17" data-parent="#accordion">
                              <div class="card-body">
          				 In the case when your visitor leaves your site before 20 seconds, the hero won’t appear.
                              </div>
                           </div>
                        </div>
									<div class="card">
                           <div class="card-header" role="tab" id="headingeleven18">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven18" aria-expanded="false" aria-controls="collapseeleven18">
                   Can I change this later? <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven18" class="collapse" role="tabpanel" aria-labelledby="headingeleven18" data-parent="#accordion">
                              <div class="card-body">
          				Absolutely. You can change this whenever you want. To change this, simply select your hero from the ‘Change Hero’ section.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven19">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven19" aria-expanded="false" aria-controls="collapseeleven19">
                   Intent Configuration <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven19" class="collapse" role="tabpanel" aria-labelledby="headingeleven19" data-parent="#accordion">
                              <div class="card-body">
          				When you select the Intent configuration, the hero will appear when the user is about to take that action. Currently, Wassup! Support ‘Exit Intent’. This means that when your visitor is about to exit your site, your Hero will show up.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven20">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven20" aria-expanded="false" aria-controls="collapseeleven20">
                   How do you know if the visitor is about to exit the site? <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven20" class="collapse" role="tabpanel" aria-labelledby="headingeleven20" data-parent="#accordion">
                              <div class="card-body">
          				The hero looks at the mouse pointer. If the mouse pointer is about to go near the ‘X’ button of the browser or the tab, the hero will show up.
                              </div>
                           </div>
                        </div>
						      <div class="card">
                           <div class="card-header" role="tab" id="headingeleven21">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven21" aria-expanded="false" aria-controls="collapseeleven21">
                                    Can I change this later? <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven21" class="collapse" role="tabpanel" aria-labelledby="headingeleven21" data-parent="#accordion">
                              <div class="card-body">
          				          Absolutely. You can change this whenever you want. To change this, simply select your hero from the ‘Change Hero’ section.
                              </div>
                           </div>
                        </div>
						      <div class="card">
                           <div class="card-header" role="tab" id="headingeleven22">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven22" aria-expanded="false" aria-controls="collapseeleven22">
                                 Plans <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven22" class="collapse" role="tabpanel" aria-labelledby="headingeleven22" data-parent="#accordion">
                              <div class="card-body">
          				          Wassup! Offers 3 plans. You can visit the plans page here.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven23">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven23" aria-expanded="false" aria-controls="collapseeleven23">
                                    Free Plan <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven23" class="collapse" role="tabpanel" aria-labelledby="headingeleven23" data-parent="#accordion">
                              <div class="card-body">
                         			This plan is the basic plan and includes the following – <br><br>
               						
               						<strong>5 Heroes.</strong><br>
               						<strong>Wassup! Branding.</strong><br>
               						<strong>Time-Based Intent.</strong><br>
               						<strong>Email Support.</strong><br>
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven24">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven24" aria-expanded="false" aria-controls="collapseeleven24">
                                    Advanced Plan – $19 / Mo <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven24" class="collapse" role="tabpanel" aria-labelledby="headingeleven24" data-parent="#accordion">
                              <div class="card-body">
                         			The Advanced Plan has everything in Free Plan, and – <br><br>
               						
               						<strong>No Wassup Branding.</strong><br>
               						<strong>MailChimp integration.</strong><br>
               						<strong>Exit Intent.</strong><br>
               						<strong>100 Heroes.</strong><br>
               						<strong>Email & Chat Support.</strong>
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven25">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven25" aria-expanded="false" aria-controls="collapseeleven25">
                                    Expert – $39 / Mo <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven25" class="collapse" role="tabpanel" aria-labelledby="headingeleven25" data-parent="#accordion">
                              <div class="card-body">
          				           The Expert Plan has everything in Advanced Plan, and: <br><br>
               						<strong>All Heroes.</strong><br>
               						<strong>Email Reminders for Changing your Hero based on Marketing Day.</strong><br>
               						<strong>Phone Support.</strong>
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven26">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven26" aria-expanded="false" aria-controls="collapseeleven26">
                                 Can I downgrade my subscription. <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven26" class="collapse" role="tabpanel" aria-labelledby="headingeleven26" data-parent="#accordion">
                              <div class="card-body">
          				          Yes. You can downgrade from our paid plans to our free plan whenever you want.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven27">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven27" aria-expanded="false" aria-controls="collapseeleven27">
                                 What happens if I have selected an Advanced Hero and I downgrade my plan? <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven27" class="collapse" role="tabpanel" aria-labelledby="headingeleven27" data-parent="#accordion">
                              <div class="card-body">
          				          In the case where you upgrade to paid plan Hero, and then downgrade, you will have to configure the available Hero again.
                              </div>
                           </div>
                        </div>
								<div class="card">
                           <div class="card-header" role="tab" id="headingeleven27">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven28" aria-expanded="false" aria-controls="collapseeleven28">
                                    Do you have customer service? <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                 </a>
                              </h5>
                           </div>
                           <div id="collapseeleven28" class="collapse" role="tabpanel" aria-labelledby="headingeleven28" data-parent="#accordion">
                              <div class="card-body">
          				          Of course! Our friendly and knowledgeable customer services reps are available to answer your questions 24/7/365. Alternatively, please feel free to drop us a message in the chat window or email us on support@heywassup.io
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection

@section('scripts')
    @parent
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
        window.whatssupShop = @json($shop);
    </script>
@endsection