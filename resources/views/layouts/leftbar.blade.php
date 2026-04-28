<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="assets/img/logo.png" class="img-fluid" alt="logo" style="max-width:20% ;"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="assets/img/logo.png" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="/">
                        <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span></i>
                    </a>
                </li>
                <li>
                    <a href="{{route ('pegawai') }}">
                        <img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Data Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="{{route ('jenis') }}">
                        <img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Jenis ASN</span>
                    </a>
                </li>

                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/pages.svg" class="img-fluid" alt="pages"><span>Cetak Kartu</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li>
                            <a href="{{route ('bykode') }}">Berdasarkan Kode Cetak</i></a>
                        </li>
                        <li>
                            <a href="{{route ('bynip') }}">Berdasarkan NIP</i></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route ('tandaterima') }}">
                        <img src="assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="form_elements"><span>Cetak Tanda Terima</span>
                    </a>
                </li>
                <li>
                    <a href="{{route ('logout') }}">
                        <img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="form_elements"><span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>