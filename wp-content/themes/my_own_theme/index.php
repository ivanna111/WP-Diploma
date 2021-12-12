<?php
 get_header();
?>
    <div class="headings">
        <h2 class = "page-header">Welcome to our Blog!</h2>
        <p class = "page-subtitle">Latest news, interesting articles and so on not so far ...</p>
    </div>
    </header>

    <div class="main-blogs">
    <?php
    while(have_posts()){
        the_post();
        ?>

        <article class="post-item">
            <header>
                <h2 class='post-title'>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>>
                    </a></h2>
                <div class='post-meta'>
                    Posted by <?php the_author_posts_link(); ?>> on
                    <time datetime="<?php the_time('Y-m-d'); ?>">
                        <?php the_time('d.m.Y'); ?>
                    </time> in
                   <?php the_category(", "); ?>
                </div>
            </header>
            <div class="post-content">
                <?php //the_content();
                    the_excerpt();
                ?>
            </div>
            <footer class="post-footer">
                <a href="<?php the_permalink(); ?>">Continue reading</a>
            </footer>
        </article>

<?php
}
echo paginate_links();
?>
    </div>

<?php

get_footer();
?>