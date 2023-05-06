@extends('admin.layouts-admin.master')
@section('title','Data Nasabah')
@push('css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush
@include('admin.layouts-admin.sidebar')
@section('page-title','Return Asset')
@section('page-sub')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Return Asset</h5>
                  <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="ri-upload-2-fill me-1 align-bottom"></i> Import Data
            </button>
            <a href="/exportexcel" class="btn btn-danger waves-effect waves-light mt-3"><i class=" ri-download-2-fill me-1 align-bottom"></i>Export Excel</a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/importexcel" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                    <div class="form-group">
                        <input type="file" name="file" required>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
                </div> --}}
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>No Loans</th>
                            <th>Full Name</th>
                            <th>Estimasi Saving Asset</th>
                            <th>Balance</th>
                            <th>Total Action</th>
                            <th>Last Action</th>
                            <th>Contact Score</th>
                            <th>Finance Analize</th>
                            <th>Paid Rasio</th>
                            <th>User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $no = 1;
                        @endphp
                        
                        @foreach ($data as $row)                                       
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><a href="#!">{{ $row->no_loan }}</a></td>
                                <td>{{ $row->customer_name }}</td>
                                <td>{{ $row->esaving_asset}}</td>                                       
                                <td>{{ $row->balance }}</td>
                                <td>{{ $row->col2 }}</td>
                                <td>{{ $row->col3 }}</td>
                                <td>{{ $row->col4 }}</td>                                       
                                <td>{{ $row->col5 }}</td>
                                <td>{{ $row->col1 }}</td>
                                <td>{{ $row->user }}</td>
                                <td>
                                    {{-- <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="/tambahdata" class="dropdown-item">
                                                <i class="ri-add-circle-fill align-bottom me-2 text-muted"></i>Tambah</a></li>
                                            <li><a href="#!" class="dropdown-item">
                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a href="/tampildata/{{ $row->id  }}" class="dropdown-item edit-item-btn">
                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                            <li>
                                                <a href="/delete/{{ $row->id }}" class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@include('admin.layouts-admin.footer')
@include('admin.layouts-admin.setting')
@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="{{ asset('template/assets/js/pages/datatables.init.js') }}"></script>
@endpush