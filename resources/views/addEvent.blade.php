@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Add Book</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('event.store') }}" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Genre:</label>
                        <input type="text" class="form-control" name="genre">
                    </div>
                    <div class="form-group">
                       
                        <label>Description:</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pages:</label>
                        <input type="text" class="form-control" name="page">
                    </div>
                    <div class="from-group">
                        <label>Email:</label>
                        <select name="created_by" class="custom-select">
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name .'('.$user -> email .')'}}</option>
                        @endforeach
                        </select>
                    </div>    
                    <div class="form-group">
                        <label for="tanggal">Event Date:</label>
                        <input type="date" class="form-control" name="event_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
