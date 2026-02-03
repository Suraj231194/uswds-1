<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>Secure Sign In - RFPMart + USWDS</title>
    <meta name="description" content="Sign in securely using multi-factor authentication to protect your city account." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <div class="bg-base-lightest">
            <section class="grid-container usa-section">
                <div
                    class="grid-row margin-x-neg-205 margin-bottom-7 flex-justify-center">
                    <div
                        class="grid-col-12 mobile-lg:grid-col-10 tablet:grid-col-8 desktop:grid-col-6 padding-x-205 margin-bottom-7">
                        <h1
                            class="desktop:display-none font-sans-lg margin-bottom-4 tablet:margin-top-neg-3">
                            &lt;A tagline that explains the benefit of creating an
                            account.&gt;
                        </h1>
                        <div
                            class="bg-white padding-y-3 padding-x-5 border border-base-lighter">
                            <h1 class="margin-bottom-1">Sign in to your account</h1>
                            <div class="usa-prose">
                                <p class="margin-top-1">
                                    You can access your account by signing in with one of the
                                    options below.
                                </p>
                            </div>
                            <p>
                                <a
                                    href="javascript:void()"
                                    class="usa-button usa-button--outline width-full">Sign in with Login.gov</a>
                            </p>
                            <p>
                                <a
                                    href="javascript:void()"
                                    class="usa-button usa-button--outline width-full">Sign in with &lt;Legacy system 1&gt;</a>
                            </p>
                            <p>
                                <a
                                    href="javascript:void()"
                                    class="usa-button usa-button--outline width-full">Sign in with &lt;Legacy system 2&gt;</a>
                            </p>
                            <div
                                class="border-top border-base-lighter margin-top-6 padding-top-1">
                                <p><strong>Don't have an account?</strong></p>
                                <p>If you don’t have an account already, sign up here:</p>
                                <p>
                                    <a href="javascript:void()" class="usa-button width-full">Create Login.gov account</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="grid-col-12 mobile-lg:grid-col-10 tablet:grid-col-8 desktop:grid-col-6 padding-x-205">
                        <h2 class="display-none desktop:display-block">
                            &lt;A tagline that explains the benefit of creating an
                            account.&gt;
                        </h2>
                        <div class="usa-prose">
                            <p>
                                <here
                                    ’s
                                    space
                                    for
                                    a
                                    longer
                                    description
                                    to
                                    introduce
                                    3-5
                                    easily
                                    scannable
                                    bullet
                                    points.
                                    note
                                    that
                                    on
                                    mobile,
                                    this
                                    text
                                    block
                                    will
                                    bump
                                    below
                                    the
                                    create
                                    account
                                    form.></here>
                            </p>
                            <section class="usa-graphic-list">
                                <div class="usa-graphic-list__row">
                                    <div class="usa-media-block margin-y-2">
                                        <img
                                            class="usa-media-block__img height-7 width-7"
                                            src="uswds/dist/img/circle-gray-20.svg"
                                            alt="" />
                                        <div class="usa-media-block__body">
                                            <p>
                                                <strong>Value proposition 1:</strong> Vivamus nec velit
                                                sed leo scelerisque laoreet vestibulum.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="usa-media-block margin-y-2">
                                        <img
                                            class="usa-media-block__img height-7 width-7"
                                            src="uswds/dist/img/circle-gray-20.svg"
                                            alt="" />
                                        <div class="usa-media-block__body">
                                            <p>
                                                <strong>Value proposition 1:</strong> Vivamus nec velit
                                                sed leo scelerisque laoreet vestibulum.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="usa-media-block margin-y-2">
                                        <img
                                            class="usa-media-block__img height-7 width-7"
                                            src="uswds/dist/img/circle-gray-20.svg"
                                            alt="" />
                                        <div class="usa-media-block__body">
                                            <p>
                                                <strong>Value proposition 3:</strong> Vivamus nec velit
                                                sed leo scelerisque laoreet vestibulum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div
                            class="border-top border-base-lighter margin-top-3 padding-top-1">
                            <h2>Are you a federal employee?</h2>
                            <div class="usa-prose">
                                <p>
                                    If you are a federal employee or &lt;other secondary user&gt;,
                                    please use &lt;secondary Single Sign On (SSO)&gt;.
                                </p>
                                <p>
                                    <a class="usa-button usa-button--outline" href="">Launch secondary SSO</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>