@extends('layouts.main')

@section('content')

    <!-- Start Home -->
    <section class="bg-home"
             style="background: url('{{asset('assets/images/bg/bg-home.jpeg')}}') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">Find jobs, create trackable
                                    resumes and enrich your applications.</h6>
                                <h1 class="heading font-weight-bold mb-4">The Easiest Way to Get Your New Job</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form action="{{ route('search') }}" class="registration-form">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" id="exampleInputName1"
                                                           name="search"
                                                           class="form-control rounded registration-input-box"
                                                           placeholder="Job keybords...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default" name="location">
                                                        <option value="">Location</option>
                                                        @foreach($searchLocations as $id=>$searchLocations)
                                                            <option value="{{ $id }}">{{ $searchLocations }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-category" class="demo-default" name="category">
                                                        <option value="">Categories...</option>
                                                        @foreach($searchCategories as $id=>$searchCategories)
                                                            <option value="{{ $id }}">{{ $searchCategories }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send"
                                                           class="submitBnt btn btn-primary btn-block" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- popular category start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Popular Category</h4>
                        <p class="text-muted para-desc mx-auto mb-1">See all jobs sorted by categories. We'll quickly
                            match you with the right employer.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($sidebarCategories as $category)
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <a href="{{ route('categories.show', $category->id) }}">
                            <div class="popu-category-box bg-light rounded text-center p-4">
                                <div class="popu-category-icon mb-3">
                                    <i class="mdi mdi-account d-inline-block rounded-pill h3 text-primary"></i>
                                </div>
                                <div class="popu-category-content">
                                    <h5 class="mb-2 text-dark title">{{ $category->name }}</h5>
                                    <p class="text-success mb-0 rounded">{{ $category->jobs_count }} Jobs</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- popular category end -->

    <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Find Your Jobs</h4>
                        <p class="text-muted para-desc mx-auto mb-1">See all jobs. We'll quickly match you with the
                            right employer.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mt-4 pt-2">
                    <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row"
                        id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="recent-job-tab" data-toggle="pill" href="#recent-job"
                               role="tab" aria-controls="recent-job" aria-selected="true">Featured Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" id="featured-job-tab" data-toggle="pill" href="#featured-job"
                               role="tab" aria-controls="featured-job" aria-selected="false">Freelance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" id="part-job-tab" data-toggle="pill" href="#part-job" role="tab"
                               aria-controls="part-job" aria-selected="false">Part Time</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded" id="full-job-tab" data-toggle="pill" href="#full-job" role="tab"
                               aria-controls="full-job" aria-selected="false">Full Time</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-job" role="tabpanel"
                             aria-labelledby="recent-job-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    @foreach($jobs as $job)
                                        @if($job->top_rated)
                                            <div
                                                class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                                <div class="lable text-center pt-2 pb-2">
                                                    <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="mo-mb-2">
                                                                @if($job->company->logo)
                                                                    <img src="{{ $job->company->logo->getUrl() }}"
                                                                         alt=""
                                                                         class="img-fluid mx-auto d-block">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <h5 class="f-18"><a
                                                                        href="{{ route('jobs.show', $job->id) }}"
                                                                        class="text-dark">{{ $job->title }}</a>
                                                                </h5>
                                                                <p class="text-muted mb-0">{{ $job->company->name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-map-marker text-primary mr-2"></i>{{ $job->address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2">
                                                                    <span
                                                                        class="text-primary">$</span> {{ $job->salary }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0">{{ $job->job_nature }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2"><span
                                                                        class="text-dark">Notes :</span>
                                                                    {{ $job->short_description }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <a href="{{ route('jobs.show', $job->id) }}"
                                                                   class="text-primary">See Job <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured-job" role="tabpanel" aria-labelledby="featured-job-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    @foreach($jobs as $job)
                                        @if($job->job_nature == 'Freelance')
                                            <div
                                                class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                                @if($job->top_rated)
                                                    <div class="lable text-center pt-2 pb-2">
                                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="mo-mb-2">
                                                                @if($job->company->logo)
                                                                    <img src="{{ $job->company->logo->getUrl() }}"
                                                                         alt=""
                                                                         class="img-fluid mx-auto d-block">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <h5 class="f-18"><a
                                                                        href="{{ route('jobs.show', $job->id) }}"
                                                                        class="text-dark">{{ $job->title }}</a>
                                                                </h5>
                                                                <p class="text-muted mb-0">{{ $job->company->name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-map-marker text-primary mr-2"></i>{{ $job->address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2">
                                                                    <span
                                                                        class="text-primary">$</span> {{ $job->salary }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0">{{ $job->job_nature }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2"><span
                                                                        class="text-dark">Notes :</span>
                                                                    {{ $job->short_description }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <a href="{{ route('jobs.show', $job->id) }}"
                                                                   class="text-primary">See Job <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="part-job" role="tabpanel" aria-labelledby="part-job-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    @foreach($jobs as $job)
                                        @if($job->job_nature == 'Part Time')
                                            <div
                                                class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                                @if($job->top_rated)
                                                    <div class="lable text-center pt-2 pb-2">
                                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="mo-mb-2">
                                                                @if($job->company->logo)
                                                                    <img src="{{ $job->company->logo->getUrl() }}"
                                                                         alt=""
                                                                         class="img-fluid mx-auto d-block">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <h5 class="f-18"><a
                                                                        href="{{ route('jobs.show', $job->id) }}"
                                                                        class="text-dark">{{ $job->title }}</a>
                                                                </h5>
                                                                <p class="text-muted mb-0">{{ $job->company->name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-map-marker text-primary mr-2"></i>{{ $job->address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2">
                                                                    <span
                                                                        class="text-primary">$</span> {{ $job->salary }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0">{{ $job->job_nature }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2"><span
                                                                        class="text-dark">Notes :</span>
                                                                    {{ $job->short_description }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <a href="{{ route('jobs.show', $job->id) }}"
                                                                   class="text-primary">See Job <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="full-job" role="tabpanel" aria-labelledby="full-job-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    @foreach($jobs as $job)
                                        @if($job->job_nature == 'Full Time')
                                            <div
                                                class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                                @if($job->top_rated)
                                                    <div class="lable text-center pt-2 pb-2">
                                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                            <li class="list-inline-item"><i class="mdi mdi-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="mo-mb-2">
                                                                @if($job->company->logo)
                                                                    <img src="{{ $job->company->logo->getUrl() }}"
                                                                         alt=""
                                                                         class="img-fluid mx-auto d-block">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <h5 class="f-18"><a
                                                                        href="{{ route('jobs.show', $job->id) }}"
                                                                        class="text-dark">{{ $job->title }}</a>
                                                                </h5>
                                                                <p class="text-muted mb-0">{{ $job->company->name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div>
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-map-marker text-primary mr-2"></i>{{ $job->address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2">
                                                                    <span
                                                                        class="text-primary">$</span> {{ $job->salary }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-0">{{ $job->job_nature }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div>
                                                                <p class="text-muted mb-0 mo-mb-2"><span
                                                                        class="text-dark">Notes :</span>
                                                                    {{ $job->short_description }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div>
                                                                <a href="{{ route('jobs.show', $job->id) }}"
                                                                   class="text-primary">See Job <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end containar -->
    </section>
    <!-- all jobs end -->

@endsection
