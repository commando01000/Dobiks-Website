@extends('layouts.front.app')

@section('content')
    <section id="projects" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    {{ Utility::getsettings('project_name') }}
                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES</small>
            </div>
            <div id="projects-content" class="w-100 mt-5 pt-5 m-auto p-1">
                <div class="projects-content">
                    <h2 class="section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">D<span
                                class="section-projects__title-span">opiks<br>Services Page&nbsp;</span>
                        </span>
                        <br>
                        <p class="content-section__description pt-3">{{ Utility::getsettings('project_detail') }}</p>

                    </h2>
                    <ul class="nav nav-pills section-projects__content mb-3 filtering" id="pills-tab" role="tablist">
                        <button class="position-relative nav-link text-decoration-none section__tab-item active"
                            data-filter="*" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                            type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                            <div class="circle position-absolute start-0 z-0"></div>
                            <div class="position-relative text z-1 text-white">
                                All
                            </div>
                        </button>
                        @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button class="position-relative nav-link text-decoration-none section__tab-item"
                                    data-filter=".category-{{ $category->id }}" id="pills-{{ $category->id }}-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-{{ $category->id }}" type="button"
                                    role="tab" aria-controls="pills-{{ $category->id }}" aria-selected="false">

                                    <div class="circle position-absolute start-0 z-0"></div>
                                    <div class="position-relative text z-1 text-white">
                                        {{ $category->name }}
                                    </div>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content w-100" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-creative-design" role="tabpanel"
                            aria-labelledby="pills-creative-design-tab" tabindex="0">
                            <div class="container">
                                <div class="row gx-3 gy-3">
                                    @foreach ($allProjects as $project)
                                        <div class="col-md-4">
                                            <div class="service">
                                                <div class="service-header d-flex justify-content-between">
                                                    <div class="service-number">
                                                        <p>{{ $loop->iteration }}</p>
                                                    </div>
                                                    <div class="category-name">
                                                        <p class="user-profile__role ui text size-texts">
                                                            {{ $project->title }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service__image">
                                                    <img src="{{ Storage::url($project->cover) }}" alt="image">
                                                </div>
                                                <div class="service-title mt-4">
                                                    {{ $project->client }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="tab-pane fade" id="pills-motion-graphics" role="tabpanel"
                                    aria-labelledby="pills-motion-graphics-tab" tabindex="0">
                                    ...
                                </div>
                                <div class="tab-pane fade" id="pills-video-shooting" role="tabpanel"
                                    aria-labelledby="pills-video-shooting-tab" tabindex="0">
                                    ...
                                </div>
                                <div class="tab-pane fade" id="pills-event-management" role="tabpanel"
                                    aria-labelledby="pills-event-management-tab" tabindex="0">
                                    ...
                                </div>
                                <div class="tab-pane fade" id="pills-interior-luxury" role="tabpanel"
                                    aria-labelledby="pills-interior-luxury-tab" tabindex="0">
                                    ...
                                </div>
                                <div class="tab-pane fade" id="pills-ui-ux" role="tabpanel"
                                    aria-labelledby="pills-ui-ux-tab" tabindex="0">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.filtering button');
            const projects = document.querySelectorAll('.project-item');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');

                    // Remove active class from all buttons
                    buttons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to the clicked button
                    this.classList.add('active');

                    // Filter projects
                    projects.forEach(project => {
                        if (filter === '*' || project.classList.contains(filter.slice(1))) {
                            project.style.display = 'block';
                        } else {
                            project.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection
