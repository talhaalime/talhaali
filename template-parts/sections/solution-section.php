<?php
// $terms = get_terms(array(
//     'taxonomy' => 'solution_cat',
//     'hide_empty' => false,
// ));
?>

<div class="auto-container">
    <div class="row-solution dy-flex">
      <!-- LEFT FILTERS -->
<div class="col-left-base">
    <div class="solution-links">
        <ul id="solution-filters">
            <li class="filter-link <?php echo (empty($_GET['projects']) || $_GET['projects'] === 'all') ? 'active' : ''; ?>">
                <a href="?projects=all"><?php echo __('View All', 'sun'); ?></a>
            </li>
            <?php
            $terms = get_terms('solution_cat');
            if ($terms && !is_wp_error($terms)) :
                foreach ($terms as $term) :
                    $active_class = (isset($_GET['projects']) && $_GET['projects'] === $term->slug) ? 'active' : '';
            ?>
                <li class="filter-link <?php echo $active_class; ?>">
                    <a href="?projects=<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></a>
                </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul>
    </div>
</div>

<!-- RIGHT POSTS AREA -->
<div class="col-right-base">
    <div class="row--soul dy-flex">
        <?php
        $projects = isset($_GET['projects']) && $_GET['projects'] !== 'all' ? sanitize_text_field($_GET['projects']) : '';
        
        $args = array(
            'post_type' => 'solution',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        if (!empty($projects)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'solution_cat',
                    'field' => 'slug',
                    'terms' => $projects,
                ),
            );
        }

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col--soul">
                    <div class="box--software">
                        <div class="box--software-img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
                        </div>
                        <div class="content--box-soft">
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <?php the_content(); ?>
                            <div class="btn-soft">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        else :
            echo '<p>No posts found.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

    </div>
</div>
