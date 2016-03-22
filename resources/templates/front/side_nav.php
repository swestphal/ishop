<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 21.03.16
 * Time: 14:41
 */
?>
<div class="col-md-3">
    <p class="lead">Luxury Dog</p>
    <div class="list-group">

        <?php $categories = get_categories();
        foreach ($categories as $category) {
            ; ?>
            <a href="category.php?id=<?php echo $category['cat_id']; ?>"
               class="list-group-item"><?php echo $category['cat_title']; ?></a>
        <?php }; ?>
    </div>
</div>
