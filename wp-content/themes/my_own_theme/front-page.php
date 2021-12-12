<?php
get_header();
?>
    <div class="headings front">
        <p class = "page-header">Welcome!</p>
        <p class = "page-subtitle">Learning with patient is always awarded.<p>
    </div>
    </header>

    <div class="main-container">
        <section class="main-events">
            <div class="content-area">
                <h2 class>Upcoming Events</h2>
                <?php
                    $two_events = new WP_Query(array(
                            'posts_per_page' => 2,
                            'post_type' => 'event'
                    ));
                    while($two_events -> have_posts()){
                        $two_events -> the_post();
                    }
                    wp_reset_postdata();
                ?>

                <div class="event-summary">
                    <a class="event-summary-date" href="#">
                        <span class="event-summary-month">Oct</span>
                        <span class="event-summary-day">30</span>
                    </a>
                    <div class="event-summary-content">
                        <h5 class="event-summary-title">
                            <a href="#">
                               <?php the_title() ?>>
                            </a>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 12); ?>

                            <a href="<?php the_permalink(); ?>" class="read-more-link">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>

                <div class="event-summary">
                    <a class="event-summary-date" href="#">
                        <span class="event-summary-month">Oct</span>
                        <span class="event-summary-day">30</span>
                    </a>
                    <div class="event-summary-content">
                        <h5 class="event-summary-title">
                            <a href="#">
                                Charles Bukowski Poetry Evening
                            </a>
                        </h5>
                        <p>
                            Bukowski was born Heinrich Karl Bukowski in Andernach, Rhine Province …
                            <a href="#" class="read-more-link">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>

                <div class="learn-more-btn events-btn">
                    <a href="#" >View All Events</a>
                </div>
            </div>
        </section>
        <!-- -->
        <section class="main-blogs">
            <div class="content-area">
                <h2>From Our Blogs</h2>
                <?php $two_posts = new WP_Query(
                        array('posts_per_page' => 2)
                );
                while($two_posts -> have_posts()){
                    $two_posts -> the_post();
                    ?>
                        <div class="event-summary">
                            <a class="event-summary-date" href="#">
                                <span class="event-summary-month">NOV</span>
                                <span class="event-summary-day">25</span>
                             </a>
                            <div class="event-summary-content">
                                <h5 class="event-summary-title">
                                    <a href="#">
                                        <?php the_title(); ?>>
                                    </a>
                                 </h5>
                                      <p>
                                         Carlin Isles was a gifted American football and track and …
                                            <a href="#" class="read-more-link">
                                          Read more
                                            </a>
                        </p>
                    </div>
                </div>
               <?php }
                 ?>


               <!--<div class="event-summary">
                    <a class="event-summary-date" href="#">
                        <span class="event-summary-month">OCT</span>
                        <span class="event-summary-day">23</span>
                    </a>
                    <div class="event-summary-content">
                        <h5 class="event-summary-title">
                            <a href="#">
                                English Speaking Club
                            </a>
                        </h5>
                        <p>
                            You asked and we did! English speaking club now occures …
                            <a href="#" class="read-more-link">
                                Read more
                            </a>
                        </p>
                    </div>
                </div> -->

                <div class="learn-more-btn">
                    <a href="#">View All Blog Posts</a>
                </div>

            </div>
        </section>
        <!-- -->
    </div>

    <section class="programs-gallery"
             style="background-image:url(
             <?php echo get_theme_file_uri('/images/programs_gallery_background.jpg')
             ?>
                 );" >
        <h2>Look Through Our Programs</h2>
        <div class="gallery-cards">
            <div class="program-card">
                <h3>Speaking Club</h3>
                <p>Some useful information about this particular program.
                    Some useful information about this particular program.
                    Some useful information about this particular program.
                </p>
                <div class="learn-more-btn"><a href="#">Learn more</a></div>
            </div>
            <div class="program-card">
                <h3>Ielts preparation</h3>
                <p>Some useful information about this particular program.
                    Some useful information about this particular program.
                    Some useful information about this particular program.
                </p>
                <div class="learn-more-btn"><a href="#">Learn more</a></div>
            </div>
            <div class="program-card">
                <h3>Elementary for Kids</h3>
                <p>Some useful information about this particular program.
                    Some useful information about this particular program.
                    Some useful information about this particular program.
                </p>
                <div class="learn-more-btn"><a href="#">Learn more</a></div>
            </div>
        </div>
    </section>

<?php

get_footer();
?>