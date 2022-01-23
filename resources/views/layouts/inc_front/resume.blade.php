<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
      <p>{{ $resume->head_des }}</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">

        <h3 class="resume-title">Education</h3>
        <div class="resume-item">
          <h4>{{ $resume->study_sub }}</h4>
          <h5>{{ $resume->study_date }}</h5>
          <p><em>{{ $resume->study_place }}</em></p>
          <p>{{ $resume->study_des }}</p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        
        <div class="resume-item mt-5">
          <h4>{{ $resume->work_sub }}</h4>
          <h5>{{ $resume->work_date }}</h5>
          <p>
            {{ $resume->work_des }}
          </p>
        </div>
      </div>
    </div>

  </div>
</section>