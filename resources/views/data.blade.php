<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
<table style="margin-left: 50%; margin-right: 50%; width: max-content;"> 
      <tr>
            <th  >id</th>
            <th>name</th>
            <th>password</th> 
      </tr>
      @foreach ($items as $item )
      <tr>
            <td>{{$item['id'] }}</td>
            <td>{{$item['name'] }}</td>
            <td>{{$item['password'] }}</td>
      </tr>
      
            
      @endforeach
</table>
<center><a href="/"> Back</a></center>


   
</body>
</html>