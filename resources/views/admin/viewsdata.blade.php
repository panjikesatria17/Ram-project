@extends('admin.layouts-admin.master')
@section('title','Data Nasabah')
@push('css')
    <!-- Layout config Js -->
    <script src="{{ asset('template/assets/js/layout.js') }}"></script>
    <!-- jsvectormap css -->
    <link href="{{ asset('template/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('template/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@include('admin.layouts-admin.sidebar')
@section('page-title','views Data Nasabah')
@section('page-sub')
@section('content')
<div class="main-content">

            <div class="row justify-contentgit">
                <div class="col-xxl-10">
                    <div class="card" id="demo">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-header border-bottom-dashed p-4">
                                    <div class="d-flex">
                                        @foreach ($data as $row)
                                        <div class="flex-grow-1">
                                          <h4 class="fs-16 mb-1">Selamat Datang | {{ $row->user }} | {{ date('d F Y') }}</h4>

                                        <div class="container mt-5">
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                  <div class="table-responsive">
                                                      <table class="table">
                                                          <thead class="table-light">
                                                              <tr>
                                                                <th colspan="2" class="text-center">Billing Information</th>
                                                                </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td>Customer Name</td>
                                                              <td>{{ $row->customer_name }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Tempat Lahir</td>
                                                              <td>{{ $row->tempat_lahir }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Tanggal Lahir</td>
                                                              <td>{{ $row->tgl_lahir }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Jenis Kelamin</td>
                                                              <td>{{ $row->jenis_kelamin }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>No Loans</td>
                                                              <td>{{ $row->no_loan }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Limit</td>
                                                              <td>{{ $row->limit }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Balance</td>
                                                              <td>{{ $row->balance }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Minimum Paid</td>
                                                              <td>{{ $row->min_paid }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Type</td>
                                                              <td>{{ $row->type }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Area</td>
                                                              <td>{{ $row->area }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Open Date</td>
                                                              <td>{{ $row->open_date }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Wo Date</td>
                                                              <td>{{ $row->wo_date }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Last Paid Date</td>
                                                              <td>{{ $row->last_payment_date }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Last Ammount Paid</td>
                                                              <td>{{ $row->last_amount_paid }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Last Contact</td>
                                                              <td>{{ $row->last_contak }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Asset Assignment</td>
                                                              <td>{{ $row->created_at }}</td>
                                                            </tr>
                                                          </tbody>
                                                          <!---next information-->                                                        
                                                          <thead class="table-light mt-3">
                                                            <tr>
                                                              <th colspan="2" class="text-center">Hasil Pekerjaan</th>
                                                              </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>Total Action</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Last Action</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Total Payment </td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>LPD by User</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>LP Date BU</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Expired Status</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Est Saving Asset</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Contact Score</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Finance Score</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Closing Rate</td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Total Payment </td>
                                                            <td>null</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Recovery Rate</td>
                                                            <td>null</td>
                                                          </tr>
                                                        </tbody>                                                           
                                                        </table>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="table-light">
                                                                <tr>
                                                                  <th colspan="2" class="text-center">Billing Address</th>
                                                                  </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Alamat  </td>
                                                                <td>{{ $row->alamat_rumah1 }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Alamat Lengkap</td>
                                                                <td>{{ $row->alamat_rumah2 }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>-</td>
                                                                <td>{{ $row->alamat_rumah3 }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Kelurahan</td>
                                                                <td>{{ $row->kelurahan }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Kecamatan</td>
                                                                <td>{{ $row->kecamatan }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Provinsi</td>
                                                                <td>{{ $row->kota }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Kode Pos</td>
                                                                <td>{{ $row->kode_pos }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Home Phone</td>
                                                                <td>{{ $row->telp_rumah1 }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Mobile Phone</td>
                                                                <td>{{ $row->mobile_phone1 }}</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Email</td>
                                                                <td>{{ $row->email_customer }}</td>
                                                              </tr>
                                                            </tbody>
                                                            <thead class="table-light mt-3">
                                                              <tr>
                                                                <th colspan="2" class="text-center">Emergency Contact</th>
                                                                </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td>Nama Ibu</td>
                                                              <td>{{ $row->nama_ibukandung }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Econ Name</td>
                                                              <td>{{ $row->emergency_kontak }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Hubungan</td>
                                                              <td>{{ $row->relation }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Home Phone</td>
                                                              <td>{{ $row->econ_phone1 }}</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Mobile Phone</td>
                                                              <td>{{ $row->econ_phone2 }}</td>
                                                            </tr>
                                                          </tbody>
                                                          <thead class="table-light mt-3">
                                                            <tr>
                                                              <th colspan="2" class="text-center">Office Address</th>
                                                              </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>Nama Perusahaan</td>
                                                            <td>{{ $row->nama_perusahaan }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Alamat  </td>
                                                            <td>{{ $row->alamat_kantor1 }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>-</td>
                                                            <td>{{ $row->alamat_kantor2 }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>-</td>
                                                            <td>{{ $row->alamat_kantor3 }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Kelurahan</td>
                                                            <td>{{ $row->kelurahan_off }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Kecamatan</td>
                                                            <td>{{ $row->kecamatan_off }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Kota</td>
                                                            <td>{{ $row->kota_off }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Kode Pos</td>
                                                            <td>{{ $row->kode_posoff }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Jabatan</td>
                                                            <td>{{ $row->jabatan }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Nomor Telp 1</td>
                                                            <td>{{ $row->office_phone1 }}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Nomor Telp 2</td>
                                                            <td>{{ $row->office_phone2 }}</td>
                                                          </tr>
                                                        </tbody>                                                            
                                                          </table>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="table-responsive">
                                                          <table class="table">
                                                              <thead class="table-light">
                                                                  <tr>
                                                                  <th>Billing Information</th>
                                                                  <th>Billing Information</th>
                                                                  <th>Billing Information</th>
                                                                  <th>Billing Information</th>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                    <td>
                                                                      <div class="col-lg-6">
                                                                        <select class="form-select mb-4" aria-label="Default select example">
                                                                            <option selected>Select your Status </option>
                                                                            <option value="1">Declined Payment</option>
                                                                            <option value="2">Delivery Error</option>
                                                                            <option value="3">Wrong Amount</option>
                                                                        </select>
                                                                    </div>
                                                                    </td>
                                                                </tr>
                                                              </tbody>
                                                              <thead class="table-light">
                                                                <tr>
                                                                  <th>Billing Information</th>
                                                                  <th>Billing Information</th>
                                                                  <th>Billing Information</th>
                                                                  <th>Billing Information</th>
                                                                  </tr>
                                                            </thead>                                                         
                                                            </table>
                                                        </div>
                                                      </div>                                                           
                                        @endforeach
                                                                 
                        </div><!--end row-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
</div><!-- end main content-->
</div>
<!--end row-->
@endsection
@include('admin.layouts-admin.footer')
@include('admin.layouts-admin.setting')
@push('js')
     <!-- prismjs plugin -->
     <script src="{{ asset('template/assets/libs/prismjs/prism.js') }}"></script>
      <!-- apexcharts -->
    <script src="{{ asset('template/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('template/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('template/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('template/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
@endpush