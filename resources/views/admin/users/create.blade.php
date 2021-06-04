<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<!------ Include the above in your HEAD tag ---------->

<section class="get-in-touch">
   <h1 class="title">CRIAR USUÁRIO</h1>
   <form class="contact-form row" action="/admin/users/store" method="POST" autocomplete="off">
       
    @csrf

    <!-- Equivalent to... -->
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->

      <div class="form-field col-lg-6">
         <input class="input-text js-input p-3" type="text" name="name" required>
         <label class="label pb-3" for="name">NOME COMPLETO</label>
      </div>
      <div class="form-field col-lg-6">
        <input class="input-text js-input p-3" type="text" name="user_name" maxlength="20" minlength="8" required>
        <label class="label pb-3" for="user_name">USUÁRIO</label>
     </div>
      <div class="form-field col-lg-6 ">
         <input class="input-text js-input p-3" type="email" name="email" required>
         <label class="label pb-3" for="email">E-MAIL</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input class="input-text js-input p-3" type="text" name="cpf" maxlength="11" required>
         <label class="label pb-3" for="cpf">CPF</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input class="input-text js-input p-3" type="text" name="phone_number" required>
         <label class="label pb-3" for="phone_number">CONTATO</label>
      </div>
      <div class="form-field col-lg-6">
        <input class="input-text js-input" type="password" name="password" maxlength="8" minlength="4" required>
        <label class="label pb-3" for="password">SENHA</label>
     </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Salvar">
      </div>
   </form>
</section>
