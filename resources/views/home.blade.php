
@extends('layouts.main')
 
@section('content')
    <div class="mt-1" >
    <h1>Hi, Welcome <span style="font-size: 20px"><?php echo $user ?></span></h1>
    <h6>Email : {{ $email }}</h6>
    <img src="img/<?= $image ?>" alt="<?= $user ?>" width="200" class="img-thumbnail rounded-circle" >
  </div>
@endsection



