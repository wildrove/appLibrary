@extends('layouts.app')

@section('content')
   <section class="get-in-touch">
      <h1 class="title">EDITAR USUÁRIO</h1>
      <form class="contact-form row" action="{{route('admin.users.update', ['user' => $user->id])}}" method="POST" enctype="multipart/form-data" autocomplete="off">

        @csrf
        @method('PUT')

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2  @error('name') is-invalid @enderror" type="text" name="name" value="{{$user->name}}">
            <label class="label mb-4 pb-md-2" for="name">NOME COMPLETO</label>
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2  @error('user_name') is-invalid @enderror" type="text" name="user_name" value="{{$user->user_name}}">
            <label class="label mb-4 pb-md-2" for="user_name">USUÁRIO</label>
            @error('user_name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2 @error('email') is-invalid @enderror" type="email" name="email" value="{{$user->email}}">
            <label class="label mb-4 pb-md-2" for="email">E-MAIL</label>
            @error('email')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2  @error('cpf') is-invalid @enderror" type="text" name="cpf" value="{{$user->cpf}}">
            <label class="label mb-4 pb-md-2" for="cpf">CPF</label>
            @error('cpf')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6 ">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2  @error('phone_number') is-invalid @enderror" type="text" name="phone_number" value="{{$user->phone_number}}">
            <label class="label mb-4 pb-md-2" for="phone_number">CONTATO</label>
            @error('phone_number')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input pt-md-4 pb-md-2 pl-md-2  @error('password') is-invalid @enderror" type="password" name="password" value="{{$user->password}}">
            <label class="label mb-4 pb-md-2" for="password">SENHA</label>
            @error('password')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>

         <div class="form-field col-lg-6">
            <input class="input-text js-input mt-2 @error('photos.*') is-invalid @enderror" type="file" name="photos[]" multiple value="{{old('photos[]')}}">
            <label class="label mb-4 pb-md-2" for="">Selecionar Imagens</label>
            @error('photos.*')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

         <div class="form-field col-lg-6">
            <label class="label mb-4" for="user_type">TIPO USUÁRIO</label>
            <select name="user_type" class="input-text js-input">
                @if($user->user_type === 'student'){
                    <option value="student" selected="">Estudante</option>
                    <option value="administrator">Admnistrador</option>
                }
                @elseif ($user->user_type != 'student')
                <option value="administrator" selected="">Admnistrador</option>
                <option value="student">Estudante</option>
                @endif
            </select>
          </div>

         <div class="form-field col-lg-6">
            <input class="submit-btn" type="submit" value="Salvar">
         </div>

         <div class="form-field col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#removePhoto">
                Minhas Imagens
            </button>
         </div>
      </form>

      <!-- Modal -->
        <div class="modal fade" id="removePhoto" tabindex="-1" role="dialog" aria-labelledby="removePhotoLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="removePhotoLabel">Excluir Imagens</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('admin.photos.remove')}}" method="post">
                        <div class="modal-body">
                            <div class="row">
                                @foreach($user->photos as $photo)
                                    <div class="col-md-4 mt-2">
                                        <img src="{{asset('storage/users/' . $photo->image)}}" alt="" class="img-fluid img-thumbnail" style="height: 80px; width: 150px">
                                            @csrf
                                        <input class="form-check-input" type="checkbox" name="photoName[]" value="{{$photo->image}}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" type="submit">Excluir</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
      <!-- FIM MODAL -->

   </section>
@endsection

