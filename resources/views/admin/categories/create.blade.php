@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">CRIAR CATEGORIA</h1>
      <form class="contact-form row" action="{{route('admin.categories.store')}}" method="post" autocomplete="off">

         @csrf
         <!-- Equivalent to... -->
         <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
            <label class="label mb-4 pb-md-2" for="name">NOME CATEGORIA</label>
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4 pb-md-2" for="description">DESCRIÇÃO</label>
            <textarea class="input-text js-input @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">

            </textarea>
            @error('description')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2" type="text" name="slug" value="{{old('slug')}}">
            <label class="label mb-4 pb-md-2" for="slug">SLUG DA CATEGORIA</label>

         </div>

        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
