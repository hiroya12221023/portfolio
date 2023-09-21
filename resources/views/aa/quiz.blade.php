<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h1>Quiz</h1>
    <h2>Question</h2>
   <p>{{ $question_key }}</p>

    <form method="POST" action="quizanswer">
        @csrf
        <input type="hidden" name="question_id" value="{{ $question->id }}">

        <h3>Options:</h3>
        @foreach ($question->answers as $answer)
            <label>
                <input type="radio" name="answer_id" value="{{ $answer->id }}" required>
                {{ $answer->answer }}
            </label><br>
        @endforeach

        <button type="submit">Next Question</button>
    </form>
</body>
</html>