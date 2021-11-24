@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('message'))
                <div class="alert {{ session()->get('type') }}">
                        {{ session()->get('message') }}
                </div>
            @endif
                        <div class="card">
                <div class="card-header">{{ __('Todos Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Creater</th>
                        <th>Actions saya</th>
                        </thead>
                       
                        <tbody>
                           
                            </tbody>

                            @foreach ($todos as $todo)
                                <tr>
                                    <td>{{ $todo->id}}</td>
                                    <td>{{ $todo ->title}}</td>
                                    <td>{{ $todo->description}}</td>
                                    <td>{{ $todo->created_at->diffForHumans()}}</td>
                                    <td>{{ $todo->user->name}}</td>
                                    <td>
                                    <a class="btn btn-primary" href="/todos/{{ $todo->id}}">Show</a>
                                    <a class="btn btn-success" href="/todos/{{ $todo->id}}/edit">edit</a>
                                    <a onclick="return confirm('Are you  sure')" class="btn btn-danger" href="/todos/{{ $todo->id}}/delete">delete</a>
                                    </td>
                                 </tr>
                             @endforeach

                    </table>

                    {{ $todos->links() }}

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
