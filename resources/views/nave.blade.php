<!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Sistema de </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <!-- <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div> -->
                    </li>
                    <li>
                        <a href="{{ url('home') }}"><i class="fa fa-dashboard fa-fw"></i> Incio</a>
                    </li>
                    <li>
                        <a href="{{ url('ingresos') }}"><i class="fa fa-table fa-fw"></i> Ingresos</a>
                    </li>
                    <li>
                        <a href="{{ url('egresos') }}"><i class="fa fa-edit fa-fw"></i> Egresos</a>
                    </li>
                    <li>
                        <a href="{{ url('renta') }}"><i class="fa fa-wrench fa-fw"></i> Renta de Cuartos</a>
                    </li>
                    <li>
                        <a href="{{ url('reportes') }}"><i class="fa fa-sitemap fa-fw"></i> Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   