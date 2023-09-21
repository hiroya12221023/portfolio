<!DOCTYPE html>
<html>
<head>
    <title>クイズ</title>
</head>
<body>
    <h1>{{ $question->question }}</h1>

    <form method="POST" action="/answer">
        @csrf
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <button type="submit" name="answer" value="月曜日">月曜日</button>
        <button type="submit" name="answer" value="火曜日">火曜日</button>
        <button type="submit" name="answer" value="水曜日">水曜日</button>
        <button type="submit" name="answer" value="木曜日">木曜日</button>
         <button type="submit" name="answer" value="木曜日">木曜日</button>     
    </form>
</body>
</html>