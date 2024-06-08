<?php
						$url = urlencode( get_permalink() ); 
						$title = urlencode( get_the_title() );								

						$fb_share_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url . '&title=' . $title;
						echo '<a href="' . $fb_share_url . '" target="_blank">
							<svg class="icon">
                                <use xlink:href="' . get_bloginfo('template_url') . '/assets/images/icons-sprite.svg#facebook" alt="facebook"></use>
                            </svg> 						    
						</a>';						
						?>