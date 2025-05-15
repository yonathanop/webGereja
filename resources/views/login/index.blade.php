@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
   <div class="col-md-4">
      <main class="form-signin w-100 m-auto">
         <form> 
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
               <div class="form-floating"> <input type="email" class="form-control" id="floatingInput"
                    placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
               <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword"
                    placeholder="Password"> <label for="floatingPassword">Password</label> </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
         </form>
         <small class="d-block mt-3 text-center">Tidak Bisa Login? <a href="/register">Daftar disini</a></small>
      </main>
   </div>
</div>
 
@endsection
