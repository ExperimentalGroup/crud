<?php

class ProductController extends BaseController {

	public function index()
	{
		// Get all products from the database
		$products = Product::all();

		return View::make('product/product-list')->with('products', $products);
	}

	public function create()
	{
		$product = Product::create(array(
			'name' => Input::get('name'),
			'description' => Input::get('description'),
			'price' => Input::get('price')
		));

		return Redirect::to('/products');
	}

	public function getOne($id)
	{
		$product = Product::find($id);

		return View::make('product/edit-product')->with('product', $product);
	}

	public function update($id)
	{
		$product = Product::find($id);

		$product->name = Input::get('name');
		$product->description = Input::get('description');
		$product->price = Input::get('price');

		$product->save();

		return Redirect::to('/products');
	}

	public function delete($id)
	{
		// Delete user with ID as $id
	}
}
