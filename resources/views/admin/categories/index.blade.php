@extends('layouts.app')

@section('content')
<div class="limiter" style="background: #fff !important">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <a href="{{route('admin.categories.create')}}" class="btn mb-3 btn-create">Nova Categoria</a>
                <table class="text-center" data-vertable="ver1">
                    <thead>
                        <tr class=" row100 head">
                            <th class="column100 column1" data-column="column1">ID</th>
                            <th class="column100 column2" data-column="column2">NOME</th>
                            <th class="column100 column7" data-column="column8">EDITAR</th>
                            <th class="column100 column8" data-column="column9">REMOVER</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">{{$category->id}}</td>
                                <td class="column100 column2" data-column="column2">{{$category->name}}</td>
                                <td class=" td-a-action">
                                    <a href="{{route('admin.categories.edit', ['category' => $category->id])}}" class="btn btn-warning btn-sm">EDITAR</a>
                                </td>
                                <td class="td-a-action">
                                    <form class="" action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="post">
                                        
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
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



