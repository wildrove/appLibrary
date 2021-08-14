@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">EDITAR CATEGORIA</h1>
      <form class="contact-form row" action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post" autocomplete="off">

         @csrf
         @method('PUT')
         <!-- Equivalent to... -->
         <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('name') is-invalid @enderror" type="text" name="name" value="{{$category->name}}">
            <label class="label mb-4 pb-md-2" for="name">NOME CATEGORIA</label>
            @error('name')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
         </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4 pb-md-2" for="description">DESCRIÇÃO</label>
            <textarea class="@error('description') is-invalid @enderror input-text js-input pt-md-4 pb-md-2 pl-md-2" name="description">
                {{$category->description}}
            </textarea>
            @error('description')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror   
        </div>

        <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3 " type="text" name="slug" value="{{$category->slug}}">
            <label class="label mb-4 pb-md-2" for="slug">SLUG DA CATEGORIA</label>
         </div>

        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
