<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Purchasing & Procurement - RFPMart + USWDS</title>
    <meta name="description" content="Explore city procurement opportunities, bidding information, purchasing policies, and vendor resources." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-base-lighter" style="background-image: url('images/webp/bg-purchasing-procurement.webp');" aria-label="Introduction">
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
                            Purchasing & Procurements
                        </span>
                    </h1>
                    <p>
                        Building a stronger community through transparent, efficient, and inclusive purchasing.
                    </p>
                    <a href="departments-procurements-listing.html" class="usa-button">View All Open Bids</a>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <ul class="usa-card-group grid-row grid-gap-2">
                <li class="usa-card tablet:grid-col-6 desktop:grid-col">
                    <div class="usa-card__container">
                        <div class="padding-x-3 padding-top-3">
                            <svg class="usa-icon height-7 width-7 padding-1 bg-primary-darker radius-pill" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                                <path fill="white" fill-rule="evenodd" clip-rule="evenodd" d="M4.56538 12.7847C2.64868 12.0166 2.69235 9.28826 4.63265 8.58188L18.6297 3.48619C20.4257 2.83233 22.1675 4.5741 21.5136 6.37015L16.4179 20.3672C15.7116 22.3075 12.9833 22.3511 12.2152 20.4344L10.146 15.2711C10.0697 15.0808 9.91898 14.9301 9.72877 14.8539L4.56538 12.7847ZM5.14579 9.99138C4.49902 10.2268 4.48446 11.1363 5.12336 11.3923L10.2867 13.4615C10.8574 13.6902 11.3096 14.1424 11.5383 14.7131L13.6075 19.8765C13.8636 20.5154 14.773 20.5008 15.0084 19.854L20.1041 5.85701C20.3221 5.25833 19.7415 4.67774 19.1428 4.89569L5.14579 9.99138Z" />
                            </svg>
                        </div>
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">How to Do Business</h4>
                        </div>
                        <div class="usa-card__body">
                            New here? Learn the 5 steps to registering, bidding, and payments.
                        </div>
                        <div class="usa-card__footer">
                            <a href="#" class="usa-link display-flex flex-row flex-align-center">
                                Start the Guide
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col-6 desktop:grid-col">
                    <div class="usa-card__container">
                        <div class="padding-x-3 padding-top-3">
                            <svg class="usa-icon height-7 width-7 padding-1 bg-primary-darker radius-pill" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                                <path fill="white" fill-rule="evenodd" clip-rule="evenodd" d="M16.4337 6.35C16.4337 8.74 14.4937 10.69 12.0937 10.69L12.0837 10.68C9.69365 10.68 7.74365 8.73 7.74365 6.34C7.74365 3.95 9.70365 2 12.0937 2C14.4837 2 16.4337 3.96 16.4337 6.35ZM14.9337 6.34C14.9337 4.78 13.6637 3.5 12.0937 3.5C10.5337 3.5 9.25365 4.78 9.25365 6.34C9.25365 7.9 10.5337 9.18 12.0937 9.18C13.6537 9.18 14.9337 7.9 14.9337 6.34Z" />
                                <path fill="white" d="M12.0235 12.1895C14.6935 12.1895 16.7835 12.9395 18.2335 14.4195V14.4095C20.2801 16.4956 20.2739 19.2563 20.2735 19.4344L20.2735 19.4395C20.2635 19.8495 19.9335 20.1795 19.5235 20.1795H19.5135C19.0935 20.1695 18.7735 19.8295 18.7735 19.4195C18.7735 19.3695 18.7735 17.0895 17.1535 15.4495C15.9935 14.2795 14.2635 13.6795 12.0235 13.6795C9.78346 13.6795 8.05346 14.2795 6.89346 15.4495C5.27346 17.0995 5.27346 19.3995 5.27346 19.4195C5.27346 19.8295 4.94346 20.1795 4.53346 20.1795C4.17346 20.1995 3.77346 19.8595 3.77346 19.4495L3.77345 19.4448C3.77305 19.2771 3.76646 16.506 5.81346 14.4195C7.26346 12.9395 9.35346 12.1895 12.0235 12.1895Z" />
                            </svg>

                        </div>
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">Vendor Portal</h4>
                        </div>
                        <div class="usa-card__body">
                            Register or Login to your account.
                        </div>
                        <div class="usa-card__footer">
                            <a href="#" class="usa-link display-flex flex-row flex-align-center">
                                Go to Portal
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col-6 desktop:grid-col">
                    <div class="usa-card__container">
                        <div class="padding-x-3 padding-top-3">
                            <svg class="usa-icon height-7 width-7 padding-1 bg-primary-darker radius-pill" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                                <path fill="white" d="M2 6.75C2 5.50736 3.00736 4.5 4.25 4.5H19.75C20.9926 4.5 22 5.50736 22 6.75V12.338C21.5725 11.8027 21.0667 11.3327 20.5 10.9453V6.75C20.5 6.33579 20.1642 6 19.75 6H4.25C3.83579 6 3.5 6.33579 3.5 6.75V17.25C3.5 17.6642 3.83579 18 4.25 18H9.88753C9.99392 18.5241 10.1599 19.0266 10.3782 19.5H4.25C3.00736 19.5 2 18.4926 2 17.25V6.75Z" />
                                <path fill="white" d="M18.25 9.75H5.75C5.33579 9.75 5 9.41421 5 9C5 8.58579 5.33579 8.25 5.75 8.25H18.25C18.6642 8.25 19 8.58579 19 9C19 9.41421 18.6642 9.75 18.25 9.75Z" />
                                <path fill="white" d="M10.9453 12.75C11.3172 12.2059 11.7652 11.718 12.2741 11.3017C12.1892 11.2683 12.0967 11.25 12 11.25H5.75C5.33579 11.25 5 11.5858 5 12C5 12.4142 5.33579 12.75 5.75 12.75H10.9453Z" />
                                <path fill="white" fill-rule="evenodd" clip-rule="evenodd" d="M20.6565 15.2815C20.6565 16.4983 20.1173 17.5893 19.2649 18.3285V21.25C19.2649 21.5473 19.0893 21.8165 18.8172 21.9363C18.5452 22.0562 18.228 22.004 18.0087 21.8034L16.6265 20.5392L15.2443 21.8034C15.0249 22.004 14.7077 22.0562 14.4357 21.9363C14.1637 21.8165 13.9881 21.5473 13.9881 21.25V18.331C13.1339 17.5918 12.5935 16.4997 12.5935 15.2815C12.5935 13.0549 14.3985 11.25 16.625 11.25C18.8515 11.25 20.6565 13.0549 20.6565 15.2815ZM16.625 12.75C15.2269 12.75 14.0935 13.8834 14.0935 15.2815C14.0935 16.6795 15.2269 17.8129 16.625 17.8129C18.0231 17.8129 19.1565 16.6795 19.1565 15.2815C19.1565 13.8834 18.0231 12.75 16.625 12.75Z" />
                            </svg>
                        </div>
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">Current Contracts</h4>
                        </div>
                        <div class="usa-card__body">
                            View bid results, tabulations, and recently awarded contracts.
                        </div>
                        <div class="usa-card__footer">
                            <a href="departments-procurements-contracts.html" class="usa-link display-flex flex-row flex-align-center">
                                View Contracts
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="usa-card tablet:grid-col-6 desktop:grid-col">
                    <div class="usa-card__container">
                        <div class="padding-x-3 padding-top-3">
                            <svg class="usa-icon height-7 width-7 padding-1 bg-primary-darker radius-pill" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                                <path fill="white" d="M7.18535 12.75C7.18535 12.3082 7.54352 11.95 7.98535 11.95H7.99535C8.43718 11.95 8.79535 12.3082 8.79535 12.75C8.79535 13.1918 8.43718 13.55 7.99535 13.55H7.98535C7.54352 13.55 7.18535 13.1918 7.18535 12.75Z" />
                                <path fill="white" d="M7.98535 15.95C7.54352 15.95 7.18535 16.3082 7.18535 16.75C7.18535 17.1918 7.54352 17.55 7.98535 17.55H7.99535C8.43718 17.55 8.79535 17.1918 8.79535 16.75C8.79535 16.3082 8.43718 15.95 7.99535 15.95H7.98535Z" />
                                <path fill="white" d="M11.1951 12.75C11.1951 12.3082 11.5533 11.95 11.9951 11.95H12.0051C12.4469 11.95 12.8051 12.3082 12.8051 12.75C12.8051 13.1918 12.4469 13.55 12.0051 13.55H11.9951C11.5533 13.55 11.1951 13.1918 11.1951 12.75Z" />
                                <path fill="white" d="M11.9951 15.95C11.5533 15.95 11.1951 16.3082 11.1951 16.75C11.1951 17.1918 11.5533 17.55 11.9951 17.55H12.0051C12.4469 17.55 12.8051 17.1918 12.8051 16.75C12.8051 16.3082 12.4469 15.95 12.0051 15.95H11.9951Z" />
                                <path fill="white" d="M15.2049 12.75C15.2049 12.3082 15.5631 11.95 16.0049 11.95H16.0149C16.4567 11.95 16.8149 12.3082 16.8149 12.75C16.8149 13.1918 16.4567 13.55 16.0149 13.55H16.0049C15.5631 13.55 15.2049 13.1918 15.2049 12.75Z" />
                                <path fill="white" d="M16.0049 15.95C15.5631 15.95 15.2049 16.3082 15.2049 16.75C15.2049 17.1918 15.5631 17.55 16.0049 17.55H16.0149C16.4567 17.55 16.8149 17.1918 16.8149 16.75C16.8149 16.3082 16.4567 15.95 16.0149 15.95H16.0049Z" />
                                <path fill="white" fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.75C8.75 2.33579 8.41421 2 8 2C7.58579 2 7.25 2.33579 7.25 2.75V3.75H5.5C4.25736 3.75 3.25 4.75736 3.25 6V19C3.25 20.2426 4.25736 21.25 5.5 21.25H18.5C19.7426 21.25 20.75 20.2426 20.75 19V6C20.75 4.75736 19.7426 3.75 18.5 3.75H16.75V2.75C16.75 2.33579 16.4142 2 16 2C15.5858 2 15.25 2.33579 15.25 2.75V3.75H8.75V2.75ZM19.25 8.25V6C19.25 5.58579 18.9142 5.25 18.5 5.25H5.5C5.08579 5.25 4.75 5.58579 4.75 6V8.25H19.25ZM4.75 9.75H19.25V19C19.25 19.4142 18.9142 19.75 18.5 19.75H5.5C5.08579 19.75 4.75 19.4142 4.75 19V9.75Z" />
                            </svg>
                        </div>
                        <div class="usa-card__header">
                            <h4 class="usa-card__heading">Upcoming Projects</h4>
                        </div>
                        <div class="usa-card__body">
                            See what projects are planned for next year.
                        </div>
                        <div class="usa-card__footer">
                            <a href="#" class="usa-link display-flex flex-row flex-align-center">
                                View Schedule
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Active Opportunities
                </h2>
            </div>
            <div class="grid-row grid-gap-2">
                <table class="usa-table usa-table--borderless usa-table--stacked-header width-full">
                    <thead>
                        <tr>
                            <th scope="col" role="columnheader">ID</th>
                            <th data-sortable scope="col" role="columnheader">Title</th>
                            <th data-sortable scope="col" role="columnheader">Status</th>
                            <th data-sortable scope="col" role="columnheader">Department</th>
                            <th data-sortable scope="col" role="columnheader">Published</th>
                            <th data-sortable scope="col" role="columnheader">Closing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th data-label="ID" scope="row">
                                IFB-25-001
                            </th>
                            <td data-label="Title" data-sort-value="Annual Road Resurfacing: Zone A">
                                <a href="#" class="usa-link text-no-underline text-bold">Annual Road Resurfacing: Zone A</a>
                            </td>
                            <td data-label="Status" data-sort-value="open">
                                <svg class="usa-icon usa-icon--size-3" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#04c585" d="M2 12.3906C2 6.86778 6.47715 2.39062 12 2.39062C17.5228 2.39062 22 6.86778 22 12.3906C22 17.9135 17.5228 22.3906 12 22.3906C6.47715 22.3906 2 17.9135 2 12.3906ZM15.5071 9.85447C15.2142 9.56158 14.7393 9.56158 14.4464 9.85447L10.9649 13.336L9.55359 11.9247C9.2607 11.6318 8.78582 11.6318 8.49293 11.9247C8.20004 12.2176 8.20004 12.6925 8.49294 12.9854L10.4346 14.927C10.7275 15.2199 11.2023 15.2199 11.4952 14.927L15.5071 10.9151C15.8 10.6222 15.8 10.1474 15.5071 9.85447Z" />
                                </svg>
                            </td>
                            <td data-label="Department" data-sort-value="Public Works">
                                Public Works
                            </td>
                            <td data-label="Published" data-sort-value="2025-12-01">
                                12/01/2025
                            </td>
                            <td data-label="Closing" data-sort-value="2026-01-15">
                                01/15/2026
                            </td>
                        </tr>
                        <tr>
                            <th data-label="ID" scope="row">RFQ-25-004</th>
                            <td data-label="Title" data-sort-value="Architectural Services: New Fire Station #5">
                                <a href="#" class="usa-link text-no-underline text-bold">Architectural Services: New Fire Station #5</a>
                            </td>
                            <td data-label="Status" data-sort-value="open">
                                <svg class="usa-icon usa-icon--size-3" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#04c585" d="M2 12.3906C2 6.86778 6.47715 2.39062 12 2.39062C17.5228 2.39062 22 6.86778 22 12.3906C22 17.9135 17.5228 22.3906 12 22.3906C6.47715 22.3906 2 17.9135 2 12.3906ZM15.5071 9.85447C15.2142 9.56158 14.7393 9.56158 14.4464 9.85447L10.9649 13.336L9.55359 11.9247C9.2607 11.6318 8.78582 11.6318 8.49293 11.9247C8.20004 12.2176 8.20004 12.6925 8.49294 12.9854L10.4346 14.927C10.7275 15.2199 11.2023 15.2199 11.4952 14.927L15.5071 10.9151C15.8 10.6222 15.8 10.1474 15.5071 9.85447Z" />
                                </svg>
                            </td>
                            <td data-label="Department" data-sort-value="Capital Projects">Capital Projects</td>
                            <td data-label="Published" data-sort-value="2025-12-10">12/10/2025</td>
                            <td data-label="Closing" data-sort-value="2026-02-01">02/01/2026</td>
                        </tr>
                        <tr>
                            <th data-label="ID" scope="row">RFI-25-001</th>
                            <td data-label="Title" data-sort-value="Smart Street Lighting Solutions">
                                <a href="#" class="usa-link text-no-underline text-bold">Smart Street Lighting Solutions</a>
                            </td>
                            <td data-label="Status" data-sort-value="open">
                                <svg class="usa-icon usa-icon--size-3" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#04c585" d="M2 12.3906C2 6.86778 6.47715 2.39062 12 2.39062C17.5228 2.39062 22 6.86778 22 12.3906C22 17.9135 17.5228 22.3906 12 22.3906C6.47715 22.3906 2 17.9135 2 12.3906ZM15.5071 9.85447C15.2142 9.56158 14.7393 9.56158 14.4464 9.85447L10.9649 13.336L9.55359 11.9247C9.2607 11.6318 8.78582 11.6318 8.49293 11.9247C8.20004 12.2176 8.20004 12.6925 8.49294 12.9854L10.4346 14.927C10.7275 15.2199 11.2023 15.2199 11.4952 14.927L15.5071 10.9151C15.8 10.6222 15.8 10.1474 15.5071 9.85447Z" />
                                </svg>
                            </td>
                            <td data-label="Department" ata-sort-value="IT / Innovation">IT / Innovation</td>
                            <td data-label="Published" data-sort-value="2025-12-05">12/05/2025</td>
                            <td data-label="Closing" data-sort-value="2026-01-20">01/20/2026</td>
                        </tr>
                        <tr>
                            <th data-label="ID" scope="row">IFB-25-022</th>
                            <td data-label="Title" data-sort-value="Bulk Sodium Hypochlorite Supply">
                                <a href="#" class="usa-link text-no-underline text-bold">Bulk Sodium Hypochlorite Supply</a>
                            </td>
                            <td data-label="Status" data-sort-value="open">
                                <svg class="usa-icon usa-icon--size-3" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#04c585" d="M2 12.3906C2 6.86778 6.47715 2.39062 12 2.39062C17.5228 2.39062 22 6.86778 22 12.3906C22 17.9135 17.5228 22.3906 12 22.3906C6.47715 22.3906 2 17.9135 2 12.3906ZM15.5071 9.85447C15.2142 9.56158 14.7393 9.56158 14.4464 9.85447L10.9649 13.336L9.55359 11.9247C9.2607 11.6318 8.78582 11.6318 8.49293 11.9247C8.20004 12.2176 8.20004 12.6925 8.49294 12.9854L10.4346 14.927C10.7275 15.2199 11.2023 15.2199 11.4952 14.927L15.5071 10.9151C15.8 10.6222 15.8 10.1474 15.5071 9.85447Z" />
                                </svg>
                            </td>
                            <td data-label="Department" data-sort-value="Water Utilities">Water Utilities</td>
                            <td data-label="Published" data-sort-value="2025-12-12">12/12/2025</td>
                            <td data-label="Closing" data-sort-value="2026-01-12">01/12/2026</td>
                        </tr>
                    </tbody>
                </table>

                <a href="departments-procurements-listing.html" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                    View All Open Bids
                </a>
            </div>
        </section>
        <section class="grid-container usa-section">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-4">
                    <h2 class="font-heading-xl">
                        How It Works
                    </h2>
                </div>
                <div class="tablet:grid-col-8 usa-prose">
                    <ol class="usa-process-list">
                        <li class="usa-process-list__item">
                            <h4 class="usa-process-list__heading">Register</h4>
                            <p class="margin-top-05">
                                Create a free account in our <a href="#" class="usa-link text-no-underline text-bold">Vendor Portal</a>. Submit/Enter necessary documents. Select the Commodity Codes that match your services so you get email alerts when we need you.
                            </p>
                        </li>
                        <li class="usa-process-list__item">
                            <h4 class="usa-process-list__heading">Review</h4>
                            <p>
                                Read the solicitation packet carefully. If you have questions, submit them in writing before the "Question Deadline" listed in the document.
                            </p>
                        </li>
                        <li class="usa-process-list__item">
                            <h4 class="usa-process-list__heading">Submit</h4>
                            <p>
                                Upload your proposal via the portal. Do not wait until the last minute—internet delays are not a valid excuse for late submissions.
                            </p>
                        </li>
                        <li class="usa-process-list__item">
                            <h4 class="usa-process-list__heading">Award & Pay</h4>
                            <p>
                                If selected, you will receive a Purchase Order (PO). Do not start work without a PO. Submit invoices to <a href="mailto:#" class="usa-link text-no-underline text-bold">accounts.payable@city.gov</a> for Net-30 payment.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Vendor Resources & Forms
                </h2>
            </div>
            <div class="grid-row grid-gap-2">
                <div class="usa-card tablet:grid-col">
                    <div class="usa-card__container">
                        <div class="usa-card__header padding-y-105 bg-primary-dark radius-lg">
                            <h4 class="usa-card__heading text-white">Forms You Need</h4>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <ul class="usa-list--unstyled">
                                <li>
                                    <a href="#" class="usa-link display-flex margin-y-2 text-no-underline text-bold">
                                        <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M240 112L128 112C119.2 112 112 119.2 112 128L112 512C112 520.8 119.2 528 128 528L208 528L208 576L128 576C92.7 576 64 547.3 64 512L64 128C64 92.7 92.7 64 128 64L261.5 64C278.5 64 294.8 70.7 306.8 82.7L429.3 205.3C441.3 217.3 448 233.6 448 250.6L448 400.1L400 400.1L400 272.1L312 272.1C272.2 272.1 240 239.9 240 200.1L240 112.1zM380.1 224L288 131.9L288 200C288 213.3 298.7 224 312 224L380.1 224zM272 444L304 444C337.1 444 364 470.9 364 504C364 537.1 337.1 564 304 564L292 564L292 592C292 603 283 612 272 612C261 612 252 603 252 592L252 464C252 453 261 444 272 444zM304 524C315 524 324 515 324 504C324 493 315 484 304 484L292 484L292 524L304 524zM400 444L432 444C460.7 444 484 467.3 484 496L484 560C484 588.7 460.7 612 432 612L400 612C389 612 380 603 380 592L380 464C380 453 389 444 400 444zM432 572C438.6 572 444 566.6 444 560L444 496C444 489.4 438.6 484 432 484L420 484L420 572L432 572zM508 464C508 453 517 444 528 444L576 444C587 444 596 453 596 464C596 475 587 484 576 484L548 484L548 508L576 508C587 508 596 517 596 528C596 539 587 548 576 548L548 548L548 592C548 603 539 612 528 612C517 612 508 603 508 592L508 464z" />
                                        </svg>
                                        <span>W-9 Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="usa-link display-flex margin-bottom-2 text-no-underline text-bold">
                                        <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M240 112L128 112C119.2 112 112 119.2 112 128L112 512C112 520.8 119.2 528 128 528L208 528L208 576L128 576C92.7 576 64 547.3 64 512L64 128C64 92.7 92.7 64 128 64L261.5 64C278.5 64 294.8 70.7 306.8 82.7L429.3 205.3C441.3 217.3 448 233.6 448 250.6L448 400.1L400 400.1L400 272.1L312 272.1C272.2 272.1 240 239.9 240 200.1L240 112.1zM380.1 224L288 131.9L288 200C288 213.3 298.7 224 312 224L380.1 224zM272 444L304 444C337.1 444 364 470.9 364 504C364 537.1 337.1 564 304 564L292 564L292 592C292 603 283 612 272 612C261 612 252 603 252 592L252 464C252 453 261 444 272 444zM304 524C315 524 324 515 324 504C324 493 315 484 304 484L292 484L292 524L304 524zM400 444L432 444C460.7 444 484 467.3 484 496L484 560C484 588.7 460.7 612 432 612L400 612C389 612 380 603 380 592L380 464C380 453 389 444 400 444zM432 572C438.6 572 444 566.6 444 560L444 496C444 489.4 438.6 484 432 484L420 484L420 572L432 572zM508 464C508 453 517 444 528 444L576 444C587 444 596 453 596 464C596 475 587 484 576 484L548 484L548 508L576 508C587 508 596 517 596 528C596 539 587 548 576 548L548 548L548 592C548 603 539 612 528 612C517 612 508 603 508 592L508 464z" />
                                        </svg>
                                        Vendor Registration Guide
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="usa-link display-flex margin-bottom-2 text-no-underline text-bold">
                                        <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M240 112L128 112C119.2 112 112 119.2 112 128L112 512C112 520.8 119.2 528 128 528L208 528L208 576L128 576C92.7 576 64 547.3 64 512L64 128C64 92.7 92.7 64 128 64L261.5 64C278.5 64 294.8 70.7 306.8 82.7L429.3 205.3C441.3 217.3 448 233.6 448 250.6L448 400.1L400 400.1L400 272.1L312 272.1C272.2 272.1 240 239.9 240 200.1L240 112.1zM380.1 224L288 131.9L288 200C288 213.3 298.7 224 312 224L380.1 224zM272 444L304 444C337.1 444 364 470.9 364 504C364 537.1 337.1 564 304 564L292 564L292 592C292 603 283 612 272 612C261 612 252 603 252 592L252 464C252 453 261 444 272 444zM304 524C315 524 324 515 324 504C324 493 315 484 304 484L292 484L292 524L304 524zM400 444L432 444C460.7 444 484 467.3 484 496L484 560C484 588.7 460.7 612 432 612L400 612C389 612 380 603 380 592L380 464C380 453 389 444 400 444zM432 572C438.6 572 444 566.6 444 560L444 496C444 489.4 438.6 484 432 484L420 484L420 572L432 572zM508 464C508 453 517 444 528 444L576 444C587 444 596 453 596 464C596 475 587 484 576 484L548 484L548 508L576 508C587 508 596 517 596 528C596 539 587 548 576 548L548 548L548 592C548 603 539 612 528 612C517 612 508 603 508 592L508 464z" />
                                        </svg>
                                        <span>EFT / Direct Deposit Authorization</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="usa-link display-flex text-no-underline text-bold">
                                        <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M240 112L128 112C119.2 112 112 119.2 112 128L112 512C112 520.8 119.2 528 128 528L208 528L208 576L128 576C92.7 576 64 547.3 64 512L64 128C64 92.7 92.7 64 128 64L261.5 64C278.5 64 294.8 70.7 306.8 82.7L429.3 205.3C441.3 217.3 448 233.6 448 250.6L448 400.1L400 400.1L400 272.1L312 272.1C272.2 272.1 240 239.9 240 200.1L240 112.1zM380.1 224L288 131.9L288 200C288 213.3 298.7 224 312 224L380.1 224zM272 444L304 444C337.1 444 364 470.9 364 504C364 537.1 337.1 564 304 564L292 564L292 592C292 603 283 612 272 612C261 612 252 603 252 592L252 464C252 453 261 444 272 444zM304 524C315 524 324 515 324 504C324 493 315 484 304 484L292 484L292 524L304 524zM400 444L432 444C460.7 444 484 467.3 484 496L484 560C484 588.7 460.7 612 432 612L400 612C389 612 380 603 380 592L380 464C380 453 389 444 400 444zM432 572C438.6 572 444 566.6 444 560L444 496C444 489.4 438.6 484 432 484L420 484L420 572L432 572zM508 464C508 453 517 444 528 444L576 444C587 444 596 453 596 464C596 475 587 484 576 484L548 484L548 508L576 508C587 508 596 517 596 528C596 539 587 548 576 548L548 548L548 592C548 603 539 612 528 612C517 612 508 603 508 592L508 464z" />
                                        </svg>
                                        <span>Tax Exemption Certificate</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="usa-card tablet:grid-col">
                    <div class="usa-card__container">
                        <div class="usa-card__header padding-y-105 bg-primary-dark radius-lg">
                            <h4 class="usa-card__heading text-white">Policies & Rules</h4>
                        </div>
                        <div class="usa-card__body display-flex flex-row flex-wrap">
                            <ul class="usa-list">
                                <li class="margin-top-2">
                                    <a href="#" class="usa-link text-no-underline text-bold">
                                        Local Vendor Preference Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="usa-link text-no-underline text-bold">
                                        Insurance Requirements
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="usa-link text-no-underline text-bold">
                                        Standard Terms & Conditions
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="usa-link text-no-underline text-bold">
                                        Code of Ethics
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" class="usa-button usa-button--outline width-full margin-x-0 hover:bg-primary-dark hover:text-white">
                    View All Vendor Resources & Forms
                </a>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Frequently Asked Questions (FAQs)
                </h2>
            </div>
            <div class="usa-accordion usa-accordion--bordered margin-bottom-3">
                <h4 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                        aria-expanded="false"
                        aria-controls="a1">
                        How do I find current bid or proposal opportunities?
                    </button>
                </h4>
                <div id="a1" class="usa-accordion__content">
                    <p>
                        All active bid opportunities, including Invitations to Bid (ITBs), Requests for Proposals (RFPs), and Requests for Qualifications (RFQs), are posted on the City’s official procurement or bid portal. Vendors must register on the portal to view documents, receive updates, and submit responses electronically.
                    </p>
                </div>

                <h4 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                        aria-expanded="false"
                        aria-controls="a2">
                        Can I submit a bid or proposal after the deadline?
                    </button>
                </h4>
                <div id="a2" class="usa-accordion__content">
                    <p>
                        No. Late bids or proposals cannot be accepted under any circumstances. Submission deadlines are strictly enforced to ensure fairness and transparency. Vendors are encouraged to submit responses well in advance of the deadline to avoid technical or delivery issues.
                    </p>
                </div>

                <h4 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button bg-primary-lighter hover:bg-primary-lighter hover:shadow-4"
                        aria-expanded="false"
                        aria-controls="a3">
                        Who should I contact if I have questions about a solicitation?
                    </button>
                </h4>
                <div id="a3" class="usa-accordion__content">
                    <p>
                        Each solicitation identifies a designated Purchasing contact person. All questions must be directed to that individual and submitted in the manner specified in the solicitation documents. Contacting other City staff regarding an active solicitation may result in disqualification.
                    </p>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Need Assistance?
                </h2>
            </div>
            <div class="grid-row grid-gap-2">
                <div class="tablet:grid-col display-flex flex-row margin-bottom-2">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.26534 3.25728C5.54121 1.98143 7.69866 2.37266 8.4453 4.01527L10.0666 7.58207C10.4662 8.46115 10.3393 9.47941 9.7603 10.2298C9.57069 10.4755 9.33228 10.6266 9.14342 10.7234L6.34328 12.1589C7.02276 13.246 7.83521 14.2739 8.78072 15.2194C9.72626 16.1649 10.7541 16.9774 11.8412 17.6569L13.2768 14.8567C13.3736 14.6679 13.5247 14.4295 13.7704 14.2399C14.5208 13.6608 15.539 13.534 16.4181 13.9336L19.9849 15.5549C21.6275 16.3015 22.0187 18.459 20.7429 19.7348L19.6747 20.803C19.1484 21.3293 18.3886 21.603 17.6192 21.4643C13.993 20.8106 10.5219 19.0819 7.72006 16.28C4.91826 13.4782 3.18949 10.0071 2.53579 6.38098C2.39708 5.61151 2.6708 4.85172 3.19715 4.32541C3.19715 4.32541 3.19715 4.32541 3.19715 4.32541M4.26534 3.25728C4.26533 3.25729 4.26534 3.25728 4.26534 3.25728V3.25728ZM13.148 18.3959C14.656 19.1633 16.2534 19.694 17.8853 19.9881C18.1347 20.0331 18.4082 19.9481 18.614 19.7424L19.6822 18.6742C20.2175 18.1389 20.0534 17.2337 19.3642 16.9204L15.7974 15.2991C15.4288 15.1316 15.0014 15.1846 14.6867 15.4274C14.6868 15.4274 14.6869 15.4273 14.6867 15.4274C14.6855 15.4284 14.6781 15.4349 14.6657 15.4513C14.6513 15.4704 14.6332 15.499 14.6116 15.5411L13.148 18.3959ZM5.60427 10.8522L8.4591 9.38858C8.50118 9.367 8.52978 9.34884 8.54888 9.33445C8.56744 9.32046 8.57309 9.31298 8.57276 9.31341C8.81555 8.99879 8.86856 8.57137 8.70102 8.20278L7.07975 4.63597C6.76648 3.94679 5.86129 3.78265 5.32598 4.31796L4.25778 5.3861C4.05198 5.59188 3.96702 5.86538 4.01199 6.11487C4.30617 7.74671 4.83685 9.34411 5.60427 10.8522Z" />
                        <path d="M3.19715 4.32541L4.26534 3.25728L3.19715 4.32541Z" />
                    </svg>
                    <strong>123-456-7890</strong>
                </div>
                <div class="tablet:grid-col display-flex flex-row margin-bottom-2">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                    </svg>
                    <strong class="line-height-sans-5">
                        Monday - Friday
                        <br>
                        8:00 AM to 5:00 PM CST
                    </strong>
                </div>
                <div class="tablet:grid-col display-flex flex-row margin-bottom-2">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22 6.25649V17.25C22 18.4926 20.9926 19.5 19.75 19.5H4.25C3.00736 19.5 2 18.4926 2 17.25V6.23398C2 6.22372 2.00021 6.2135 2.00061 6.20334C2.01781 5.25972 2.78812 4.5 3.73592 4.5H20.2644C21.2229 4.5 22 5.27697 22.0001 6.23549C22.0001 6.24249 22.0001 6.24949 22 6.25649ZM3.5 8.187V17.25C3.5 17.6642 3.83579 18 4.25 18H19.75C20.1642 18 20.5 17.6642 20.5 17.25V8.18747L13.2873 13.2171C12.5141 13.7563 11.4866 13.7563 10.7134 13.2171L3.5 8.187ZM20.5 6.2286L20.5 6.23398V6.24336C20.4976 6.31753 20.4604 6.38643 20.3992 6.42905L12.4293 11.9867C12.1716 12.1664 11.8291 12.1664 11.5713 11.9867L3.60116 6.42885C3.538 6.38481 3.50035 6.31268 3.50032 6.23568C3.50028 6.10553 3.60577 6 3.73592 6H20.2644C20.3922 6 20.4963 6.10171 20.5 6.2286Z" />
                    </svg>
                    <strong>procurement@city.gov</strong>
                </div>
                <div class="tablet:grid-col display-flex flex-row">
                    <svg class="usa-icon usa-icon--size-3 margin-right-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5035 6.47485C10.3854 6.47485 8.66846 8.19184 8.66846 10.3099C8.66846 12.4279 10.3854 14.1449 12.5035 14.1449C14.6215 14.1449 16.3385 12.4279 16.3385 10.3099C16.3385 8.19184 14.6215 6.47485 12.5035 6.47485ZM10.1685 10.3099C10.1685 9.02027 11.2139 7.97485 12.5035 7.97485C13.793 7.97485 14.8385 9.02027 14.8385 10.3099C14.8385 11.5994 13.793 12.6449 12.5035 12.6449C11.2139 12.6449 10.1685 11.5994 10.1685 10.3099Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5033 2.83984C8.3766 2.83984 5.03125 6.1852 5.03125 10.3119C5.03125 13.1162 6.1028 15.6692 7.37569 17.7181C8.65084 19.7706 10.1581 21.3657 11.1026 22.2692C11.9045 23.0362 13.139 23.0348 13.9389 22.2653C14.8791 21.3609 16.3778 19.7657 17.6454 17.7137C18.9108 15.6653 19.9754 13.1139 19.9754 10.3119C19.9754 6.1852 16.63 2.83984 12.5033 2.83984ZM6.53125 10.3119C6.53125 7.01362 9.20503 4.33984 12.5033 4.33984C15.8016 4.33984 18.4754 7.01362 18.4754 10.3119C18.4754 12.7374 17.5503 15.0136 16.3692 16.9254C15.1904 18.8336 13.7859 20.3311 12.899 21.1843C12.6788 21.3961 12.3604 21.3966 12.1395 21.1852C11.2483 20.3328 9.83565 18.8352 8.64982 16.9265C7.46175 15.0142 6.53125 12.7375 6.53125 10.3119Z" />
                    </svg>

                    <span class="line-height-sans-5">
                        <strong>Procurement Services</strong>
                        <br>
                        RFPMart City Hall
                        <br>
                        2nd Floor
                        <br>
                        123 Main Street
                        <br>
                        Austin, TX 78759
                    </span>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>