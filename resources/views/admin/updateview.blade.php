<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')


        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number" name="price" required value="{{$data->price}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea type="text" required  name="description" value={{$data->description}} class="form-control w-100 h-100" id="exampleInputPassword1"></textarea>
  </div>
  <div class="mb-3 ">
    <label class="exampleInputPassword1" class="form-label">Old Image</label>
    <img src="/foodimage/{{$data->image}}" alt="" width="200px" height="200px">
  </div>
  <div class="mb-3 ">
    <label class="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" name="image" required id="exampleCheck1">
  </div>

  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>

    </div>
   @include('admin.adminjs')
  </body>
</html>