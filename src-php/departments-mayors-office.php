<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mayor’s Office - RFPMart + USWDS</title>
    <meta name="description" content="Learn about the Mayor’s leadership, initiatives, news, contact information, and ways to engage with city government." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-mayors-office.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout width-full maxw-mobile-lg">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item">
                                <a href="#" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Departments</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        RFPMart
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Mayor's Office
                        </span>
                    </h1>
                    <p class="text-italic margin-top-1 margin-bottom-1">
                        The 51<sup>st</sup> Mayor of RFPMart City
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section">
            <div class="grid-container">
                <div class="grid-row grid-gap-4 padding-1">
                    <div class="usa-card desktop:grid-col-5 tablet:grid-col-5 tablet:margin-0">
                        <div class="usa-card__container margin-x-0">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">Mayor RFP Mart</h4>
                            </div>
                            <div class="usa-card__media usa-card__media--exdent">
                                <div class="usa-card__img">
                                    <img
                                        src="images/webp/card-city-mayor-1.webp"
                                        alt="Portrait of Mayor RFP Mart" />
                                </div>
                            </div>
                            <div class="usa-card__body">
                                <p>
                                    The 51<sup>st</sup> Mayor of RFPMart City
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="desktop:grid-col-7 tablet:grid-col-7 height-full border-left-1 border-primary-darker bg-primary-lighter">
                        <p class="font-heading-md line-height-serif-6 text-italic text-bold">
                            I’m Mayor RFPMART, and I’m honored to welcome you to our city’s digital doorstep. Whether you call
                            this place home, are planning a visit, or are simply curious, this site is designed to help you discover
                            how my office can serve you.
                        </p>
                        <p class="font-heading-xs line-height-serif-6 text-base-dark">
                            Since taking office in 2023, I’ve focused on strengthening our neighborhoods, supporting local businesses, and ensuring every resident has the opportunity to thrive. This website is one of the ways I hope to stay connected — a space where you can learn about city initiatives, share your ideas, and find resources that matter to you.

                            I invite you to explore, stay informed, and take part in shaping our future. Together, we’ll continue building a community that is vibrant, inclusive, and full of promise.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container padding-y-4 border-top-1px border-base-lighter">
            <div class="grid-row flex-row flex-wrap tablet:flex-no-wrap">
                <a
                    href="#"
                    class="usa-button tablet:grid-col flex-justify-start height-7 margin-top-2 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black"
                    style="background-image: url('uswds/dist/img/usa-icons/navigate_next.svg'); background-repeat: no-repeat; background-position: right 1.25rem center;">
                    <span class="font-body-md text-black">Meet the Mayor</span>
                </a>

                <a
                    href="#"
                    class="usa-button tablet:grid-col flex-justify-start height-7 margin-top-2 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black"
                    style="background-image: url('uswds/dist/img/usa-icons/navigate_next.svg'); background-repeat: no-repeat; background-position: right 1.25rem center;">
                    <span class="font-body-md text-black">Role of the Mayor</span>
                </a>

                <a
                    href="#"
                    class="usa-button tablet:grid-col flex-justify-start height-7 margin-top-2 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black"
                    style="background-image: url('uswds/dist/img/usa-icons/navigate_next.svg'); background-repeat: no-repeat; background-position: right 1.25rem center;">
                    <span class="font-body-md text-black">Mayor's Initiatives</span>
                </a>

                <a
                    href="#"
                    class="usa-button tablet:grid-col flex-justify-start height-7 margin-top-2 bg-primary-lighter hover:bg-primary-lighter hover:border-1px hover:border-black"
                    style="background-image: url('uswds/dist/img/usa-icons/navigate_next.svg'); background-repeat: no-repeat; background-position: right 1.25rem center;">
                    <span class="font-body-md text-black">City Council</span>
                </a>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>