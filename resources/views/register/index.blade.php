@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
   <div class="col-lg-5">
      <main class="form-registration w-100 m-auto">
         <form action="/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Daftar</h1>
                <div class="form-floating"> <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                    placeholder="Name" required value="{{ old('name') }}"> <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating"> <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"
                    placeholder="Username" required value="{{ old('username') }}"> <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating"> <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" required value="{{ old('email') }}"> <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating"> <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                    placeholder="Password" required> <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Daftar</button>
         </form>
         <small class="d-block mt-3 text-center">Sudah Terdaftar? <a href="/login">Login disini</a></small>
      </main>
   </div>
</div>
 
@endsection
