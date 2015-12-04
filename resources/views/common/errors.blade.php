@if (count($errors) > 0)
<div class="alert alert-danger">
	<p><strong>Whoops! Something went wrong!</strong></p>
	<ul>
		@foreach ($errors->all() as $error)
			<li><i class="fa fa-btn fa-remove"></i> {{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
