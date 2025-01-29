@extends('home.base')
@section('content')
    @push('css')
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f9fa;
            }
            .section-padding {
                padding: 60px 0;
            }
            .btn-custom {
                background-color: #007bff;
                color: white;
                border-radius: 25px;
                padding: 12px 30px;
                transition: all 0.3s;
            }
            .btn-custom:hover {
                background-color: #0056b3;
            }
            .icon-box {
                font-size: 40px;
                color: #007bff;
                margin-bottom: 15px;
            }
            .bg-light-blue {
                background-color: #e3f2fd;
            }
            .bg-dark-blue {
                background-color: #0d6efd;
                color: white;
            }
            .card {
                border: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: 0.3s;
            }
            .card:hover {
                transform: translateY(-5px);
            }
        </style>
    @endpush
    <!-- Start Page-title Area -->
    <div class="page-title-area bg-black">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$pageName}}</h2>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$pageName}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page-title Area -->

    <section class="container text-center section-padding">
        <h2 class="fw-bold">Retirement and IRAs</h2>
        <p class="lead">With a {{ $siteName}} IRA, you can manage your investments yourself with no account fees or let us do it for you for an advisory fee.</p>
        <a href="{{ route('register') }}" class="btn btn-custom btn-lg mt-3">Register Now!</a>
    </section>

    <section class="container section-padding">
        <h3 class="fw-bold text-center">Understanding Retirement Investments</h3>
        <p class="text-center">Retirement investments provide financial stability for the future by leveraging stocks, bonds, mutual funds, and more.</p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <i class="fas fa-piggy-bank icon-box"></i>
                <h5 class="fw-bold">Tax Benefits</h5>
                <p>Enjoy tax-deferred growth or tax-free earnings depending on your investment plan.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-chart-line icon-box"></i>
                <h5 class="fw-bold">Diversification</h5>
                <p>Reduce risk by spreading investments across multiple asset classes.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-coins icon-box"></i>
                <h5 class="fw-bold">Compound Interest</h5>
                <p>Reinvested earnings lead to significant financial growth over time.</p>
            </div>
        </div>
    </section>

    <section class="bg-light-blue section-padding">
        <div class="container">
            <h3 class="fw-bold text-center">Your Tax Preferences</h3>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <div class="card p-4">
                        <h4 class="fw-bold">Tax-Deferred Growth</h4>
                        <p>Reduce taxable income and pay taxes only when you withdraw during retirement.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h4 class="fw-bold">Tax-Free Growth</h4>
                        <p>Withdraw contributions without taxes or penalties before retirement.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h4 class="fw-bold">401(k) Rollovers</h4>
                        <p>Consolidate your former 401(k)s or 403(b)s into a single account.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-padding">
        <h3 class="fw-bold text-center">Traditional vs. Roth IRA</h3>
        <p class="text-center">Both options have their benefits. Choose one that fits your retirement goals.</p>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="fw-bold">Traditional IRA</h4>
                    <p>Contributions may be tax-deductible, grow tax-deferred, but withdrawals are taxed at retirement.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="fw-bold">Roth IRA</h4>
                    <p>Contributions are not tax-deductible, but your money grows tax-free and withdrawals are tax-free in retirement.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark-blue text-center section-padding">
        <div class="container">
            <h3 class="fw-bold">Let {{ $siteName}} Help You</h3>
            <p>We provide expert guidance to ensure you make the best retirement decisions.</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
        </div>
    </section>


@endsection
