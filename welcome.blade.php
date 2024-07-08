<!-- <h1>HELLO KHUSHI</h1> -->

<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
   @csrf
 <input type="text" name="name">
 <input type="file" name="file">
 <button type="submit"> Uplaod</button>
</form>