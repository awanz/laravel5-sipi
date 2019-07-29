@extends('layouts/master')

@section('content')
<div class="box">
  <!-- /.box-header -->
  
  <div class="box-body">
  	<br>
	<center>
  		<a href="/laporan/export" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
	</center>
	<br>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
	  	<th>Laporan ID</th>
		<th>Nama Laporan</th>
      </tr>
      </thead>
      <tbody>
      @foreach($laporan as $l)
      <tr>
		<td>{{$l->laporan_id}}</td>
		<td>{{$l->nama_laporan}}</td>
      </tr>
      @endforeach
      </tbody>
      <tfoot>
      <tr>
	  <th>Laporan ID</th>
		<th>Nama Laporan</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection