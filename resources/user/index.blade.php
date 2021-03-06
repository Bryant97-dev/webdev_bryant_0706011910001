
    @extends('layouts.app')
    @section('content')
    
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('addEvent') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">Tambah</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                    <tr>
                    <td><a href="{{ route('event.edit', $event) }}">{{ $event->title }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email}}</td>
                        <td>
                            @foreach ($user-> $events as $event )
                                <li>{{$event -> title}}</li>
                            @endforeach
                        </td>
                        
                        <td>
                            <form action="{{ route('event.delete', $event) }}" method="post">
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

