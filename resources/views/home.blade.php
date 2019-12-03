<!DOCTYPE html>
<html>
<head>
	<title>Oe Test Trà Sữa</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
</head>
<body>
	<input type="hidden" id="sort_url" value="{{route('sort')}}">
	<input type="hidden" id="fillter_ajax" value="{{route('fillter_ajax')}}">
	<input type="hidden" id="store" value="{{route('store')}}">
	<div class="container">
		<div class="pull-left menu-left">
			<h4 class="title-store">Milk Tea Store</h4>
			<ul>
				@foreach($list_store as $lstore)
				<li><a class="ajax_store" data-id-shop="{{$lstore->id}}">{{$lstore->name}}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="pull-right content-right">
			<h3 class="title-right-content">Store 1 Menu</h3>
			<div class="pull-left button-fillter">
				<button class="btn btn-danger btn-fillter">Fillter</button>
			</div>
			<div class="pull-right inline-sort-by">
				<div class="sort-by">Sort By</div>
				<div class="select-option">
					<select name="" id="sort" class="form-control" required="required">
						<option>Select Sorting</option>
						<option class="sorting" value="name_asc">Name ASC</option>
						<option class="sorting" value="name_dsc">Name DSC</option>
						<option class="sorting" value="price_asc">Price ASC</option>
						<option class="sorting" value="price_dsc">Price DSC</option>
					</select>
				</div>
			</div>
			{{ csrf_field() }}

			<div class="content-fillter" style="clear: both;display: none">
				<h4>Toppings:</h4>
				<div class="check-radio-topping">
				<input type="radio" class="check-radio-search-fillter" name="toppings" id="id1" value="Milk foam,white pearl">
				<label for="id1">Milk foam,white pearl</label>
			</div>
				<div class="check-radio-topping">
				<input type="radio" class="check-radio-search-fillter" name="toppings" id="id2" value="pearl">
				<label for="id2">Pearl</label>
			</div>
			<div class="check-radio-topping">

				<input type="radio" class="check-radio-search-fillter" name="toppings" id="id3" value="Pearl, milk foam">
				<label for="id3">Pearl, milk foam</label>
			</div>
				<div class="check-radio-topping">
				<input type="radio" class="check-radio-search-fillter" name="toppings" id="id4" value="Pearl, milk foam">
				<label for="id4">Pearl, milk foam</label>
			</div>
			<div class="check-radio-topping">
				<input type="radio" class="check-radio-search-fillter" name="toppings" id="id5" value="Aloe, Pearl">
				<label for="id5">Aloe, Pearl</label>
			</div>
			</div>
			<div class="product-wrapper">
				@foreach($list_product as $key => $lpro)

				<div class="product col-md-4">
					<div class="product-title">
						@if($key < 9)
						<p>MT-0{{$key+1}}</p>
						@else
						<p>MT-{{$key+1}}</p>
						@endif
						<h4 class="product-name">{{$lpro->name}}</h4>
					</div>
					<div class="underlined"></div>
					<div class="product-content">
						<p>Topping:</p>
						<span>{{$lpro->toppings}}</span>
						<p class="price">${{$lpro->price}}</p>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('public/js/javascript.js') }}"></script>
</body>
</html>