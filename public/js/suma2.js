$(function() {
    $(".balanzas").keyup(function (event) {
        var total = 0;
        $(".balanzas").each(function () {
            var gtotal = 0;
            $(this).find(".balanza").each(function () {
                var qty = parseInt($(this).find(".cantidad2").val());
                var rate = parseInt($(this).find(".v_unitario2").val());
                var subtotal = qty * rate;
                $(this).find(".subtotal2").val(subtotal);
                if (!isNaN(subtotal))
                    gtotal += subtotal;
            });
            $(this).find(".totalba").val(gtotal);
            total += gtotal
        });
    });
});