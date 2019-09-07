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
                     <h1 class="ambassador pb-5 text-center">Select Plan</h1>
                 </div>
               </div>
               <div class="row">
               @foreach($plans as $plan)
                  <div class="col-lg-4">
                     <div class="plan text-center">
                        @if($plan->header!=null)
                         <h4 class="pb-3 text-uppercase">{{ $plan->header }}</h4>
                        @endif
                        <img src='{{$plan->icons}}' alt="#" class="mb-2">
                        <h2 class="pb-2 pt-4 text-uppercase">{{ $plan->name}}</h2>
                        <p class="pb-4">{{ $plan->description}}</p>
                        
                        @if($plan->price == 0)
                        <h1>Free</h1>
                        @else
                        <h1>${{ $plan->price}}</h1>
                         @endif
                         @if($active_charge== $plan->name && $status != 'cancelled')
                            <a href="javascript:void(0);" class="btn btn-primary next bg-transparent text-primary mt-4" >Current Plan</a> 
                        @elseif($plan->name == 'BEGINNERS' && $status == 'cancelled')
                            <a href="javascript:void(0);" class="btn btn-primary next bg-transparent text-primary mt-4" >Current Plan</a>
                         @else
                        <a href="{{ route('customBilling', ['id' => $plan->id ]) }}" class="btn btn-primary next mt-4" onclick="shownotification()">Select Plan</a> 
                        @endif
                        <hr class="line mt-4 mb-4">
                        {!! $plan->feature !!}
                     </div>
                  </div>
                   @endforeach
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
        window.plans = @json($plans);
        var notification =localStorage.getItem('wassup_value');
          if(notification !=null){
              ShopifyApp.flashNotice(notification);
              setTimeout(function(){ localStorage.removeItem('wassup_value'); }, 3000);
          }
        function shownotification(){
           localStorage.setItem('wassup_value', 'Your Plan Change Successfully');
         };
    </script>
@endsection