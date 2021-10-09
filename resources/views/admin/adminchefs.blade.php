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
        <div class="row">
          <div class="col-md-6">
            <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data" >
              @csrf
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter the title" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
  
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Speciality</label>
      <input type="text" name="speciality" required placeholder="Enter speciality" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
      <label class="exampleInputPassword1" class="form-label">Image</label>
      <input type="file" name="image" required id="exampleCheck1">
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit</button>
  </form>
          </div>


  <div class="col-md-6">
    <table class="table mt-5"  style="color: white">
      <tr>
          <th>Chef</th>
          <th>Speciality</th>
          <th>Image</th>
          <th>Action</th>
    
    </tr>
    
    @foreach ($data as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->speciality}}</td>
      <td><img height="100" width="100" src="/chefimage/{{$item->image}}" alt=""></td>
      <td>
          <a href="{{url('/updatechef',$item->id)}}" class="btn btn-success">Edit</a>
          <a href="{{url('/deletechef',$item->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
     </table>  

  </div>
          
        </div>
    




</div>


    </div>
   @include('admin.adminjs')
  </body>
</html>