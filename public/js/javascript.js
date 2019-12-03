$( document ).ready(function() {
	function loadproduct(msg)
	{
		var data = $.parseJSON(msg);
    	var product_wrapper = $('.product-wrapper');
    	product_wrapper.html('');

    	var load_product = '';

    	$.each(data, function(key, value){
    		console.log(key+1);
    		var stt = key+1;
    		load_product += "<div class='product col-md-4'>";
    		load_product += "<div class='product-title'>";
    		(stt < 10) ? load_product += "<p>MT-0"+stt+"</p>":load_product += "<p>MT-"+stt+"</p>";
    		load_product += "<h4 class='product-name'>"+value.name+"</h4>";
    		load_product += "</div>";
    		load_product += "<div class='underlined'></div>";
    		load_product += "<div class='product-content'>";
    		load_product += "<p>Topping:</p>";
    		load_product += "<span>"+value.toppings+"</span>";
    		load_product += "<p class='price'>"+"$"+value.price+"</p>";
    		load_product += "</div>";
    		load_product += "</div>";

    	});

    	product_wrapper.append(load_product);

	}

	$("#sort").change(function(){
	var url = $('#sort_url').val();
    var attr_sorting = $(this).val();
    var name = '';
    var sorting = '';

    switch(attr_sorting)
    {
    	case "name_asc":
    	name = "name";
    	sorting = "ASC";
    	break;
    	case "name_dsc":
    	name = "name";
    	sorting = "DESC";
    	break;
    	case "price_asc":
    	name = "price";
    	sorting = "ASC";
    	break;
    	case "price_dsc":
    	name = "price";
    	sorting = "DESC";
    	break;
    }
    $.ajax({
    	method: "GET",
    	url: url,
    	data: { name: name, sorting: sorting }
    })
    .done(function( msg ) {
    	loadproduct(msg);
    });
});

	// filter ajax
	$('.btn-fillter').click(function()
	{
		$('.content-fillter').toggle();
	});

	$('.check-radio-search-fillter').click(function(){
		var value_filter = $(this).val();
		var fillter_ajax = $('#fillter_ajax').val();
		$.ajax({
    	method: "GET",
    	url: fillter_ajax,
    	data: { value_filter: value_filter }
    })
    .done(function( msg ) {
    	loadproduct(msg);
    });


	});
	$('.ajax_store').click(function()
	{
		var id_store = $(this).attr('data-id-shop');
		var url_store = $(store).val();
		$.ajax({
    	method: "GET",
    	url: url_store,
    	data: { id_store: id_store }
    })
    .done(function( msg ) {
    	loadproduct(msg);
    });

	});
});
