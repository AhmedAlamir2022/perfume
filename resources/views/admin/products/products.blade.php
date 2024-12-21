@extends('admin.body.master')
@section('title')
    All Products
@stop
@section('admin')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    All Products
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Products</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('add.product') }}"><button type="button" class="btn btn-info btn-sm">Add New
                            Products</button></a>
                    <br><br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Main Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Size (ml)</th>
                                            <th>Quantity</th>
                                            <th>Added Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($products as $product)
                                            <?php $i++; ?>
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td><img src="{{ asset($product->image1) }}"
                                                        style="width: 60px; height: 50px;"></td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->categories->name }}</td>
                                                <td>{{ $product->brands->name }}</td>
                                                <td>{{ $product->size }}</td>
                                                @if ($product->quantity < 10)
                                                    <td style="background-color: red;">{{ $product->quantity }}</td>
                                                @else
                                                    <td style="background-color: green;">{{ $product->quantity }}</td>
                                                @endif
                                                <td>{{ Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $product->id }}">Delete</button>
                                                    <a href="{{ route('edit.product', $product->id) }}"><button
                                                            type="button" class="btn btn-warning btn-sm">Edit</button></a>


                                                </td>
                                            </tr>
                                            <div class="modal fade" id="delete{{ $product->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                                <div class="modal-dialog" role="document"
                                                    style="font-family: 'Cairo', sans-serif;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel-2">Delete Product
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="forms-sample"
                                                                action="{{ route('delete.product', $product->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label for="password"
                                                                        class="col-sm-12 col-form-label">Are You Sure You
                                                                        Want To Delete?</label>
                                                                    <input id="id" type="hidden" name="id"
                                                                        class="form-control" value="{{ $product->id }}">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $product->name }}" readonly>
                                                                </div>
                                                                <hr>
                                                                <button type="submit"
                                                                    class="btn btn-danger mr-2">Delete</button>
                                                                <button type="button" class="btn btn-info"
                                                                    data-dismiss="modal">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->


    @endsection
