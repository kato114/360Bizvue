<div class="form-1-1 pb-4" style="width: 100%;">
  <p><b>Would you like to find out more or get started today? *</b></p>
  <div class="row">
    <div class="col-12">
      <div class="radio-inline">
        <label class="radio radio-solid">
        <input type="radio" id="item_111" name="item[11]" value="2">
        <span></span>Advisory Service where we advise your marketing, technical, and social media teams weekly on the best way to react to new customer trends and rivals recent actions.</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="radio-inline">
        <label class="radio radio-solid">
        <input type="radio" id="item_112" name="item[11]" value="2">
        <span></span>Reaction Service where we make technical and content adjustments to your website in response to recent trends and rival actions. Then we advisor your social media team when content is ready to be shared socially. (No updates are made without your approval.)</label>
      </div>
    </div>
  </div>
  <div class="form-1-1-1 pb-4" style="display: none;">
    <div class="row pb-2">
      <div class="col-md-12 heading-section">
        <h4 class="text-primary">Advisory Service</h4>
      </div>
    </div>
    <p><b>The monthly service fee ranges from $75 - $750 depending on the number of trending topics and rivals you would like intelligence on weekly.</b></p>
    <div class="form-group row">
      <div class="col-6">
        <label>What is the name of your law firm? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
      <div class="col-6">
        <label>What is your full name? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-6">
        <label>What is your email address? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
      <div class="col-6">
        <label>What is your website address? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <label>What are the practice areas and in which cities would you like to receive new customers? *</label>
        <div class="input-group">
          <textarea class="form-control" rows="10"></textarea>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <label>What is the name and website URL of a local rival that you would like to outperform? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
    </div>
  </div>
  <div class="form-1-1-2 pb-4" style="display: none;">
    <div class="row pb-2">
      <div class="col-md-12 heading-section">
        <h4 class="text-primary">Reaction Service</h4>
      </div>
    </div>
    <p><b>The monthly service fee starts at $360 and is based on the number of responses you would like us to make weekly.</b></p>
    <div class="form-group row">
      <div class="col-6">
        <label>What is the name of your law firm? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
      <div class="col-6">
        <label>What is your full name? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-6">
        <label>What is your email address? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
      <div class="col-6">
        <label>What is your website address? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <label>What are the practice areas and in which cities would you like to receive new customers? *</label>
        <div class="input-group">
          <textarea class="form-control" rows="10"></textarea>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <label>What is the name and website URL of a local rival that you would like to outperform? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " placeholder="">
        </div>
      </div>
    </div>
  </div>
</div>
@section('script_digital')
<script type="text/javascript">
  $("#item_111").on("click", function() {
    $('.form-1-1-1').show();
    $('.form-1-1-2').hide();
  });
  $("#item_112").on("click", function() {
    $('.form-1-1-1').hide();
    $('.form-1-1-2').show();
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
        content: $(".form-1-1").html() 
      }
    })
    .done(function( msg ) {
      alert("Email has been sent and we will be in contact with them shortly");
      document.location.href = document.location.href;
    });
  });
</script>
@endsection