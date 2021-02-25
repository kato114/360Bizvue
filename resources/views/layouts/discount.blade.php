<div class="form-2-1 pb-4" style="width: 100%;">
  <p><b>Would you like to learn how we can help you implement a successful cash discount program for just $50 a month?</b></p>
  <div class="row">
    <div class="col-12">
      <div class="radio-inline">
        <label class="radio radio-solid">
        <input type="radio" id="item_211" name="nm_learn" value="Yes, I would like to learn more.">
        <span></span>Yes, I would like to learn more.</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="radio-inline">
        <label class="radio radio-solid">
        <input type="radio" id="item_212" name="nm_learn" value="Not at this time, but please keep me informed of the latest trends.">
        <span></span>Not at this time, but please keep me informed of the latest trends.</label>
      </div>
    </div>
  </div>
  <div class="form-2-1-1" style="display: none;">
    <div class="row pb-2">
      <div class="col-md-12 heading-section">
        <h4 class="text-primary">Great, please tell us a little about your business.</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label>What is your primary industry? *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_primary_industry" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <p><b>Do you sell internationally or US only? *</b></p>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_sell_location" checked="checked" value="2">
              <span></span>We sell in the US only.</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_sell_location" value="2">
              <span></span> We sell both in the US and Internationally.</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p><b>Which range does your monthly card sales fall in? *</b></p>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_monthly_sale" checked="checked" value="2">
              <span></span> Less than $25,000 monthly</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_monthly_sale" value="2">
              <span></span> Between $25,000 and $300,000 monthly</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_monthly_sale" value="2">
              <span></span> Greater than $300,000 monthly</label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <p><b>What is your average ticket price? *</b></p>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_ticket_price" checked="checked" value="2">
              <span></span> Less than $20.00</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_ticket_price" value="2">
              <span></span> Between $20.00 and $60.00</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="radio-inline">
              <label class="radio radio-solid">
              <input type="radio" name="nm_ticket_price" value="2">
              <span></span> Greater than $60.00</label>
            </div>
          </div>
        </div>
        <span class="form-text text-muted">(The average amount of each receipt.)</span>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-6">
        <label>First Name *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_firstname" placeholder="">
        </div>
      </div>
      <div class="col-6">
        <label>Last Name *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_lastname" placeholder="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-6">
        <label>Email *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_email" placeholder="">
        </div>
      </div>
      <div class="col-6">
        <label>Phone</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_phone" placeholder="">
        </div>
      </div>
    </div>
  </div>
  <div class="form-2-1-2" style="display: none;">
    <div class="row pb-2">
      <div class="col-md-12 heading-section">
        <h4 class="text-primary">We will keep your informed</h4>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-4">
        <label>First Name *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_firstname" placeholder="">
        </div>
      </div>
      <div class="col-4">
        <label>Last Name *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_lastname" placeholder="">
        </div>
      </div>
      <div class="col-4">
        <label>Email *</label>
        <div class="input-group">
          <input type="text" class="form-control input-sm " name="nm_email" placeholder="">
        </div>
      </div>
    </div>
  </div>
</div>
@section('script_discount')
<script type="text/javascript">
  $("#item_211").on("click", function() {
    $('.form-2-1-1').show();
    $('.form-2-1-2').hide();
  });
  $("#item_212").on("click", function() {
    $('.form-2-1-2').show();
    $('.form-2-1-1').hide();
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