<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>{{$des_services->top_des}}</p>
      </div>

      <div class="row">
        @foreach ($services as $row)
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
          <div class="icon">
            <i class="<?php echo $row->service_icon; ?>"></i>
          </div>
          
          <h4 class="title"><a href="">{{$row->service_name}}</a></h4>
          <p class="description">{{$row->services_des}}</p>
        </div>
        @endforeach
      </div>

    </div>
  </section>