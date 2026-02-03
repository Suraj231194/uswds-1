<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In - RFPMart + USWDS</title>
    <meta name="description" content="Securely log in to your account to access personalized city services and tools." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <div class="bg-base-lightest">
            <section class="grid-container usa-section">
                <div class="grid-row flex-justify-center">
                    <div class="grid-col-12 tablet:grid-col-8 desktop:grid-col-6">
                        <div
                            class="bg-white padding-y-3 padding-x-5 border border-base-lighter">
                            <h1 class="margin-bottom-0">Sign in</h1>
                            <form class="usa-form">
                                <fieldset class="usa-fieldset">
                                    <legend class="usa-legend usa-legend--large">
                                        Access your account
                                    </legend>
                                    <label class="usa-label" for="email">Email address</label>
                                    <input
                                        class="usa-input"
                                        id="email"
                                        name="email"
                                        type="email"
                                        autocapitalize="off"
                                        autocorrect="off"
                                        required />
                                    <label class="usa-label" for="password-sign-in">Password</label>
                                    <input
                                        class="usa-input"
                                        id="password-sign-in"
                                        name="password"
                                        type="password"
                                        required />
                                    <button
                                        title="Toggle password"
                                        type="button"
                                        class="usa-show-password"
                                        aria-controls="password-sign-in"
                                        data-show-text="Show password"
                                        data-hide-text="Hide password">
                                        Show password
                                    </button>
                                    <input class="usa-button" type="submit" value="Sign in" />
                                    <p>
                                        <a href="#" title="Forgot password">Forgot password?</a>
                                    </p>
                                </fieldset>
                            </form>
                        </div>
                        <p class="text-center">
                            Don't have an account?
                            <a class="usa-link" href="#">Create your account now</a>.
                        </p>
                        <div
                            class="border-top border-base-lighter margin-top-3 padding-top-1">
                            <h2>Are you a city employee?</h2>
                            <div class="usa-prose">
                                <p>
                                    If you are a city employee,
                                    please use City Single Sign On (SSO).
                                </p>
                                <p>
                                    <a class="usa-button usa-button--outline" href="#">Launch secondary SSO</a>
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