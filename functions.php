/* Add Social Sharing Links for Twitter, Facebook, WhatsApp, Telegram and Threema */
function mysharelink($content) {
        if (is_singular('post')){
                // Get current post URL
                $postURL = get_permalink();

                // Get current post title
                $postTitle = str_replace( ' ', '%20', get_the_title());

                // Construct sharing URL without using any script
               	$twitterUser = 'MichiMunich';
               	$twitterURL = 'https://twitter.com/intent/tweet?text='.$postTitle.'&amp;url='.$postURL.'&amp;via='.$twitterUser;
               	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$postURL;
                $whatsappURL = 'whatsapp://send?text='.$postTitle.'%20'.$postURL;
                $threemaURL = 'threema://compose?text='.$postTitle.'%20'.$postURL;
                $telegramURL = 'https://telegram.me/share/url?url='.$postURL;

                // Add sharing link at the end of posts
                $content .= '<h3 class="sharelink_head">Teilen auf:</h3>';
                $content .= '<a class="sharelink_twitter" href='.$twitterURL.' target="blank" rel="nofollow">Twitter</a>';
               	$content .= '<a class="sharelink_facebook" href='.$facebookURL.' target="blank" rel="nofollow">Facebook</a>';
                $content .= '<a class="sharelink_whatsapp" href='.$whatsappURL.'>WhatsApp</a>';
                $content .= '<a class="sharelink_telegram" href='.$telegramURL.' rel="nofollow">Telegram</a>';
               	if ( wp_is_mobile() ) {
                        $content .= '<a class="sharelink_threema" href='.$threemaURL.'>Threema</a>';
                }

                return $content;
        }else{
              	// if not a post/page then don't include share links
                return $content;
        }
};
