@extends('base')

@section('content')
0
<section class="vh-100 bg-image"
style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

            <form action="{{url('/login')}}" method="POST">
                @csrf

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="form3Example3cg">votre email</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="form3Example4cg">Password</label>
              </div>


              <div class="d-flex justify-content-center">
                <button  type="submit" data-mdb-button-init
                  data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Se connecter</button>
              </div>

              <p class="text-center text-muted mt-5 mb-0">Pas encore de compte ? <a href="{{route('register')}}"
                  class="fw-bold text-body"><u>Créer un compte</u></a></p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
