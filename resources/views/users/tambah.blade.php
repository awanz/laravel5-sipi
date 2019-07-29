@extends('layouts/master')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tambah Data</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/users/tambah_proses" method="post">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="nik">NIK</label>
            <input name="nik" type="number" class="form-control" id="nik" placeholder="NIK" required>
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="paddword" placeholder="Password" required>
            </div>
            
            <div class="form-group">
            <label>User Level</label>
            <select name="userlevel" class="form-control">
                <option value="1">Collection</option>
                <option value="2" selected>Billing</option>
                <option value="3">Sales & Marketing</option>
                <option value="4">Finance</option>
            </select>
            </div>
            <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>

            <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
        </form>
    </div>
</div>
@endsection