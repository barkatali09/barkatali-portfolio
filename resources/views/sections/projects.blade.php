@php

$projects = [

[
'title'=>'HRM Management System',

'image'=>'images/projects/hrm.jpg',

'description'=>'Enterprise HRM System with attendance, payroll, recurring jobs, leave management and REST APIs.',

'tech'=>['Laravel','PHP','MySQL','Bootstrap','REST API'],

'github'=>'https://github.com/barkatali09',

'demo'=>'#',

'featured'=>true

],

[
'title'=>'Portfolio Website',

'image'=>'images/projects/portfolio.png',

'description'=>'Modern responsive portfolio built using Laravel and Bootstrap.',

'tech'=>['Laravel','Bootstrap','JavaScript'],

'github'=>'https://github.com/barkatali09',

    

'featured'=>false

],

];

@endphp


<section id="projects" class="projects-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-subtitle">

                MY WORK

            </span>

            <h2 class="section-title">

                Featured Projects

            </h2>

        </div>

        <div class="row g-5">

            @foreach($projects as $project)

            <div class="col-lg-6">

                <div class="project-card">

                    <img src="{{ asset($project['image']) }}" class="img-fluid project-image">

                    @if($project['featured'])

                    <span class="featured-badge">

                        ⭐ Featured

                    </span>

                    @endif

                    <div class="project-body">

                        <h3>

                            {{ $project['title'] }}

                        </h3>

                        <p>

                            {{ $project['description'] }}

                        </p>

                        <div class="tech-stack">

                            @foreach($project['tech'] as $tech)

                            <span>{{ $tech }}</span>

                            @endforeach

                        </div>

                        <div class="project-buttons">

                           

                            <a href="{{ $project['github'] }}" target="_blank" class="btn btn-outline-custom">

                                GitHub

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>