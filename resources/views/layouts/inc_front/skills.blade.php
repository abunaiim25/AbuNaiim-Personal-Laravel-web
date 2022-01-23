<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Skills</h2>
            <p>{{$about->top_description}}</p>
        </div>

        <div class=" skills-content">
            <div class="" data-aos="fade-up">

                <div class="row">
                    @foreach ($skills as $skill)
                        <div class="col-md-6">
                            <div class="progress">
                                <span class="skill">{{ $skill->skill_name }} <i
                                        class="val">{{ $skill->skill_percent }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar"
                                        aria-valuenow="{{ $skill->skill_percent }}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
</section>
