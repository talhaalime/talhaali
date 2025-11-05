<?php
$fc_title   = get_sub_field('fc_title');
?>
<div class="auto-container">
    <?php if (!empty($fc_title)): ?>
        <h3><?php echo esc_html($fc_title); ?></h3>
    <?php endif; ?>
    <div class="row-order">
        <div class="col-order">
            <?php 
            // Ordered List
            if( have_rows('order_list') ): ?>
                <div class="list-number">
                    <ol>
                        <?php while( have_rows('order_list') ): the_row(); 
                            $fc_text = get_sub_field('fc_text');
                            if( !empty($fc_text) ): ?>
                                <li><span><?php echo esc_html($fc_text); ?></span></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ol>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-order">
            <?php 
            // Unordered List
            if( have_rows('unorder_list') ): ?>
                <div class="list-number">
                    <ul>
                        <?php while( have_rows('unorder_list') ): the_row(); 
                            $fc_text = get_sub_field('fc_text');
                            if( !empty($fc_text) ): ?>
                                <li><span><?php echo esc_html($fc_text); ?></span></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>