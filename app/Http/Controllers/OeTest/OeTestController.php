<?php 
namespace App\Http\Controllers\OeTest;
use App\Http\Controllers\Controller;
use App\Models\Stores;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OeTestController extends Controller
{
	public function home()
	{
		 $list_store = DB::table('stores')->get();
		 $list_product = DB::table('products')->get();
        return view('home', [
        	'list_store' => $list_store,
        	'list_product' => $list_product,
        ]);

	}
	public function sort(Request $req)
	{
		$name_sort = $req->get('name');
		$sorting = $req->get('sorting');
		$list_product = DB::table('products')->orderBy($name_sort,$sorting)->get();
		return $list_product->toJson();
		
	}
	public function fillter_ajax(Request $req)
	{
		$toppings = $req->get('value_filter');
		$get_filter_product = DB::table('products')->where('toppings',$toppings)->get();
		return $get_filter_product->toJson();

	}
	public function store(Request $req)
	{
		$id_store = $req->get('id_store');
		$query = DB::table('shopProducts')
            ->join('products', 'shopProducts.product', '=', 'products.id')
            ->join('stores', 'shopProducts.shop', '=', 'stores.id')
            ->select('shopProducts.*', 'products.*', 'stores.*')
            ->where('stores.id',$id_store)
            ->get();
        return $query->toJson();
	}

}