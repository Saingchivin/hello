<x-master>

    @if (Session::has("success"))
        <script>
            Swal.fire({
                title: "The Internet?",
                text: "That thing is still around?",
                icon: "question"
            });
        </script>
        
    @endif
    <h1>Add Product</h1>  
    <div class="col-5 mx-auto bg-primary p-4 forms">
        <form action="/addProductstore" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control my-2" id="">
            {{-- {{$errors->has("name")}} --}}
            @if ($errors->has("name"))
                <p class="text-danger ">Name is required up to 4 letters</p>
                
            @endif
            <label for="">QTY</label>
            <input type="text" name="qty" placeholder="Qty" class="form-control my-2" id="">
            @if ($errors->has("qty"))
            <p class="text-danger ">Qty is required up to 1</p>
            
            @endif
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price" class="form-control my-2" id="">
            @if ($errors->has("price"))
            <p class="text-danger ">Name is required up to 4 letters</p>
            
            @endif
            <label for="">Discount</label>
            <select name="discount" class="form-select my-3" id="">
                <option value="5">0%</option>
                <option value="5">5%</option>
                <option value="10">10%</option>
                <option value="15">15%</option>
            </select>
            @if ($errors->has("discount"))
            <p class="text-danger ">Discount is required up to 4 letters</p>
            
            @endif
            <button class="btn bg-danger">Submit</button>
        </form>
    </div>  
</x-master>