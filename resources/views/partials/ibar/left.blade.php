<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{route('home')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
            </span>
        </a>
        <a href="{{route('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link menu-link" href="{{route('home')"><i class="bx bxs-dashboard"></i> <span data-key="t-dashboards">Dashboard</span></>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="bx bx-user-circle"></i> <span data-key="t-apps">User Management</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <router-link href="/ums/staffs" class="nav-link" data-key="t-calendar"> Staffs </router-link>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                    Email
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">
                                                Email Templates
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action"> Basic Action </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action"> Ecommerce Action </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce"><i class="bx bx-layer"></i> Inventory Management
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <router-link to="/inventory/products" class="nav-link" data-key="t-products"> Products </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/inventory/orders" class="nav-link" data-key="t-orders"> Orders </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/inventory/customers" class="nav-link" data-key="t-customers"> Customers </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/inventory/vendors" class="nav-link" data-key="t-sellers"> Vendors </router-link>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarPOS" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPOS" data-key="t-POS"><i class="bx bx-layer"></i> Point of Sale
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPOS">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <router-link to="/pos/orders" class="nav-link" data-key="t-orders"> Orders </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/pos/order-points" class="nav-link" data-key="t-customers"> Order Point </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/inventory/vendors" class="nav-link" data-key="t-sellers"> Reports </router-link>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>