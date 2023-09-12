<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      
<table style=" ">
    @foreach ($names as  $name)
          {{ $name-> name}}
    @endforeach

      <tr  >
            <th  >
                  title
            </th>
            <th>
                  price
            </th>
            
      </tr>       

      @foreach ($items as  $item)
      <tr >
            <td>
            {{$item->title}}
            </td>
            <td>
            {{$item->price}}
            </td>
            <td>
 
 <!-- //danany image dway mandwbwneky zor  -->
                      <img src= {{  URL::to('/assets/img/'. $item->image . '.jpg')  }}  style="width:200px">

            </td>
      </tr>
      @endforeach

</table>
     
</body>
</html>