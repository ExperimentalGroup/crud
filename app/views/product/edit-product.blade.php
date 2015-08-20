@extends('template.layout')

@section('content')
  {{ Form::open(array('url' => '/products/'.$product->id, 'method' => 'PUT')) }}
    <div class="form-group">
      <label for="productName">Product Name</label>
      {{ Form::text('name', $product->name, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      <label for="productDescription">Product Description</label>
      {{ Form::text('description', $product->description, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      {{ Form::text('price', $product->price, array('class' => 'form-control')) }}
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  {{ Form::close() }}
@stop