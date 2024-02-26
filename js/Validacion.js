
 
window.onload = () => {
    document.getElementById("registrarme").addEventListener("click", (event) => {
        event.preventDefault();
    
    function f(){
        var bandera = true;
        var nombre = document.getElementById("nombre").value;
        console.log(nombre);
        var exNombre = /^[A-Za-zÁáÉéÍíÓóÚúÑñÜü\s'-]+$/;

        var apellidos = document.getElementById("apellido").value;
        var exApellidos = /^[A-Za-zÁáÉéÍíÓóÚúÑñÜü\s'-]+$/;

        var edad = document.getElementById("edad").value;
        var exEdad = /^\d{1,2}$/

        var fechaN = document.getElementById("fechaN").value;
        var exFechaN = /^(0[1-9]|[12][0-9]|3[01])[/](0[1-9]|1[0-2])[/]\d{4}$/;

        var sexo = document.getElementById("sexo").value;
        var exSexo = /^[MF]$/;

        var curp = document.getElementById("curp").value;
        var exCurp = /^[A-Z][AEIOU][A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[01])[HM][A-Z]{2}[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z{3}[0-9A-Z]{1}[0-9]{1}$/;

        var telefono = document.getElementById("telefono").value;
        var exTelefono = /^\+?[0-9\s-()]+$/;

        var direccion = document.getElementById("direccion").value;
        var exDireccion = /^[A-Za-z0-9ÁáÉéÍíÓóÚúÑñÜü\s\.,-]+$/;

        var postal = document.getElementById("codigoP").value;
        var exPostal = /^\d{5}$/;

        var correo = document.getElementById("correo").value;
        var exCorreo = /^[A-Za-z0-9_.-]+@[A-Za-z]+(\.[A-Za-z]{2,4}){1,2}$/;

        if(!exNombre.test(nombre)){
            alert("NOMBRE NO VALIDO");
            bandera = false;
        }

        if(!exApellidos.test(apellidos)){
            alert("APELLIDOS NO VALIDOS");
            bandera = false;
        }

        if(!exEdad.test(edad)){
            alert("EDAD NO VALIDA");
            bandera = false;
        }

        if(!exFechaN.test(fechaN)){
            alert("FECHA DE NACIMIENTO NO VALIDA");
            bandera = false;
        }

        if(!exSexo.test(sexo)){
            alert("SEXO NO VALIDO");
            bandera = false;
        }

        if(!exCurp.test(curp)){
            alert("CURP NO VALIDA");
            bandera = false;
        }        

        if(!exTelefono.test(telefono)){
            alert("TELÉFONO NO VALIDO");
            bandera = false;
        }  

        if(!exDireccion.test(direccion)){
            alert("DIRECCIÓN NO VALIDA");
            bandera = false;
        }  

        if(!exPostal.test(postal)){
            alert("CÓDIGO POSTAL NO VALIDO");
            bandera = false;
        } 

        if(!exCorreo.test(correo)){
            alert("CORREO ELECTRÓNICO NO VALIDO");
            bandera = false;
        }      
        
        console.log("Este es el formulario ", bandera);

        if(bandera){
            alert("Datos registrados correctamente");
            alert("Nos pondremos en contacto con usted mediante su correo electrónico")
            window.location.href = '/../Login.html'; 
        }else{
            return
        }
        
    }
        
    f();
        
    
        
    
})
    }