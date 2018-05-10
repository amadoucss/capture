@extends('layouts.app')

@section('content')
<div class="container">



		
	</style>
     
	 <div class="profile">
     <img style="margin-bottom: 50px" src="uploads/avatars/{{$users->avatar}}">
     <h2>{{$users->name}}</h2>
     
     </div>

     <div><h3>{{$users->about}}</h3></div>
     <div><h4>{{$users->number}}</h4></div>

     <h2>Functions to edit user profile will be added</h2>

    

 

</div>
@endsection
