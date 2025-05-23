<?php get_header(); ?>

<style>
    <?php include 'css/style.css'; ?>
</style>
<body>
    <main class="container my-5">
        <header class="header">
            <h1>MA-International</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/img/primary-logo.png" alt="Het logo van het Mediacollege" class="Ma">
        </header>
 
        <?php include 'single.php'; ?>
        
        <?php include 'articles.php'; ?>

        <section class="article_section">
            <article class="article"> 
                <h3 class="text">De plek waar je de ervaringen van studenten kan vinden die een buitenlandse stage doen of zoeken.</h3>
                <p>Ma-International is een onderdeel van het MediaCollege, waarbij studenten zich aankunnen melden voor als ze een internationale stage willen doen</p>
            </article>
       
                    <h2 class="Intro">Blogs</h2>
                    <!-- Display articles from $articles -->
                    <section class="articles">
                        <?php foreach ($articles as $article): ?>
                            <article class="article">
                                <h3 class="title"><?php echo $article['title']; ?></h3>
                                <p><?php echo $article['content']; ?></p>
                                <button class="See-More">Lees meer</button>
                        </article>
                        <?php endforeach; ?>
                        </section>
            </section>
        </section>
    </main>

    <?php get_footer(); ?>
</body>