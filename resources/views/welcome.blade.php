 @foreach ($items as $item )
 <div style="align-self: center;">
       <div style="columns: 2; width: fit-content;  ">
             <h4><b>{{ $item['title']   }}</b></h4>

             <p>price:{{$item['price']}}</p>

       </div>

 </div>




 @endforeach