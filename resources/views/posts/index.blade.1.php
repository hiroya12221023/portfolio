<!DOCTYPE html>
<html>
<head>
    <title>hello</title>
</head>
<body>
<h1>blade</h1>
<p>{{$msg}}</p>
<form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type ="submit">
</form>
</bpdy>
</html>