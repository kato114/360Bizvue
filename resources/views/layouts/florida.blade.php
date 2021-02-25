<div class="form-2-1 pb-4" style="width: 100%;">
  <h3>Pricing starts at only $75 per month.</h3>
  <h4>Claim your member benefit:</h4>
  <p><b>Which service model would you like?</b></p>
  <div class="row">
    <div class="col-12">
      <div class="radio-inline">
        <label class="radio radio-solid">
        <input type="radio" id="item_211" name="nm_learn" value="Yes, I would like to learn more.">
        <span></span> Advisory Service where we advise your marketing, technical, and social media teams weekly on the best way to react to new customer trends and rivals recent actions.</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="radio-inline">
        <label class="radio radio-solid">
        <input type="radio" id="item_212" name="nm_learn" value="Not at this time, but please keep me informed of the latest trends.">
        <span></span> Reaction Service where we make technical and content adjustments to your website in response to recent trends and rival actions. Then we advisor your social media team when content is ready to be shared socially. (No updates are made without your approval.)</label>
      </div>
    </div>
  </div>
  <div class="form-2-1-1" style="display: none;">
    <div class="row pb-2">
      <div class="col-md-12 heading-section">
        <h4 class="text-primary">Reaction Service</h4>
        <p>The monthly service fee starts at $360 and is based on the number of responses you would like us to make weekly.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label>What is the name of your law firm? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_primary_industry" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <label>What is your full name? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_primary_industry" placeholder="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label>What is your email address? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_primary_industry" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <label>What is your website address? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_primary_industry" placeholder="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label>What are the practice areas and in which cities would you like to receive new customers? *</label>
        <div class="input-group">
          <textarea class="w-100" rows="8"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label>What is the name and website URL of a local rival that you would like to outperform? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_primary_industry" placeholder="">
        </div>
      </div>
    </div>
  </div>
</div>
@section('script_discount')
<script type="text/javascript">
  $("#item_211").on("click", function() {
    $('.form-2-1-1').show();
  });
  $("#item_212").on("click", function() {
    $('.form-2-1-1').show();
  });
  
  $("#btn_submit").on('click', function() {
    $("#ftco-loader").addClass('show');

    var inp_list = $("input[type=radio]");
    for(var i = 0; i < inp_list.length; i++) {
      $(inp_list[i]).attr('checked', $(inp_list[i]).prop('checked'));
      $(inp_list[i]).removeAttr('name');
    }

    var inp_list = $("input[type=text]");
    for(var i = 0; i < inp_list.length; i++) {
      $(inp_list[i]).attr('value', $(inp_list[i]).val());
      $(inp_list[i]).css({'width': '95%', 'border': 'none', 'cursor': 'default'});
    }

    var inp_list = $("textarea");
    for(var i = 0; i < inp_list.length; i++) {
      $(inp_list[i]).parent().html($(inp_list[i]).val());
      $(inp_list[i]).remove();
      $(inp_list[i]).css({'width': '95%', 'border': 'none', 'cursor': 'default'});
    }

    $.ajax({
      method: "POST",
      url: "{{ route('service.send_email') }}",
      data: { 
        _token : "{{ csrf_token() }}",
        content: $(".form-2-1").html() 
      }
    })
    .done(function( msg ) {
      alert("Email has been sent and we will be in contact with them shortly");
      document.location.href = document.location.href;
    });
  });
</script>
@endsection