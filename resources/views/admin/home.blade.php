@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>
                                        Sr.
                                    </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        Phone No.
                                    </td>
                                    <td>
                                        Domain
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shop as $shops)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>
                                        {{$shops->shopowner_name}}
                                    </td> 
                                    <td>{{$shops->shopowner_email}}</td>
                                    <td>{{$shops->shopowner_phone}}</td>
                                    <td>
                                    {{$shops->shopify_domain}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $shop->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
