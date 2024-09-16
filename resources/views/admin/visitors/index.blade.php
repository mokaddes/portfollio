@extends('admin.layouts.master')
@section('visitors', 'active')
@push('styles')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css') }}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <style>

        #contact-us-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        body.dark-layout .custom-switch .custom-control-label:before {
            background-color: #dbdbdb !important;
        }

    </style>

@endpush
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Visitors</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Visitors
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
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>IP</th>
                                <th>City</th>
                                <th>Region</th>
                                <th>Country</th>
                                <th>Location</th>
                                <th>Organization</th>
                                <th>Total</th>
                                <th>Is Blocked</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($visitors as $index => $visitor)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $visitor->ip_address }}</td>
                                    <td>{{ $visitor->city }}</td>
                                    <td>{{ $visitor->region }}</td>
                                    <td>{{ $visitor->country }}</td>
                                    <td>{{ $visitor->location }}</td>
                                    <td>{{ $visitor->organization }}</td>
                                    <td>{{ $visitor->visit_count }}</td>
                                    <td>
                                        <div class="custom-control custom-switch custom-switch-success">
                                            <input type="checkbox" class="custom-control-input is_blocked"
                                                   id="customSwitch{{ $visitor->id }}"
                                                   value="{{ $visitor->id }}" {{ $visitor->is_block ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                   for="customSwitch{{ $visitor->id }}"></label>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.data-thumb-view').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "lengthMenu": [
                    [10, 25, 50, 100],
                    [10, 25, 50, 100]
                ],
                "order": [
                    [0, "asc"]
                ],
            });

            $(document).on('change', '.is_blocked', function () {
                var id = $(this).val();
                var is_blocked = $(this).prop('checked');
                $.ajax({
                    url: '{{ route('admin.visitors.block') }}',
                    type: 'GET',
                    data: {
                        id: id,
                        is_blocked: is_blocked
                    },
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });
    </script>
@endpush
