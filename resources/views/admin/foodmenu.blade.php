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
            <div class="col-md-5">
                <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
          <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter the title" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>
        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" name="price" required placeholder="Enter price" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 ">
            <label class="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="image" required id="exampleCheck1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea type="text" required  name="description" placeholder="Enter Comments" class="form-control w-100 h-100" id="exampleInputPassword1"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
            </div>
            <div class="col-md-7">

                <table class="table mt-5"  style="color: white">
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>


                 </tr>
                 @foreach ($data as $item)
                 <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->price}}</td>
                    <td><img src="/foodimage/{{$item->image}}" alt=""></td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{url('/updateview',$item->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/deletemenu',$item->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                
                 @endforeach
                 
                   </table>  
            </div>
        </div>
      






    </div>
   @include('admin.adminjs')
  </body>
</html>