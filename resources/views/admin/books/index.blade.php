@extends('layouts.app')

@section('content')
<div class="limiter" style="background: #fff !important">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <a href="{{route('admin.books.create')}}" class="btn mb-3 btn-create">Novo Livro</a>
                <table class="text-center" data-vertable="ver1">
                    <thead>
                        <tr class=" row100 head">
                            <th class="column100 column1" data-column="column1">ID</th>
                            <th class="column100 column2" data-column="column2">NOME</th>
                            <th class="column100 column3" data-column="column3">EDITORA</th>
                            <th class="column100 column4" data-column="column4">AUTOR</th>
                            <th class="column100 column5" data-column="column5">ANO</th>
                            <th class="column100 column6" data-column="column6">STATUS</th>
                            <th class="column100 column7" data-column="column8">EDITAR</th>
                            <th class="column100 column8" data-column="column9">REMOVER</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="row100">
                                <td class="column100 column1" data-column="column1">{{$book->id}}</td>
                                <td class="column100 column2" data-column="column2">{{$book->name}}</td>
                                <td class="column100 column3" data-column="column3">{{$book->publisher}}</td>
                                <td class="column100 column4" data-column="column4">{{$book->author}}</td>
                                <td class="column100 column5" data-column="column5">{{$book->year}}</td>
                                <td class="column100 column6" data-column="column6">
                                    @if($book->status == 'avaliable')
                                       <span class="text-success">
                                            {{'Disponível'}}
                                       </span>
                                    @else 
                                       <span class="text-danger">
                                            {{'Alugado'}}
                                       </span>
                                    @endif
                                </td>
                                <td class=" td-a-action">
                                    <a href="{{route('admin.books.edit', ['book' => $book->id])}}" class="btn btn-warning btn-sm">EDITAR</a>
                                </td>
                                <td class="td-a-action">
                                    <form class="" action="{{route('admin.books.destroy', ['book' => $book->id])}}" method="post">
                                        
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
                    {{$books->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



