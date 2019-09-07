@extends('layouts.app')
<style>
    .icon_lottiplyr{
        width: 150px;
        height: 150px;
        text-align: center;
        justify-content: center;
        align-content: center;
        position: relative;
        overflow: hidden;
    }
</style>
@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Icons
                    <div class="float-right">
                        <a href="{{route('icons.create')}}" class="btn btn-primary">Add Icon</a>
                    </div>
                </div>

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
                                        Animation
                                    </td>
                                    <td>
                                        Category
                                    </td>
                                    <td>
                                        Filter
                                    </td>
                                    <td>
                                        Plan
                                    </td>
                                    <td>
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($icons as $icon)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td width="100">
                                        <lottie-player 
    src="{{$icon->animation}}"  background="transparent"  speed="1"   loop  autoplay class="icon_lottiplyr">
</lottie-player>
</td>
                                    <td>{{$icon->category->name}}</td>
                                    <td>{{$icon->filter->name}}</td>
                                    <td>{{$icon->plan->name}}</td>
                                    <td width="175">
                                        <a href="{{route('icons.edit', ['id' => $icon->id])}}" class="btn btn-primary float-left mr-2">Edit</a>
                                        <form action="{{route('icons.destroy', ['id' => $icon->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $icons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
