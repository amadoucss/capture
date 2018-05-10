
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Get Start by uploading photos to your profile so customers can see your latest work
                </div>

                <form enctype='multipart/form-data' method=post action="/create">
					{{csrf_field()}}
                	
				<h2>Upload a picture</h2>

				


				<div class="container">
					<div class="form-group">
					<label for="photo">Caption</label>
					<input class="form-control" style="width: 300px" type="text" name="caption">
				</div>
					<div class="form-group text-center">
					<input type="file" name="photo">
				</div>
				</div>


				<div class="form-group text-center">
					<input type="submit" value="Upload" class="btn btn-success">
				</div>

                </form>

                
            </div>
        </div>
    </div>
</div>
@endsection
