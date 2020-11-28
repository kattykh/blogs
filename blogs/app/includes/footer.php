  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <h1 class="logo-text">Awa<span>Inspires</span></h1>
        <p>
          AwaInspires is a fictional blog conceived for the purpose
          of a tutorial on YouTube. However, Awa has a blog called pieceofadvice.org
          where he writes truly inspiring stuff.
        </p>
        <!-- <br> -->
        <div class="contact">
          <i class="fa fa-phone"> &nbsp; 123-456-789</i>
          <i class="fa fa-envelope"> &nbsp; info@mywebsite.com</i>
        </div>
        <div class="social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube-play"></i></a>
        </div>
      </div>
      <div class="footer-section quick-links">
        <h2>QUICK LINKS</h2>
        <ul>
          <a href="#">
            <li>Events</li>
          </a>
          <a href="#">
            <li>Contact</li>
          </a>
          <a href="#">
            <li>Mentors</li>
          </a>
          <a href="#">
            <li>Galleries</li>
          </a>
          <a href="#">
            <li>Write for us</li>
          </a>
          <a href="#">
            <li>Terms and conditions</li>
          </a>
        </ul>
      </div>
      <div class="footer-section contact-form-div">
        <h2>Contact Us</h2>
        <br>
        <form action="index.php" method="post">
          <input type="text" name="email-address" class="text-input contact-input" placeholder="Your email address">
          <textarea name="message" cols="30" rows="3" class="text-input contact-input" placeholder="Message..."></textarea>
          <button type="submit" name="send-msg-btn" class="send-msg-btn">
            <i class="fa fa-send"></i> Send
          </button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© Coding Poets | Designed by Awa</p>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function(){
        // When user clicks on submit comment to add comment under post
  $(document).on('click', '#submit_comment', function(e) {
    
    e.preventDefault();
    var comment_text = $('#comment_text').val();
    var postid = $('#postid').val();
    var url = $('#comment_form').attr('action');
    // Stop executing if not value is entered
    if (comment_text === "" ) return;
    $.ajax({
      url: url,
      type: "POST",
      data: {
        comment_text: comment_text,
        postid : postid,
        comment_posted: 1
      },
      success: function(data){
        var response = JSON.parse(data);
        if (data === "error") {
          alert('There was an error adding comment. Please try again');
        } else {
          $('#comments-wrapper').prepend(response.comment)
          $('#comments_count').text(response.comments_count); 
          $('#comment_text').val('');
        }
      }
    });
  });

  $(document).on('click', '.reply-btn', function(e){
    e.preventDefault();
    // Get the comment id from the reply button's data-id attribute
    var comment_id = $(this).data('id');
    // show/hide the appropriate reply form (from the reply-btn (this), go to the parent element (comment-details)
    // and then its siblings which is a form element with id comment_reply_form_ + comment_id)
    $(this).parent().siblings('form#comment_reply_form_' + comment_id).toggle(500);
    $(document).on('click', '.submit-reply', function(e){
      e.preventDefault();
      // elements
      var reply_textarea = $(this).siblings('textarea'); // reply textarea element
      var reply_text = $(this).siblings('textarea').val();
      var url = $(this).parent().attr('action');
      $.ajax({
        url: url,
        type: "POST",
        data: {
          comment_id: comment_id,
          reply_text: reply_text,
          reply_posted: 1
        },
        success: function(data){
          if (data === "error") {
            alert('There was an error adding reply. Please try again');
          } else {
            $('.replies_wrapper_' + comment_id).append(data);
            reply_textarea.val('');
          }
        }
      });
    });
  });
});
</script>