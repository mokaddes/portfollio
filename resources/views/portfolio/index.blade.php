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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/66cf399dea492f34bc0b0892/1i6cni4g1';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

@endpush
