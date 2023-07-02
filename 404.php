<?php
get_header(); ?>
<section class="error-details">
    <div class="container py-3">
        <div class="d-flex flex-row justify-content-center">
            <div class="col-md-12">
                <div class="error-404 not-found text-center">
                    <?php
                    $error = get_field('error', 'option');
                    echo '<div class="entry-title text-center">';
                    if ($error['title']) {
                        printf('<h1 class="title text-uppercase">%s</h1>', $error['title']);
                    } else {
                        printf('<h1 class="title text-uppercase">%s</h1>', '404');
                    }

                    echo '</div>';

                    echo '<div class="page-content">';
                    if ($error['description']) {
                        printf('%s', $error['description']);
                    } else {
                        printf('<p>%s</p>', 'It looks like nothing was found at this location. Maybe try one of the links below or a search?') . "<br />";
                    }
                    echo '<br/>';
                    echo '<br/>';
                    echo '<div class="btn-box">';
                    if ($error['button']) { ?>
                        <button type="button" class="btn more-details"><a href="<?php echo $error['button']; ?>">Go Back To Home</a></button>
                    <?php   } else {
                        printf('<a href="%s" class="btn">%s</a>', esc_url(home_url('/')), 'Go Back To Home');
                    }
                    echo '</div>';
                    echo '</div>';
                    ?>
                </div><!-- .error-404 -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>