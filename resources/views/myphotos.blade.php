@extends('layouts.app')

@section('content')
<div class="container">
   
                   <h1 style="margin-bottom: 50px">Your Photos</h1>
   
				
								<div class="ui link cards">
									@foreach($photos as $photo)
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
@endsection
