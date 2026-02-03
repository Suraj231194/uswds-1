<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create an Account - RFPMart + USWDS</title>
    <meta name="description" content="Create an account to access city services, submit requests, and manage online interactions." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <div class="bg-base-lightest">
            <section class="grid-container usa-section">
                <div class="grid-row margin-x-neg-205 flex-justify-center">
                    <div
                        class="grid-col-12 mobile-lg:grid-col-10 tablet:grid-col-8 desktop:grid-col-6 padding-x-205 margin-bottom-4">
                        <h1
                            class="desktop:display-none font-sans-lg margin-bottom-4 tablet:margin-top-neg-3">
                            &lt;A tagline that explains the benefit of creating an
                            account.&gt;
                        </h1>
                        <div
                            class="bg-white padding-y-3 padding-x-5 border border-base-lighter">
                            <h1 class="margin-bottom-0">Create account</h1>
                            <form class="usa-form">
                                <fieldset class="usa-fieldset">
                                    <legend class="usa-legend margin-top-1">
                                        Get started with an account.
                                    </legend>
                                    <p>
                                        <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
                                        indicates a required field.
                                    </p>
                                    <label class="usa-label" for="email">Email address
                                        <abbr title="required" class="usa-label--required">*</abbr></label>
                                    <input
                                        class="usa-input"
                                        id="email"
                                        name="email"
                                        type="email"
                                        autocapitalize="off"
                                        autocorrect="off"
                                        required
                                        autocomplete="email" />
                                    <label class="usa-label" for="password-create-account">Create password</label>
                                    <input
                                        class="usa-input"
                                        id="password-create-account"
                                        name="password"
                                        type="password"
                                        required />
                                    <button
                                        title=""
                                        type="button"
                                        class="usa-show-password"
                                        aria-controls="password-create-account password-create-account-confirm"
                                        data-show-text="Show password"
                                        data-hide-text="Hide password">
                                        Show password
                                    </button>
                                    <label class="usa-label" for="password-create-account-confirm">Re-type password
                                        <abbr title="required" class="usa-label--required">*</abbr></label>
                                    <input
                                        class="usa-input"
                                        id="password-create-account-confirm"
                                        name="password-confirm"
                                        type="password"
                                        required />
                                    <div class="usa-checkbox margin-y-3">
                                        <input
                                            class="usa-checkbox__input"
                                            id="terms-and-conditions"
                                            type="checkbox"
                                            name="terms-and-conditions"
                                            value="terms"
                                            required />
                                        <label
                                            class="usa-checkbox__label"
                                            for="terms-and-conditions">I agree to the
                                            <a href="#">terms and conditions</a>.
                                            <abbr title="required" class="usa-label--required">*</abbr></label>
                                    </div>
                                    <input
                                        class="usa-button"
                                        type="submit"
                                        value="Create account" />
                                </fieldset>
                            </form>
                        </div>
                        <p class="text-center desktop:text-left">
                            Already have an account? <a class="usa-link" href="">Sign in</a>.
                        </p>
                    </div>
                    <div
                        class="grid-col-12 mobile-lg:grid-col-10 tablet:grid-col-8 desktop:grid-col-6 padding-x-205">
                        <div
                            class="border-top border-base-lighter padding-top-4 desktop:border-0 desktop:padding-top-0">
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
                                                    <strong>Value proposition 1:</strong> Vivamus nec
                                                    velit sed leo scelerisque laoreet vestibulum.
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
                                                    <strong>Value proposition 1:</strong> Vivamus nec
                                                    velit sed leo scelerisque laoreet vestibulum.
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
                                                    <strong>Value proposition 3:</strong> Vivamus nec
                                                    velit sed leo scelerisque laoreet vestibulum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div
                                class="border-top border-base-lighter margin-top-3 padding-top-1">
                                <h2>Are you a city employee?</h2>
                                <div class="usa-prose">
                                    <p>
                                        If you are a city employee,
                                        please use City Single Sign On (SSO).
                                    </p>
                                    <p>
                                        <a class="usa-button usa-button--outline" href="">Launch secondary SSO</a>
                                    </p>
                                </div>
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