@extends('layout.main-layout')

@section('section')
<h1>
  PAGANTI EDIT
</h1>

<form action="{{ route('paganti.update', $pagante -> id) }}" method="post">

  @csrf
  @method('POST')

  <div class="form-group">
    <label for="name"> NAME </label><br>
    <input type="text" name="name" value="{{ $pagante -> name }}">
  </div>
  <div class="form-group">
    <label for="lastname"> LASTNAME </label><br>
    <input type="text" name="lastname" value="{{ $pagante -> lastname }}">
  </div>
  <div class="form-group">
    <label for="address"> ADDRESS </label><br>
    <input type="text" name="address" value="{{ $pagante -> address }}">
  </div>
  <br>
  <button type="submit"> UPDATE </button>
</form>
@endsection
