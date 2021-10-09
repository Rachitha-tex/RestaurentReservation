<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
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
    <div>
        <table class="table mt-5"  style="color: white">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

            @if ($user->usertype=='0'){
                <td><a href="{{url('/delete',$user->id)}}" class="btn btn-danger">Delete</a></td>
            }@else
        {
            <td><a class="btn btn-danger">Not Allowed</a></td>
        }                
            @endif
        </tr>
         @endforeach
       
           </table>
    </div>
          







        </div>
       @include('admin.adminjs')
      </body>
    </html>



</body>
</html>