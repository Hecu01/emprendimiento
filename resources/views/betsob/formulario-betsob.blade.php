@extends('layouts.plantilla-betsob')
@section('section-principal-betsob')
	<div class="container section-principal">

		<form class="g-3 align-items-center mb-3 py-3">
			<h2 class="title">Agregar una gorra</h2>
			<div class="col-12">
				<label class="visually-hidden" for="inlineFormInputGroupUsername">Talle</label>
				<div class="input-group">
					<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Inserte talle (34, 35, 36, 37)">
				</div>
			</div>
			<div class="col-12">
				<label class="visually-hidden" for="inlineFormInputGroupUsername">Precio</label>
				<div class="input-group">
					<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Inserte precio (2000 example)">
				</div>
			</div>
			<div class="col-12">
				<label for="formFileMultiple" class="form-label">Cargar imagen</label>
				<input class="form-control" type="file" id="formFileMultiple" multiple>
			</div>
			<div class="col-sm-6 mt-2">

				<span>REVERSIBLE</span>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
					<label class="form-check-label" for="gridRadios1">
						Sí
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
					<label class="form-check-label" for="gridRadios2">
						No
					</label>
				</div>
			</div>

		  
			<div class="col-12 mt-2">
			  <button type="submit" class="btn btn-primary">Cargar</button>
			</div>
		</form>

		
	</div>
@endsection

<style>
	.section-principal{
		
	}
</style>