<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" />

            </div>
            <div class="pull-left info">
                <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li><a href="{{ url(getLang()) }}"> <i class="fa fa-eye"></i> <span>Show page</span>
                </a></li>
            <li class="{{ setActive('admin') }}"><a href="{{ url(getLang() . '/admin') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a></li>
            </li>
            <li class="treeview {{ setActive('admin/news*') }}"><a href="#"> <i class="fa fa-th"></i> <span>Website</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                  <li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a>
                    <li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> Pages</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> News</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> Articles</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> Projects</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> Faq</a></li>

                </ul>
            </li>
            <li class="treeview {{ setActive(['admin/user*', 'admin/group*']) }}"><a href="#"> <i class="fa fa-user"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive(['admin/logs*', 'admin/form-post']) }}"><a href="#"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a target="_blank" href="{{ url(getLang() . '/admin/logs') }}"><i class="fa fa-save"></i> Log</a></li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive('admin/settings*') }}">
                <a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
            </li>
            <li class="{{ setActive('admin/logout*') }}">
                <a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
