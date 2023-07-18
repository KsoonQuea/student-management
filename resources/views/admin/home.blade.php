<x-admin.app-layout>
    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom-datatable.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom-form.css') }}">
        <style>
            /* old */
            .square {
                height: 15px;
                width: 15px;
                background-color: #b2e7ff;
                border-radius: 4px;
            }
            .square:hover {
                background-color: #2198c3;
            }
            * {
                box-sizing: border-box;
            }
            .fg--search {
                background: white;
                position: relative;
                width: 200px;
            }
            .fg--search input {
                width: 100%;
                padding: 2px;
                border-radius: 10px;
            }
            .fg--search button {
                background: transparent;
                border: none;
                cursor: pointer;
                display: inline-block;
                font-size: 20px;
                position: absolute;
                top: 0;
                right: 0;
                z-index: 2;
            }
            .fg--search input:focus+button .fa-search {
                color: blue;
            }
            .text-symbol{
                font-size:0.5em;
                color:#5d5d5d;
            }/* dashboard card css */
            .text-value{ color:#2198c3; }
            .vertical-middle{ vertical-align: middle!important; }
            .chart-content-font{ font-weight: 400; font-size:0.6em; text-align: left; }
            .chart-content-font .value{ font-size:1.2em; }
            .media-body span{ font-size:0.9em; }
            /* new */
            .card-media-title{ font-size:0.8em!important; }
            .card-value{ font-size:0.7em!important; }
            .counter-title{ font-size:0.6em!important; }
            .counter{ font-weight: 600!important; }
            .btn-view-more{
                /*border:1px solid red!important;*/
                font-size:0.7em!important;
                text-align: right!important;
                padding:0!important;
                padding-bottom:5px!important;
            }
            .apexcharts-legend-text{
                padding-left: 5px;
            }
            .apexcharts-title-text{
                font-weight: bold;
            }

        </style>
    @endpush
    {{-- <x-admin.breadcrumb> --}}
    {{-- <x-slot:breadcrumb_title><h3>Dashboard</h3></x-slot:breadcrumb_title> --}}
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
    {{-- </x-admin.breadcrumb> --}}
    <!-- Container-fluid starts-->
    
</x-admin.app-layout>


