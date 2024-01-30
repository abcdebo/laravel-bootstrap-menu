@php
$currentUrl = url()->current();
@endphp

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="{{asset('vendor/abcdebo-menu/style.css')}}" rel="stylesheet">

<div id="nguyen-huy" class="card mt-2 mb-2">
	<div class="card-header">
		<form method="GET" action="{{ $currentUrl }}" class="form-inline">
			<label for="email" class="mr-sm-2">Select the menu you want to edit: </label>
			
				<div class="row">
					<div class="col-4 d-flex justify-content-around mt-2">
						{!! Menu::select('menu', $menulist, ['class' => 'form-control']) !!}
						<button type="submit" class="btn btn-primary ml-2 ms-3">Submit</button>
					</div>
					<div class="col-12 mt-2">
						or <a href="{{ $currentUrl }}?action=edit&menu=0">Create New Menu</a>
					</div>
				</div>
		</form>
	</div>

	<div class="card-body">
		<input type="hidden" id="idmenu" value="{{$indmenu->id ?? null}}" />
		<div class="row">
			<div class="col-md-4">
				@include('abcdebo-menu::partials.left')
			</div>
			{{-- /col-md-4 --}}
			<div class="col-md-8">
				@include('abcdebo-menu::partials.right')
			</div>
		</div>
	</div>

	<div class="ajax-loader" id="ajax_loader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
</div>