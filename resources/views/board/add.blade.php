@extends('layouts.helloapp')

@section('title','lo')

@section('menubar')
   @parent
@endsection

@section('content')
<form action="/board" method="post">
  <table>
      @csrf
      <tr><th>person id:</th><td><input type="number" name="person_id"></td></tr>
      <tr><th>title:</th><td><input type="text" name="title"></td></tr>
    <tr><th>message:</th><td><input type="text" name="message"></td></tr>
     <tr><th>title:</th><td><input type="submit" name="send"></td></tr>
  </table>
  </form>
@endsection

{{-- @component('components.message')
      @slot('msg_title')
      CAUTION1!
      @endslot
      
      @slot('msg_content')
      これはメッセージ
      @endslot
@endcomponent --}}

@section('foooter')
copyright 2020 tuyano.
@endsection