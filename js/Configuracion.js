$(document).ready(function(){

    $("#gridContainer").dxDataGrid({
        dataSource: "http://localhost:81/sis/php/Configuracion/SelUsuarios.php",
        keyExpr: "usuid",
        editing: {
            mode: "popup",
            allowUpdating: true,
            popup: {
                title: "Editar Usuario",
                showTitle: true,
                width: 700,
                height: 345,
                position: {
                    my: "top",
                    at: "top",
                    of: window
                }
            }
        },
        columns: [
            {
                dataField: "usuid",
                caption: "Id",
                width: 70
            },{
                dataField: "usunombre",
                caption: "Nombre",
                validationRules: [{ type: "required" }]
            },
            {
                dataField: "usuusuario",
                caption:"Usuario",
                validationRules: [{ type: "required" }]
            },
            {
                dataField: "usucorreo",
                caption:"Correo",
                validationRules: [{ type: "required" }]
            }
           
        ],
        onRowUpdating: function(e) {
            console.log("Update");
        }
    });
});