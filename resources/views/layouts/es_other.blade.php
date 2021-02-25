<div class="form-3-1 pb-4" style="width: 100%;">
  <div class="form-group row">
    <div class="col-12">
      <label>¿Cómo podemos ayudarle? *</label>
      <div class="input-group">
        <textarea class="form-control input-sm " rows="5"></textarea>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-4">
      <label>Nombre de pila *</label>
      <div class="input-group">
        <input type="text" class="form-control input-sm " name="nm_firstname" placeholder="">
      </div>
    </div>
    <div class="col-4">
      <label>Apellido *</label>
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

@section('script_digital')
<script type="text/javascript">
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
        content: $(".form-3-1").html() 
      }
    })
    .done(function( msg ) {
      alert("Email has been sent and we will be in contact with them shortly");
      document.location.href = document.location.href;
    });
  });
</script>
@endsection