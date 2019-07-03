@extends('master.template')
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<h3>{{$a->title}}</h3>
							<hr>
							<p>{{$a->content}}</p>
							<hr>
							<p>{{$a->author}}</p>
							<p class="lead"></p>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@stop