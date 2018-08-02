<?php
/**
 * Created by PhpStorm.
 * User: HarryJeffs
 * Date: 31/12/17
 * Time: 10:32 PM
 */
$testimonial = array(
    array(
        "image"=>"",
        "testimonial_text"=>"I engaged Andy for a major renovation of my flat, including new bathroom, kitchen, flooring, painting, split system and more. Throughout I found Andy to be easy to engage with, very organized and reliable and the work was done within the agreed timeframe. Andy took care to consult with me before and during the project, and provided helpful contacts and advice. Issues that came up along the way were discussed and there were no unexpected bills at the end.  He even hung pictures for me as a finishing touch. All in all Andy turned what could have been a very stressful project into something quite smooth. I am extremely happy with the results and enjoying my “new” flat!",
        "name"=>"Carolyn Parkdale",
        "rating"=>"4.5"
    ),
    array(
        "image"=>"",
        "testimonial_text"=>"Andy at Creaton Renovations came to me highly recommended, and did not disappoint. He was able to apply his considerable knowledge, skills, and experience to our small but tricky renovation project and give us outcomes that exceeded our expectations.

Andy’s down-to-earth professionalism and ‘can-do’ approach made us feel very comfortable in trusting both his advice and his reliability to carry out renovations in our absence. He kept us well informed of progress, and completed the work on schedule, without a hitch….and leaving no sign that building works had been done on the property.

I have no reservations in recommending Andy and Creaton Renovations to others, and would not hesitate to engage him again.

",
        "name"=>"Sam Kennard",
        "rating"=>"5"
    ),
);

?>

<div class="col-md-8">
    <div id="action-testimonial">
        <?php


        for($i=0;$i < count($testimonial); $i++) {
            echo '
               <div class="item">
                    <div class="client-comments">
                        <p>'.$testimonial[$i]['testimonial_text'].'</p>
                        <span class="name">'.$testimonial[$i]['name'].'</span>
                        <span class="designation">'.$testimonial[$i]['rating'].'/5</span>
                    </div>
                </div>
          ';
        }
        ?>
    </div>
</div>
