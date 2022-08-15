@extends('layouts.layoutDashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
      <form action="/add-user" method="POST">
        @csrf
          <div class="form-floating mb-3 w-50">
              <input type="text" name="name" class="form-control @error('name') is-invalid
              @enderror" id="name" placeholder="name">
              <label for="name">Nama</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="form-floating mb-3 w-50">
              <input type="email" name="email" class="form-control @error('email') is-invalid
              @enderror " id="email" placeholder="name@example.com">
              <label for="email">Email</label>
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          </div>
          <div class="form-floating mb-3 w-50">
            <input type="text" name="username" class="form-control @error('username') is-invalid
            @enderror " id="username" placeholder="username">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
            </div>
        <div class="form-floating mb-3 w-50">
            <input type="text" name="noHp" class="form-control @error('noHp') is-invalid
            @enderror" id="noHp" placeholder="noHp">
            <label for="noHp">No Hp</label>
            @error('noHp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
          <div class="form-floating mb-3 w-50">
              <input type="password" name="password" class="form-control @error('password') is-invalid
              @enderror " id="password" placeholder="Password">
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          </div>
          <button type="submit" class="btn btn-outline-success">Submit</button>
      </form>
</main>
@endsection
