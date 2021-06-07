@extends('layouts.app')

@section('content')
    <div>
        <h1>USUÁRIOS</h1>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>USUARIO</th>
                <th>CPF</th>
                <th>EMAIL</th>
                <th>TELEFONE</th>
            </tr>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->cpf}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
@endsection



