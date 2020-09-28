@extends('layout.main-layout')

@section('section')
  <ul>
    @foreach ($paganti as $pagante)
      <li>
        <span>
          {{ $pagante -> name }} {{ $pagante -> lastname }}
        </span>
        <a class="delete" href="{{ route('paganti.destroy', $pagante -> id) }}"> DELETE </a>
        <a class="edit" href="#"> EDIT </a>
      </li>
    @endforeach
  </ul>
@endsection
