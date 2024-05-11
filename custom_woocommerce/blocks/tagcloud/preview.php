<h3>My Сhosen Tag Cloud</h3>

<?php $lang = $_SERVER['REQUEST_URI'];  $rest = substr($lang, 0, 4);?>

<?php if ($rest == '/en/'):?>
    <p class="my_tagscloud wp-block-tag-cloud">
        <?php
        $args = array(
        'taxonomy' => 'post_tag',
        'orderby' => 'name',
        'hide_empty' => 0,
        'include' => '244,245,246,247,248,249,250,251',
        );

        wp_list_categories($args);
        ?>
    </p>
<?php else:?>
    <p class="my_tagscloud wp-block-tag-cloud">
        <?php
        $args = array(
        'taxonomy' => 'post_tag',
        'orderby' => 'name',
        'hide_empty' => 0,
        'include' => '232,233,234,235,236,237,238,239,240,243',
        );

        wp_list_categories($args);
        ?>
    </p>
<?php endif; ?>


<div class="live_search">
    <h3 >Search</h3>
    <?php get_search_form();?>
</div>
