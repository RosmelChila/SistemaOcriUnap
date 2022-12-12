<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            /** 
                Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
                puede ser de altura y anchura completas.
             **/
             footer .pagenum:before {
            content: counter(page);}
            ol,li,ul{
                font-family: sans-serif;
            }
             table, th, td {
                border-collapse: collapse;
                padding-left:6px;
                padding-right:6px;
                font-family: sans-serif;
                font-size:90%
            }
            table.center {
                margin-left: auto; 
                margin-right: auto;
                }
            p{
                font-family: sans-serif;
                font-size:80%
            }
            @page {
                margin: 0cm 0cm;
            }
            /** Defina ahora los márgenes reales de cada página en el PDF **/
            body {
                margin-top: 3cm;
                margin-left: 3cm;
                margin-right: 3cm;
                margin-bottom: 1cm;
            }

            /** Definir las reglas del encabezado **/
            header {
                position: fixed;
                top: 0.5cm;
                left: 3cm;
                right: 3cm;
                height: 2cm;

                /** Estilos extra personales **/
                text-align: center;
                line-height: 1.5cm;
            }

            /** Definir las reglas del pie de página **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 1cm;

                /** Estilos extra personales **/
                text-align: center;
                line-height: 0.5cm;
            }
        </style>
    </head>
    <body>
        <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
        <header>
            <div style="text-align:center;line-height:4;" >
                <img src="C:\Users\ARIEL\Desktop\larawind.1\larawind\public\img\Header.png" width="auto" height="45" alt="">
                <p style="font-size:80%;padding:0;border:0;margin:0;line-height: 100%;"><b>RESUMEN DE CONVENIO PARA APROBACION EN CONSEJO UNIVERSITARIO ORDINARIO</b></p>
            </div>
        </header>

        <footer>
            <div style="font-family: sans-serif;font-size:70%;" class="pagenum-container"><p><b>Pagina <span class="pagenum"></span></b></p></div>
</footer>
        </footer>

        <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
        <main>
            <p style="text-align: center"><b>RESUMEN DE CONVENIOS SUSCRITOS DURANTE EL AÑO 2019</b></p>
            <P>La Oficina de Cooperacion y Relaciones Internacionales, durante el año 2019 ha registrado la firma de 75 convenios.</P>
            <table class="center" style="width: 78%">
                    <tr>
                        <td><li>Convenios Internacionales</li></td>
                        <td style="text-align:right">{{$CI}}</td>
                    </tr>
                    <tr>
                        <td><li>Convenios Nacionales</li></td>
                        <td style="text-align:right">{{$CN}}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 8%"><li type="circle">Convenios Con Universidades Nacionales</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 8%"><li type="circle">Convenios Con Entidades Publicas</li></td>
                        <td style="text-align:right"></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Hospitales y Centros de Salud</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Ministerios</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Municipalidades</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Diversas Instituciones Públicas</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 8%"><li type="circle">Convenios Con Entidades Privadas</li></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Entidades Financieras</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Empresas Mineras</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Comunidades Campesinas</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con ONGs</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li type="square">Convenios con Diversas Entidades Privadas</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"><li>OTROS</li></td>
                        <td style="text-align:right">09</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 16%"></td>
                        <td style="text-align:right"><b><u>TOTAL:75</u></b></td>
                    </tr>
            </table>
           {{-- <ol>
                <li><div class="row"><div class="col-6">Convenios Internacionales</div><div class="col-6" style="text-align: right;">09</div></div></li>
                <li><div class="row"><div class="col-6">Convenios Nacionales</div><div class="col-6"style="text-align: right;">09</div></div></li>
                <ul>
                    <li><div class="row"><div class="col-6">Convenios Con Universidades Nacionales</div><div class="col-6"style="text-align: right;">09</div></div></li>
                    <li><div class="row"><div class="col-6">Convenios Con Entidades Publicas</div></div></li>
                        <ul>
                            <li><div class="row"><div class="col-6">Convenios con Hospitales y Centros de Salud</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con Ministerios</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con Municipalidades</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con Diversas Instituciones Públicas</div><div class="col-6"style="text-align: right;">09</div></div></li>
                        </ul>
                    <li><div class="row"><div class="col-6">Convenios Con Entidades Privadas</div></div></li>
                        <ul>
                            <li><div class="row"><div class="col-6">Convenios con Entidades Financieras</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con Empresas Mineras</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con Comunidades Campesinas</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con ONGs</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">Convenios con Diversas Entidades Privadas</div><div class="col-6"style="text-align: right;">09</div></div></li>
                            <li><div class="row"><div class="col-6">OTROS</div><div class="col-6"style="text-align: right;">09</div></div></li>
                        </ul>
                </ul>
           </ol>
           <p style="text-align: right;font-size:70%;"><b><u>TOTAL: 75</u></b></P> --}}
        </main>
    </body>
</html>
