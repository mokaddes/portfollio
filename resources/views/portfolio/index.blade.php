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


        .profile-image {
            border-radius: 50%;
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 5px solid #ffc107;
            z-index: 2;
        }
        .banner .mkds{
            z-index: 2;
            margin-left: 100px;
            text-align: center;
            color: #ffc107;
        }

        .banner .info {
            margin-left: 20px;
            z-index: 2;

        }

        .banner .name {
            font-size: 2rem;
            font-weight: bold;
        }

        .banner .profession {
            font-size: 1.5rem;
        }

        .banner .contact-info {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #0dcaf0 !important;
        }
        .banner .contact-info a{
            color: #0dcaf0 !important;
            text-decoration: none;
        }

        .banner .contact-info p {
            margin: 5px 0;
        }

        .banner .contact-info i {
            margin-right: 10px;
            color: #ffffff;
        }

        .banner .social-icons {
            margin-top: 10px;
        }

        .banner .social-icons a {
            color: white;
            margin-right: 15px;
            font-size: 1.5rem;
        }

        .banner .coding-environment h3 {
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .banner .coding-environment p {
            position: relative;
            z-index: 2;
        }

        .overlay-gradient {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to right, rgb(96 96 96 / 53%) 20%, rgb(0 0 0) 100%);
            z-index: 1;
        }
        .banner .icon img{
            width: 30px;
            height: 30px;
            z-index: 2;
        }

        .download-btn{
            padding: 0px 15px;
            border-radius: 10px;
            font-size: 18px;
            box-shadow: 0 22px 14px rgba(0, 0, 0, 0.9);
            color: #000;
        }

        .download-btn:hover {
            background: #fdfdfd00;
            color: #fff;
        }
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
