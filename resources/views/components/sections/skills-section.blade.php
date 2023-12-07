<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section ftco-animate text-center">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">My Skills</h2>
                <p>Discover my diverse skills, sharpened tools for shaping the digital world</p>
            </div>
        </div>

        <div class="row">

            @forelse  ($skills as $item)
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>{{ $item->name }}</h3>
                        <div class="progress">
                            <div class="progress-bar color-3" role="progressbar" aria-valuenow="{{ $item->percentage }}"
                                aria-valuemin="0" aria-valuemax="100" style="width:{{ $item->percentage }}%">
                                <span>{{ $item->percentage }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</section>
