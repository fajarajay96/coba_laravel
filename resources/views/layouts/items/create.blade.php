@extends('layouts.master')

@section('content')
    <h1>INI HALAMAN CREATE</h1>
@endsection

@push('scripts')
<script>
    var wrapper = document.getElementsByClassName("wrapper");
    var items = ["ini", "contoh"];

    console.log("ini item coy: ", items);
  </script>
@endpush