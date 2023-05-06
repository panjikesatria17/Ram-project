@extends('admin.layouts-admin.master')
@section('title','Data Nasabah')
@push('css')
    <!-- Layout config Js -->
    <script src="{{ asset('template/assets/js/layout.js') }}"></script>
@endpush
@include('admin.layouts-admin.sidebar')
@section('page-title','Tambah Data Nasabah')
@section('page-sub')
@section('content')
<div class="container justify-content-center">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Edit Data Form</h4>
            <div class="flex-shrink-0">
            </div>
        </div><!-- end card header -->
        <div class="card-body">      
            <div class="live-preview">
                <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">User</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="user" class="form-control" id="nameInput" placeholder="" value="{{ $data->user }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Customer name</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="customer_name" class="form-control" id="nameInput" placeholder="" value="{{ $data->customer_name }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nameInput" class="form-label">Tempat Lahir</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="nameInput" placeholder="" value="{{ $data->tempat_lahir }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" name="tgl_lahir" class="form-control" id="nameInput" placeholder="" value="{{ $data->tgl_lahir }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nameInput" class="form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="nameInput" placeholder="" value="{{ $data->jenis_kelamin }}">
                            </div>
                            </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">No Loans</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="number" name="no_loan" class="form-control" id="nameInput" placeholder="" value="{{ $data->no_loan }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Limit</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="limit" class="form-control" id="nameInput" placeholder="" value="{{ $data->limit }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Esa</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="esaving_asset" class="form-control" id="nameInput" placeholder="" value="{{ $data->esaving_asset }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Recovery Rate</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="recovery_rate" class="form-control" id="nameInput" placeholder="" value="{{ $data->recovery_rate }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Balance</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="balance" class="form-control" id="nameInput" placeholder="" value="{{ $data->balance }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Min Paid</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="min_paid" class="form-control" id="nameInput" placeholder="" value="{{ $data->min_paid }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Bank</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="bank" class="form-control" id="nameInput" placeholder="" value="{{ $data->bank }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Type</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="type" class="form-control" id="nameInput" placeholder="" value="{{ $data->type }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Area</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="area" class="form-control" id="nameInput" placeholder="" value="{{ $data->area }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Open Date</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" name="open_date" class="form-control" id="nameInput" placeholder="" value="{{ $data->open_date }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Wo Date</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" name="wo_date" class="form-control" id="nameInput" placeholder="" value="{{ $data->wo_date }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Last Payment Date</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" name="last_payment_date" class="form-control" id="nameInput" placeholder="" value="{{ $data->last_payment_date }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Last Ammount Paid</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="last_amount_paid" class="form-control" id="nameInput" placeholder="" value="{{ $data->last_amount_paid }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Last Contact</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" name="last_contak" class="form-control" id="nameInput" placeholder="" value="{{ $data->last_contak }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Email Customer</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="email_customer" class="form-control" id="nameInput" placeholder="" value="{{ $data->email_customer }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Alamat Rumah 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="alamat_rumah1" class="form-control" id="nameInput" placeholder="" value="{{ $data->alamat_rumah1 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Alamat Rumah 2</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="alamat_rumah2" class="form-control" id="nameInput" placeholder="" value="{{ $data->alamat_rumah2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Alamat Rumah 3</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="alamat_rumah3" class="form-control" id="nameInput" placeholder="" value="{{ $data->alamat_rumah3 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kelurahan</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kelurahan" class="form-control" id="nameInput" placeholder="" value="{{ $data->kelurahan }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kecamatan</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kecamatan" class="form-control" id="nameInput" placeholder="" value="{{ $data->kecamatan }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kota</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kota" class="form-control" id="nameInput" placeholder="" value="{{ $data->kota }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kode Pos</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kode_pos" class="form-control" id="nameInput" placeholder="" value="{{ $data->kode_pos }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Telp Rumah 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="telp_rumah1" class="form-control" id="nameInput" placeholder="" value="{{ $data->telp_rumah1 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Telp Rumah 2</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="telp_rumah2" class="form-control" id="nameInput" placeholder="" value="{{ $data->telp_rumah2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Mobile Phone 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="mobile_phone1" class="form-control" id="nameInput" placeholder="" value="{{ $data->mobile_phone1 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Mobile Phone 2</label></label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="mobile_phone2" class="form-control" id="nameInput" placeholder="" value="{{ $data->mobile_phone2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Nama Perusahaan </label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="nama_perusahaan" class="form-control" id="nameInput" placeholder="" value="{{ $data->nama_perusahaan }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Alamat Kantor 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="alamat_kantor1" class="form-control" id="nameInput" placeholder="" value="{{ $data->alamat_kantor1 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Alamat Kantor 2</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="alamat_kantor2" class="form-control" id="nameInput" placeholder="" value="{{ $data->alamat_kantor2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Alamat Kantor 3</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="alamat_kantor3" class="form-control" id="nameInput" placeholder="" value="{{ $data->alamat_kantor3 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kelurahan Kantor</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kelurahan_off" class="form-control" id="nameInput" placeholder="" value="{{ $data->kelurahan_off }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kecamatan Kantor</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kecamatan_off" class="form-control" id="nameInput" placeholder="" value="{{ $data->kecamatan_off }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kota Kantor</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kota_off" class="form-control" id="nameInput" placeholder="" value="{{ $data->kota_off }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Kode Pos Kantor</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="kode_posoff" class="form-control" id="nameInput" placeholder="" value="{{ $data->kode_posoff}}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Jabatan</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="jabatan" class="form-control" id="nameInput" placeholder="" value="{{ $data->jabatan}}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Telp Kantor 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="office_phone1" class="form-control" id="nameInput" placeholder="" value="{{ $data->office_phone1 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Telp kantor 2</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="office_phone2" class="form-control" id="nameInput" placeholder="" value="{{ $data->office_phone2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Nama Ibu Kandung</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="nama_ibukandung" class="form-control" id="nameInput" placeholder="" value="{{ $data->nama_ibukandung }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Emergency Kontak</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="emergency_kontak" class="form-control" id="nameInput" placeholder="" value="{{ $data->emergency_kontak}}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Hubungan</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="relation" class="form-control" id="nameInput" placeholder="" value="{{ $data->relation }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Econ Phone 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="econ_phone1" class="form-control" id="nameInput" placeholder="" value="{{ $data->econ_phone1}}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Econ Phone 2</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="econ_phone2" class="form-control" id="nameInput" placeholder="" value="{{ $data->econ_phone2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Total Action</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="total_action" class="form-control" id="nameInput" placeholder="" value="{{ $data->total_action }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Last Action</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="last_action" class="form-control" id="nameInput" placeholder="" value="{{ $data->last_action }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Finance Analys</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="finance_analys" class="form-control" id="nameInput" placeholder="" value="{{ $data->finance_analys}}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Paid Rasio</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="paid_rasio" class="form-control" id="nameInput" placeholder="" value="{{ $data->paid_rasio }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Total Payment</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="total_payment" class="form-control" id="nameInput" placeholder="" value="{{ $data->total_payment }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Last Pay Active</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="last_payactive" class="form-control" id="nameInput" placeholder="" value="{{ $data->last_payactive }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Last Date Aktive</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" name="last_dateactive" class="form-control" id="nameInput" placeholder="" value="{{ $data->last_dateactive }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Type Program</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="type_program" class="form-control" id="nameInput" placeholder="" value="{{ $data->type_program }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Expired Status</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="expired_status" class="form-control" id="nameInput" placeholder="" value="{{ $data->expired_status }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Update Payment</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="update_payment" class="form-control" id="nameInput" placeholder="" value="{{ $data->update_payment }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Coll 1</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="coll1" class="form-control" id="nameInput" placeholder="" value="{{ $data->coll1 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Coll 2</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="coll2" class="form-control" id="nameInput" placeholder="" value="{{ $data->coll2 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Coll 3</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="coll3" class="form-control" id="nameInput" placeholder="" value="{{ $data->coll3 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Cool 4</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="coll4" class="form-control" id="nameInput" placeholder="" value="{{ $data->coll4 }}">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Coll 5</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="coll5" class="form-control" id="nameInput" placeholder="" value="{{ $data->coll5 }}">
                        </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!--end row-->
@endsection
@include('admin.layouts-admin.footer')
@include('admin.layouts-admin.setting')
@push('js')
     <!-- prismjs plugin -->
     <script src="{{ asset('template/assets/libs/prismjs/prism.js') }}"></script>
@endpush