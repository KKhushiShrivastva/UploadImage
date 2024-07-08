<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   


</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">uploaded by</th>
      <th scope="col">image 300</th>
      <th scope="col">image 1000</th>
    </tr>
  </thead>
  <tbody>
    @foreach($getUser as $i=>$u)
    <tr>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->name}}</td>

      <td>
        <img src="{{  url('Image_300/' . $u->image_3)  }}" alt="none" srcset="">

      </td>
      <td>
        <img src="{{  url('Image_1000/' . $u->image_6)  }}" alt="none" srcset="">

      </td>
    </tr>
    @endforeach
   
   
  </tbody>
</table>

    
</body>
</html>