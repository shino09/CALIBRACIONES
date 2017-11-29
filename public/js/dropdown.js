$("#tipoEquipo_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo_id){

        $("#marca_id").empty();

        $("#marca_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca_id){
                $("#modelo_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo_id){
        $("#tipo_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo_id){
        $("#unidadc_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo_id){
        $("#unidadg_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo_id){
        $("#condicion_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo1_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo1_id){
        $("#marca1_id").empty();

        $("#marca1_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca1_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca1_id){
                $("#modelo1_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo1_id){
        $("#tipo1_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo1_id){
        $("#unidadc1_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo1_id){
        $("#unidadg1_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo1_id){
        $("#condicion1_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo2_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo2_id){
        $("#marca2_id").empty();

        $("#marca2_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca2_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca2_id){
                $("#modelo2_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo2_id){
        $("#tipo2_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo2_id){
        $("#unidadc2_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo2_id){
        $("#unidadg2_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo2_id){
        $("#condicion2_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo3_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo3_id){
        $("#marca3_id").empty();

        $("#marca3_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca3_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca3_id){
                $("#modelo3_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo3_id){
        $("#tipo3_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo3_id){
        $("#unidadc3_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo3_id){
        $("#unidadg3_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo3_id){
        $("#condicion3_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});
$("#tipoEquipo4_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo4_id){
        $("#marca4_id").empty();

        $("#marca4_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca4_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca4_id){
                $("#modelo4_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo4_id){
        $("#tipo4_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo4_id){
        $("#unidadc4_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo4_id){
        $("#unidadg4_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo4_id){
        $("#condicion4_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo5_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo5_id){
        $("#marca5_id").empty();

        $("#marca5_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca5_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca5_id){
                $("#modelo5_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo5_id){
        $("#tipo5_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo5_id){
        $("#unidadc5_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo5_id){
        $("#unidadg5_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo5_id){
        $("#condicion5_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo6_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo6_id){
        $("#marca6_id").empty();

        $("#marca6_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca6_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca6_id){
                $("#modelo6_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo6_id){
        $("#tipo6_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo6_id){
        $("#unidadc6_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo6_id){
        $("#unidadg6_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo2_id){
        $("#condicion6_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo7_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo7_id){
        $("#marca7_id").empty();

        $("#marca7_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca7_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca7_id){
                $("#modelo7_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo7_id){
        $("#tipo7_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo7_id){
        $("#unidadc7_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo7_id){
        $("#unidadg7_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo7_id){
        $("#condicion7_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo8_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo8_id){
        $("#marca8_id").empty();

        $("#marca8_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca8_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca8_id){
                $("#modelo8_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo8_id){
        $("#tipo8_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo8_id){
        $("#unidadc8_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo8_id){
        $("#unidadg8_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo8_id){
        $("#condicion8_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo9_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo9_id){
        $("#marca9_id").empty();

        $("#marca9_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca9_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca9_id){
                $("#modelo9_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo9_id){
        $("#tipo9_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo9_id){
        $("#unidadc9_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo9_id){
        $("#unidadg9_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo9_id){
        $("#condicion9_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo10_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo10_id){
        $("#marca10_id").empty();

        $("#marca10_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca10_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca10_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca10_id){
                $("#modelo10_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo10_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo10_id){
        $("#tipo10_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo10_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo10_id){
        $("#unidadc10_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc10_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo10_id){
        $("#unidadg10_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg10_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo10_id){
        $("#condicion10_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion10_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo11_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo11_id){
        $("#marca11_id").empty();

        $("#marca11_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca11_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca11_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca11_id){
                $("#modelo11_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo11_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo11_id){
        $("#tipo11_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo11_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo11_id){
        $("#unidadc11_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc11_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo11_id){
        $("#unidadg11_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg11_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo11_id){
        $("#condicion11_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion11_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo12_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo12_id){
        $("#marca12_id").empty();

        $("#marca12_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca12_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca12_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca12_id){
                $("#modelo12_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo12_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo12_id){
        $("#tipo12_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo12_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo12_id){
        $("#unidadc12_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc12_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo12_id){
        $("#unidadg12_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg12_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo12_id){
        $("#condicion12_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion12_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo13_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo13_id){
        $("#marca13_id").empty();

        $("#marca13_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca13_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca13_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca13_id){
                $("#modelo13_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo13_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo13_id){
        $("#tipo13_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo13_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo13_id){
        $("#unidadc13_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc13_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo13_id){
        $("#unidadg13_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg13_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo13_id){
        $("#condicion13_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion13_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo14_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo14_id){
        $("#marca14_id").empty();

        $("#marca14_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca14_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca14_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca14_id){
                $("#modelo14_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo14_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo14_id){
        $("#tipo14_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo14_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo14_id){
        $("#unidadc14_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc14_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo14_id){
        $("#unidadg14_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg14_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo14_id){
        $("#condicion14_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion14_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo15_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo15_id){
        $("#marca15_id").empty();

        $("#marca15_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca15_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca15_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca15_id){
                $("#modelo15_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo15_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo15_id){
        $("#tipo15_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo15_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo15_id){
        $("#unidadc15_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc15_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo15_id){
        $("#unidadg15_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg15_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo15_id){
        $("#condicion15_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion15_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo16_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo16_id){
        $("#marca16_id").empty();

        $("#marca16_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca16_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca16_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca16_id){
                $("#modelo16_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo16_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo16_id){
        $("#tipo16_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo16_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo16_id){
        $("#unidadc16_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc16_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo16_id){
        $("#unidadg16_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg16_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo16_id){
        $("#condicion16_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion16_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo17_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo17_id){
        $("#marca17_id").empty();

        $("#marca17_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca17_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca17_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca17_id){
                $("#modelo17_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo17_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo17_id){
        $("#tipo17_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo17_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo17_id){
        $("#unidadc17_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc17_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo17_id){
        $("#unidadg17_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg17_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo17_id){
        $("#condicion17_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion17_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo18_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo18_id){
        $("#marca18_id").empty();

        $("#marca18_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca18_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca18_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca18_id){
                $("#modelo18_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo18_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo18_id){
        $("#tipo18_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo18_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo18_id){
        $("#unidadc18_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc18_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo18_id){
        $("#unidadg18_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg18_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo18_id){
        $("#condicion18_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion18_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo19_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo19_id){
        $("#marca19_id").empty();

        $("#marca19_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca19_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca19_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca19_id){
                $("#modelo19_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo19_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipoEquipo19_id){
        $("#tipo19_id").empty();

        for(i=0;i<response.length;i++){
            $("#tipo19_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo19_id){
        $("#unidadc19_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc19_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo19_id){
        $("#unidadg19_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg19_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo19_id){
        $("#condicion19_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion19_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo20_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo20_id){
        $("#marca20_id").empty();

        $("#marca20_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca20_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca20_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca20_id){
                $("#modelo20_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo20_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo20_id){
        $("#material_id").empty();

        for(i=0;i<response.length;i++){
            $("#material_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo20_id){
        $("#unidadc20_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc20_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo20_id){
        $("#unidadg20_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg20_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo20_id){
        $("#condicion20_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion20_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo21_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo21_id){
        $("#marca21_id").empty();

        $("#marca21_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca21_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca21_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca21_id){
                $("#modelo21_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo21_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo21_id){
        $("#material1_id").empty();

        for(i=0;i<response.length;i++){
            $("#material1_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo21_id){
        $("#unidadc21_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc21_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo21_id){
        $("#unidadg21_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg21_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo21_id){
        $("#condicion21_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion21_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo22_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo22_id){
        $("#marca22_id").empty();

        $("#marca22_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca22_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca22_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca22_id){
                $("#modelo22_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo22_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo22_id){
        $("#material2_id").empty();

        for(i=0;i<response.length;i++){
            $("#material2_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo22_id){
        $("#unidadc22_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc22_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo22_id){
        $("#unidadg22_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg22_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo22_id){
        $("#condicion22_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion22_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo23_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo23_id){
        $("#marca23_id").empty();

        $("#marca23_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca23_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca23_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca23_id){
                $("#modelo23_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo23_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo23_id){
        $("#material3_id").empty();

        for(i=0;i<response.length;i++){
            $("#material3_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo23_id){
        $("#unidadc23_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc23_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo23_id){
        $("#unidadg23_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg23_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo23_id){
        $("#condicion23_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion23_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo24_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo24_id){
        $("#marca24_id").empty();

        $("#marca24_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca24_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca24_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca24_id){
                $("#modelo24_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo24_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo24_id){
        $("#material4_id").empty();

        for(i=0;i<response.length;i++){
            $("#material4_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo24_id){
        $("#unidadc24_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc24_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo24_id){
        $("#unidadg24_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg24_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo24_id){
        $("#condicion24_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion24_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo25_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo25_id){
        $("#marca25_id").empty();

        $("#marca25_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca25_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca25_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca25_id){
                $("#modelo25_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo25_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo25_id){
        $("#material5_id").empty();

        for(i=0;i<response.length;i++){
            $("#material5_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo25_id){
        $("#unidadc25_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc25_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo25_id){
        $("#unidadg25_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg25_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo25_id){
        $("#condicion25_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion25_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo26_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo26_id){
        $("#marca26_id").empty();

        $("#marca26_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca26_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca26_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca26_id){
                $("#modelo26_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo26_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo26_id){
        $("#material6_id").empty();

        for(i=0;i<response.length;i++){
            $("#material6_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo26_id){
        $("#unidadc26_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc26_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo26_id){
        $("#unidadg26_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg26_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo26_id){
        $("#condicion26_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion26_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo27_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo27_id){
        $("#marca27_id").empty();

        $("#marca27_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca27_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca27_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca27_id){
                $("#modelo27_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo27_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo27_id){
        $("#material7_id").empty();

        for(i=0;i<response.length;i++){
            $("#material7_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo27_id){
        $("#unidadc27_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc27_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo27_id){
        $("#unidadg27_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg27_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo27_id){
        $("#condicion27_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion27_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo28_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo28_id){
        $("#marca28_id").empty();

        $("#marca28_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca28_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca28_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca28_id){
                $("#modelo28_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo28_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo28_id){
        $("#material8_id").empty();

        for(i=0;i<response.length;i++){
            $("#material8_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo28_id){
        $("#unidadc28_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc28_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo28_id){
        $("#unidadg28_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg28_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo28_id){
        $("#condicion28_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion28_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo29_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo29_id){
        $("#marca29_id").empty();

        $("#marca29_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca29_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca29_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca29_id){
                $("#modelo29_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo29_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipoEquipo29_id){
        $("#material9_id").empty();

        for(i=0;i<response.length;i++){
            $("#material9_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo29_id){
        $("#unidadc29_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc29_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo29_id){
        $("#unidadg29_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg29_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo29_id){
        $("#condicion29_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion29_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipoEquipo30_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo30_id){
        $("#marca30_id").empty();

        $("#marca30_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca30_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca30_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca30_id){
                $("#modelo30_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo30_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo30_id){
        $("#unidadc30_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc30_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo30_id){
        $("#unidadg30_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg30_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo30_id){
        $("#condicion30_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion30_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo31_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo31_id){
        $("#marca31_id").empty();

        $("#marca31_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca31_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca31_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca31_id){
                $("#modelo31_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo31_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo31_id){
        $("#unidadc31_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc31_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo31_id){
        $("#unidadg31_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg31_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo31_id){
        $("#condicion31_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion31_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo32_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo32_id){
        $("#marca32_id").empty();

        $("#marca32_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca32_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca32_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca32_id){
                $("#modelo32_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo32_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo32_id){
        $("#unidadc32_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc32_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo32_id){
        $("#unidadg32_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg32_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo32_id){
        $("#condicion32_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion32_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo33_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo33_id){
        $("#marca33_id").empty();

        $("#marca33_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca33_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca33_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca33_id){
                $("#modelo33_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo33_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo33_id){
        $("#unidadc33_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc33_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo33_id){
        $("#unidadg33_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg33_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo33_id){
        $("#condicion33_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion33_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo34_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo34_id){
        $("#marca34_id").empty();

        $("#marca34_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca34_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca34_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca34_id){
                $("#modelo34_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo34_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo34_id){
        $("#unidadc34_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc34_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo34_id){
        $("#unidadg34_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg34_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo24_id){
        $("#condicion34_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion34_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo35_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo35_id){
        $("#marca35_id").empty();

        $("#marca35_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca35_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca35_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca35_id){
                $("#modelo35_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo35_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo35_id){
        $("#unidadc35_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc35_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo35_id){
        $("#unidadg35_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg35_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo35_id){
        $("#condicion35_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion35_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo36_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo36_id){
        $("#marca36_id").empty();

        $("#marca36_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca36_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca36_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca36_id){
                $("#modelo36_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo36_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo36_id){
        $("#unidadc36_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc36_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo36_id){
        $("#unidadg36_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg36_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo36_id){
        $("#condicion36_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion36_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo37_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo37_id){
        $("#marca37_id").empty();

        $("#marca37_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca37_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca37_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca37_id){
                $("#modelo37_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo37_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo37_id){
        $("#unidadc37_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc37_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo37_id){
        $("#unidadg37_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg37_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo37_id){
        $("#condicion37_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion37_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo38_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo38_id){
        $("#marca38_id").empty();

        $("#marca38_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca38_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca38_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca38_id){
                $("#modelo38_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo38_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo38_id){
        $("#unidadc38_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc38_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo38_id){
        $("#unidadg38_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg38_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo38_id){
        $("#condicion38_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion38_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipoEquipo39_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo39_id){
        $("#marca39_id").empty();

        $("#marca39_id").append("<option>Seleccione</option>");

        for(i=0;i<response.length;i++){
            $("#marca39_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca39_id").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca39_id){
                $("#modelo39_id").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo39_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo39_id){
        $("#unidadc39_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc39_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipoEquipo39_id){
        $("#unidadg39_id").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg39_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipoEquipo39_id){
        $("#condicion39_id").empty();

        for(i=0;i<response.length;i++){
            $("#condicion39_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});