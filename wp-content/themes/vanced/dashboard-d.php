<?php 
/**
 * Template Name: Dashboard
*/
get_header();?>
<?php

if (isset($_POST['accepted'])) {
    $post_id = $_POST['post-id'];
    $new_value = $_POST['meta-field'];
    update_post_meta($post_id, 'project_status_select', $new_value);
}

if (isset($_POST['completed'])) {
    $post_id = $_POST['project-id'];
    $new_value = $_POST['meta-field2'];
    update_post_meta($post_id, 'project_status_select', $new_value);
}

$current_user = wp_get_current_user();
$user = new WP_User( $current_user ->ID);
$project_status = get_post_meta(get_the_ID(), 'project_status_select', true);

// The Query
$query = new WP_Query(array(
    'post_type' => 'project',
    'meta_query' => array(
        array(
            'key' => 'project_user',
            'value' => $current_user->ID,
        )
    )
));
query_posts( $query );

// The Loop
if($query->have_posts()):
while ( $query->have_posts() ) : 
    $query->the_post();  
// your post content ( title, excerpt, thumb....)

$project_start = get_post_meta(get_the_ID(), 'project_start', true);
$project_end = get_post_meta(get_the_ID(), 'project_end', true);
$project_status = get_post_meta(get_the_ID(), 'project_status_select', true);

$project_user_id = get_post_meta(get_the_ID(), 'project_user', true);

endwhile;
//Reset Query
wp_reset_query();
endif;
?>
<section class="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                <h2 class="my-5 text-center text-light">
                <?php 
                            if ( is_user_logged_in() ) { 
                            echo 'Welcome ' . $current_user->user_login . "\n"; 
                            } else { 
                            wp_loginout(); 
                            } 
                        ?>
                    </h2>
                    <div class="m-5 card card-outline card-success">
                        <div class="card-header">
                            <div class="card-tools d-flex mb-2">
                                <h5 class="text-center text-primary mt-2 flex-grow-1">Complete the Projects Listed</h5>
                                <a class=" ms-auto btn btn-primary" href="../completed-projects"> Completed Projects</a>
                            </div>
                            <div class="alert alert-warning alert-dismissible text-center" <?php if ($project_status == 'In Progress' || $project_status == 'Completed'  || $project_status == '') { echo'style="display:none;"'; } ?> role="alert">
                                <strong>Warning!</strong> Once a project has been accepted it cannot be retracted.
                            </div>
                            <div class="alert alert-info mb-2 alert-dismissible text-center" <?php if ($project_status == 'Pending' || $project_status == 'Completed'  || $project_status == '') { echo'style="display:none;"'; } ?>  role="alert">
                                <strong>Success!</strong> This Project has been marked to be In Progress
                            </div>
                            <div class="alert alert-success alert-dismissible text-center" <?php if ($project_status == 'In Progress' || $project_status == 'Pending'  || $project_status == '') { echo'style="display:none;"'; } ?>  role="alert">
                                <strong>Congratulations!</strong> You have completed the project.
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-condensed" id="list">
                                <colgroup>
                                    <col width="5%">
                                    <col width="10%">
                                    <col width="25%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project</th>
                                        <th>Description</th>
                                        <th>Project Started</th>
                                        <th>Project Due Date</th>
                                        <th>Project Status</th>
                                        <th>React</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                // The Query
                                $query = new WP_Query(array(
                                    'post_type' => 'project',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'project_user',
                                            'value' => $current_user->ID,
                                        )
                                    )
                                ));
                                query_posts( $query );

                                // The Loop
                                if($query->have_posts()):
                                while ( $query->have_posts() ) : 
                                    $query->the_post();  
                                // your post content ( title, excerpt, thumb....)

                                $project_start = get_post_meta(get_the_ID(), 'project_start', true);
                                $project_end = get_post_meta(get_the_ID(), 'project_end', true);
                                $project_status = get_post_meta(get_the_ID(), 'project_status_select', true);

                                $project_user_id = get_post_meta(get_the_ID(), 'project_user', true);

                                $project_user = '';
                                if ( $project_user_id ) {
                                    $user_info = get_userdata( $project_user_id );
                                    if ( $user_info ) {
                                        $project_user = $user_info->display_name;
                                    }
                                }

                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><p class="mt-2">1</p></td>
                                        <td >
                                            <p class="mt-2"><b><?php the_title();?></b></p>
                                        </td>
                                        <td>
                                            <p class="mt-0 text-truncate"><?php the_content();?></b></p>
                                        </td>

                                        <td><p class="mt-2"><b><?php echo esc_attr( $project_start ) ;?></b></p></td>
                                        <td><p class="mt-2"><b><?php echo esc_attr( $project_end ) ;?></b></p></td>
                                        <td>
                                            <p class="mt-2"><span class=''><?php echo esc_attr( $project_status ) ;?></span></p>                      
                                        </td>

                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="In Progress">
                                                    <input type="hidden" name="post-id" value="<?php echo get_the_ID(); ?>">                      
                                                    <button class="btn btn-primary"type="submit" name="accepted" <?php if ($project_status == 'In Progress' || $project_status == 'Completed') { echo'disabled'; } ?> >Accept</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field2" value="Completed">
                                                    <input type="hidden" name="project-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="completed" <?php if ($project_status == 'Completed') { echo'disabled'; } ?>>Completed</button>
                                                </form>
                                            </div>                       
                                        </td>
                                    </tr>	
                                    
                                </tbody>
                                <?php
                                    endwhile;
                                    //Reset Query
                                    wp_reset_query();
                                endif;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
<?php
?>
        


<?php get_footer();?>