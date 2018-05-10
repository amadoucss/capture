@extends('layouts.app')

@section('content')
<div class="container">
   
                   <h1 style="margin-bottom: 50px">Photographers</h1>
   
				
								<div class="ui link cards">
									@foreach($users as $user)
									<div class="ui card">
							  <div class="image">
							    <img style=height:300px; src="/uploads/avatars/{{$user->avatar}}">
							  </div>
							  <div class="content">
							    <a class="header">{{$user->name}}</a>
							    <div class="description">
							      {{$user->about}}
							    </div>
							  </div>
							  <div class="extra content">
							    <a>
							      <i class="user icon"></i>
							      <a href="/user/{{$user->id}}">View Profile</a>
							    </a>
							  </div>
							</div>
						@endforeach
					</div>
						    
				      
  
			
				
</div>
@endsection
