@extends('layout.main-layout')

@section('section')
  <ul>
    @foreach ($paganti as $pagante)
      <li>
        {{ $pagante -> name }} {{ $pagante -> lastname }}
      </li>
    @endforeach
  </ul>
@endsection
