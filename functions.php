add_action('wp_ajax_nopriv_keyword_ajax_density','keyword_ajax_density');
add_action('wp_ajax_priv_keyword_ajax_density','keyword_ajax_density');
function keyword_ajax_density(){

$user_text = $_POST['message'];
$words = str_word_count(strtolower($user_text),1);
$numWords = count($words);

// array_count_values() returns an array using the values of the input array as keys and their frequency in input as values.
$word_count = (array_count_values($words));
arsort($word_count);
if ($word_count != 0) {
  $i=0;
  foreach ($word_count as $key=>$val) {

    if ( $val >= 0 && $i<=9) { 
      ?>
            <p><?php $percent = number_format(($val/$numWords)*100);  echo "$key = $val times  Density: ".number_format(($val/$numWords)*100)."%<br/>\n"; 
            
            if ($percent > 0.5 && $percent <=2.5) { ?>
                <h6 class="keyword-succesfully-density" value="<?php echo $percent;?>"> <div id="myProgress">
                  <?php $new_density = $percent*40; ?>
                  <div id="myBar" style="width:<?php echo $new_density;?>%;"></div>
                  </div>  
                </h6>
            <?php } 

            else { ?>
            <h6 class="keyword-failed-density" value="<?php echo $percent;?>"> <div id="myProgress">
                <div id="myBar" style="width:<?php echo $percent;?>%;""> 
                </div>
              </div>  
            </h6>
              <?php }
            ?> </p>
      <?php } 
    }
}
  wp_die(); 
}

?>
