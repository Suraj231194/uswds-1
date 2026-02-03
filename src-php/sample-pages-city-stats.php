<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Statistics - RFPMart + USWDS</title>
    <meta name="description" content="View key city statistics, community data, and trends presented through clear charts and indicators." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-city-statistics.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-mobile-lg">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item">
                                <a href="#" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Pages</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        RFPMart
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            City Statistics
                        </span>
                    </h1>
                    <p>
                        Key demographic, economic, and environmental data about our city.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section padding-0 border-bottom-1px border-base-lighter bg-white position-sticky top-0 z-500">
            <div class="grid-container">
                <div class="grid-row grid-gap-4 padding-2 flex-align-center">
                    <a href="#popu_demo" class="usa-button tablet:grid-auto  margin-bottom-1 tablet:margin-bottom-0 text-no-underline text-bold font-body-md">
                        Population & Demographics
                    </a>

                    <a href="#eco_employ" class="usa-button tablet:grid-auto margin-bottom-1 tablet:margin-bottom-0 text-no-underline text-bold font-body-md">
                        Economy & Employment
                    </a>

                    <a href="#public_safety" class="usa-button tablet:grid-auto margin-bottom-1 tablet:margin-bottom-0 text-no-underline text-bold font-body-md">
                        Public Safety
                    </a>

                    <a href="#education" class="usa-button tablet:grid-auto text-no-underline text-bold font-body-md">
                        Education
                    </a>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <ul class="usa-card-group grid-row flex-justify-center">
                <li class="usa-card tablet:grid-col-4 desktop:grid-col-2">
                    <div class="usa-card__container flex-column flex-align-center border-0">
                        <div class="usa-icon usa-icon--size-9 padding-105 radius-pill bg-primary-darker">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="white" d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                            </svg>
                        </div>

                        <div class="usa-card__header">
                            <h3 class="usa-card__heading text-center">
                                <span>Population</span>
                            </h3>
                        </div>

                        <div class="usa-card__body">
                            <p>100,000</p>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-2">
                    <div class="usa-card__container flex-column flex-align-center border-0">
                        <div class="usa-icon usa-icon--size-9 padding-105 radius-pill bg-primary-darker">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="white" d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                            </svg>
                        </div>

                        <div class="usa-card__header">
                            <h3 class="usa-card__heading text-center">
                                <span>Median Household Income</span>
                            </h3>
                        </div>

                        <div class="usa-card__body">
                            <p>100,000</p>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-2">
                    <div class="usa-card__container flex-column flex-align-center border-0">
                        <div class="usa-icon usa-icon--size-9 padding-105 radius-pill bg-primary-darker">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="white" d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                            </svg>
                        </div>

                        <div class="usa-card__header">
                            <h3 class="usa-card__heading text-center">
                                <span>Unemployment Rate</span>
                            </h3>
                        </div>

                        <div class="usa-card__body">
                            <p>100,000</p>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-2">
                    <div class="usa-card__container flex-column flex-align-center border-0">
                        <div class="usa-icon usa-icon--size-9 padding-105 radius-pill bg-primary-darker">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="white" d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                            </svg>
                        </div>

                        <div class="usa-card__header">
                            <h3 class="usa-card__heading text-center">
                                <span>Average Commute Time</span>
                            </h3>
                        </div>

                        <div class="usa-card__body">
                            <p>100,000</p>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-2">
                    <div class="usa-card__container flex-column flex-align-center border-0">
                        <div class="usa-icon usa-icon--size-9 padding-105 radius-pill bg-primary-darker">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="white" d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                            </svg>
                        </div>

                        <div class="usa-card__header">
                            <h3 class="usa-card__heading text-center">
                                <span>Crime Rate</span>
                            </h3>
                        </div>

                        <div class="usa-card__body">
                            <p>100,000</p>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-2">
                    <div class="usa-card__container flex-column flex-align-center border-0">
                        <div class="usa-icon usa-icon--size-9 padding-105 radius-pill bg-primary-darker">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="white" d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                            </svg>
                        </div>

                        <div class="usa-card__header">
                            <h3 class="usa-card__heading text-center">
                                <span>Carbon Emissions</span>
                            </h3>
                        </div>

                        <div class="usa-card__body">
                            <p>100,000</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section class="usa-section grid-container padding-top-0" id="popu_demo">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Population & Demographics
                </h2>
            </div>

            <div class="grid-row">
                <div class="usa-card">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Population Growth Over Time</span>
                            </h2>
                        </div>

                        <div class="usa-card__body display-flex flex-row flex-wrap tablet:flex-no-wrap">
                            <p class="font-body-xs tablet:grid-col-5">
                                This chart shows how the city’s population has changed over the past decade. It highlights periods of rapid growth, stabilization, or decline and provides a baseline for planning future infrastructure and public services.
                            </p>
                            <img
                                class="margin-top-2 tablet:grid-col-7"
                                src="images/graphs/population_trend.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid-row">
                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Age-Gender Distribution</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                This visualization breaks the population into standard age cohorts (e.g., 0–14, 15–24, 25–44, 45–64, 65+). It provides a snapshot of generational balance in the community and helps identify service needs for children, working-age adults, and seniors.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/age-gender-dist.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Racial and Ethnic Composition</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                This chart summarizes the city’s racial and ethnic composition based on census categories. This data helps guide inclusive public engagement, equitable distribution of resources, and culturally responsive community programs.
                            </p>
                            <img
                                class="margin-top-2"
                                src="images/graphs/racial-ethnic-dist.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="eco_employ">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Economy & Employment
                </h2>
            </div>

            <div class="grid-row">
                <div class="usa-card">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Employment by Industry Sector</span>
                            </h2>
                        </div>

                        <div class="usa-card__body display-flex flex-row flex-wrap tablet:flex-no-wrap">
                            <p class="font-body-xs tablet:grid-col-5">
                                This chart displays the share of total employment attributed to each major industry sector (e.g., Healthcare, Manufacturing, Retail, Education, Professional Services, Hospitality). Understanding the sector breakdown helps the city assess economic diversity and identify industries that may need targeted support or training programs.
                            </p>
                            <img
                                class="margin-top-2 tablet:grid-col-7"
                                src="images/graphs/employ-sector-dist.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid-row">
                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Unemployment Rate</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                This chart presents the unemployment rate over the past several years, highlighting shifts due to economic cycles, local initiatives, and broader regional or national conditions. It provides context for the city’s workforce stability and helps evaluate the effectiveness of employment programs.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/unemploy-rate.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Household Income Distribution</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                This visualization shows the distribution of households across income ranges (e.g., under $25k, $25k–$49k, $50k–$99k, $100k+). It helps assess overall affordability, the economic diversity of residents, and the scale of need for social support programs.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/household-income-dist.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="public_safety">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Public Safety
                </h2>
            </div>

            <div class="grid-row">
                <div class="usa-card">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Crime Rate by Category</span>
                            </h2>
                        </div>

                        <div class="usa-card__body display-flex flex-row flex-wrap tablet:flex-no-wrap">
                            <p class="font-body-xs tablet:grid-col-5">
                                The chart highlights the distribution of reported crimes by category, helping residents and policymakers understand the most common public safety challenges. The majority of incidents fall under property crime, consistent with national trends.
                            </p>
                            <img
                                class="margin-top-2 tablet:grid-col-7"
                                src="images/graphs/crime-by-category.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid-row">
                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Crime Rate Trend</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                Crime has gradually declined over the past five years. The sustained reduction aligns with expanded community policing efforts, neighborhood programs, and investments in public lighting and surveillance infrastructure.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/crime-rate-trend.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Police, Fire, and EMS Response Time</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                Response times remain within the city’s performance targets. Police and Fire services tend to arrive slightly faster due to station placement and dedicated dispatching, whereas EMS units serve a higher call volume.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/police-fire-ems-response-time.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container" id="education">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Education
                </h2>
            </div>

            <div class="grid-row">
                <div class="usa-card">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Student Enrollment by School Level</span>
                            </h2>
                        </div>

                        <div class="usa-card__body display-flex flex-row flex-wrap tablet:flex-no-wrap">
                            <p class="font-body-xs tablet:grid-col-5">
                                Enrollment levels help the city and school district plan for staffing, classroom space, transportation, and after-school programs. Recent trends show stable elementary enrollment and moderate increases in Pre-K participation following early childhood initiatives.
                            </p>
                            <img
                                class="margin-top-2 tablet:grid-col-7"
                                src="images/graphs/student-enrollment.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid-row">
                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Graduation Rate Trend</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                Graduation rates have steadily improved over the past five years. The city attributes progress to expanded tutoring services, strengthened career and technical programs, and increased collaboration with community organizations.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/graduation-rate.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>

                <div class="usa-card tablet:grid-col-6">
                    <div class="usa-card__container radius-lg">
                        <div class="usa-card__header bg-primary-darker radius-top-lg">
                            <h2 class="usa-card__heading text-white">
                                <span>Student–Teacher Ratio</span>
                            </h2>
                        </div>

                        <div class="usa-card__body">
                            <p class="font-body-xs">
                                Lower student–teacher ratios are linked to improved academic outcomes. While elementary schools are within recommended ranges, middle and high schools remain slightly higher due to subject specialization and staffing constraints.
                            </p>

                            <img
                                class="margin-top-2"
                                src="images/graphs/students-teacher-ratio.svg"
                                alt="Population trend for last 15 years" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>