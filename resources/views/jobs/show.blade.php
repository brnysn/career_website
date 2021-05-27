@extends('layouts.main')

@section('banner', 'Job: '.$job->title)

@section('content')
    <!-- JOB SINGLE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail text-center job-single border rounded p-4">
                        <h4 class=""><a href="#" class="text-dark">{{ $job->title }}</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-bank mr-1"></i>{{ $job->company->name }}
                                </p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker mr-1"></i>{{ $job->address }}
                                </p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-currency-usd mr-1"></i>{{ $job->salary }}
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">{{ $job->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Details :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">{{ $job->full_description }} </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Requirements :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">{{ $job->requirements }} </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="company-brand-logo text-center">
                        @if($job->company && $job->company->logo)
                            <img src="{{ $job->company->logo->getUrl() }}" alt="{{ $job->company->name }}"
                                 class="img-fluid mx-auto d-block mb-3">
                        @endif
                        <h5 class="text-muted mb-0">
                            <a href="#" class="text-muted">
                                <i class="mdi mdi-bank mr-1"></i>{{ $job->company->name }}
                            </a>
                        </h5>
                    </div>

                    <div class="job-detail rounded border job-overview mt-4 mb-4">

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-currency-usd text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Salary</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $job->salary }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-apps text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Category</h6>
                                @foreach($job->categories as $category)
                                    <h6 class="text-black-50 pt-2 mb-0">
                                        {{$category->name}}
                                    </h6>
                                @endforeach
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-human-male-female text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Gender</h6>
                                <h6 class="text-black-50 pt-2 mb-0">Male & Female</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-calendar-today text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Date Posted</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{$job->created_at}}</h6>
                            </div>
                        </div>

                    </div>

                    <h5 class="text-dark">Job Location</h5>
                    <div class="job-details-desc-item mt-2">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-map-marker text-muted"></i>
                        </div>
                        <p class="text-muted mb-2">{{ $job->address }}</p>
                    </div>

{{--                    <div class="mt-4">--}}
{{--                        <a href="#" class="btn btn-primary btn-block btn-sm"><i class="mdi mdi-send mr-2"></i>Apply This Job</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- JOB SINGLE END -->
@endsection
