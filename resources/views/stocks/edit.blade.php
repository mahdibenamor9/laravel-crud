@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit Stock</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stocks.update',$stock->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <select name="product_id" id="" class="form-control">
                        <option value=""></option>
                        @foreach($products as $product)
                        <option value="{{ $product->id }}" @if($stock->product_id == $product->id) selected @endif> {{ $product->product_name }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Provider Name:</strong>
                    <select name="provider_id" id="" class="form-control">
                        <option value=""></option>
                        @foreach($providers as $provider)
                        <option value="{{ $provider->id }}" @if($stock->provider_id == $provider->id) selected @endif> {{ $provider->provider_name }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Description:</strong>
                    <textarea class="form-control" name="product_desc" style="height:150px"  placeholder="Product Description">{{ $stock->product_desc }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qty:</strong>
                    <input type="number" name="product_qty" class="form-control" style="height:150px" value="{{ $stock->product_qty }}"  placeholder="Quantity">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection