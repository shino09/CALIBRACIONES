$(function() {
    $(".basculas").keyup(function (event) {
        var total = 0;
        $(".basculas").each(function () {
            var gtotal = 0;
            $(this).find(".bascula").each(function () {
                var qty = parseInt($(this).find(".cantidad").val());
                console.log(qty);
                var rate = parseInt($(this).find(".v_unitario").val());
                var subtotal = qty * rate;

                $(this).find(".subtotal").val(subtotal);
                if (!isNaN(subtotal))
                    gtotal += subtotal;
            });
            $(this).find(".totalbas").val(gtotal);
            if (!isNaN(gtotal))
                total += gtotal;
        });
    });
});