
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box mt-4 mb-3">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('template/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('template/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('template/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('template/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="bx bxs-dashboard"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            
                            <li class="nav-item">
                                <a href="/dashboardadmin" target="_self" class="nav-link" data-key="t-vertical">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/user" class="nav-link" data-key="t-analytics"> User</a>
                            </li>
                            <li class="nav-item">
                                <a href="/roles" class="nav-link" data-key="t-crm"> Roles </a>
                            </li>
                            <li class="nav-item">
                                <a href="/succes_rate" class="nav-link" data-key="t-ecommerce"> Succes Rate </a>
                            </li>
                            <li class="nav-item">
                                <a href="/inventory_ratio" class="nav-link" data-key="t-crypto"> KPI Rate </a>
                            </li>
                            <li class="nav-item">
                                <a href="/inventory_ratio" class="nav-link" data-key="t-crypto"> Rencana Kerja</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->               
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="bx bx-layout"></i> <span data-key="t-layouts">Asset On Proses</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/datanasabah" target="_self" class="nav-link" data-key="t-vertical">New Asset</a>
                            </li>
                            <li class="nav-item">
                                <a href="/oneextanded" target="_self" class="nav-link" data-key="t-detached">Extend Handle 1st</a>
                            </li>
                            <li class="nav-item">
                                <a href="/twoextanded" target="_self" class="nav-link" data-key="t-two-column">Extend Handle 2nd</a>
                            </li>
                            <li class="nav-item">
                                <a href="/assetptp" target="_self" class="nav-link" data-key="t-hovered">Asset PTP</a>
                            </li>
                            <li class="nav-item">
                                <a href="/extandedptp" target="_self" class="nav-link" data-key="t-hovered">Extend PTP </a>
                            </li>
                            <li class="nav-item">
                                <a href="/returnasset" target="_self" class="nav-link" data-key="t-hovered">Return Asset</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAom">
                        <i class="ri-line-chart-fill"></i> <span data-key="t-aom">Asset On Maintenance</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAom">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/dataonproces" target="_self" class="nav-link" data-key="t-vertical">Current Asset</a>
                            </li>
                            <li class="nav-item">
                                <a href="/assetbpone" target="_self" class="nav-link" data-key="t-detached">Asset BP1</a>
                            </li>
                            <li class="nav-item">
                                <a href="/assetbptwo" target="_self" class="nav-link" data-key="t-two-column">Asset BP2</a>
                            </li>
                            <li class="nav-item">
                                <a href="/currentassetwo" target="_self" class="nav-link" data-key="t-hovered">Current Asset WO</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="bx bx-layer"></i> <span data-key="t-apps">Ruang Kerja</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarPaid" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPaid" data-key="t-paid">
                                    Klaim Komisi
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPaid">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Tambah Asset </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Request Asset </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce"> Tambah Asset
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarRqas" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRqas" data-key="t-rqas"> Request Asset
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarRqas">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarChat" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarChat" data-key="t-chat"> Chat
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarChat">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email"> Email
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarFinance" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFinance" data-key="t-finance"> Finance
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarFinance">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->