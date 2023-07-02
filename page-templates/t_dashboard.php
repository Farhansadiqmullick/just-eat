<?php

/**
 * Template Name: Dashboard Template
 * Type: Page
 */
include_once get_template_directory() . '/hf_templates/header_blank.php';
?>

<body id="page-top" class="dashboard-bg-color">
    <!-- Masthead-->
    <section id="dashboard">
        <div class="container px-0 px-lg-5">
            <div class="row gx-0 gx-lg-5 h-100 align-items-center min-vh-100">
                <h3 class="text-center text-white">Welcome to Deliver Meat</h3>
                <div class="mx-auto">
                    <form id="dashboard" method="post" enctype="multipart/form-data" class="dashboard">
                        <div class="mx-auto my-4 py-3">
                            <nav class="navbar navbar-expand-sm navbar-light">
                                <div class="container-fluid">
                                    <ul class="navbar-nav">
                                        <li class="nav-item tab"><a class="nav-link" href="#">Step 1</a></li>
                                        <li class="nav-item tab"><a class="nav-link" href="#">Step 2</a></li>
                                        <li class="nav-item tab"><a class="nav-link" href="#">Step 3</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="step">
                            <!-- Name Input -->
                            <label for="name" class="text-dark my-2">Name</label>
                            <input type="text" class="form-control mb-3 py-3" name="name" id="name" placeholder="Enter Your Name" data-sb-validations="required">
                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is
                                required.</div>

                            <!-- Email address input-->
                            <label for="email" class="text-dark my-2">Email</label>
                            <input name="email" class="form-control mb-3 py-3" id="email" type="email" placeholder="Enter Your Email" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            <!-- Valid License-->
                            <label for="license" class="text-dark my-3">Valid driver's licence</label>
                            <div class="input-group mb-3">
                                <input name="licence" type="file" class="form-control" id="license">
                                <label class="input-group-text" for="license">Upload</label>
                            </div>
                        </div>
                        <div class="step">
                            <!-- Valid License-->
                            <label for="insurance" class="text-dark my-3">Vehicle insurance and registration (if
                                delivering via car) </label>
                            <div class="input-group mb-3">
                                <input name="insurance" type="file" class="form-control" id="insurance">
                                <label class="input-group-text" for="insurance">Upload</label>
                            </div>
                            <label for="address" class="text-dark my-3">Proof of address</label>
                            <div class="input-group mb-3">
                                <input name="address" type="file" class="form-control" id="address">
                                <label class="input-group-text" for="address">Upload</label>
                            </div>
                            <label for="emergency" class="text-dark my-3">Emergency contact details</label>
                            <input name="emergency" type="number" class="form-control mb-3 py-3" placeholder="132-12341-131" id="emergency" name="phone-number">
                        </div>
                        <div class="step">
                            <!-- Bank Details-->
                            <label for="bank" class="text-dark my-3">Bank Details </label>
                            <div class="input-group mb-3">
                                <input name="bank-details" type="file" class="form-control" id="bank-details">
                                <label class="input-group-text" for="bank-details">Upload</label>
                            </div>

                            <!-- Bank Details-->
                            <label for="location" class="text-dark my-3">Preferred location with map</label>
                            <!-- Perferred Location-->
                            <div class="input-group mb-3">
                                <select id="location" class="form-control">
                                    <option selected>Select</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <!-- Proof of Right-->
                            <label for="bank" class="text-dark my-3">Proof of right </label>
                            <div class="input-group mb-3">
                                <input name="proof-of-right" type="file" class="form-control" id="proof-of-right">
                                <label class="input-group-text" for="proof-of-right">Upload</label>
                            </div>
                        </div>

                        <div class="d-block">
                            <!-- Prev Button-->
                            <button class="btn btn-secondary float-start py-2 ps-4 pe-2 prev" id="prev" type="button">Prev</button>
                            <!-- Next Button-->
                            <button class="btn btn-secondary float-end py-2 ps-2 pe-4 next" id="next" type="button" id="next">Next</button>
                            <!-- Submit Button-->
                            <button type="submit d-none" class="btn btn-secondary float-end py-2 px-4 submit" id="submit" type="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php

include_once get_template_directory() . '/hf_templates/footer_blank.php'; ?>