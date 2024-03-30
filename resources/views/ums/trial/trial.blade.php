@extends('layouts.ums')
@section('title','UMS - Free Trial')
@section('content')
<section class="section-py bg-body first-section-pt">
    <div class="container mt-2">
        <div class="card px-3">
            <div class="row">
                <div class="col-lg-7 card-body border-end">
                    <h4 class="mb-2">Make a request</h4>
                    <p class="mb-0">
                        This is free plans include 10+ advanced tools and features to a trial period. <br />
                        You can upgrate this plan any time any where.
                    </p>
                    <div class="row py-4 my-2">
                        <div class="col-md-12">
                            <label class="form-label" for="institute-name">Institute Name</label>
                            <input type="text" id="institute-name" class="form-control" placeholder="Bhuapur Pilot Hight School" />
                        </div>
                    </div>
                    <h4 class="mt-2 mb-4">Account Details</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="billings-email">Email Address</label>
                                <input type="text" id="billings-email" class="form-control" placeholder="bphs.school@gmail.com" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="billings-password">Password</label>
                                <input type="password" id="billings-password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="billings-country">Country</label>
                                <select id="billings-country" class="form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="billings-zip">Zip / Postal Code</label>
                                <input type="text" id="billings-zip" class="form-control billings-zip-code" placeholder="Zip / Postal Code" />
                            </div>
                        </div>
                    </form>
                    <div id="form-credit-card">
                        <h4 class="mt-4 pt-2">Contact details</h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label" for="billings-card-num">Contact Name</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="billings-card-num" class="form-control" placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="billings-card-name">Contact Phone</label>
                                    <input type="text" id="billings-card-name" class="form-control" placeholder="+8801XXXXXXXXX" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="billings-card-date">Contact Email</label>
                                    <input type="text" id="billings-card-date" class="form-control" placeholder="example@gmail.com" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="billings-card-cvv">Contact Address</label>
                                    <textarea name="contact_address" id="contact-address" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 card-body">
                    <h4 class="mb-2">Institute Logo</h4>
                    <p class="pb-2 mb-0">
                        Its institute branding identification. we take only jpeg, png and jpg file. max file size 1MB.
                    </p>
                    <div class="bg-lighter p-4 rounded mt-4">
                        <p class="mb-1">A simple start for everyone</p>
                        <div class="d-flex align-items-center">
                            <h1 class="text-heading display-5 mb-1">$59.99</h1>
                            <sub>/month</sub>
                        </div>
                        <div class="d-grid">
                            <button type="button" data-bs-target="#pricingModal" data-bs-toggle="modal" class="btn btn-label-primary">
                                Change Plan
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="mb-0">Subtotal</p>
                            <h6 class="mb-0">$85.99</h6>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="mb-0">Tax</p>
                            <h6 class="mb-0">$4.99</h6>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between align-items-center mt-3 pb-1">
                            <p class="mb-0">Total</p>
                            <h6 class="mb-0">$90.98</h6>
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-success">
                                <span class="me-2">Proceed with Payment</span>
                                <i class="ti ti-arrow-right scaleX-n1-rtl"></i>
                            </button>
                        </div>

                        <p class="mt-4 pt-2">
                            By continuing, you accept to our Terms of Services and Privacy Policy. Please note that payments are
                            non-refundable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop