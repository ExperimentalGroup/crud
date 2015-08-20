@extends('template.layout')

@section('content')
  {{ Form::open(array('url' => '/products')) }}
    <div class="form-group">
      <label for="productName">Product Name</label>
      <input type="text" class="form-control" name="name" id="productName" placeholder="Product Name">
    </div>
    <div class="form-group">
      <label for="productDescription">Product Description</label>
      <input type="text" class="form-control" name="description" id="productDescription" placeholder="Description">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" name="price" id="price" placeholder="Price">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  {{ Form::close() }}
  @if (count($products) > 0)
    <table class="table">
      <thead>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
              {{ HTML::link('/products/'.$product->id, 'Edit') }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <h1>No products in the database</h1>
  @endif
@stop