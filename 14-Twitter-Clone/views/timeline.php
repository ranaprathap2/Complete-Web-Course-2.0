<div class="container pt-3">
  <div class="row">
    <div class="col-md-8">
      <h2 class="text-center">Your Twingeline</h2>
      <?php displayTweets('isFollowing'); ?>
    </div>
    <div class="col-md-4 mt-5">
      <?php displaySearch(); ?>
      <?php displayTweetBox(); ?> 
    </div>
  </div>
</div>
