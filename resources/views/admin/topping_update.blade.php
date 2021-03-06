@extends('layouts.app_admin')

@section('page-title')
    <li><a href="{{ route('admin.index') }}">{{ __('message.title.dashboad') }}</a></li>
    <li><a href="{{ route('admin.topping.index') }}">{{ __('message.topping') }}</a></li>
    <li class="active">{{ __('message.update') }}</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">{{ __('message.topping') }}</div>
        <div class="card-body">
            {!! Form::open(['route' => ['admin.topping.update', $topping->id], 'method' => 'post']) !!}
            <div class="form-group row">
                <h5 class="col-md-1 col-form-label-sm">{{ __('message.id') }}</h5>
                {!! Form::text('id', $topping->id, ['class' => 'form-control col-md-11', 'readonly']) !!}
            </div>
            <div class="form-group row">
                <h5 class="col-md-1 col-form-label-sm">{{ __('message.topping') }}</h5>
                {!! Form::text('name', $topping->name, ['class' => 'form-control col-md-11']) !!}
            </div>
            <div class="form-group row">
                <h5 class="col-md-1 col-form-label-sm">{{ __('message.price') }}</h5>
                {!! Form::number('price', $topping->price, ['class' => 'form-control col-md-11']) !!}
            </div>
            <div class="form-group row">
                <h5 class="col-md-1 col-form-label-sm">{{ __('message.quantity') }}</h5>
                {!! Form::number('quantity', $topping->quantity, ['class' => 'form-control col-md-11']) !!}
            </div>
            <div class="text-xs-right">
                {!! Form::submit(__('message.update'), ['class' => 'btn btn-info']) !!}
                <a href="{{ route('admin.topping.index') }}" class="btn btn-danger">
                    {{ __('message.cancel') }}
                </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
