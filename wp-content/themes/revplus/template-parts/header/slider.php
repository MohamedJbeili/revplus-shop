<?php


$slider_names=[
  'slider1'=>'slider_1',
  'slider2'=>'slider_2',
  'slider3'=>'slider_3',
  'slider4'=>'slider_4'
];?>
        <div id="slides" class="owl-carousel">
            <?php foreach($slider_names as $slide_lable => $slide_name):
              $setting_id = sprintf('revplus %s',$slide_name);
              $slide_url = get_theme_mod( $setting_id );
              if(!empty( $slide_url)):?>
                <div class="slide">
                  <img src="<?php echo esc_url($slide_url);?>" alt="<?php echo esc_html($slide_lable );?>">
                </div>
              <?php endif;?>
            <?php endforeach;?>
            
            
           
        </div><!-- id slides -->
        
        <!-- <div class="indicators flex-center-between">
            <i id="prev" class="fa-solid fa-chevron-left fa-xl"></i>
            <i id="next" class="fa-solid fa-chevron-right fa-xl"></i>
            </div> -->
    