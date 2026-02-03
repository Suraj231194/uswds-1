<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Openings - RFPMart + USWDS</title>
    <meta name="description" content="Search city job opportunities using filters and concise listings to find the right position." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-careers.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout tablet:grid-col margin-top-10">
                    <form class="usa-search" role="search">
                        <label class="usa-sr-only" for="search-field">Search</label>
                        <input class="usa-input margin-right-2" placeholder="Keywords" id="search-field" type="search" name="search" />
                        <input class="usa-input margin-right-2" placeholder="City,State,Zip,Country or Remote" id="search-field" type="search" name="search" />
                        <button class="usa-button" type="submit">
                            <span class="usa-search__submit-text">Search </span><img
                                src="uswds/dist/img/usa-icons-bg/search--white.svg"
                                class="usa-search__submit-icon"
                                alt="Search" />
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-4">
                    <h2 class="font-heading-xl">
                        <svg class="usa-icon">
                            <use href="uswds/dist/img/sprite.svg#filter_list"></use>
                        </svg>
                        Filters
                    </h2>
                    <div class="margin-top-4 margin-bottom-4">
                        <label class="usa-label" for="location">Location</label>
                        <div class="usa-combo-box">
                            <select class="usa-select" name="location" id="location">
                                <option value>Select Location</option>
                                <option value="apple">Austin, TX</option>
                                <option value="apricot">Round Rock, TX</option>
                                <option value="avocado">Georgetown, TX</option>
                                <option value="banana">Leander, TX</option>
                                <option value="blackberry">San Marcos, TX</option>
                            </select>
                        </div>

                        <label class="usa-label" for="department">Department</label>
                        <div class="usa-combo-box">
                            <select class="usa-select" name="department" id="department">
                                <option value>Select Department</option>
                                <option value="apple">IT & Digital Services</option>
                                <option value="apricot">Animal Services</option>
                                <option value="avocado">Police</option>
                                <option value="banana">Fire</option>
                                <option value="blackberry">Financial Services</option>
                            </select>
                        </div>

                        <label class="usa-label" for="jCategory">Job Category</label>
                        <div class="usa-combo-box">
                            <select class="usa-select" name="jCategory" id="jCategory">
                                <option value>Select Job Category</option>
                                <option value="apple">Technology</option>
                                <option value="apricot">Finance</option>
                                <option value="avocado">Police</option>
                                <option value="banana">Animal Services</option>
                            </select>
                        </div>

                        <label class="usa-label" for="jType">Job Type</label>
                        <div class="usa-combo-box">
                            <select class="usa-select" name="jType" id="jType">
                                <option value>Select a fruit</option>
                                <option value="Full-Time">Full-Time</option>
                                <option value="Part-Time">Part-Time</option>
                                <option value="Seasonal">Seasonal</option>
                            </select>
                        </div>

                        <label class="usa-label" for="sRange">Annual Salary Range</label>
                        <div class="usa-combo-box">
                            <select class="usa-select" name="sRange" id="sRange">
                                <option value>Select a fruit</option>
                                <option value="0-25000">0-25000</option>
                                <option value="25000-50000">25000-50000</option>
                                <option value="50000-75000">50000-75000</option>
                                <option value="75000-100000">75000-100000</option>
                                <option value="100000-125000">100000-125000</option>
                                <option value="125000-150000">125000-150000</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="usa-card-group tablet:grid-col-8">
                    <article class="usa-card margin-left-1 width-full">
                        <div class="usa-card__container shadow-2">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a class="usa-link text-no-underline" href="#">Software Developer</a>
                                </h4>
                            </div>

                            <div class="usa-card__body margin-left-3">
                                <ul class="usa-list usa-list--unstyled font-heading-3xs text-gray-70">
                                    <li>RFPMart, TX</li>
                                    <li>Full-time | $75,000 - $85,000</li>
                                    <li>Category: Technology</li>
                                    <li>Department: IT & Digital Services</li>
                                </ul>

                                <ul class="usa-collection__meta" aria-label="Topics">
                                    <li class="usa-collection__meta-item usa-tag">CSS</li>
                                    <li class="usa-collection__meta-item usa-tag">HTML</li>
                                    <li class="usa-collection__meta-item usa-tag">PHP</li>
                                    <li class="usa-collection__meta-item usa-tag">Cloud</li>
                                </ul>
                            </div>

                            <div class="usa-card__footer margin-left-3">
                                <ul class="usa-collection__meta" aria-label="More information">
                                    <li class="usa-collection__meta-item text-base-dark">
                                        <time datetime="2020-09-30T12:00:00+01:00">Posted on September 30, 2020</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="usa-card margin-left-1 width-full">
                        <div class="usa-card__container shadow-2">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a class="usa-link text-no-underline" href="#">Software Developer</a>
                                </h4>
                            </div>

                            <div class="usa-card__body margin-left-3">
                                <ul class="usa-list usa-list--unstyled font-heading-3xs text-gray-70">
                                    <li>RFPMart, TX</li>
                                    <li>Full-time | $75,000 - $85,000</li>
                                    <li>Category: Technology</li>
                                    <li>Department: IT & Digital Services</li>
                                </ul>

                                <ul class="usa-collection__meta" aria-label="Topics">
                                    <li class="usa-collection__meta-item usa-tag">CSS</li>
                                    <li class="usa-collection__meta-item usa-tag">HTML</li>
                                    <li class="usa-collection__meta-item usa-tag">PHP</li>
                                    <li class="usa-collection__meta-item usa-tag">Cloud</li>
                                </ul>
                            </div>

                            <div class="usa-card__footer margin-left-3">
                                <ul class="usa-collection__meta" aria-label="More information">
                                    <li class="usa-collection__meta-item text-base-dark">
                                        <time datetime="2020-09-30T12:00:00+01:00">Posted on September 30, 2020</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="usa-card margin-left-1 width-full">
                        <div class="usa-card__container shadow-2">
                            <div class="usa-card__header">
                                <h4 class="usa-card__heading">
                                    <a class="usa-link text-no-underline" href="#">Software Developer</a>
                                </h4>
                            </div>

                            <div class="usa-card__body margin-left-3">
                                <ul class="usa-list usa-list--unstyled font-heading-3xs text-gray-70">
                                    <li>RFPMart, TX</li>
                                    <li>Full-time | $75,000 - $85,000</li>
                                    <li>Category: Technology</li>
                                    <li>Department: IT & Digital Services</li>
                                </ul>

                                <p class="usa-collection__description text-gray-70 text-ls-neg-1">
                                    Design and develop secure, scalable software that powers critical city systems.
                                    Your work keeps data flowing, services running, and innovation moving forward.
                                </p>

                                <ul class="usa-collection__meta" aria-label="Topics">
                                    <li class="usa-collection__meta-item usa-tag">CSS</li>
                                    <li class="usa-collection__meta-item usa-tag">HTML</li>
                                    <li class="usa-collection__meta-item usa-tag">PHP</li>
                                    <li class="usa-collection__meta-item usa-tag">Cloud</li>
                                </ul>
                            </div>

                            <div class="usa-card__footer margin-left-3">
                                <ul class="usa-collection__meta" aria-label="More information">
                                    <li class="usa-collection__meta-item text-base-dark">
                                        <time datetime="2020-09-30T12:00:00+01:00">Posted on September 30, 2020</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
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