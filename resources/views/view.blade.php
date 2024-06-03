<x-master>
    @if (Session::has("updateSuccess"))
    <script>
        Swal.fire({
            title: "Success",
            text: "Update Success",
            icon: "success"
        });
    </script>
    
@endif
@if (Session::has("deleteSuccess"))
<script>
    Swal.fire({
        title: "Success",
        text: "Delete Success",
        icon: "success"
    });
</script>

@endif
    <h1>View Product</h1>
    {{-- {{$products}} --}}
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>QTY</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $item)
            <tr>
               <td>{{$item->id}}</td>
               <td>{{$item->name}}</td>
               <td>{{$item->qty}}</td>
               <td>{{$item->price}}</td>
               <td>{{$item->dis}}</td>
               <td>
                <a href="/updates/{{$item->id}}" class="btn btn-warning">Update</a>
                <button class="btn btn-danger" id="btn_delete" delete_id="{{$item->id}}"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
               </td>
            </tr>
        @endforeach
    </table>
    <!-- Button trigger modal -->
 
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/deleteProduct" method="POST">
                    @csrf
                    <input type="text" name="remove_id" id="txt_id">
                    <div class="modal-footer">
                        <button   class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button  class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
            
        </div>
        </div>
  </div>
</x-master>