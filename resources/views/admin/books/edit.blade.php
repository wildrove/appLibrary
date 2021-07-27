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
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('name') is-invalid @enderror" type="text" name="name" value="{{$book->name}}">
            <label class="label mb-4 pb-md-2" for="name">NOME LIVRO</label>
            @error('name')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('publisher') is-invalid @enderror" type="text" name="publisher" value="{{$book->publisher}}">
            <label class="label mb-4 pb-md-2" for="publisher">EDITORA</label>
            @error('publisher')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('author') is-invalid @enderror" type="text" name="author" value="{{$book->author}}">
            <label class="label mb-4 pb-md-2" for="author">AUTOR</label>
            @error('author')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('year') is-invalid @enderror" type="number" name="year" value="{{$book->year}}">
            <label class="label mb-4 pb-md-2" for="year">ANO</label>
            @error('year')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
         </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4 pb-md-2" for="user_type">STATUS</label>
            <select name="status" class="input-text js-input">
                <option value="avaliable" selected="">Disponível</option>
                <option value="unavaliable">Alugado</option>
            </select>
          </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4 pb-md-2" for="description">DESCRIÇÃO</label>
            <textarea class="@error('description') is-invalid @enderror input-text js-input pt-md-4 pb-md-2 pl-md-2" name="description">
                {{$book->description}}
            </textarea>
            @error('description')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
        </div>

        <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3 @error('name') is-invalid @enderror" type="text" name="slug" value="{{$book->slug}}">
            <label class="label mb-4 pb-md-2" for="slug">SLUG DO LIVRO</label>
         </div>

        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
