<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City News - RFPMart + USWDS</title>
    <meta name="description" content="View recent city news and announcements with summaries and links to full articles." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-blog.webp'); max-width: 100%; height: auto;" aria-label="Introduction">
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
                            News &amp; Updates
                        </span>
                    </h1>
                    <p>
                        Stay informed with the latest announcements, public notices, and stories from City Hall.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap flex-row flex-wrap padding-y-4 padding-x-2 bg-primary-lighter">
                <div class="tablet:grid-col-4">
                    <label class="usa-label margin-top-0" for="search-field-en-small">Keywords</label>
                    <form class="usa-search usa-search--small maxw-mobile-lg margin-top-2" role="search">
                        <input
                            class="usa-input"
                            id="search-field-en-small"
                            type="search"
                            name="search" />
                        <button class="usa-button" type="submit">
                            <img
                                src="uswds/dist/img/usa-icons-bg/search--white.svg"
                                class="usa-search__submit-icon height-full"
                                alt="Search" />
                        </button>
                    </form>
                </div>

                <div class="tablet:grid-col-8">
                    <label class="usa-label tablet:margin-top-0" for="news-categories">Categories</label>
                    <ul class="usa-list usa-list--unstyled display-flex flex-row flex-wrap" id="news-categories">
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-base-dark text-no-underline hover:border-base-dark hover:bg-base-dark hover:text-white" data-category="all">All</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-primary text-no-underline hover:border-primary hover:bg-primary hover:text-white" data-category="city council">City Council</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-accent-warm text-no-underline hover:border-accent-warm hover:bg-accent-warm hover:text-white" data-category="development">Development</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-accent-cool-dark text-no-underline hover:border-accent-cool-dark hover:bg-accent-cool-dark hover:text-white" data-category="health">Health</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-accent-warm-dark text-no-underline hover:border-accent-warm-dark hover:bg-accent-warm-dark hover:text-white" data-category="outdoors">Outdoors</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-secondary-dark text-no-underline hover:border-secondary-dark hover:bg-secondary-dark hover:text-white" data-category="safety">Safety</a>
                        </li>
                        <li class="margin-y-2 margin-right-1">
                            <a href="#" class="usa-link padding-x-1 padding-y-05 border-2px radius-pill text-middle text-bold text-primary-dark text-no-underline hover:border-primary-dark hover:bg-primary-dark hover:text-white" data-category="transportation">Transportation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <ul class="usa-card-group grid-row">
                <li class="usa-card usa-card--flag padding-top-4 border-top-2px border-base-light" data-category="development">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">
                                <a href="sample-pages-blog-detail.html" class="usa-link text-no-underline">City Launches New Small-Business Grant Program</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-blog-development.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                A new small-business grant program launches this fall, providing financial assistance and mentorship to entrepreneurs opening shops in underserved corridors.

                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <span class="font-body-xs text-base margin-0">
                                March 12, 2025
                            </span>
                            <span class="usa-tag margin-left-2 bg-accent-warm radius-pill">Development</span>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag padding-top-4 border-top-2px border-base-light" data-category="health">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">
                                <a href="sample-pages-blog-detail.html" class="usa-link text-no-underline">Free Vaccination Clinics Expand Citywide</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-blog-health.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Health officials are offering free flu and COVID-19 vaccinations at neighborhood clinics, focusing on seniors and residents with chronic conditions.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <span class="font-body-xs text-base margin-0">
                                March 10, 2025
                            </span>
                            <span class="usa-tag margin-left-2 bg-accent-cool-dark radius-pill">Health</span>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag padding-top-4 border-top-2px border-base-light" data-category="transportation">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">
                                <a href="sample-pages-blog-detail.html" class="usa-link text-no-underline">Downtown Street Improvements Begin Next Week</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-blog-transportation.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                The city will resurface major downtown streets, add protected bike lanes, and adjust bus routes to minimize disruptions over the next month.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <span class="font-body-xs text-base margin-0">
                                March 8, 2025
                            </span>
                            <span class="usa-tag margin-left-2 bg-primary-dark radius-pill">Transportation</span>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag padding-top-4 border-top-2px border-base-light" data-category="safety">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">
                                <a href="sample-pages-blog-detail.html" class="usa-link text-no-underline">City Updates Emergency Response Protocols</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-blog-safety.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Police and fire officials announced new response protocols aimed at reducing emergency times and improving coordination during large public events.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <span class="font-body-xs text-base margin-0">
                                March 5, 2025
                            </span>
                            <span class="usa-tag margin-left-2 bg-secondary-dark radius-pill">Safety</span>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag padding-top-4 border-top-2px border-base-light" data-category="outdoors">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">
                                <a href="sample-pages-blog-detail.html" class="usa-link text-no-underline">Riverside Park Renovation Nears Completion</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-blog-outdoors.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Renovations at Riverside Park include new playground equipment, improved lighting, and expanded walking paths scheduled to open before summer begins.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <span class="font-body-xs text-base margin-0">
                                March 2, 2025
                            </span>
                            <span class="usa-tag margin-left-2 bg-accent-warm-dark radius-pill">Outdoors</span>
                        </div>
                    </div>
                </li>

                <li class="usa-card usa-card--flag padding-top-4 border-top-2px border-base-light" data-category="city council">
                    <div class="usa-card__container border-0">
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">
                                <a href="sample-pages-blog-detail.html" class="usa-link text-no-underline">City Council Passes 2025 Budget</a>
                            </h4>
                        </div>
                        <div class="usa-card__media">
                            <div class="usa-card__img">
                                <img
                                    src="images/webp/card-blog-city-council.webp"
                                    alt="A placeholder image" />
                            </div>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Council approved the annual budget after public hearings, prioritizing affordable housing, infrastructure maintenance, and expanded funding for community-based social services.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <span class="font-body-xs text-base margin-0">
                                February 28, 2025
                            </span>
                            <span class="usa-tag margin-left-2 bg-primary radius-pill">City Council</span>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <nav aria-label="Pagination" class="usa-pagination">
            <ul class="usa-pagination__list">
                <li class="usa-pagination__item usa-pagination__arrow">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__link usa-pagination__previous-page"
                        aria-label="Previous page"><svg class="usa-icon" aria-hidden="true" role="img">
                            <use href="uswds/dist/img/sprite.svg#navigate_before"></use>
                        </svg>
                        <span class="usa-pagination__link-text">Previous</span></a>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Page 1">1</a>
                </li>
                <li
                    class="usa-pagination__item usa-pagination__overflow"
                    aria-label="ellipsis indicating non-visible pages">
                    <span>…</span>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Page 9">9</a>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button usa-current"
                        aria-label="Page 10"
                        aria-current="page">10</a>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Page 11">11</a>
                </li>
                <li
                    class="usa-pagination__item usa-pagination__overflow"
                    aria-label="ellipsis indicating non-visible pages">
                    <span>…</span>
                </li>
                <li class="usa-pagination__item usa-pagination__page-no">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__button"
                        aria-label="Last page, page 24">24</a>
                </li>
                <li class="usa-pagination__item usa-pagination__arrow">
                    <a
                        href="javascript:void(0);"
                        class="usa-pagination__link usa-pagination__next-page"
                        aria-label="Next page"><span class="usa-pagination__link-text">Next </span><svg class="usa-icon" aria-hidden="true" role="img">
                            <use href="uswds/dist/img/sprite.svg#navigate_next"></use>
                        </svg></a>
                </li>
            </ul>
        </nav>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>