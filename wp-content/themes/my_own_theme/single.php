<?php
get_header();
while(have_posts()){
    the_post();


?>
    <div class="headings">
        <h2 class = "page-header">Sunday Speaking Club</h2>
        <p class = "page-subtitle">
            Learning through play makes the anxiety go away!
        </p>
    </div>
</header>
    <div class="main-blogs">
        <div class="page-position">
            <p>
                <a class="parent-link" href="#">
                    <i class="fa fa-home"></i>
                    Blog Home
                </a>
                <span class="current-page-title">
                    Posted by <a href="#">Honey Badger</a> on
                    <time datetime="2021-11-21">
                        21.11.2021
                    </time> in
                    <a href="#">School News</a>
                </span>
            </p>
        </div>

        <article class="post-item">

            <div class="post-content">
                <?php the_content(); ?>
            </div>>
        </article>


    </div>

<?php

}
get_footer();
?>