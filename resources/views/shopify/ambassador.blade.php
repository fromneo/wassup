@extends('shopify-app::layouts.default')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" >
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@endsection
@section('content')
    <ambassador-component />
@endsection

@section('scripts')
    @parent
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.4.3/lottie.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jscolor.js') }}"></script>
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
        window.setting = @json($setting);
        window.icon_data = @json($icon_data);
        window.categories = @json($categories);
        window.filters = @json($filters);
        window.plans = @json($plans);
        window.active_charge = @json($active_charge);
        window.active_charge_status = @json($active_charge_status);
        window.active_icon = @json($active_icon);
    </script>
@endsection