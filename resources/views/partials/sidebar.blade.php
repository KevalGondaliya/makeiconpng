
<?php use Illuminate\Support\Facades\Auth; ?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php if(isset($saUserDetail)) { ?>
                <img src="<?php echo URL::to('/upload/'.$saUserDetail->image); ?>" alt="..." class="img-circle profile_img">
              <?php } ?></div>
              <div class="profile_info">
                <span>Welcome,</span>
                 <?php if(isset($saUserDetail)) { ?> <h2><?php echo $saUserDetail->name; ?></h2> <?php } ?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
               <!--  <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                </ul> -->
                 <ul class="nav side-menu">
                  <li><a style="padding-top: 10px; margin-bottom: 10px; padding-bottom: 10px;" href="{{ route('home') }}"><i class="fa fa-home"></i> Home </a>
                  </li>

                        @if (Auth::guest())
             <li><a href="{{ route('login') }}"
              style="padding-top: 10px; margin-bottom: 10px; padding-bottom: 10px;"><i class="fa fa-sign-in"></i> Login</a></li>
            @else
                   <li>   <a href="{{ route('logout') }}"   onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" style="padding-top: 10px; margin-bottom: 10px; padding-bottom: 10px;">
                                            <i class="fa fa-sign-out"></i> Log Out  </a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                  </form>
                 @endif
                  <li><a style="padding-top: 10px; margin-bottom: 10px; padding-bottom: 10px;"  href="{{ route('users.index') }}"><i class="fa fa-home"></i> User </a>
                  </ul>
                </li>
 

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
			
</div></div>
 <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
               <?php if(isset($saUserDetail)) { ?>
                    <img src="<?php echo 'upload/thumbnail_images/stamp_size/'.$saUserDetail->image; ?>"><?php echo $saUserDetail->name; ?>
                    <?php } ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li> 

                <a style="padding-top: 10px; margin-bottom: 10px; padding-bottom: 10px;" href="{{ action('UsersController@profile', ['id' => Auth::id() ]) }}">
                      Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
					
					@if (Auth::guest())
						 <li><a href="{{ route('login') }}">Login</a></li>
					  @else
                    <li>  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            	<i class="fa fa-sign-out pull-right"></i> Log Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
						   </li>
							   @endif
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
       
        <!-- /top navigation -->
        <?php // } ?>