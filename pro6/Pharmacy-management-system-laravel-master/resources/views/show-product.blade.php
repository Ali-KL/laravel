@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Show Product</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Show Product</li>
	</ul>
</div>
@endpush
@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
            <h2 style="margin-top: 20px "> <center>  {{$product->purchase->name}} </center></h2>

		@if(!empty($product->purchase->image))
											<span>
												<center> <img style="width:300px ;  " class="avatar-img" src="{{asset('storage/purchases/'.$product->purchase->image)}}" alt="product image"> </center>
											</span>
											@endif

        </div>
    </div>

</div>
<div  class="col-sm-5 col">
	<a href="{{route('products')}}" class="btn btn-primary float-left mt-2"> Back</a>
</div
@endsection
