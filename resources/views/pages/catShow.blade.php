@extends('layouts.main-layout')
@section('content')

  <div class="box-cont">
      <div class="box">
        <h1>SHELTER</h1>
        <h2>{{ $cat -> shelter -> name }}</h2>
        <p>{{ $cat -> shelter -> street }}</p>
        <p>{{ $cat -> shelter -> capacity }}</p>
      </div>
    </div>
  <div class="box-cont">
    <div class="box">
      <h1>CAT</h1>
      <p>NAME<br>{{ $cat -> name }}</p>
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
  </div>
  <div class="box-cont">
    @foreach ($cat -> vaccinations as $vaccination)
      <div class="box">
        <h2>VACCINATION</h2>
        <p>{{ $vaccination -> name }}</p>
        <p>{{ $vaccination -> price }}$</p>
      </div>
    @endforeach
  </div>

@endsection
