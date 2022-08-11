@extends('layouts.layoutDashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <form action="/absenKaryawan" method="POST">
        @csrf

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Absen Karyawan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                            id="floatingInput" placeholder="username" name="username" value="{{ old('username') }}">
                            <label for="floatingInput">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                @enderror
                          </div>
                          <input type="datetime-local" name="waktuAbsen" hidden>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              </form>
            </div>
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Waktu Absen</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
  </main>
@endsection
