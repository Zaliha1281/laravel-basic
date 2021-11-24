@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>ID</th>
                        <th>Nama</th>

                        <th>Created</th>
                        <th>Actions saya</th>
                        </thead>
                       
                        <tbody>
                           
                            </tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id}}</td>
                                    <td>{{ $user->name}}</td>
                                  
                                    <td>{{ $user->created_at->diffForHumans()}}</td>
                                    <td>
                                    <a class="btn btn-primary" href="/users/{{ $user->id}}">Show</a>
                                    <a class="btn btn-success" href="/users/{{ $user->id}}/edit">edit</a>
                                    <a onclick="return confirm('Are you sure')" class="btn btn-danger" href="/todos/{{ $user->id}}/delete">delete</a>
                                    </td>
                                 </tr>
                             @endforeach
                    </table>

                    {{ $users->links() }}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
