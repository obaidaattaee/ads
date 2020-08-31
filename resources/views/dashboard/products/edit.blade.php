@extends("dashboard.layouts.app")

@section("title","Create New Product")


@section("content")

    <div class="portlet light ">
        <div class="portlet-body form">
            <form method="" enctype="multipart/form-data" action="{{ route('products.update ',$product->id) }}"
                  role="form">
                @csrf
                @method("PATCH")
                @csrf
                <div class="form-body">
                    <div class="form-group has-success"><label for="form_control_1">Title</label>
                        <input type="text" class="form-control" id="form_control_1" name="title"
                               value="{{old('title')??$product->title}}" placeholder="Enter your Title">

                    </div>
                </div>
                <div class="form-group has-success">
                    <label for="form_control_1">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="0">Select Category</option>
                        @foreach($categories as $category)
                            <option
                                {{old('category_id')== $category->id?"selected":""}} value='{{$category->id}}'>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group row">
                    <div class='col-sm-6'>
                        <label for="imageFile">Image</label>
                        <div class="custom-file">
                            <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label for="price">new price</label>
                    <input   type="number" class="form-control" value="{{old('price')??$product->price}}" id="price" name="price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control"  id="description" value="{{old('description')??$product->description}}" name="description" >{{old('description')??$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  id="address" value="{{old('address')??$product->address}}" name="address" >
                </div>
                <div class="form-check">
                    <input type="checkbox" name='published' value="{{old('published')?? ""}}" class="form-check-input" id="published" {{old('published')? "checked" : $product->publised ? "checked":""}}>
                    <label class="form-check-label" for='active'>published</label>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class='btn btn-default' href='{{ route("products.index") }}'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
