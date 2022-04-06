var fruit = $("[name=doctor] option").detach()
$("[name=department]").on('change',function() {
  var val = $(this).val()
  $("[name=doctor] option").detach()
  fruit.filter("." + val).clone().appendTo("[name=doctor]")
}).on('change')