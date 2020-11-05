
    @extends('layouts.app')
    @section('content')
    
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Creator Data</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">Add</a>
            </div>
        </div>
        @if ($errors->count() > 0)
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Books</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('user.edit', $user) }}">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user-> events as $event)
                                <li>{{ $event -> title }}</li>
                            @endforeach
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $user) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>    
                       
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

