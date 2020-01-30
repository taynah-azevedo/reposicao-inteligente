<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notificações

              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Olá, <?php echo($_SESSION['nome']); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="sair.php" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Sair
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">R.Inteligente</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="<?php echo($_SESSION['foto_url']); ?>">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo($_SESSION['nome']); ?></div>
              <div class="user-role">
                <?php echo($_SESSION['matricula']); ?>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            

            <li class="menu-header">Ferramentas:</li>

            <li>
              <a href="requerimentos.php"><i class="ion ion-clipboard"></i><span>Requerimentos</span></a>
            </li>
            <li>
              <a href="solicitar.php"><i class="ion ion-stats-bars"></i><span>Solicitar</span></a>
            </li>
        </aside>
      </div>