<!DOCTYPE html>
<html>
<head>
	<title>simpleLaravelFileUploader</title>
</head>
<body>
	{!! Form::open(['url' => 'ACTION_URL_HERE','id'=>'FORM_ID','class'=>'CLASSES','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!}
	{!! csrf_field() !!}
	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label">Title</label>
		<div class="col-md-6 col-xs-12">
			<div class="input-group">
				<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label">File Name</label>
		<div class="col-md-6 col-xs-12">
			<div class="input-group">
				<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	
	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label">File</label>
		<div class="col-md-6 col-xs-12">
			<div class="input-group">
				<span class="input-group-addon"><span class="fa fa-image"></span></span>
				<input class="form-control" required="" name="file" type="file">
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button class="btn btn-default" type="reset">Clear Form</button>
		<button type="submit" class="btn btn-danger pull-right">Register</button>
	</div>
	{!! Form::close() !!}

</body>
</html>