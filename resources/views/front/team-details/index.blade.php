@extends('layouts.front.app')
@section('title', 'Team Details')
{{-- @section('content')
    <section id="team-details" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Team Details
                </h1>
                <small class="content-section__description fs-6">Home / TEAM DETAILS</small>
            </div>

            <div style="background-color: #191919" class="team-details-content m-5 p-5 ms-0 ps-0 me-0 pe-0">
                <div class="container-fluid ps-0 pe-0">
                    <div class="row w-75 m-auto justify-content-between gx-5">
                        <div class="col-md-4">
                            <img style="min-width: 314px; min-height: 414px" class="user-profile__image"
                                src="{{ Storage::url($teamMember->photo) }}" alt="image">
                            <form chip-view="" id="1:112" class="footer__social-chips">
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--uiux">
                                    <a href="{{ $teamMember->facebook }}"> <input type="button" name="selectedChipOptions"
                                            value="1" hidden="true"></a>
                                    <span> Facebook</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>

                                <label tabindex="0" class="flex-row-center-center footer__social-chip--uiux">
                                    <a href="{{ $teamMember->linkedin }}"> <input type="button" name="selectedChipOptions"
                                            value="3" hidden="true"></a>
                                    <span> LinkedIN</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--uiux">
                                    <a href="{{ $teamMember->github }}"> <input type="button" name="selectedChipOptions"
                                            value="4" hidden="true"></a>
                                    <span> GITHUB</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                                <label tabindex="0" class="flex-row-center-center footer__social-chip--uiux">
                                    <a href="{{ $teamMember->dribble }}"> <input type="button" name="selectedChipOptions"
                                            value="5" hidden="true"></a>
                                    <span> DRIBBLE</span>
                                    <template hidden="">
                                        <label unselected-styles="" class="dhi-group">
                                        </label>
                                        <label selected-styles="" class="dhi-group-1">
                                        </label>
                                    </template>
                                </label>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="user-profile__details">
                                <h1 class="user-profile__title">{{ $teamMember->name }}</h1>
                                <p class="user-profile__role">{{ $teamMember->position }}</p>
                                <br>
                                {{-- <p class="user-profile__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                                <p class="user-profile__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p> --}}

{{-- <div class="text-white">
                                   // <?php
                                   
                                   // $var = html_entity_decode($teamMember->bio);
                                   
                                   //echo $var;
                                   ?>
                                </div> --}}

{{-- <div class="progress-bars-section overflow-visible pt-2">
                                    <p class="content-section__description ui text size-textmd">CREATIVE DESIGNS</p>
                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Success example" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar" style="width: 100%">
                                            <span style="top: -15px" class="mb-2 position-absolute">100%</span>
                                        </div>
                                    </div>
                                    <p class="content-section__description ui text size-textmd">MOTION GRAPHICS</p>

                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Info example" aria-valuenow="97" aria-valuemin="0" aria-valuemax="97">
                                        <div class="progress-bar" style="width: 97%">
                                            <span style="top: -15px" class="mb-2 position-absolute">97%</span>
                                        </div>
                                    </div>
                                    <p class="content-section__description ui text size-textmd">VIDEO PRODUCTION</p>
                                    <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                        aria-label="Warning example" aria-valuenow="98" aria-valuemin="0"
                                        aria-valuemax="98">
                                        <div class="progress-bar" style="width: 98%">
                                            <span style="top: -15px" class="mb-2 position-absolute">98%</span>
                                        </div>
                                    </div>
                                </div> --}}
{{-- <div class="col-md-9">
                                    <div class="progress-bars-section overflow-visible pt-2">
                                        @foreach ($teamMember->details as $detail)
                                            <p class="content-section__description ui text size-textmd">
                                                {{ $detail->category }}
                                            </p>
                                            <div style="height: 5px;" class="progress overflow-visible mb-2"
                                                role="progressbar" aria-label="{{ $detail->category }} example"
                                                aria-valuenow="{{ $detail->number }}" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: {{ $detail->number }}%">
                                                    <span style="top: -15px"
                                                        class="mb-2 position-absolute">{{ $detail->number }}%</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </section> --}}
{{-- @endsection --}}


@section('content')
    <!-- start title -->
    <section>
        <div class="container">
            <div class="main-title">
                <h1>Team Details</h1>
                <div>
                    <a href="">Home</a>
                    <span class="slash">/</span>
                    <a href="">Team Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end title -->

    <!-- start team member -->
    <section class="bg-dark-black">
        <div class="container">
            <div class="row gap-4 gap-md-0">
                <div class="col-md-5 col-lg-4">
                    <img class="img-fluid w-100" src="{{ Storage::url($teamMember->photo) }}" alt="team">
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <a href="{{ $teamMember->facebook }}"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">facebook</a>
                        <a href="{{ $teamMember->twitter }}"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">twitter</a>
                        <a href="{{ $teamMember->linkedin }}"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">linkedin</a>
                        <a href="{{ $teamMember->dribble }}"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">dribble</a>
                        <a href="{{ $teamMember->github }}"
                            class="btn border text-uppercase text-white hover-orange rounded-0 py-2 px-3">github</a>
                    </div>
                </div>
                <div class="col-md-7 d-flex flex-column gap-4">
                    <div class="text-capitalize">
                        <h4>{{ $teamMember->name }}</h4>
                        <span class="text-light-gray fs-5">{{ $teamMember->position }}</span>
                    </div>
                    <div class="d-flex flex-column gap-3 text-light-gray">

                        <?php
                        
                        $var = html_entity_decode($teamMember->bio);
                        
                        echo $var;
                        ?>
                    </div>
                    <div class="mt-4">
                        <h4 class="mb-4">Skills</h4>
                        <div class="d-flex flex-column gap-4">
                            @foreach ($teamMember->details as $detail)
                                <div>
                                    <h5 class="text-uppercase mb-0 fw-normal mb-2">{{ $detail->category }}</h5>
                                    <div class="progress-container">
                                        <div data-progress="{{ $detail->number }}%" class="progress-value number"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team member -->
@endsection
