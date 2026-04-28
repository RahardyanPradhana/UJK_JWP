@section('title')
Orbiter - Datatable
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title">Jenis ASN</h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Jenis ASN</li>
        </ol>
      </div>
      <!-- MODAL ADD -->
      <!-- Modal EDIT -->
      <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis ASN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="{{route('create_jenis')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">

                <div class="form-group">
                  <label for="jenis">Jenis ASN</label>
                  <input type="text" id="data-jenis" class="form-control" id="data-jenis" name="jenis">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
        <button class="btn btn-primary-rgba" data-toggle="modal" data-target="#modal-add"><i class="feather icon-plus mr-2"></i>Tambah Jenis ASN</button>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
  <!-- Start row -->
  <div class="row">
    <!-- Start col -->
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title">Data Jenis ASN</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display table table-striped table-bordered" style="font-size:smaller;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis ASN</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jenis as $asn)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$asn->jenis}}</td>
                  <td>
                    <a type="button" class="btn btn-outline-warning btn-xs" data-toggle="modal" data-target="#modal-edit{{$asn->id}}" id="setedit">
                      <i class="fa fa-edit text-warning"></i>

                    </a>
                    <!-- Modal EDIT -->
                    <div class="modal fade" id="modal-edit{{$asn->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Jenis ASN</h5><br>
                            @php
                            $nip = str_replace(' ', '', $asn->jenis);
                            @endphp
                            {{-- @php
                            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                            @endphp --}}


                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form action="/jenis/{{$asn->id}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="modal-body">
                              
                              <div class="form-group">
                                <label for="jenis">Jenis ASN</label>
                                <input type="text" id="data-jenis" class="form-control" id="data-jenis" name="jenis" value="{{$asn->jenis}}">
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- <a href="/dashboard/{{$asn->id}}/edit" class='btn btn-outline-success btn-xs'><i class='fa fa-edit'></i></a> -->
                    <form action="/jenis/{{$asn->id}}" class="d-inline" method="post" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                      <input type="hidden" name="_method" value="delete">
                      <button type='submit' class='btn btn-outline-danger btn-xs'><i class='fa fa-trash'></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $jenis->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End col -->
  </div>
  <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')



<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
@endsection