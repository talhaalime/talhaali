<?php
    $fc_title        = get_sub_field('fc_title');
?>
<div class="auto-container">
    <div class="box-table">
        <?php if($fc_title): ?>
        <h3><?php echo $fc_title ; ?></h3>
        <?php endif; ?>
        <?php
            $bs_table_details = get_sub_field('bs_table_details');
            if ($bs_table_details):
              $whats_included = $bs_table_details['whats_included']; 
              $spectre_connet = $bs_table_details['spectre_connet']; 
              $secure_go = $bs_table_details['secure_go']; 
              $envirocoms = $bs_table_details['envirocoms']; 
              $lara = $bs_table_details['lara']; 
              $spectre_connet_link = $bs_table_details['spectur_connect_link']; 
              $secure_go_link = $bs_table_details['secure_go_link']; 
              $envirocoms_link = $bs_table_details['envirocom_link']; 
              $lara_link = $bs_table_details['lara_link'];  
              $rows = $bs_table_details['add_table_row_details']; 
        ?>
		<div class="main--t">
        <table class="see-what-inner-table">
            <thead>
                <tr>
                    <th><?php echo $whats_included; ?></th>
                    <th><?php echo $spectre_connet; ?></th>
                    <th><?php echo $secure_go; ?></th>
                    <th><?php echo $envirocoms; ?></th>
                    <th><?php echo $lara; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if (!empty($rows)):
                    foreach ($rows as $row):
                        $whats_included_details = $row['whats_included_details'];
                        $spectre_connet_details = $row['spectre_connet_details'];
                        $secure_go_details = $row['secure_go_details'];
                        $envirocoms_details = $row['envirocoms_details'];
                        $lara_details = $row['lara_details'];
                ?>
                <tr>
                    <td data-label="<?php echo $whats_included; ?>">
                        <?php echo $whats_included_details; ?>
                    </td>
                    <td data-label="<?php echo $spectre_connet; ?>">
                        <?php if ($spectre_connet_details): ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feather-check.svg" alt="">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td data-label="<?php echo $secure_go; ?>">
                        <?php if ($secure_go_details): ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feather-check.svg" alt="">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td data-label="<?php echo $envirocoms; ?>">
                        <?php if ($envirocoms_details): ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feather-check.svg" alt="">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td data-label="<?php echo $lara; ?>">
                        <?php if ($lara_details): ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feather-check.svg" alt="">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
                <tr>
                  <td></td>
                  <td data-label="<?php echo $spectre_connet; ?>">
                    <?php if(!empty($spectre_connet_link)):?>
                    <div class="s-btn b-btn">
                        <a href="<?php echo $spectre_connet_link['url']; ?>" target="<?php echo $spectre_connet_link['target']; ?>">
                            <?php echo $spectre_connet_link['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                  </td>
                  <td data-label="<?php echo $secure_go; ?>">
                  <?php if(!empty($secure_go_link)):?>
                    <div class="s-btn b-btn">
                        <a href="<?php echo $secure_go_link['url']; ?>" target="<?php echo $secure_go_link['target']; ?>">
                            <?php echo $secure_go_link['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                  </td>
                  <td data-label="<?php echo $envirocoms; ?>">
                  <?php if(!empty($envirocoms_link)):?>
                    <div class="s-btn b-btn">
                        <a href="<?php echo $envirocoms_link['url']; ?>" target="<?php echo $envirocoms_link['target']; ?>">
                            <?php echo $envirocoms_link['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                  </td>
                  <td data-label="<?php echo $lara; ?>">
                  <?php if(!empty($lara_link)):?>
                    <div class="s-btn b-btn">
                        <a href="<?php echo $lara_link['url']; ?>" target="<?php echo $lara_link['target']; ?>">
                            <?php echo $lara_link['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                  </td>
                </tr>
            </tbody>
        </table>
	</div>
        <?php endif; ?>
		<?php
			$speak_with_spectur_show_hide_fc = get_sub_field('speak_with_spectur_show_hide_fc');
			if ($speak_with_spectur_show_hide_fc): 
			$title_sp = get_field('title_sp', 'option');
			$link_sp = get_field('link_sp', 'option');
		?>
			  <div class="row-secure tab-bt dy-flex">
				<div class="col-text-secure">
				  	<?php if(!empty($title_sp)): ?>
						<h2><?php echo $title_sp; ?></h2>
					<?php endif; ?>
				</div>
				<div class="col-secure-right">
				  <div class="inner">
					<?php if(!empty($link_sp)): ?>
					<a href="<?php echo $link_sp['url']; ?>" target="<?php echo $link_sp['target']; ?>">
						<span><?php echo $link_sp['title']; ?></span>
						<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-aa.png" alt=""></span>
					</a>
					<?php endif; ?>
				  </div>
				</div>
			  </div>
		<?php endif; ?>
    </div>
</div>