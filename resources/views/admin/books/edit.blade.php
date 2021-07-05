@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">EDITAR LIVRO</h1>
      <form class="contact-form row" action="{{route('admin.books.update', ['book' => $book->id])}}" method="post" autocomplete="off">

         @csrf
         @method('PUT')
         <!-- Equivalent to... -->
         <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

         <div class="form-field col-lg-6">
            <input class="input-text js-input p-3" type="text" name="name" value="{{$book->name}}" maxlength="30" required>
            <label class="label mb-4" for="name">NOME LIVRO</label>
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input p-3" type="text" name="publisher" value="{{$book->publisher}}" maxlength="30"  required>
            <label class="label mb-4" for="publisher">EDITORA</label>
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3" type="text" name="author" value="{{$book->author}}" maxlength="30" required>
            <label class="label mb-4" for="author">AUTOR</label>
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3" type="number" name="year" value="{{$book->year}}" maxlength="4" required>
            <label class="label mb-4" for="year">ANO</label>
         </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4" for="user_type">STATUS</label>
            <select name="status" class="input-text js-input">
                <option value="avaliable" selected="">Disponível</option>
                <option value="unavaliable">Alugado</option>
            </select>
          </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4" for="description">DESCRIÇÃO</label>
            <textarea class="input-text js-input" name="description">
                {{$book->description}}
            </textarea>
        </div>

        <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3" type="text" name="slug" value="{{$book->slug}}" required>
            <label class="label mb-4" for="slug">SLUG DO LIVRO</label>
         </div>

        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
