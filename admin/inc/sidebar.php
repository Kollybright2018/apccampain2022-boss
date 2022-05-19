<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
  
      <img src="../Images\cir (1).png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php
      echo $_SESSION['username'];
      ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="nav-icon fas fa-desktop"></i>
                  <p>Dashborad</p>
                </a>
              </li>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Agent
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="agent.php" class="nav-link">
                  <i class="text-warning fas fa-users nav-icon"></i>
                  <p>All Agents</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="add-agent.php" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                  <p>Add Agent</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fas fa-user-friends"></i>
              <p>Members</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lg.php" class="nav-link">
              <i class="fas fa-landmark"></i>
              <p>Local Government</p>
            </a>
          </li>
                  
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Log Out</p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>