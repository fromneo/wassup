@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Filters
                    <div class="float-right">
                        <a href="{{route('filters.create')}}" class="btn btn-primary">Add Filter</a>
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
                                        Name
                                    </td>
                                    <td>
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($filters as $filter)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>{{$filter->name}}</td>
                                    <td>
                                        <a href="{{route('filters.edit', ['id' => $filter->id])}}" class="btn btn-primary float-left mr-2">Edit</a>
                                        <form action="{{route('filters.destroy', ['id' => $filter->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $filters->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
