//GENERAL
$( document ).ready(function() {
    // $('#sidebarCollapse').on('click',function(){
    //     $('#sidebar').toggleClass('active');
    // });

    //BUSQUEDA DE INFORMACION
    $(document).ready(function(){
        $("#searchBox").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#dataTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    /**CERRAR SESION */
    $('.btnSalir').click(function(){
        cerrarSesion();
        // console.log('Salir');
    });

    function cerrarSesion(){
        // console.log('Cerrar sesion');
        var action = 'salir';
        var cerrar_sesion = new FormData();
        cerrar_sesion.append('action', action);
        var xmlhr = new XMLHttpRequest();
        xmlhr.open( 'POST', '../inc/model/control.php', true );
        xmlhr.onload = function(){
            if (this.status === 200){
                var respuesta = JSON.parse(xmlhr.responseText);
                console.log(respuesta);
                var tipo = respuesta.tipo,
                            titulo = respuesta.mensaje,
                            mensaje = respuesta.informacion;
                            Swal.fire({
                                type: tipo,
                                title: titulo,
                                text: mensaje,
                                timer: 1800,
                                showConfirmButton: false,
                                backdrop: `
                                    rgba(13, 63, 114, 0.6)
                                    center top
                                    no-repeat
                                `
                            }).then(function(){ 
                                location.reload();
                                window.location.href = '../';
                            })
            } else {
                swal({
                    title: 'Error!',
                    text: 'Hubo un error',
                    type: 'error'
                })            
            }
        }
        xmlhr.send(cerrar_sesion);
    }


    var seccionActual = $('#nombreSeccion').text();//VARIABLE DE DEPARTAMENTO DE TI
    console.log(seccionActual)

    switch (seccionActual)
    {
        /**CARGAR TABLA EMPLEADOS */
        case 'empleado':
            console.log('Tabla de empleados');
            var action  = 'lista-empleados';
            var dataTable = new FormData();
            dataTable.append('action', action);
            var xmlhr = new XMLHttpRequest();
            xmlhr.open('POST', 'http://187.188.159.205:8090/web_serv/empService/controller.php', true);
            xmlhr.onload = function(){
                if (this.status === 200) {
                var respuesta = JSON.parse(xmlhr.responseText);
                console.log(respuesta);
                if (respuesta.estado === 'OK') {
                    var informacion = respuesta.informacion;
                    for(var i in informacion){
                        tablaEmpleados(informacion[i]);
                    }     
                } else if(respuesta.status === 'error'){
                    var informacion = respuesta.informacion;
                }
                }
                }
            xmlhr.send(dataTable);

            function tablaEmpleados(rowInfo){
        
                var st = rowInfo.status,
                    status = 'Activo',
                    estado = '';
                
                if(st === 'B'){
                    estado = "table-warning text-danger";
                    status = 'Baja';
                }
                if(st === 'R'){
                    estado = "text-secondary";
                    status = 'Re-ingreso';
                }
                var row = $("<tr class='" + estado + "'>");
                
                $("#dataTable").append(row); //this will append tr element to table... keep its reference for a while since we will add cels into it
                // NUMERO DE EQUIPO
                row.append($("<td class='text-muted trCode'>" + rowInfo.numero_nomina + " </td>"));
                // NOMINA DEL EMPLEADO
                row.append($("<td class='text-uppercase'> " + rowInfo.nombre_largo + " </td>"));
                row.append($("<td> " + rowInfo.fechaAlta + " </td>"));
                row.append($("<td> " + rowInfo.nombre + " </td>"));
                row.append($("<td> " + status + " </td>"));
                // COLUMNA ACCION
                    row.append($("<td class='text-center'>"
                                + "<a tabindex='0' class='btn btn-sm btn-info mx-1 btnConsulta' data-code='"+rowInfo.id_correo+"' target='_blank' role='button' title='Ver información'><i class='fas fa-info-circle'></i></a>"
                                + "</td>"));
        
                        
                $(".btnDelete").unbind().click(function() {
                    deleteComputer($(this));
                });
        
                $(".btnEdit").unbind().click(function() {
                    var deviceCode = $((this)).data('code'),
                        url = "index.php?request=editcomputer",
                        newTab = window.open(url, '_blank');
                    localStorage.setItem('deviceCode', deviceCode);//GUARADR CODIGO DEL EQUIPO EN LA MEMORIA LOCAL DEL NAVEGADOR
                    // $(location).attr('href',url);
                    newTab.focus();
                });
        
                $(".btnHelp").unbind().click(function() {
                    var deviceCode = $((this)).data('code'),
                        newTab = window.open('inc/templates/responsive.php?deviceCode='+deviceCode, '_blank');
                    newTab.focus();
                });
        
            }

            break;
        default:
            console.log('Tablero');
            break;
    }
});

