<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')

        <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Speciality</label>
    <input type="text" name="speciality" required value="{{$data->speciality}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 ">
    <label class="exampleInputPassword1" class="form-label">Old Image</label>
    <img src="/chefimage/{{$data->image}}" alt="image" width="100" height="100">
  </div>
  <div class="mb-3 ">
    <label class="exampleInputPassword1" class="form-label">New Image</label>
    <input type="file" name="image" required id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary w-100">Update Chef</button>
</form>
    </div>
   @include('admin.adminjs')
  </body>
</html>