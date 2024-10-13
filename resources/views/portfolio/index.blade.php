@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endpush
@section('content')
    @include('portfolio.component.header')
    @include('portfolio.component.sections.professional')
    @include('portfolio.component.sections.projects')
    @include('portfolio.component.sections.frameworks')
    @include('portfolio.component.sections.tools')
    @include('portfolio.component.sections.mini')
    @include('portfolio.component.sections.personal')


@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{--    @include('firebase_script')--}}
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
