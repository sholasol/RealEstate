<div class="page-sidebar-inner">
    <div class="page-sidebar-menu">
        <ul class="accordion-menu">
            <!-- <li class="open active">
                <a href=""><i data-feather="home"></i>
                    <span>Dashboard</span><span class="badge badge-info ft-right">Hot</span></a>
            </li> -->
            <li class="@if(Request::segment(2) =='dashboard') active @endif">
                <a href="{{ url('admin/dashboard') }}"><i data-feather="home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="@if(Request::segment(2) =='property_type') active @endif">
                <a href="{{ url('admin/property_type') }}"><i data-feather="server"></i>
                    <span>Property Type</span></a>
            </li>
            <li class="@if(Request::segment(2) =='all') active @endif">
                <a href="{{ url('amenity/all') }}"><i data-feather="file"></i>
                    <span>Amenity</span></a>
            </li>
            <li>
                <a href=""><i data-feather="list"></i>
                    <span>Role & Permission </span></a>
                <ul class="sub-menu">
                    <li class="@if(Request::segment(2) =='permissions') active @endif"><a href="{{url('permission/permissions')}}">Permissions</a>
                    </li>
                    <li class="@if(Request::segment(2) =='roles') active @endif"><a href="{{url('role/roles')}}">Roles</a></li>
                </ul>
            </li>
            <!-- <li class="@if(Request::segment(2) =='employees') active @endif">
                <a href="{{ url('admin/employees') }}"><i data-feather="users"></i>
                    <span>Employees</span></a>
            </li>
            
            <li class="@if(Request::segment(2) =='department') active @endif">
                <a href="{{ url('admin/department') }}"><i data-feather="home"></i>
                    <span>Department</span></a>
            </li>
            <li class="@if(Request::segment(2) =='country') active @endif">
                <a href="{{ url('admin/country') }}"><i data-feather="globe"></i>
                    <span>Country</span></a>
            </li>
            <li class="@if(Request::segment(2) =='location') active @endif">
                <a href="{{ url('admin/location') }}"><i data-feather="compass"></i>
                    <span>Location</span></a>
            </li>
            <li class="@if(Request::segment(2) =='region') active @endif">
                <a href="{{ url('admin/region') }}"><i data-feather="map"></i>
                    <span>Regions</span></a>
            </li> -->
        </ul>
    </div>
</div>