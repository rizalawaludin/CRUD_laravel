@extends('master.template')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-field">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="modal-body">
				        <form method="post" action="/{{$a->id}}/update" enctype="multipart/form-data">
				        	{{csrf_field()}}
						   <div class="form-group">
						    <label for="exampleInputEmail1">Title</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$a->title}}">
						   </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Sub-Title</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subtitle" value="{{$a->subtitle}}">
						   </div>
						   <div class="form-group">
						    <label for="exampleFormControlTextarea1">Content</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content">{{$a->content}}</textarea>
						   </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Author</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author" value="{{$a->author}}">
						   </div>
						  <button type="submit" class="btn btn-warning">Update</button>
						  <button type="submit" class="btn btn-secondary"><a href="/">Kembali</a></button>
						</form>
				      </div>
			</div>
		</div>
	</div>
</div>
@endsection