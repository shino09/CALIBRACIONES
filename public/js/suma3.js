$(function() {
    $(".masas").keyup(function (event) {
        var total = 0;
        $(".masas").each(function () {
            var gtotal = 0;
            $(this).find(".masa").each(function () {
                var qty = parseInt($(this).find(".cantidad3").val());
                var rate = parseInt($(this).find(".v_unitario3").val());
                var subtotal = qty * rate;
                $(this).find(".subtotal3").val(subtotal);
                if (!isNaN(subtotal))
                    gtotal += subtotal;
            });
            $(this).find(".totalma").val(gtotal);
            total += gtotal
        });
    });
});