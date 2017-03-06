$(document).ready(function() {
    $('input[class^="class"]').click(function() {
        var $this = $(this);
        if ($this.is(".class1")) {
            if ($(".class1:checked").length > 0) {
                $(".class2").prop({
                    disabled: true,
                    checked: false
                });
                $(".class3").prop({
                    disabled: true,
                    checked: false
                });
                $(".class4").prop({
                    disabled: true,
                    checked: false
                });
            } else {
                $(".class2").prop("disabled", false);
                $(".class3").prop("disabled", false);
                $(".class4").prop("disabled", false);
            }
        } else if ($this.is(".class2")) {
            if ($(".class2:checked").length > 0) {
                $(".class3").prop({
                    checked: false
                });
            }
        } else if ($this.is(".class3")) {
            if ($(".class3:checked").length > 0) {
                $(".class2").prop({
                    checked: false
                });
            }
        }
    });
});
