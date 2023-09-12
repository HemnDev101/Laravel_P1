
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
 </head>
<body>
      @foreach ($items as $item)
<div   style="max-width: 18rem;">
  <div  >{{ $item->name}}</div>
  <div  >
   <a href="/seller/{{ $item['id'] }}"> Go</a>
   </div>
</div>
@endforeach
</body>
</html>

 