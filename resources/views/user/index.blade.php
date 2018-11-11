<!doctype html>
<head>
    <meta charset="utf-8">
</head>
<body>
<a href="{!! route('edit') !!}" class="links">добавить объявление</a>
@foreach($Lists as $List)
   <h2> {{$List->title}}</h2>
   <hr>
   <h2>  {{$List->description}}</h2>
   <hr>
   <h2>  {{$List->author}}</h2>
   <hr>
   <h2>  {{$List->created_at}}</h2>
   @if ( Auth::user()->email == $List->author)
       <form method="post">
           {!! csrf_field() !!}
           <input hidden name="id" type="text" value={{$List->id}}>
           <input type="submit" value="удалить">
       </form>
   @endif
   <hr>
    @endforeach
<div class="page-link"> {{ $Lists->links() }}</div>
</body>
</html>
