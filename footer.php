 <footer class="page-footer">
        
    </footer>

</div><?php // </.container> ?>

<?php
    $production = false;
    $theme = get_template_directory_uri();

    // if we're in production mode, include minified concatenated script
    // if not then pull them in unminified individually for easier debugging
    if ($production) {

        echo '<script src ="' . $theme . '/js/production.js"></script>';

    } else {

        echo '<script src ="' . $theme . '/js/bower/jquery/dist/jquery.js"></script>';
        echo '<script src ="' . $theme . '/js/bower/modernizr/modernizr.js"></script>';
        echo '<script src ="' . $theme . '/js/bower/jquery-smartresize/jquery.debouncedresize.js"></script>';
        echo '<script src ="' . $theme . '/js/instafeed.js"></script>';
        echo '<script src ="' . $theme . '/js/project.js"></script>';

    }
?>
<?php wp_footer(); ?>



<section class="page-section footer">
    <div class="container">
        <p class="footer-text">All content copyright Gareth Wyn</p>
    </div>
</section>


</body>
</html>

