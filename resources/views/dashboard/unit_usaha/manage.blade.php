@extends('layouts.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Manage'])
			<li><a href="{{ route("home") }}">Dashboard</a></li>
			<li><a href="{{ route("tour_type.index") }}">Tours</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-12 col-md-10 text-muted">
                                        {{ $tour->name }} <span class="label label-info m-l-5">Manage</span>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <a href="#" style="text-transform: none" target="_blank" class="btn btn-primary waves-effect waves-light">
                                            <span
                                                class="btn-label"><i class="zmdi zmdi-eye"></i>
                                            </span>Preview Tour
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                    <div class="panel-body" style="padding: 0 4px 25px">
                                        {{-- Navigation Tab --}}
                                        <ul class="nav customtab nav-tabs" role="tablist">
                                            <li role="presentation" class="nav-item">
                                                <a href="#tab1" class="nav-link active" role="tab" data-toggle="tab">
                                                    <i class="zmdi zmdi-file-text m-r-10"></i>Description
                                                </a>
                                            </li>
                                            <li role="presentation" class="nav-item">
                                                <a href="#tab2" id="btnTab2" class="nav-link" role="tab" data-toggle="tab">
                                                    <i class="zmdi zmdi-money m-r-10"></i>Prices
                                                </a>
                                            </li>
                                            <li role="presentation" class="nav-item">
                                                <a href="#tab3" class="nav-link" role="tab" data-toggle="tab">
                                                    <i class="zmdi zmdi-collection-image m-r-10"></i>Pictures
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- Tab Pane --}}
                                        <div class="tab-content" style="padding: 0 25px">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab1">
                                                {{-- Description --}}
                                                <div class="m-b-20">
                                                    <button id="btnUpdateDesc" class="btn btn-success waves-effect waves-light">
                                                        <span class="btn-label"><i class="zmdi zmdi-refresh"></i>
                                                        </span> Update Description
                                                    </button>
                                                </div>
                                                <textarea id="summernoteDesc" name="description">
                                                    {!! $tour->description !!}
                                                </textarea>
                                                {{-- /Description --}}
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="m-b-20">
                                                    <button id="btnAddPrice" class="btn btn-success waves-effect waves-light">
                                                        <span class="btn-label"><i class="zmdi zmdi-plus"></i>
                                                        </span> Add New Price
                                                    </button>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-sm" id="tablePrices">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nominal</th>
                                                                <th class="text-center">Per</th>
                                                                <th class="text-center">Currency</th>
                                                                <th class="text-center">Type</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                                <div class="col-md-6">
                                                    <h3>Lets check profile 3</h3>
                                                    <h4>you can use it with the small code</h4>
                                                </div>
                                                <div class="col-md-5 pull-right">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
					</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
    @include('dashboard.inc.footer')
</div>


<div id="modalAddPrice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="zmdi zmdi-close"></i></button>
                <h4 class="modal-title text-white" id="myModalLabel">New Price</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2">Type</label>
                    <div class="col-sm-12 col-md-10">
                        <select id="newPriceTypeId" class="form-control">
                            @foreach($price_types as $price_type)
                                <option value="{{ $price_type->id }}">
                                    {{ $price_type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2">Nominal</label>
                    <div class="col-sm-12 col-md-10">
                        <input name="nominal" id="newNominal" type="text" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2">Per</label>
                    <div class="col-sm-12 col-md-10">
                        <input id="newPer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2">Currency</label>
                    <div class="col-sm-12 col-md-5">
                        <select id="newCurrency" class="form-control">
                            <option>IDR</option>
                            <option>USD</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btnStorePrice" type="button" class="btn btn-primary waves-effect" data-dismiss="modal">
                    <span class="btn-label"><i class="zmdi zmdi-save"></i></span> Save New Price
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



@endsection

@section('css')
<link href="{{ plugins('bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
<link href="{{ plugins('bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script>
    let TOUR_ID = {{ $tour->id }}
</script>
<script src="{{ plugins('bower_components/autonumeric/autonumeric.min.js') }}"></script>
<script src="{{ plugins('bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ plugins('bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ plugins('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/manage.js') }}"></script>
@endsection