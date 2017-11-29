$(function() {
    $(".pesometros").keyup(function (event) {
        var total = 0;
        $(".pesometros").each(function () {
            var gtotal = 0;
            $(this).find(".pesometro").each(function () {
                var qty = parseInt($(this).find(".cantidad4").val());
                var rate = parseInt($(this).find(".v_unitario4").val());
                var subtotal = qty * rate;
                $(this).find(".subtotal4").val(subtotal);
                if (!isNaN(subtotal))
                    gtotal += subtotal;
            });
            $(this).find(".totalpe").val(gtotal);
            total += gtotal
        });
    });
});