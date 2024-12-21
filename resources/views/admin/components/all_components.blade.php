@extends('admin.body.master')
@section('title')
    All Components
@stop
@section('admin')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    All Components
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Components</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">Add New
                        Component</button>
                    <div class="modal fade" id="add" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel-2">Add New Component</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('add.component') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                required>
                                        </div>
                                        <div class="form-group row">
                                            <textarea class="form-control" placeholder="Description" name="description" rows="5" required></textarea>
                                        </div><br>
                                        <div class="form-group row">
                                            <select class="form-control" name="product_id" required>
                                                <option>.... Choose Product ....</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success mr-2">Add New</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Product</th>
                                            <th>Added Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($components as $component)
                                            <?php $i++; ?>
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $component->name }}</td>
                                                <td>{{ $component->description }}</td>
                                                <td>{{ $component->products->name }}</td>
                                                <td>{{ Carbon\Carbon::parse($component->created_at)->diffForHumans() }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $component->id }}">Delete</button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="delete{{ $component->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                                <div class="modal-dialog" role="document"
                                                    style="font-family: 'Cairo', sans-serif;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel-2">Delete
                                                                Component
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="forms-sample"
                                                                action="{{ route('delete.component', $component->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label for="password"
                                                                        class="col-sm-12 col-form-label">Are You Sure You
                                                                        Want To Delete?</label>
                                                                    <input id="id" type="hidden" name="id"
                                                                        class="form-control" value="{{ $component->id }}">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $component->name }}" readonly>
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
