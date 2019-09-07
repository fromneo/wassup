@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Categories
                    <div class="float-right">
                        <a href="{{route('categories.create')}}" class="btn btn-primary">Add Category</a>
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
                                        Parent Catgeory
                                    </td>
                                    <td>
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        @if($category->parent_category)
                                            {{$category->parent_category->name}}
                                        @endif
                                    </td>
                                    <td width="175">
                                        <a href="{{route('categories.edit', ['id' => $category->id])}}" class="btn btn-primary float-left mr-2">Edit</a>
                                        <form action="{{route('categories.destroy', ['id' => $category->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
