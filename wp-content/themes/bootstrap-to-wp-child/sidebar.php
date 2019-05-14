 <div class="col-md-3 sidebar">

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('page') ) : ?>
        <h2>Sidebar</h2>
        <p> Welcome to this website!</p>
    <?php endif; ?>

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog') ) : ?>
        <h2>Sidebar</h2>
        <p> Welcome to this website!</p>
    <?php endif; ?>
    



</div><!-- end col -->