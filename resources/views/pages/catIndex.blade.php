@extends('layouts.main-layout')
@section('content')

  <div class="box-cont">
    @foreach ($cats as $cat)
      <div class="box">
        <p>NAME<br>
          <a href="{{ route('cats.show', $cat -> id) }}">
            {{ $cat -> name }}
          </a>
        </p>
        <p>RACE<br>{{ $cat -> race }}</p>
        <p>BIRTHDAY<br>{{ $cat -> birthDay }}</p>
        <p>GENERE<br>{{ $cat -> genere }}</p>
        @if ($cat -> imgPath)
          <img src="/img/{{ $cat -> imgPath }}" alt="NO IMAGE">
        @endif

        @guest
        @else
          <p><a href="{{ route('cats.edit', $cat -> id) }}">EDIT</a></p>
        @endguest
      </div>
    @endforeach
  </div>

@endsection
