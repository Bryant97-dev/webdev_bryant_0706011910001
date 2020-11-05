@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4 mb-4">
                        <a href="{{ route('event.index') }}" class="btn btn-primary btn-block" role="button"
                        aria-pressed="true">Enter Database</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
