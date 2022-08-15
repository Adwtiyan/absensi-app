@extends('layouts.layoutDashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>
  <a href="/add-user" type="button" class="btn btn-outline-primary">Add New User</a>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col">Email</th>
          <th scope="col">Admin</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
          <td><span class="badge rounded-pill text-bg-success">Active</span></td>
          <td>
            <button type="button" class="btn btn-outline-warning">Edit</button>
            <button type="button" class="btn btn-outline-danger">Hapus</button>
          </td>
        </tr>
        <tr>
          <td>1,002</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
          <td><span class="badge rounded-pill text-bg-secondary">Inactive</span></td>
          <td>
            <button type="button" class="btn btn-outline-warning">Edit</button>
            <button type="button" class="btn btn-outline-danger">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>
@endsection
