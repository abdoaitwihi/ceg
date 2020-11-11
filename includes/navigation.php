<div class="container">
   <nav class="navbar px-0 navbar-expand-lg my-nav">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
         <img src="./assets/img/logo-blanc.png" alt="" />
      </a>
      <!-- Toggler/collapsibe Button -->
      <button
         class="navbar-toggler"
         type="button"
         data-toggle="collapse"
         data-target="#collapsibleNavbar"
      >
         <img src="./assets/img/menu-icon.png" alt="" />
      </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($active == 'home') echo 'active'?>">
               <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item <?php if($active == 'about') echo 'active'?>">
               <a class="nav-link" href="./about.php">About us</a>
            </li>
            <li
               class="nav-item <?php if($active == 'programs') echo 'active'?>"
            >
               <a class="nav-link" href="./programs.php">Our programs</a>
            </li>
            <li class="nav-item <?php if($active == 'team') echo 'active'?>">
               <a class="nav-link" href="./team.php">Our team</a>
            </li>
            <li class="nav-item <?php if($active == 'contact') echo 'active'?>">
               <a class="nav-link" href="./contact.php">Contact us</a>
            </li>
            <!-- <li class="nav-item">
               <a class="nav-link" href="#">Call</a>
            </li> -->
         </ul>
      </div>
   </nav>
</div>
