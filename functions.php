add_action('wp_ajax_nopriv_keywordajax_submission','keyword_ajax_handler');
function keyword_ajax_handler(){

$user_text = $_POST['message'];
$words = str_word_count(strtolower($user_text),1);
$numWords = count($words);

// array_count_values() returns an array using the values of the input array as keys and their frequency in input as values.
$word_count = (array_count_values($words));
arsort($word_count);
  foreach ($word_count as $key=>$val) {
    if ( $val > 3) { ?>
            <?php echo "$key = $val times  Density: ".number_format(($val/$numWords)*100)."%<br/>\n"; ?> 
      <?php }
    }
}

?>
