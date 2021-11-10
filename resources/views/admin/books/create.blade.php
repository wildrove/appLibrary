@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">CRIAR LIVRO</h1>
      <form class="contact-form row" action="{{route('admin.books.store')}}" method="post" enctype="multipart/form-data">

         @csrf
         <!-- Equivalent to... -->
         <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('name') is-invalid @enderror" type="text" name="name">
            <label class="label mb-4 pb-md-2" for="name">NOME LIVRO</label>
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('publisher') is-invalid @enderror" type="text" name="publisher">
            <label class="label mb-4 pb-md-2" for="publisher">EDITORA</label>
            @error('publisher')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('publisher') is-invalid @enderror" type="text" name="author">
            <label class="label mb-4 pb-md-2" for="author">AUTOR</label>
            @error('author')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('publisher') is-invalid @enderror" type="number" name="year">
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
            <textarea class="input-text js-input @error('publisher') is-invalid @enderror" name="description">

            </textarea>
            @error('description')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

     

         <div class="form-field col-lg-6">
            <label class="label mb-4 pb-md-2" for="category">CATEGORIA</label>
            <select name="category[]" class="input-text js-input" multiple>
               @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
               @endforeach
            </select>
         </div>
         
        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
