<form action="{{ action('App\Http\Controllers\QuestionController@store') }}" method="post">
  @csrf
  <input type="text" name="question">
  <button type="submit">Save</button>
</form>