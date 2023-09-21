<form action="{{ route('question2.answer') }}" method="post">
  @csrf
  <input type="hidden" name="question_id" value="{{ $question->id }}">
  <button type="submit" name="answer" value="1">1</button>
  <button type="submit" name="answer" value="2">2</button>
  <button type="submit" name="answer" value="3">3</button>
  <button type="submit" name="answer" value="4">4</button>
</form>