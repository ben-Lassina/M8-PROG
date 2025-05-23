<?php get_header(); ?>
<?php the_post(); ?>
    <main class="container my-5">
        <div class="col-lg-8 px-0">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <section class="article_section">
                <?php the_content() ?>
           </section>
        </div>
    </main>

    <?php get_footer(); ?>