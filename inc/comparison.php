<?php
/**
 * Created by PhpStorm.
 * User: HarryJeffs
 * Date: 14/1/18
 * Time: 7:18 PM
 */

$unique_id = intval($_POST['unique_id']); // get the unique id from the photo clicked on service.php

$image_type = ".jpg";
$path = "img/before-after/";

$image_info = array(
    374 => array(
        'before' => 'bathroom-1-before',
        'after' => 'bathroom-1-after'
    ),
    294 => array(
        'before' => 'bathroom-2-before',
        'after' => 'bathroom-2-after'
    ),
    475 => array(
        'before' => 'bathroom-3-before',
        'after' => 'bathroom-3-after'
    ),
    918 => array(
        'before' => 'kitchen-1-before',
        'after' => 'kitchen-1-after'
    )
);
if($unique_id  == 0  || $unique_id == "undefined"){
    echo "<h4>An error has occurred. Please reload the page.  </h4>";
}else {
    ?>
    <div class="ba-slider">
        <img src="<? echo $path . $image_info[$unique_id]['before'] . $image_type ?>">
        <div class="resize">
            <img src="<? echo $path . $image_info[$unique_id]['after'] . $image_type ?>">
        </div>
        <span class="handle"></span>
    </div>

    <?php
}
