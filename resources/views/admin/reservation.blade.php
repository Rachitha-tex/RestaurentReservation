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
    <table class="table mt-5 ml-5"  style="color: white">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Guest</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>

     </tr>
    @foreach ($data as $item)
    <tr>
        <td style="text-transform: capitalize;">{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->guest}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->time}}</td>
        <td style="text-transform: capitalize;">{{$item->message}}</td>
      
    </tr>
    @endforeach
  
       </table>
</div>
       



    </div>
   @include('admin.adminjs')
  </body>
</html>