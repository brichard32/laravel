@extends('tdl.layout')

@section('tachesEffectuees')
	@if (count($list_tacheE)>0)
		 <hr>
          <h1>Les taches réalisées</h1>
          <hr>
          <?php $i=1; ?>
	@endif
@foreach($list_tacheE as $list_tacheE)

	<div class="row-fluid">
			<div class="span5">
				<div>				 
					<h4>{{e($list_tacheE->nom_tache)}} </h4>	
				</div>			
				<hr>
				<div>
					{{Form::open()}}
					<input 
					type="checkbox" 
					name='item' 
					value='{{$list_tacheE->id}}'
					checked="true" 
					onclick="this.form.submit();" 		
					/> 
					<input type='hidden' name='item' value='{{$list_tacheE->id}}'>
					<i> Accomplie ? </i> 
					{{Form::close()}}	


					{{Form::open()}}
					<input type='hidden' name='typeAction' value=1>
					<input type='hidden' name='item' value='{{$list_tacheE->id}}'>
					<input
					type = 'submit'
					name = 'Supprimer'
					value='Supprimer'
					/>

					{{Form::close()}}
					<br>
				</div>		
			
			@if($i==3)
			</div><!--/span-->
			<?php $i=1; ?>
			@endif
			<?php $i=$i+1; ?>
		</div><!--/row-->
	@endforeach
@stop 
	 

@section("nonEffectuee")
	@if (count($list_tache)>0)
		 <hr>
          <h1>Les taches à effectuer</h1>
          <hr>
          <?php $i=1; ?>
	@endif
	@foreach ($list_tache as $list_tache)
		<div class="row-fluid">
			<div class="span4">
				<div>				 
					<h4>{{e($list_tache->nom_tache)}} </h4>	
				</div>			
				<hr>
				<div>
					{{Form::open()}}
					<input 
					type="checkbox" 
					name='item' 
					value='{{$list_tache->id}}'
					onclick="this.form.submit();" 		
					/> 
					<i> Accomplie ? </i> 
					{{Form::close()}}	


					{{Form::open()}}
					<input type='hidden' name='typeAction' value=1>
					<input type='hidden' name='item' value='{{$list_tache->id}}'>
					<input
					type = 'submit'
					name = 'Supprimer'
					value='Supprimer'
					/>

					{{Form::close()}}
					<br>
				</div>		
			@if($i==3)
			</div><!--/span-->
			<?php $i=1; ?>
			@endif
			<?php $i=$i+1; ?>
		</div><!--/row-->
	@endforeach


@stop


@section("form2")
<div>
<h2>
	Une nouvelle tache ?
</h2>
</div>
<div>
	<p>	<b><i> Nom de la tache : </i></b> </p>
	{{Form::open()}}
	<input type='text' name='tf_new_tache' placeholder "Nom de la tache">
	<input type='hidden' name='typeAction' value=2>
	<input type='submit' name="Créer">
	{{Form::close()}}
<div>
@stop 

@section('Erreur_new')
@foreach ($errors->all() as $error) 
	<script type="text/javascript">
	alert("Une tache doit comprendre entre 3 et 128 caractère, recommencez")
	</script>
@endforeach
@stop