@extends('layouts.master')

@section('title')
<title>Aw</title>
@endsection

@push('scripts')
</script>
<script src="{{asset('/template/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
$(function () {
    $("#example1").DataTable();
});
</script>
@endpush

@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css"/>
@endpush

@section('content')
<table id="example1" class="table">
    <thead>
        <th>no</th>
        <th>nama</th>
        <th>aksi</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Nama</td>
            <td>Nama</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Nama</td>
            <td>Nama</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Nama</td>
            <td>Nama</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Nama</td>
            <td>Nama</td>
        </tr>
    </tbody>
</table>
@endsection

