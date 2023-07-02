<?php

/**
 * Template Name: Login Template
 * Type: Page
 */
include_once get_template_directory() . '/hf_templates/header_blank.php';
?>

<body id="page-top" class="login-bg-color" style="overflow: hidden;">
    <!-- Masthead-->
    <section id="login">
        <div class="container px-0 px-lg-5">
            <div class="row gx-0 gx-lg-5 h-100 align-items-left justify-content-left">
                <div class="col-lg-5 col-lg-offset-2 col-md-8 col-sm-12 align-self-center">
                    <form id="loginForm" class="loginForm">
                        <div class="form-floating mt-3 mb-4">
                            <h4 class="text-center">Welcome to Deliver Meat</h4>
                        </div>

                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email: </label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>

                        <!-- Password -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" type="password" placeholder="****" data-sb-validations="required,password" />
                            <label for="password">Password: </label>
                            <div class="invalid-feedback" data-sb-feedback="password:required">Password is required
                            </div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Login successful!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid mt-4 mx-2"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                        <!-- Login Button-->
                        <div class="form-floating my-3 text-center">
                            <p style="font-size: 15px;" class="text-dark">Forgot your password? &nbsp;<a href="//localhost:5500">Click Here</a></p>
                            <p style="font-size: 15px;" class="text-dark">Not on the network yet? &nbsp;<a href="//localhost:5500">Apply Now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
include_once get_template_directory() . '/hf_templates/footer_blank.php';