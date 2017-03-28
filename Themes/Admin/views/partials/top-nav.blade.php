<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button" style="margin: 0;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <?php if (is_module_enabled('Notification')): ?>
            @include('notification::partials.notifications')
            <?php endif; ?>
            <li><a href="{{ URL::to('/') }}" target="_blank"><i class="fa fa-eye"></i> {{trans('core/core.general.view website')}}</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag"></i>
                    <span>

                        {{ LaravelLocalization::getCurrentLocaleName()  }}
                        <i class="caret"></i>
                    </span>
                </a>
                <ul class="dropdown-menu language-menu">

                </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>


                        <i class="caret"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header bg-light-blue">
                        <img src="" class="img-circle" alt="User Image" />
                        <p>

                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">
                            Logout

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
