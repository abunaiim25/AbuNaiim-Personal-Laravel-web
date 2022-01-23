<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ url($home->profile_img) }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{ url('/') }}">{{ $home->name }}</a></h1>

            {{-- <div class="row">
                @foreach ($social as $row)
                <div class="col-md-2 col-sm-2">
                    <div class="social-links mt-3   justify-content-center">
                        <a href="{{ $row->link }}" class=""><i class="<?php echo $row->icon; ?>"></i></a>
                    </div>
                  </div>
                @endforeach
            </div> --}}

            <div class="row">
            @foreach ($social as $row)
            <div class="col-md-2 col-2 ">
                    <div class="social-links mt-3 ms-3 ">
                        <a href="{{ $row->link }}" class=""><i class="<?php echo $row->icon; ?>"></i></a>
                    </div>
                  </div>
            @endforeach
          </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                        <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-laptop"></i> <span>Skills</span></a>
                </li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                {{--
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                --}}
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
