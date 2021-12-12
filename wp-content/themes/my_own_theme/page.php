<?php
    get_header();
    while(have_posts()){
        the_post();
        $parent_id = wp_get_post_parent_ID(get_the_ID());
        $children = get_pages(array(
            'child_of' => get_the_ID()
        ));
        ?>
        <div class="headings">
            <h2 class = "page-header"><?php the_title();?>></h2>
            <p class = "page-subtitle">Placeholder for description!</p>
        </div>

        </header>
        <main class="page-main">
            <?php
        if($parent_id || $children){
        ?>
            <nav class="page-links">
                <h2 class="parent-title">
                    <a href="<?php echo get_permalink($parent_id); ?>">
                        <?php get_the_title($parent_id); ?>
                     <!--   About Us -->
                    </a>
                </h2>
                <ul>
                    <?php
                    if($parent_id){
                        $children_of = $parent_id;
                    } else {
                        $children_of = get_the_ID();
                    }
                    wp_list_pages(array(
                            'title_li' => NULL,
                        'child_of' => $children_of
                    ));
                    ?>
                   <!-- <li class="page_item "><a href="#">Our History</a></li>
                    <li class="page_item current_page_item"><a href="#">Our Team</a></li>
                    <li class="page_item "><a href="#">Our Goals</a></li>
                -->
                </ul>
            </nav>
        <?php
        }
        ?>
        <?php
            if($parent_id){ ?>

        }
            <?php
            <div class="page-position">
                <p>
                    <a class="parent-link" href="
                    <?php get_the_permalink($parent_id); ?>
                    ">
                        <i class="fa fa-home"></i>
                        Back to <?php echo get_the_title($parent_id); ?>
                    </a>
                    <span class="current-page-title">
                    <?php the_title() ?>
                </span>
                ?>
                <div class="generic-content">

                </div>
        </main>

        <?php

the_content();

?>


<?php
    }
get_footer();
?>