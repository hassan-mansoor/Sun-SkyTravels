<?php
$slider_img=array('images/slider-image1.jpg',
                  'images/slider-image2.jpg',
				 'images/slider-image3.jpg',
				 'images/slider-image4.jpg',
				 'images/slider-image5.jpg',
				 'images/slider-image6.jpg',
				 'images/slider-image7.jpg'
				  );


for($i=0; $i<count($slider_img); $i++) {


                   echo '
						<li>
                            <img src="'.$slider_img[$i].'">
                            <div class="ei-title">
                                 <h2>welcome to</h2>
                                <h3>Sun & Sky Travels</h3>
                             
                            </div>
                        </li>';

}

 


?>