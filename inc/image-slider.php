<?php
/**
 * Created by PhpStorm.
 * User: HarryJeffs
 * Date: 14/1/18
 * Time: 5:40 PM
 */

$image_type = ".jpg";
$path = "img/before-after/";

$images = array(
     array(
        "image_name"=>"bathroom-1-before",
        "unique_id" => 374,
         "bath_num" => 1,
    ),
    array(
        "image_name"=>"bathroom-1-after",
        "unique_id" => 374,
        "bath_num" => 1
    ),
    array(
        "image_name"=>"bathroom-2-before",
        "unique_id" => 294,
        "bath_num" => 1
    ),
    array(
        "image_name"=>"bathroom-2-after",
        "unique_id" => 294,
        "bath_num" => 1
    ),
    array(
        "image_name"=>"bathroom-3-before",
        "unique_id" => 475,
        "bath_num" => 1
    ),
    array(
        "image_name"=>"bathroom-3-after",
        "unique_id" => 475,
        "bath_num" => 1
    ),
    array(
        "image_name"=>"kitchen-1-before",
        "unique_id" => 918,
        "bath_num" => 1
    ),
    array(
        "image_name"=>"kitchen-1-after",
        "unique_id" => 918,
        "bath_num" => 1
    ),
);
foreach ($images as $image) {
    echo '<div class="col-md-3">
        <div class="img-padding">
            <div class="image-animate-slider" data-toggle="modal" data-target="#image-preview" data-modal_id="'.$image["unique_id"].'">
                <img src="'.$path.$image["image_name"] . $image_type .'" class="before/after">
            </div>
            <!-- image-animate-slider -->
        </div>
        <!-- img padding -->
    </div>
    <!-- col md 3 --> 
    ';
}