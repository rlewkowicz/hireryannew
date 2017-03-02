$(document).ready(function() {

  $('input[class^="class"]').click(function() {
      var $this = $(this);
      if ($this.is(".willcontact")) {
          if ($(".willcontact:checked").length > 0) {
              $(".main-check").prop({ disabled: true, checked: false });
          } else {
              $(".main-check").prop("disabled", false);
          }
      } else if ($this.is(".class2")) {
          if ($this.is(":checked")) {
              $(".class2").not($this).prop({ disabled: true, checked: false });
              $(".class1").prop("checked", true);
          } else {
              $(".class2").prop("disabled", false);
          }
      }
  });

});
