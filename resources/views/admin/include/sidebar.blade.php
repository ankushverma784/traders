<nav id="sidebar">
         <ul class="list-unstyled components">
                <li class="heading">
                    <a href="{{url('/admin')}}">
                        <span class="dashboard-menu">Navigation</span> Menu
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin')}}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="dashboard-menu">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex">
                        <i class="fas fa-user-tie dropdown-option"></i>
                        <span class="dropdown-txt">Customer</span>
                        <i class="fas fa-angle-right d-flex align-items-center justify-content-center"></i>
                    </a>
                    <ul class="collapse list-unstyled dropdown-sidenav" id="pageSubmenu1">
                        <li>
                            <a href="{{url('/admin/customer/create')}}">Add Customer</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/customer')}}">Manage Customer</a>
                        </li>
                        {{-- <li>
                            <a href="{{url('/admin/customer/tranaddnewproductsaction')}}">Transaction History</a>
                        </li> --}}
                       
                            {{-- <a href="{{url('/admin/customer/')}}">Manage Payment</a> --}}
                        
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="dropdown-txt">Sales</span>
                        <i class="fas fa-angle-right d-flex align-items-center justify-content-center"></i>
                    </a>
                    <ul class="collapse list-unstyled dropdown-sidenav" id="pageSubmenu2">
                        <li>
                            <a href="{{url('/admin/sale/create')}}">Add Sale</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/sale')}}">Manage Sale</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex">
                        <i class="fas fa-users-cog dropdown-option"></i>
                        {{-- <i class="fa fa-inr" aria-hidden="true"></i> --}}
                        <span class="dropdown-txt">Suplier</span>
                        <i class="fas fa-angle-right d-flex align-items-center justify-content-center"></i>
                    </a>
                    <ul class="collapse list-unstyled dropdown-sidenav" id="pageSubmenu3">
                        <li>
                            <a href="{{url('/admin/suplier/create')}}">Add Supplier</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/suplier')}}">Manage Supplier</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/suplier/transaction')}}">Transaction History</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex">
                        <i class="fas fa-users-cog dropdown-option"></i>
                        {{-- <i class="fa fa-inr" aria-hidden="true"></i> --}}
                           <span class="dropdown-txt">Purchase</span>
                        <i class="fas fa-angle-right d-flex align-items-center justify-content-center"></i>
                    </a>
                    <ul class="collapse list-unstyled dropdown-sidenav" id="pageSubmenu6">
                        
                        <li>
                            <!-- {{-- <a href="{{url('/admin/purchase/payemnt')}}">Manage Payment</a> --}} -->
                        </li>
                        <li>
                            <a href="{{url('/admin/purchase/create')}}">Purchase Material</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/purchase')}}">Manage Purchase</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex">
                        <i class="fa fa-handshake" aria-hidden="true"></i>
                        <span class="dropdown-txt">Aggrement</span>
                        <i class="fas fa-angle-right d-flex align-items-center justify-content-center"></i>
                    </a>
                    <ul class="collapse list-unstyled dropdown-sidenav" id="pageSubmenu4">
                        <li>
                            <a href="{{url('/admin/agreement/create')}}">Add Aggrement</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/agreement')}}">Manage Aggrement</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/management')}}">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                        <span class="dashboard-menu">Stock Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/message')}}">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <span class="dashboard-menu">Send Message Info</span>
                    </a>
                </li>


                <li>
                    <a href="{{url('/admin/addVehicle')}}">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <span class="dashboard-menu">Add Vehicle</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="{{url('/admin/addVehicle/update')}}">
                        </i><i class="fas fa-edit"></i>
                        <span class="dashboard-menu"> Update Vehicle Data</span>
                    </a>
                </li> -->
          
                <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex">
                        <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                        <span class="dropdown-txt">Challan</span>
                        <i class="fas fa-angle-right d-flex align-items-center justify-content-center"></i>
                    </a>
                    <ul class="collapse list-unstyled dropdown-sidenav" id="pageSubmenu5">
                        <li>
                            <a href="{{url('/admin/challan/create')}}">Add Challan</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/challan')}}">Manage challan</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{url('/admin/addPolicy')}}">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <span class="dashboard-menu">Add Policy</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/tax')}}">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <span class="dashboard-menu"> Add Tax</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="dashboard-menu"> Sign Out</span>
                    </a>
                </li> --}}
            </ul>
        </nav>


                        