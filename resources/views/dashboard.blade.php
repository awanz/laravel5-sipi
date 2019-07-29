@extends('layouts/master')

@section('content')
  @if(\Session::has('loginsukses'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p><i class="icon fa fa-check"></i> Login Berhasil!</p>
  </div>
  @endif
  Dashboard
@endsection