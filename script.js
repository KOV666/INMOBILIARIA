let stock = 6;
/* 
$("#1").click(function(){
  let estado = 1;

    $.post('comprar.php',{estado:estado,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });

})

$("#2").click(function(){
    let estado2 = 2;
  
      $.post('comprar.php',{estado2:estado2,},function(e){
          if(e!=null){
              alert("DATOS ENVIADOS CON EXITO");
          }else{
              alert("NO TE FRUSTRES, SEGUI INTENTANDO");
          }
      });
  
  })
 */


/* CARRITO */

  $("#1").click(function(){
    let precio = "32.000,000 USD"; 
    let nombre = "268 San Gabriel St, Winter Springs, FL 32708";
    $("#casa-1").fadeOut();

    $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });

  })
  $("#2").click(function(){
    let precio = "350.000,000 USD"; 
    let nombre = "89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225";
    $("#casa-2").fadeOut();

    $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });

  })
  $("#3").click(function(){
    let precio = "224.900,000 USD"; 
    let nombre = "715 NE 12th Ter, Crystal River, FL 34428";
    $("#casa-3").fadeOut();

    $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });
  })
  $("#4").click(function(){
    let precio = "350.000,000 USD"; 
    let nombre = "89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225";
    $("#casa-4").fadeOut();

    $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });  })

  $("#5").click(function(){
    let precio = "187.000,000 USD"; 
    let nombre = "911 TYLER ST, JACKSONVILLE, FL 32209";
    $("#casa-4").fadeOut();

    $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });  })

  $("#6").click(function(){
    let precio = "365.000,000 USD"; 
    let nombre = "12420 PECAN HICKORY CT, JACKSONVILLE, FL 32226";
    $("#casa-6").fadeOut();

    $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
        if(e!=null){
            alert("DATOS ENVIADOS CON EXITO");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });  })

    $("#7").click(function(){
        let precio = "475.000,000 USD"; 
        let nombre = "1684 NE 31st Ct, Pompano Beach, FL 33064";
        $("#casa-5").fadeOut();
    
        $.post('carrito.php',{precio:precio,nombre:nombre,},function(e){
            if(e!=null){
                alert("DATOS ENVIADOS CON EXITO");
            }else{
                alert("NO TE FRUSTRES, SEGUI INTENTANDO");
            }
        });  })

  $("#clickCarrito").click(function(){
    $(".carrito").load("loadCarrito.php",function(){
    
    });
  })


$("#buy-1").click(function(){
    alert("Compra realizada con exito")
    $("#casa-2").fadeOut();
    stock--
    console.log(stock)
})

$("#buy-2").click(function(){
    alert("Compra realizada con exito")
    $("#casa-3").fadeOut();
    stock--
    console.log(stock)
})

/* $("#buy-3").click(function(){
    alert("Casa 4")
}) */

$("#buy-4").click(function(){
    alert("Compra realizada con exito")
    $("#casa-4").fadeOut();
    stock--
    console.log(stock)
})

$("#buy-5").click(function(){
    alert("Compra realizada con exito")
    $("#casa-5").fadeOut();
    stock--
    console.log(stock)
})

$("#buy-6").click(function(){
    alert("Compra realizada con exito")
    $("#casa-6").fadeOut();
    stock--
    console.log(stock)
})

function noStock(){
    if(stock == 1){
        alert(0)
        document.write("Lo siento, nos quedamos sin stock por el momento")
    }    
}


$("#submit-registro").click(function(){
    let dataRegistro = $("#registro-ajax").serialize();

    $.ajax({
        type: 'POST',
        url: 'registrar.php',
        data: dataRegistro,
        success: function(a){
            alert('Responderemos el mensaje lo antes posible');
        }
    })
    return false;
})

/* $(".contenedor").load("load-home.php",function(){
    
});

 */

$("#enviarReseña").click(function(){
    let reseña = document.getElementById("reseña").value;
    
    $.post('reseña.php',{reseña:reseña,},function(e){
        if(e!=null){
            alert("Reseña enviada con exito");
        }else{
            alert("NO TE FRUSTRES, SEGUI INTENTANDO");
        }
    });
})

$("#rent-0").click(function(){
    alert("rent 1")
})


$("#rent-1").click(function(){
    alert("tel: 2252510343");
    alert("Gracias por ponerse en contacto");})


$("#rent-2").click(function(){
    alert("tel: 2252510343");
    alert("Gracias por ponerse en contacto");})


$("#rent-3").click(function(){
    alert("tel: 2252510343");
    alert("Gracias por ponerse en contacto");})


$("#rent-4").click(function(){
    alert("tel: 2252510343");
    alert("Gracias por ponerse en contacto");

})


$("#rent-5").click(function(){
    alert("tel: 2252510343");
    alert("Gracias por ponerse en contacto");})


$("#rent-6").click(function(){
    alert("tel: 2252510343");
    alert("Gracias por ponerse en contacto");})