@extends('layouts.main-layout')
@section('content')

  <form
    action="{{ route('cats.update', $cat -> id) }}"
    method="post"
    accept-charset="UTF-8"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label for="name">NAME</label><br>
    <input type="text" name="name" value="{{ $cat -> name }}"><br><br>
    <label for="race">RACE</label><br>
    <input type="text" name="race" value="{{ $cat -> race }}"><br><br>
    <label for="birthDay">BIRTHDAY</label><br>
    <input type="text" name="birthDay" value="{{ $cat -> birthDay }}"><br><br>
    <label for="genere">GENERE</label><br>
    <input type="text" name="genere" value="{{ $cat -> genere }}"><br><br>
    <input type="file" name="imgPath" value="" accept="image/*"><br><br>

    <input type="submit" name="submit" value="UPDATE">

  </form>

@endsection
