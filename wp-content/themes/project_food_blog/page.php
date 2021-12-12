<?php
get_header();

    /* $parent_id = get_the_ID();
     $parent_id = wp_get_post_parent_ID();
    $children = get_pages(array(

    ));*/
    ?>
    <main class="main-container">
        <section class="food-posts">
            <?php

            // Start the Loop.
            while (have_posts()) {
                the_post();

//                    get_template_part( 'template-parts/content/content', 'page' );
                ?>
                <div class="post">
                    <div class="image-of-food">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <h2><?php echo get_the_title(); ?></h2>
                    <p><?php echo get_the_content(); ?></p>
                </div>
            <?php
            } // End the loop.
            ?>
            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/sandwich.jpg" alt="sandwich">
                </div>
                <h2>The Greatest Sandwich, a Real King of Sandwiches</h2>
                <p>A sandwich is a food item commonly consisting of two or more
                    slices of bread, with one or more fillings between them.</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/steak.jpg" alt="steak">
                </div>
                <h2>Let Us Talk about This Perfect Steak</h2>
                <p>Selecting the best steak can seem overwhelming — there are so
                    many types of cuts to choose from.</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/cherries.jpg" alt="cherries">
                </div>
                <h2>Berries and ...</h2>
                <p>Berries are small, soft, round fruit of various colors —
                    mainly blue, red, or purple. What else?</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/wine.jpg" alt="wine">
                </div>
                <h2>Talking about Wine and Vegetable Pasta</h2>
                <p>Nothing beats a delicious pasta dish with a glass of chilled wine.</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/popsicle.jpg" alt="icecream">
                </div>
                <h2>What if You Always had an Ice Cream in Your Pocket?</h2>
                <p>Ice cream is a mixture of milk, cream, sugar, and sometimes
                    other ingredients that has been frozen into a soft, creamy
                    delight using special techniques.</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/salmon.jpg" alt="salmon">
                </div>
                <h2>Just Salmon Here</h2>
                <p>Salmon is one of the most popular fish choices in America
                    thanks in part to its rich, buttery flavor.</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/sandwich.jpg" alt="sandwich">
                </div>
                <h2>The Perfect Sandwich, a Real Classic</h2>
                <p>It’s an overwhelming feeling standing in line at the deli trying
                    to decide what sandwich you’re going to order</p>
            </div>

            <div class="post">
                <div class="image-of-food">
                    <img src="images_for_project/croissant.jpg" alt="croissant">
                </div>
                <h2>Le Croissant</h2>
                <p>The secret of an excellent croissant is the quality of the ingredients:
                    sugar, salt, flour, milk, eggs, and of course, butter.</p>
            </div>

        </section>

        <div class="pages">
            <ul>
                <li class="brackets"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="brackets"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </div>

        <hr>
        <div class="chef-info">
            <div class="chef-title"><h2>About Me, a Man of Food</h2></div>
            <div class="chef-img"><img src="images_for_project/chef.jpg" alt="a man of food" width="800px"
                                       height="530px">
            </div>
            <h3>I am a Man of Food</h3>
            <i class="motto">I Passion for Real, Good Food.</i>
            <p>Internationally renowned, multi-Michelin starred chef
                a Man of Food has opened a string of successful restaurants across
                the globe, from the UK and France to Singapore and the United States.
                A Man of Food has also become a star of the small screen both in the UK and
                internationally, with shows such as Kitchen Nightmares,
                Hell’s Kitchen, Hotel Hell and MasterChef US.</p>
        </div>
        <hr>

    </main>
    <?php


get_footer();
?>
