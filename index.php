<?php get_header(); ?>
<main>
    <div class="start-page__header">
        <a href="https://it-volunteers.com" target="_blanc">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="logo IT-Volunteers" width="50px"
                height="50px" />
            IT Volunteers </a>
    </div>

    <div style="padding: 20px; display: flex; gap: 15px; flex-wrap: wrap; background-color: black;">
        <h1 class="title-h1">Title</h1>
        <h2 class="title-h2">Title</h2>
    </div>

    <div style="padding: 20px; display: flex; gap: 15px; flex-wrap: wrap;">
        <a href="/" class="primary-button">Підтримати</a>
        <a href="/" class="primary-button--disabled">Підтримати</a>
        <a href="/" class="secondary-button">Докладніше</a>
        <a href="/" class="secondary-button--disabled">Докладніше</a>
        <a href="/" class="tertiary-button">Докладніше</a>
        <a href="/" class="tertiary-button--disabled">Докладніше</a>
        <a href="/" class="small-button">Вхід</a>
        <a href="/" class="small-button--disabled">Вхід</a>
        <a href="/" class="text-button">Докладніше</a>
    </div>
    <div style="background-color: black; padding: 16px; width: 375px">
        <a href="/" class="footer-button">Стати партнером</a>
    </div>
    <div class="start-page__footer">
        <a href="tel:+38 098 347 00 35">+38 098 347 00 35</a>
        <a href="mailto:it.volunteers.ukraine@gmail.com">it.volunteers.ukraine@gmail.com</a>
    </div>
</main>
<?php get_footer(); ?>