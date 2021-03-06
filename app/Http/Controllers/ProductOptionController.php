<?php namespace App\Http\Controllers;

use App\Http\Requests\ProductOptionRequest;
use App\Http\Controllers\Controller;
use App\ProductOption;
class ProductOptionController extends Controller {
	/**
	 * Register the auth middleware
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productOptions = ProductOption::all();
		return view('product-option.index', compact('productOptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('product-option.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductOptionRequest $request)
	{
		$input = $request->all();
		ProductOption::create($input);

		return redirect('product-option');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$productOption = ProductOption::findOrFail($id);
		return view('product-option.show', compact('productOption'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$productOption = ProductOption::findOrFail($id);
		return view('product-option.edit', compact('productOption'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProductOptionRequest $request, $id)
	{
		dd($request);
		$productOption = ProductOption::findOrFail($id);
		$input = $request->all();
		$productOption->update($input);
		return redirect('product-option');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
