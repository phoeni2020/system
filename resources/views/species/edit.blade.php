@extends('layouts.master')
@section('css')
    <!---Internal  Prism css-->
    <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
    <!--- Custom-scroll -->
    <link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <!-- div -->
            <div class="card mg-b-20" id="tabs-style3">
                <div class="card-body">
                    <div class="text-wrap">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="">
                                                <a href="" class="active" data-toggle="tab">
                                                    <i class="fa fa-laptop"></i>
                                                    {{__('trans.update')}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content active">
                                        <form action="{{route('species.update',$species->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-lg mb-3">
                                                <input class="form-control" name="name" value="{{$species->name}}" placeholder="{{__('trans.speciesname')}}" type="text">
                                                @error('name')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg mb-3">
                                                <input class="form-control" name="qty_weight" value="{{$species->qty_weight}}" placeholder="{{__('trans.speciesqtyweight')}}" type="number">
                                                @error('qty_weight')
                                                    <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg mb-3">
                                                <input class="form-control" name="qty_no" value="{{$species->qty_no}}" placeholder="{{__('trans.speciesqtyno')}}" type="number">
                                                @error('qty_no')
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg mb-3">
                                                <input class="form-control" name="price_all" value="{{$species->price_all}}" placeholder="{{__('trans.speciesallprice')}}" type="number">
                                                @error('price_all')
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg mb-3">
                                                <input class="form-control" name="price" value="{{$species->price}}" placeholder="{{__('trans.speciesprice')}}" type="number">
                                                @error('price')
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-lg m-3">
                                                    <input class="btn btn-primary mt-3 mb-0" type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /div -->
    </div>

    <!-- /row -->
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Internal Input tags js-->
    <script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>
    <!--- Tabs JS-->
    <script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
    <script src="{{URL::asset('assets/js/tabs.js')}}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
    <!-- Internal Prism js-->
    <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection
