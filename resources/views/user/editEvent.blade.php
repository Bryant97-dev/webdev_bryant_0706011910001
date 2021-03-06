@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Creator</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('user.update', $user) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        <label>email:</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
