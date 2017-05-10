<div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella DHV</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/src/admin/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/trang-chu" target="_blank">View Website</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/pages/add">Add New</a></li>
                      <li><a href="/admin/pages">All Pages</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/category/add">Add New</a></li>
                      <li><a href="/admin/category">All Category</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Articels <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/articels/add">Add New</a></li>
                      <li><a href="/admin/articels">All Articels</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Utilitys <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/utilitys/add">Add New</a></li>
                      <li><a href="/admin/utilitys">All Utilitys</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Customers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/customers">All Customers</a></li>
                      <li><a href="/admin/customers/#">Statics Date</a></li>
                      <li><a href="/admin/customers/#">Statics Month</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Galary <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/slide/add">Add New</a></li>
                      <li><a href="/admin/slide">All slide</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Members <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/members/add">Add New</a></li>
                      <li><a href="/admin/members">All members</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>