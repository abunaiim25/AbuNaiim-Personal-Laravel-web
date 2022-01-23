<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p>{{$about->top_description}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{url($about->image)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$about->title}}</h3>
          
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->birth}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->web}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>WhatsApp & Telegram:</strong> <span>{{$about->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Work:</strong> <span>{{$about->work}}</span></li>
              </ul>
            </div>
          </div>
          <p>
            {{$about->bottom_description}}
            </p>
        </div>
      </div>

    </div>
  </section>