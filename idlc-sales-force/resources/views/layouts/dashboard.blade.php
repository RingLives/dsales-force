@extends('layouts.plane')
@section('body')
 <div id="wrapper">

        <header class="main-header">
                    <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="{{ route ('dashboard_view') }}"></a> -->
                </div>
                <!-- /.navbar-header -->


                <ul class="nav navbar-top-links navbar-right ">
{{--                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>

                                            <div>
                                            @include('widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'40'))
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>

                                            <div>
                                            @include('widgets.progress', array('animated'=> true, 'class'=>'info', 'value'=>'20'))
                                                <span class="sr-only">20% Complete</span>
                                            </div>

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>

                                            <div>
                                            @include('widgets.progress', array('animated'=> true, 'class'=>'warning', 'value'=>'60'))
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>

                                            <div>
                                            @include('widgets.progress', array('animated'=> true,'class'=>'danger', 'value'=>'80'))
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown --> --}}

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{{ Route('user_profile_view') }}"><i class="fa fa-user fa-fw"></i>

                                {{ Auth::user()->first_name }}


                             </a>
                            </li>

{{--                             <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> --}}
                            </li>
                            <li class="divider"></li>
                            <li>

                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

            <div class="navbar-default sidebar main-sidebar" role="navigation" style="background-color: #222d32;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <li {{ (Request::is('*dashboard') ? 'class="active "' : '') }}>
                            <a href="{{ Route ('dashboard_view') }}"><i class="fas fa-tachometer-alt"></i>{{ trans('others.dashboard_label') }}</a>
                            {{-- <a href="{{ Route ('dashboard_view') }}"><i class="fa fa-dashboard fa-fw"></i> {{trans('others.mxp_dashboard')}}</a> --}}
                      </li>


                        @if(!is_array(session()->get('UserMenus')) || is_object(session()->get('UserMenus')) )
                                <script type="text/javascript">
                                    window.location = "{{ url('/dashboard') }}";
                                </script>
                        @else

                                @foreach(session()->get('UserMenus') as $sl=>$menu)
                                <li class="treeview menu-open">
                                    <a href="#"><i class="fa fa-cogs"></i>  {{$menu['name']}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">

                                        @if($menu['subMenu'])
                                            @foreach($menu['subMenu'] as $sl=>$sub_menu)
                                            @php
                                                $explode_route = explode("_",$sub_menu['route_name']);
                                                $action_route = $explode_route[count($explode_route)-1];
                                            @endphp

                                                    @if($action_route!='action')

                                                    <!-- {{($sub_menu['route_name'] == 'new_application_view') ? '_blank' :''}} -->

                                                        <li class="{{ (Route::current()->getName() == $sub_menu['route_name']) ? 'active' : '' }}">

                                                            <a 
                                                            href="{{ ($sub_menu['route_name'])? Route($sub_menu['route_name']) : '' }}" 

                                                            target="{{($sub_menu['route_name'] == 'new_application_view') ? '_blank' :''}}"
                                                            ><i class="far fa-circle"></i>{{$sub_menu['name']}}</a>


                                                            <!-- <a 
                                                            href="{{ ($sub_menu['route_name'])? Route($sub_menu['route_name']):'' }}" 
                                                            target="{{($sub_menu['route_name'] == 'new_application_view') ? '_blank' :''}}"
                                                            >{{$sub_menu['name']}}</a> -->

                                                             </li>
                                                    @endif

                                            @endforeach
                                            <!-- /.nav-second-level -->
                                        </li>
                                    @endif
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                @endforeach

                        @endif




                        {{-- <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> --}}

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </header>



        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <div class="header-title">
                        <h2 class="page-header">@yield('page_heading')</h2>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="">
                <div class="col-sm-12 main-content">
                        @yield('section')	
                </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop


