@extends('shopify-app::layouts.default')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" >
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

@endsection
@section('content')
    <welcome-component />
@endsection

@section('scripts')
    @parent
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.4.3/lottie.min.js"></script>
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
        window.icons = @json($icons);
    </script>
@endsection