

<!-- CONTACT FORM Modal -->
<div class="modal fade" id="cFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact us</h4>
      </div>
      <div class="modal-body">
      <form>
<form class="">
  <div class="form-group form-group-icon">
    
    
      <input type="email" class="form-control" id="tester_email" placeholder="Type your email">
      <i class="fa fa-envelope"></i>
    
  </div>
  <div class="form-group form-group-icon">
    
    
      <textarea class="form-control" id="tester_message" placeholder="Type your message..."></textarea>
      <i class="fa fa-comment"></i>
    
    
  </div>
  
</form>        

      

      </div>
<div class="modal-footer">
 <button type="button" class="btn btn-primary btn-block btn-rounded btn-lg">Send</button> 
</div>
    </div>
  </div>
</div>


<!-- Modal 4 VIDEO -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Website Usability Test</h4>
      </div>
      <div class="modal-body">

<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src=""></iframe>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">


  autoPlayYouTubeModal();

  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYouTubeModal() {
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }


$("#videoModal").on('hidden.bs.modal', function (e) {
    $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
});

</script>