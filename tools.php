<div class="container">
  <div class="col-md-8">
      <form id="form" action="/wp-admin/admin-ajax.php" method="post">
        <span class="col-md-12 keywords-textarea">
          <textarea placeholder="Please enter your text here"  class ="message" type="text" name="message" ></textarea>
        </span>
        <br>
        <span class="col-md-12">
          <button type="submit" class="submit custom-button-class right" value="submit">Submit Text</button>
        </span>
        <input type="hidden" name="action" value="wp_ajax_panacea_ajax_submission"/>
      </form>
  </div>
  <div class="col-md-4">
    <div class=" form-message">
    </div>
  </div>
</div>
