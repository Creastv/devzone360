<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <header class="title-page-wraper">
        <div class="container">
            <div class="row">
                <h1 class="entry-title title-page">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>