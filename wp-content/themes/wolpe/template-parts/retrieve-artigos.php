<img class="retrieve-header-image" src="<?= the_post_thumbnail_url() ?>" alt="Artigos Image">
<wrapper>
    <div class="retrieve-content">
        <p class="title"><?php the_title() ?></p>
        <p class="info"><?php echo get_the_date() ?> • <span class="blog-categoria"><?php echo get_the_category()[0]->name ?></span></p>
        <p class="paragraph"><?= force_balance_tags(get_the_content()) ?></p>
    </div>
</wrapper>
