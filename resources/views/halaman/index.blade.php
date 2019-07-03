@extends('master.template')
@section('content')
<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<h3>{{$a->title}}</h3>
							<hr>
							<p>{{$a->content}}</p>
						</div>
					</div>
				</div>
			</div>
</div>
@stop