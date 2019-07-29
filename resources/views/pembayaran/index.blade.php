@extends('layouts/master')

@section('content')
<div class="box">
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No Invoice</th>
        <th>Jumlah Pembayaran</th>
        <th>Tanggal Pembayaran</th>
        <th>Opsi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($pembayaran as $p)
      <tr>
        <td>1</td>
        <td>{{ $p->jumlah_pembayaran }}</td>
        <td>{{ $p->tgl_pembayaran }}</td>
        <td>
          <a href="/pembayaran/edit/{{ $p->pembayaran_id }}">Edit</a>
          - 
          <a href="/pembayaran/hapus/{{ $p->pembayaran_id }}">Hapus</a>
        </td>
      </tr>
      @endforeach
      </tbody>
      <tfoot>
      <tr>
        <th>No Invoice</th>
        <th>Jumlah Pembayaran</th>
        <th>Tanggal Pembayaran</th>
        <th>Opsi</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection