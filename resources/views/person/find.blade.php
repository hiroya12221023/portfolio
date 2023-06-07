@extends('layouts.helloapp')

@section('title','はーい')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
<form action="/person/find" method="post">
    @csrf
<input type="text" name="input" value="{{$input}}">
<input type="submit" value="find">
</form>
@if (isset($items))
<table>
      <tr><th>data</th></tr>
     @foreach($items as $item)
      <tr> 
      <td>{{$item->getData()}}</td>
      </tr>
    @endforeach
</table>
@endif
@endsection