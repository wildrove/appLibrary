@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">CRIAR USUÁRIO</h1>
      <form class="contact-form row" action="/admin/users/store" method="POST" autocomplete="off">

      @csrf

      <!-- Equivalent to... -->
      <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

         <div class="form-field col-lg-6">
            <input class="input-text js-input p-3" type="text" name="name" required>
            <label class="label mb-4" for="name">NOME COMPLETO</label>
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input p-3" type="text" name="user_name" maxlength="10" minlength="4" required>
            <label class="label mb-4" for="user_name">USUÁRIO</label>
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3" type="email" name="email" required>
            <label class="label mb-4" for="email">E-MAIL</label>
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3" type="text" name="cpf" maxlength="11" required>
            <label class="label mb-4" for="cpf">CPF</label>
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input p-3" type="text" name="phone_number" required>
            <label class="label mb-4" for="phone_number">CONTATO</label>
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input" type="password" name="password" maxlength="8" minlength="4" required>
            <label class="label mb-4" for="password">SENHA</label>
        </div>

        <div class="form-field col-lg-6">
           <label class="label mb-4" for="user_type">TIPO USUÁRIO</label>
           <select name="user_type" class="input-text js-input">
               <option value="student" selected="">Estudante</option>
               <option value="administrator">Admnistrador</option>
           </select>
         </div>

         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>
      </form>
   </section>
@endsection
