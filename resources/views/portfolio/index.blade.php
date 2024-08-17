@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>

        #contact-us-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }


    </style>
@endpush
@section('content')
    @include('portfolio.component.header')
    @include('portfolio.component.sections.professional')
    @include('portfolio.component.sections.projects')
    @include('portfolio.component.sections.frameworks')
    @include('portfolio.component.sections.tools')
    @include('portfolio.component.sections.mini')
    @include('portfolio.component.sections.personal')

    <!-- Contact Us Button -->
    <button id="contact-us-btn" class="btn btn-primary " data-toggle="modal" data-target="#contactModal">
        <i class="fa fa-envelope fa-2x" ></i>
    </button>

    <!-- Contact Us Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Hair Me!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" required class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea required class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

@endpush
