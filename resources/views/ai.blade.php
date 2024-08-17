@extends('layouts.master')


@push('css')
    <style>
        .shadow_sm {
            box-shadow: 0px 0px 20px #d0d1d763;
            border-radius: 10px !important;
        }

        .ai_data_list .form-control::placeholder {
            color: #666;
        }

        .discrepancyTable tr, .discrepancyTable tr td, .discrepancyTable tr th {
            border: 1px solid !important;
        }

        #grammar-errors {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            display: none;
        }

        .error-item {
            margin-bottom: 10px;
        }

        .error-item p {
            margin: 0;
            padding: 2px 0;
        }

        .error-item strong {
            color: #c00;
        }

        .fa-2x {
            font-size: 1.5rem !important;
        }

        /* Preloader */
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Spinner Animation */
        #preloader .spinner {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .error-indicator {
            cursor: pointer;
        }

        .copy_suggestion:hover, .hide_suggestion:hover, .generate:hover {
            background-color: #F5F5F5 !important;
            color: #0c0d0e !important;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper pb-4">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card p-3">
                    {{-- <div class="header mb-4">
                        <h1>Hello, Dr. Smith</h1>
                        <p>You have 3 clients with incomplete assessments</p>
                    </div> --}}
                    <div class="mb-2 ai_data_list">
                        <h4 class="mb-3">Query</h4>
                        <div class="mb-3 query_box">

                            <div class="comment_list mb-3">
                                <div class="d-flex">
                                    <div class="user_img mr-3">
                                        <img src="{{ asset('assets/custom_user.png') }}" width="38" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="name">You</div>
                                        <div class="content_box bg-white">
                                            <div class="desc mb-3">What is your favourite food?</div>
                                            <p class="time m-0 text-right">08:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment_list mb-3">
                                <div class="d-flex">
                                    <div class="user_img mr-3">
                                        <img src="{{ asset('assets/ai.png') }}" width="38" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="name">Ai</div>
                                        <div class="content_box bg-white">
                                            <div class="desc mb-3">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa erat, ultrices vel ipsum vel, tempor sagittis dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa erat, ultrices vel ipsum vel, tempor sagittis dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa erat, ultrices vel ipsum vel, tempor sagittis dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa erat, ultrices vel ipsum vel,
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="comment_btn">
                                                    <a href="#" class="mr-2">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="#314694"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" /><path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" /></svg>
                                                    </a>
                                                    <a href="#">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="#314694"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="time">08:30 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <form action="#" method="post" class="mt-5">
                                <div class="input-group">
                                    <span class="input-group-text border-0 rounded-right-0 pr-0"><i class="fa fa-smile"></i></span>
                                    <input type="text" name="message" class="form-control border-0" placeholder="Aske me anything...">
                                    <span class="input-group-text border-0 rounded-left-0">
                                        <button type="submit" class="btn btn-primary rounded-pill">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h4 class="mb-3">Record Discrepancies</h4>
                                </div>
                                <div class="">
                                    <a href="#" class="viwe_all">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-3">
                            <div class="">
                                <h6>Discrepancy in Client Record</h6>
                                <span>Review and receive discrepancies in clients recods.</span>
                            </div>
                            <div class="">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icons/angle-right.svg') }}" alt="Angle Right">
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-3">
                            <div class="">
                                <h6>Discrepancy in Compliance Documentation</h6>
                                <span>Identify and address  any discrepancies in compliance documentation</span>
                            </div>
                            <div class="">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icons/angle-right.svg') }}" alt="Angle Right">
                                </a>
                            </div>
                        </div>

                        @foreach ($discrepancies as $userId => $similar)
                            @php
                                $user = DB::table('users')->select('name', 'middle_name', 'last_name')->where('id', $userId)->first();
                            @endphp
                            @foreach($similar as $similarity => $identifiers)
                                @php
                                    $labelNames = array_unique(arrayFilteredWithSimilarity($similarity, 'label'));
                                    $formNames = array_unique(arrayFilteredWithSimilarity($similarity, 'form'));
                                @endphp
                                @if($similarity == 14)
                                    @foreach($identifiers as $label => $values)
                                        <div
                                            class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-3">
                                            <div class="">
                                                <h5>Discrepancy in {{ str_unslug($label) }} </h5>
                                                <span>Review and resolve discrepancies in <i>{{ str_unslug(implode(', ', $formNames)) }}</i> for individual {{ $user->name }} {{ $user->middle_name }} {{ $user->last_name }}</span>
                                            </div>
                                            <div class="">
                                                <a href="#" class="openDiscrepancyModal"
                                                   data-user-name="{{ $user->name }} {{ $user->middle_name }} {{ $user->last_name }}"
                                                   data-similarity="{{ $similarity }}"
                                                   data-label="{{ str_unslug($label) }}"
                                                   data-identifiers="{{ json_encode($values) }}">
                                                    <img src="{{ asset('assets/images/icons/angle-right.svg') }}"
                                                         alt="Angle Right">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div
                                        class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-3">
                                        <div class="">
                                            <h5>Discrepancy in {{ str_unslug(implode(', ', $labelNames)) }} </h5>
                                            <span>Review and resolve discrepancies in <i>{{ str_unslug(implode(', ', $formNames)) }}</i> for individual {{ $user->name }} {{ $user->middle_name }} {{ $user->last_name }}</span>
                                        </div>
                                        <div class="">
                                            <a href="#" class="openDiscrepancyModal"
                                               data-user-name="{{ $user->name }} {{ $user->middle_name }} {{ $user->last_name }}"
                                               data-similarity="{{ $similarity }}"
                                               data-identifiers="{{ json_encode($identifiers) }}">
                                                <img src="{{ asset('assets/images/icons/angle-right.svg') }}"
                                                     alt="Angle Right">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                    <div class="mb-4 ai_data_list">
                        <h4 class="mb-3">Help Me With My Writing</h4>
                        <div class="">
                            <h5>Grammar and Style Check</h5>
                            <div class="mb-3 bg-white rounded shadow_sm p-3">
                                <div class="w-100">
                                    <textarea name="text" id="sapling-editor" cols="30" class="form-control border-0"
                                              rows="5"
                                              placeholder="Write here..."></textarea>
                                </div>


                            </div>
                            <div class="">
                                <h5>Writing Assistant</h5>
                                <div
                                    class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-2">
                                    <div class="w-100">
                                    <textarea name="assistant" id="assistant" cols="30"
                                              class="form-control border-0 assistant" rows="5"
                                              placeholder="Write here..."></textarea>
                                    </div>
                                    <div class="mx-2">
                                        <button class="generate btn btn-sm btn-primary" title="Generate">
                                            <i class="fa fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="my-3 bg-gray-light rounded shadow_sm p-2 writing_assistant_suggestions"
                                     style="display: none">
                                    <div class="text_suggestion p-2">
                                    </div>
                                    <div class="text-right mt-2">
                                        <button class="btn btn-sm btn-info copy_suggestion" data-copy="text_suggestion"
                                                title="Copy">
                                            <i class="fa fa-copy"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary hide_suggestion" title="Hide Section">
                                            <i class="fa fa-times"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 ai_data_list">
                            <h4 class="mb-4">Report History</h4>
                            <div
                                class="d-flex align-items-center justify-content-between mb-3 bg-white rounded shadow_sm p-3">
                                <div class="">
                                    <h6>Compliance Report</h6>
                                    <span>Report history for 30 days</span>
                                </div>
                                <div class="">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/icons/angle-right.svg') }}" alt="Angle Right">
                                    </a>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-between mb-3 bg-white rounded shadow_sm p-3">
                                <div class="">
                                    <h6>KPI Status Report</h6>
                                    <span>Report history for 30 days</span>
                                </div>
                                <div class="">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/icons/angle-right.svg') }}" alt="Angle Right">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 ai_data_list">
                            <h4 class="mb-4">KPI Management</h4>
                            <div class="progress_bar mb-4">
                                <h5 class="mb-2">Assessments Completed <span class="pl-3">70% (7/10)</span></h5>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress_bar mb-4">
                                <h5 class="mb-2">Clients with Incomplete Assessments <span
                                        class="pl-3">30% (2/10)</span>
                                </h5>
                                <div class="progress mb-2" style="height: 1px;">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress_bar mb-4">
                                <h5 class="mb-2">Depression Assessments Completed <span class="pl-3">40% (3/10)</span>
                                </h5>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 ai_data_list">
                        <h4 class="mb-3">Report History</h4>
                        <div
                            class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-3">
                            <div class="">
                                <h6>Compliance Report</h6>
                                <span>Report history for 30 days</span>
                            </div>
                            <div class="">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icons/angle-right.svg') }}" alt="Angle Right">
                                </a>
                            </div>
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between mb-2 bg-white rounded shadow_sm p-3">
                            <div class="">
                                <h6>KPI Status Report</h6>
                                <span>Report history for 30 days</span>
                            </div>
                            <div class="">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icons/angle-right.svg') }}" alt="Angle Right">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ai_data_list">
                        <h4 class="mb-3">KPI Management</h4>
                        <div class="progress_bar mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h5>
                                        Assessment Completed
                                        <a href="#" class="btn btn-primary ml-2">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="#ffffff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </a>
                                    </h5>
                                </div>
                                <div class="">
                                    <h5><span class="pl-3">70% (7/10)</span></h5>
                                </div>
                            </div>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress_bar mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h5>
                                        Client with Incomplete Assessments
                                        <a href="#" class="btn btn-primary ml-2">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="#ffffff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </a>
                                    </h5>
                                </div>
                                <div class="">
                                    <h5><span class="pl-3">30% (2/10)</span></h5>
                                </div>
                            </div>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress_bar mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h5>
                                        Depression Assessments Completed
                                        <a href="#" class="btn btn-primary ml-2">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="#ffffff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </a>
                                    </h5>
                                </div>
                                <div class="">
                                    <h5><span class="pl-3">40% (3/10)</span></h5>
                                </div>
                            </div>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ai_wrap">
                    <div class="progressbar_btn mb-4 text-center text-lg-right mt-5">
                        <a href="{{ route('admin.kpi.index') }}" class="btn btn-light m-1">Edit</a>
                        <a href="#" class="btn btn-primary m-1">Create KPI</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- discrepancyModal --}}
        <div class="modal fade" id="discrepancyModal" tabindex="-1" role="dialog"
             aria-labelledby="discrepancyModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="discrepancyModalLabel">User Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="modal-content" class="table-responsive">
                            <!-- Content will be inserted here by JavaScript -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="preloader" style="display: none">
            <div class="spinner"></div>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://sapling.ai/static/js/sapling-sdk-v1.0.6.min.js"></script>

    <script type="text/javascript">
        let grammarApiKey = '{{ getenv('GRAMMAR_CHECK_API') }}';
        Sapling.init({
            key: grammarApiKey ?? "M0ERX8X6TFFKDPO6WMV6OFWI7Y7IORO9",
            mode: 'dev',
            autocomplete: true,
        });

        const contentEditable = document.getElementById('sapling-editor');
        Sapling.observe(contentEditable);
    </script>

    <script>


        function showLoader() {
            $('#preloader').show();
            $('body').css({
                'opacity': '0.4',
                'pointer-events': 'none',
                'cursor': 'not-allowed'
            });
        }

        function hideLoader() {
            $('#preloader').hide();
            $('body').css({
                'opacity': '1',
                'pointer-events': 'auto',
                'cursor': 'auto'
            });
        }


        function unslug(text) {
            return text
                .replace(/[_-]/g, ' ')   // Replace underscores and dashes with spaces
                .toLowerCase()           // Convert to lowercase
                .replace(/\b\w/g, function (match) {
                    return match.toUpperCase();  // Capitalize the first letter of each word
                });
        }


        function getAssistResponse(text) {
            $.ajax({
                url: '{{ route('ai.writing-assist') }}',
                type: 'GET',
                data: {
                    text: text
                },
                beforeSend: function () {
                    showLoader()
                },
                success: function (response) {
                    $('.writing_assistant_suggestions').show();
                    $('.text_suggestion').html(response.text);
                },
                error: function (error) {
                    console.log(error);
                },
                complete: function () {
                    hideLoader();
                }
            });
        }


        // ajax on input prompt
        $('.generate').on('click', function () {
            let text = $('#assistant').val();
            console.log(text)
            if (text.length > 0) {
                getAssistResponse(text);
            }
        });

        // Copy text
        $('.copy_suggestion').on('click', function () {
            // set timeout to show the copied message and replace icon
            $(this).find('i').removeClass('fa-copy').addClass('fa-check');
            let copyText = document.getElementsByClassName($(this).data('copy'))[0];
            let range = document.createRange();
            range.selectNode(copyText);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            setTimeout(() => {
                $(this).find('i').removeClass('fa-check').addClass('fa-copy');
            }, 1000);
            toastr.success('Text copied to clipboard');

        });

        // Hide suggestion
        $('.hide_suggestion').on('click', function () {
            $('.writing_assistant_suggestions').hide();
        });


    </script>

@endpush
