@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">CRIAR USUÁRIO</h1>
      <form class="contact-form row" action="{{route('admin.users.store')}}" method="post" enctype="multipart/form-data">

         @csrf
         <!-- Equivalent to... -->
         <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
            <label class="label mb-4 pb-md-2" for="name">NOME COMPLETO</label>
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('user_name') is-invalid @enderror" type="text" name="user_name" value="{{old('user_name')}}">
            <label class="label mb-4 pb-md-2" for="user_name">USUÁRIO</label>
            @error('user_name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}">
            <label class="label mb-4 pb-md-2" for="email">E-MAIL</label>
            @error('email')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('cpf') is-invalid @enderror" type="text" name="cpf" value="{{old('cpf')}}">
            <label class="label mb-4 pb-md-2" for="cpf">CPF</label>
            @error('cpf')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('phone_number') is-invalid @enderror" type="text" name="phone_number" value="{{old('phone_number')}}">
            <label class="label mb-4 pb-md-2" for="phone_number">CONTATO</label>
            @error('phone_number')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('password') is-invalid @enderror" type="password" name="password">
            <label class="label mb-4 pb-md-2" for="password">SENHA</label>
            @error('password')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-field col-lg-6">
           <label class="label mb-4" for="user_type">TIPO USUÁRIO</label>
           <select name="user_type" class="input-text js-input">
               <option value="student" selected="">Estudante</option>
               <option value="administrator">Admnistrador</option>
           </select>
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input mt-2" type="file" name="photos[]" multiple>
            <label class="label mb-4 pb-md-2" for="password">Selecionar Imagens</label>
        </div>

         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
