 <!-- ########## START: LEFT PANEL ########## -->
 <div class="sl-logo"><a href=""></i>Admin Panel</a></div>
 <div class="sl-sideleft">

     <div class="input-group input-group-search">
         <input type="search" name="search" class="form-control" placeholder="Search">
         <span class="input-group-btn">
             <button class="btn"><i class="fa fa-search"></i></button>
         </span><!-- input-group-btn -->
     </div><!-- input-group -->


     <div class="sl-sideleft-menu">
         <a href="{{ url('dashboard') }}" class="sl-menu-link @yield('dashboard')">{{-- for active--@yield('dashboard') --}}
             <div class="sl-menu-item">
                 <i class="fas fa-book-reader"></i>
                 <span class="menu-item-label">Dashboard</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->

         <a href="{{ url('/') }}" target="_blank" class="sl-menu-link ">
             <div class="sl-menu-item">
                 <i class="fas fa-eye"></i>
                 <span class="menu-item-label">Visit Site</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->

         <a href="{{ url('admin/home') }}" class="sl-menu-link @yield('home')">
             <div class="sl-menu-item">
                 <i class="fas fa-home"></i>
                 <span class="menu-item-label">Home</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->

         <a href="{{ url('admin/about') }}" class="sl-menu-link @yield('about')">
             <div class="sl-menu-item">
                 <i class="fas fa-user"></i>
                 <span class="menu-item-label">About</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->

         <a href="{{ url('admin/skills') }}" class="sl-menu-link @yield('skills')">
             <div class="sl-menu-item">
                 <i class="fas fa-laptop"></i>
                 <span class="menu-item-label">Skills</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->


         <a href="{{ url('admin/resume') }}" class="sl-menu-link @yield('resume')">
             <div class="sl-menu-item">
                 <i class="fas fa-file-edit"></i>
                 <span class="menu-item-label">Resume</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->

{{--
         <a href="{{ url('admin/portfolio') }}" class="sl-menu-link @yield('portfolio')">
             <div class="sl-menu-item">
                 <i class="fas fa-book-open"></i>
                 <span class="menu-item-label">Portfolio</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
--}}


         <a href="#" class="sl-menu-link @yield('services')">
             <div class="sl-menu-item">
                 <i class="fas fa-server"></i>
                 <span class="menu-item-label">Services</span>
                 <i class="menu-item-arrow fa fa-angle-down"></i>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
             <li class="nav-item"><a href="{{ url('admin/services') }}"
                     class="nav-link @yield('add-services')"><i class="far fa-arrow-alt-circle-right"></i> Services Add</a></li>
             <li class="nav-item"><a href="{{ url('admin/des-services') }}"
                     class="nav-link @yield('des-services')"><i class="far fa-arrow-alt-circle-right"></i> Description</a></li>
         </ul>

        

         <a href="{{ url('admin/contact') }}" class="sl-menu-link @yield('contact')">
             <div class="sl-menu-item">
                 <i class="fas fa-envelope-open"></i>
                 <span class="menu-item-label">Contact</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->

         <a href="{{ url('admin/social') }}" class="sl-menu-link @yield('social')">
             <div class="sl-menu-item">
                 <i class="fas fa-globe"></i>
                 <span class="menu-item-label">Social</span>
             </div><!-- menu-item -->
         </a><!-- sl-menu-link -->


       
     </div><!-- sl-sideleft-menu -->

     <br>
 </div><!-- sl-sideleft -->
