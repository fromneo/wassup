@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    New Icon
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('icons.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="animation" class="col-md-4 col-form-label text-md-right">{{ __('Animation') }}</label>

                            <div class="col-md-6">
                                <input id="animation" type="text" class="form-control{{ $errors->has('animation') ? ' is-invalid' : '' }}" name="animation" value="{{ old('animation') }}" required autofocus>

                                @if ($errors->has('animation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('animation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                

                                <select id="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id">
                                    <option value="">-- Select Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @foreach($category->childrenList as $child)
                                            <option value="{{$child->id}}">--{{$child->name}}</option>
                                        @endforeach
                                    @endforeach
                                </select>

                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filter_id" class="col-md-4 col-form-label text-md-right">{{ __('Filter') }}</label>

                            <div class="col-md-6">
                                

                                <select id="filter_id" class="form-control{{ $errors->has('filter_id') ? ' is-invalid' : '' }}" name="filter_id">
                                    <option value="">-- Select Filter--</option>
                                    @foreach($filters as $filter)
                                        <option value="{{$filter->id}}">{{$filter->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('filter_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('filter_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="plan_id" class="col-md-4 col-form-label text-md-right">{{ __('Plan') }}</label>

                            <div class="col-md-6">
                                

                                <select id="plan_id" class="form-control{{ $errors->has('plan_id') ? ' is-invalid' : '' }}" name="plan_id">
                                    <option value="">-- Select Plan--</option>
                                    @foreach($plans as $plan)
                                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('plan_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
