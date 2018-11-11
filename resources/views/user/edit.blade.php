<!doctype html>
<head>
    <meta charset="utf-8">
</head>
<body>
<a href="{!! route('index') !!}" class="links">На главную</a>
<form method="post">
    {!! csrf_field() !!}
    Title: <input type="text" name="title"><br><br>
  Description:  <input type="text" name="description"><br><br>
    <input type="text" name="author" hidden value= {{Auth::user()->email}}>
    <input type="submit" value="done">
</form>
</body>
</html>
