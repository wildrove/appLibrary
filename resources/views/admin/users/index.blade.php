@extends('layouts.app')

@section('content')
<div class="limiter" style="background: #fff !important">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <a href="{{route('admin.users.create')}}" class="btn mb-3 btn-create">Novo Usuário</a>
                <table class="text-center" data-vertable="ver1">
                    <thead>
                        <tr class=" row100 head">
                            <th class="column100 column1" data-column="column1">ID</th>
                            <th class="column100 column2" data-column="column2">NOME</th>
                            <th class="column100 column3" data-column="column3">USUÁRIO</th>
                            <th class="column100 column4" data-column="column4">CPF</th>
                            <th class="column100 column5" data-column="column5">TELEFONE</th>
                            <th class="column100 column6" data-column="column6">EMAIL</th>
                            <th class="column100 column4" data-column="column7">TIPO</th>
                            <th class="column100 column7" data-column="column8">EDITAR</th>
                            <th class="column100 column8" data-column="column9">REMOVER</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">{{$user->id}}</td>
                                <td class="column100 column2" data-column="column2">{{$user->name}}</td>
                                <td class="column100 column3" data-column="column3">{{$user->user_name}}</td>
                                <td class="column100 column4" data-column="column4">{{$user->cpf}}</td>
                                <td class="column100 column5" data-column="column5">{{$user->phone_number}}</td>
                                <td class="column100 column6" data-column="column6">{{$user->email}}</td>
                                <td class="column100 column7" data-column="column7">
                                    @if($user->user_type == 'administrator')
                                        {{'admin'}}
                                    @else
                                        {{'estudante'}}
                                    @endif
                                </td>
                                <td class=" td-a-action">
                                    <a href="{{route('admin.users.edit', ['user' => $user->id])}}" class="btn btn-warning btn-sm">EDITAR</a>
                                </td>
                                <td class="td-a-action">
                                    <form class="" action="{{route('admin.users.destroy', ['user' => $user->id])}}" method="post">
                                        
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ">REMOVER</a>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



