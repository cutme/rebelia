<?php
    $address = get_field('address');
    $map = get_field('map');
    $map_lat = $map['map__lat'];
    $map_lng = $map['map__lng']; ?>

                <div class="c-map">    
                    <div 
                        class="c-map__area is-loading js-map" 
                        data-lat="<?= $map_lat; ?>" data-lng="<?= $map_lng; ?>" data-marker="<?php echo get_template_directory_uri(); ?>/img/icons/pin.svg") %>>
                    </div>
                    
                    <div class="c-map__wrap">
                        <div class="c-map__info js-mapinfo">
                            
                            <?= $address; ?>
                            
                        </div>
                    </div>
                </div> 
