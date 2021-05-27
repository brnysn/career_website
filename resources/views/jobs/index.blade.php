@extends('layouts.main')

@section('banner', $banner)

@section('content')
    <!-- JOB LIST START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Available jobs for you</h4>
                        <p class="text-muted para-desc mx-auto mb-1">See all jobs. We'll quickly match you with the right employer.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="row">
                        @foreach($jobs as $job)
                            <div class="col-lg-12 mt-4 pt-2">
                                <div class="job-list-box border rounded">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-2">
                                                <div class="company-logo-img">
                                                    @if($job->company->logo)
                                                        <img src="{{ $job->company->logo->getUrl() }}" alt="logo"
                                                             class="img-fluid mx-auto d-block">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-9">
                                                <div class="job-list-desc">
                                                    <h6 class="mb-2"><a href="{{ route('jobs.show', $job->id) }}"
                                                                        class="text-dark">{{ $job->title }}</a></h6>
                                                    <p class="text-muted mb-0"><i
                                                            class="mdi mdi-bank mr-2"></i>{{ $job->company->name }}</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item mr-3">
                                                            <p class="text-muted mb-0">
                                                                <i class="mdi mdi-map-marker mr-2"></i>{{ $job->address }}
                                                            </p>
                                                        </li>

                                                        <li class="list-inline-item">
                                                            <p class="text-muted mb-0">
                                                                <i class="mdi mdi-currency-usd mr-2"></i>{{ $job->salary }}
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="job-list-button-sm text-right">
                                                    <span class="badge badge-success">{{ $job->job_nature }}</span>

                                                    <div class="mt-3">
                                                        <a href="{{ route('jobs.show', $job->id) }}"
                                                           class="btn btn-sm btn-primary">See Job</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB LIST START -->
@endsection
