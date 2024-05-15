<?php
            $acknowledgementImg = get_field('acknowledgement_img');
            $acknowledgementDate = get_field('acknowledgement_date');
            $acknowledgementInfo = get_field('acknowledgement_info');

            ?>
                <div class="card">
                    <div class="card__img">
                        <?php if (!empty($acknowledgementImg)) : ?>
                            <a data-fslightbox="gallery" href="<?php echo esc_url($acknowledgementImg['url']); ?>">
                                <img src="<?php echo esc_url($acknowledgementImg['url']); ?>" alt="<?php echo esc_attr($acknowledgementImg['alt']); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                    <p class="card__date"><?php echo($acknowledgementDate); ?></p>
                    <p class="card__info"><?php echo($acknowledgementInfo); ?></p>
                </div>