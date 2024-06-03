<x-master>

    <h1>Add Product</h1>  
    <div class="col-5 mx-auto bg-primary p-4 forms">
        <form action="/updateProuct/{{$product->id}}" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" value="{{$product->name}}" placeholder="Name" class="form-control my-2" id="">
            {{-- {{$errors->has("name")}} --}}
            @if ($errors->has("name"))
                <p class="text-danger ">Name is required up to 4 letters</p>
                
            @endif
            <label for="">QTY</label>
            <input type="text" name="qty" value="{{$product->qty}}" placeholder="Qty" class="form-control my-2" id="">
            @if ($errors->has("qty"))
            <p class="text-danger ">Qty is required up to 1</p>
            
            @endif
            <label for="">Price</label>
            <input type="text" name="price" value="{{$product->price}}" placeholder="Price" class="form-control my-2" id="">
            @if ($errors->has("price"))
            <p class="text-danger ">Name is required up to 4 letters</p>
            
            @endif
            <label for="">Discount</label>
            <select name="discount" selected class="form-select my-3" id="">
                <option value="0" @if ($product->dis==0) selected @endif>0%</option>
                <option value="5" @if ($product->dis==5) selected @endif>5%</option>
                <option value="10" @if ($product->dis==10) selected @endif>10%</option>
                <option value="15" @if ($product->dis==15) selected @endif>15%</option>
            </select>
            @if ($errors->has("discount"))
            <p class="text-danger ">Discount is required up to 4 letters</p>
            
            @endif
            <button class="btn bg-danger">Submit</button>
        </form>
    </div>  
</x-master>