<x-master>
    <h1>Search Product</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>QTY</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Action</th>
        </tr>
        @foreach ($result as $item)
            <tr>
               <td>{{$item->id}}</td>
               <td>{{$item->name}}</td>
               <td>{{$item->qty}}</td>
               <td>{{$item->price}}</td>
               <td>{{$item->dis}}</td>
               <td>
                <a href="/updates/{{$item->id}}" class="btn btn-warning">Update</a>
                <button class="btn btn-danger" id="btn_delete" delete-id="{{$item->id}}"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
               </td>
            </tr>
        @endforeach
    </table>
</x-master>