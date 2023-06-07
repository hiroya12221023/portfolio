@extends('layouts.helloapp')

@section('title','は')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
  <table>
      <tr><th>data</th></tr>
     @foreach($items10 as $ite)
  <tr> 
  <td>{{$ite->getData()}}</td>

  
  </tr>
@endforeach
  </table>
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