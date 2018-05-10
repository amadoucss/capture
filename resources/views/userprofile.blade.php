@extends('layouts.app')

@section('content')
<div class="container">



		
	</style>
     
	 <div class="profile">
	 	<div>
	    <h2>{{$user->name}}'s Profile</h2>
	    <div>

	    <h3>{{$user->about}}</h3>
	    <h4>{{$user->number}}</h4>

	    </div>
		</div>
		<div>
	    
     <img style="float: right; margin-left: 50px;" src="/uploads/avatars/{{$user->avatar}}">
 </div>
 </div>
  

     <hr>
     <h2>Photos</h2>

								 <div class="ui link cards">
									@foreach($user->photos as $photo)
				  				<div class="card">
				   			 <div class="image">
				      		<img src="/uploads/photos/{{$photo->url}}">
						    </div>
						    <div class="content">
						      <div class="description">
						        {{$photo->caption}}
						      </div>
						    </div>
						</div>
						@endforeach
					</div>
     </div>

    

 

</div>
@endsection
