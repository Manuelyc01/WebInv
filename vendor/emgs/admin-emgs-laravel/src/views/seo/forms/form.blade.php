<div class="panel panel-white">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> SEO </h3>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'title' , $errors, '') !!}
		</div>

		<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{!! Form::stdTextArea('Descripción', 0 , 'description' , $errors) !!}
		</div>

	</div>

</div>

<div class="panel panel-white">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> SOCIAL </h3>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('social_title') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'social_title' , $errors, '') !!}
		</div>

		<div class="form-group {{ $errors->has('social_description') ? 'has-error' : '' }}">
			{!! Form::stdTextArea('Descripción', 0 , 'social_description' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('social_imagen') ? 'has-error' : '' }}">
			{!! Form::stdImg('Imagen', 0 , 'social_imagen' , isset($seo) ? $seo->social_imagen : '' , $errors) !!}
		</div>
	</div>

</div>

