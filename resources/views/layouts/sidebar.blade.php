<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu</li>
    <!-- Optionally, you can add icons to the links -->
    @if (Session::get('user_level') == 3 || Session::get('user_level') == 4  || Session::get('user_level') == 1)
    <li><a href="{{ url('/laporan') }}"><i class="fa fa-link"></i> <span>Laporan</span></a></li>
    @endif
    @if (Session::get('user_level') == 1)
    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Purchase Order</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ url('/purchase_order') }}">List Purchase Order</a></li>
        <li><a href="{{ url('/purchase_order/tambah') }}">Tambah Purchase Order</a></li>
        </ul>
    </li>
    @endif
    {{-- <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Invoice</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ url('/invoice') }}">List Invoice</a></li>
        <li><a href="{{ url('/invoice/tambah') }}">Tambah Invoice</a></li>
        </ul>
    </li> --}}
    @if (Session::get('user_level') == 2  || Session::get('user_level') == 1)
    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Pembayaran</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ url('/pembayaran') }}">List Pembayaran</a></li>
        @if (Session::get('user_level') == 2)
        <li><a href="{{ url('/pembayaran/tambah') }}">Tambah Pembayaran</a></li>
        @endif
        </ul>
    </li>
    @endif
    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ url('/users') }}">List Users</a></li>
        <li><a href="{{ url('/users/tambah') }}">Tambah Users</a></li>
        </ul>
    </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->