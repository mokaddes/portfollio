@extends('admin.layouts.master')
@section('categories', 'active')
@push('styles')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css') }}">
    <!-- END: Page CSS-->
    <style>

    </style>

@endpush
@section('content')
    <input type="hidden" id="store_route" value="{{ route('admin.categories.store') }}">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Categories</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Categories
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button"
                                        class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another
                                        Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                            <tr>
                                <th></th>
                                <th>NAME</th>
                                <th>STATUS</th>
                                <th>ORDER</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td></td>
                                    <td class="product-name">{{ $category->name }}</td>
                                    <td class="product-category">{{ $category->status }}</td>
                                    <td class="product-popularity">{{ $category->order_id }}</td>
                                    <td class="product-action">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}"
                                           class="action-edit"><i class="feather icon-edit"></i></a>
                                        <a href="{{ route('admin.categories.delete', $category->id) }}"
                                           class="action-delete"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Category Data</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <form action="" method="post" id="categoryForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-name">Name</label>
                                                <input type="text" name="name" class="form-control" id="data-name">
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status">Status</label>
                                                <select class="form-control" name="status" id="data-status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactivate</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-order_id">Order ID</label>
                                                <input type="text" name="order_id" class="form-control"
                                                       id="data-order_id">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary submitBtn">Add Data</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push('scripts')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/extensions/dropzone.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js') }}"></script>

@endpush
