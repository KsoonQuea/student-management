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

    <div class="card">
        <div class="card-body p-2">
            <div class="search-div">
                <form onsubmit="return false;">
                    <div class="row">
                        <div class="col-12 col-md-4 pe-0">
                            <input type="text" id="search_input" class="form-control form-control-sm" placeholder="Search field here...">
                        </div>
                        <div class="col-12 col-md-4 pe-0">
                            <select class="form-control form-control-sm" id="search_status">
                                <option value="all">All Status</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="float-end">
                                <button class="btn btn-light-blue btn-sm btn-search" id="search-btn" type="button">
                                    <i class="fa fa-search me-2"></i>Search
                                </button>
                                <button class="btn btn-light btn-sm btn-search" type="reset">
                                    <i class="fa fa-undo me-2"></i>Clear
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-bordered ajaxTable datatable datatable-data custom-table table-sm">
                <thead class="thead-bg">
                    <tr>
                        <th width="180">Created At</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th width="100">Status</th>
                        <th width="100">&nbsp;</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</x-admin.app-layout>


