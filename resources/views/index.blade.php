@extends('master.template')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-field">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Kontent</h3>
									<div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Title</th>
											</tr>
										</thead>
										@foreach($a as $b)
											<tr>
												<td><a href="/halaman/{{$b->id}}/kontent">{{$b->title}}</a></td>
												<td><a href="/{{$b->id}}/edit"class="btn btn-warning">Edit</a>
													<a href="/{{$b->id}}/hapus" class="btn btn-danger">Hapus</a>
												</td>
											</tr>
										@endforeach
									</table>
								</div>
							</div>
				</div>			
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
						<form method="post" action="/tambah">
				        	{{csrf_field()}}
						   <div class="form-group">
						    <label for="exampleInputEmail1">Title</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
						   </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Sub-Title</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subtitle">
						   </div>
						   <div class="form-group">
						    <label for="exampleFormControlTextarea1">Cotent</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
						   </div>
						   <div class="form-group">
						    <label for="exampleFormControlTextarea1">Author</label>
						    <input type="text" name="author" class="form-control">
						   </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop