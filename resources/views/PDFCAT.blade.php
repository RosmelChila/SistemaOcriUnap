<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            /** 
                Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
                puede ser de altura y anchura completas.
             **/
             footer .pagenum:before {
            content: counter(page);
}
             table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding-left:6px;
                padding-right:6px;
                font-family: sans-serif;
            }
            p{
                font-family: sans-serif;
            }
            @page {
                margin: 0cm 0cm;
            }

            /** Defina ahora los márgenes reales de cada página en el PDF **/
            body {
                margin-top: 3cm;
                margin-left: 1cm;
                margin-right: 1cm;
                margin-bottom: 1cm;
            }
            ul,ol,li{
                margin-left: 1%;
                padding-left: 1%;
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
                <img src="https://i.imgur.com/U15mtN2.png" width="auto" height="45" alt="">
                <p style="font-size:80%;padding:0;border:0;margin:0;line-height: 100%;"><b>{{$titulo}}</b></p>
            </div>
        </header>

        <footer>
            <div style="font-family: sans-serif;font-size:70%;" class="pagenum-container"><p><b>Pagina <span class="pagenum"></span></b></p></div>
</footer>
        </footer>

        <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
        <main>
            <table style="width:100%">
                <?php $i=1; ?>
                @foreach($agreements as $agreement)
                <tr>
                    <th colspan="4" style="font-size:80%;color:#48507c;"><?php echo $i; ?>. "{{ $agreement->title}}"</th>
                </tr>
                <tr>
                    <th style="color:#48507c;font-size:80%;text-align: center">CODIGO</th>
                    <th style="color:#48507c;font-size:80%;text-align: center">OBJETIVOS</th>
                    <th style="color:#48507c;font-size:80%;text-align: center">RESPONSABLE</th>
                    <th style="color:#48507c;font-size:80%;text-align: center">VIGENCIA</th>
                </tr>
                <tr style="font-size:80%">
                    <td style="text-align: center">
                        @foreach ($agreement->responsibles as $responsible)
                        {{$responsible->name}}
                         @endforeach
                    </td>
                    <td style="text-align:justify">{!! html_entity_decode($agreement->objetive)!!}</td>
                    <td style="text-align: center">
                        @php
                            $ini=1;
                        @endphp
                        @foreach ($agreement->responsibles as $responsible)
                        @php
                            $tam=sizeof($agreement->responsibles);
                        @endphp
                        <?php
                            if($ini<$tam){
                         ?>
                         {{$responsible->description}}
                        <?php if ($ini<$tam-1) { 
                        ?>
                        ,
                        <?php } 
                            }
                        ?>
                        <?php if ($ini==$tam) { ?>
                            Y {{$responsible->description}}.
                        <?php }
                            $ini++; 
                        ?>
                         @endforeach
                    </td>
                    <td style="text-align: center">{{ $agreement->years }} Años apartir de la fecha de suscripcion </td>
                </tr>
                <tr style="font-size:80%">
                    <th style="color:#48507c;">COBERTURA</th>
                    <td colspan="3">{{$agreement->coverages->name}}</td>
                </tr>
                <tr style="font-size:80%">
                    <th style="color:#48507c;">LOCALIZACION</th>
                    <td colspan="3">{{ $agreement->location }}</td>
                </tr>
                <tr style="font-size:80%">
                    <th style="color:#48507c;">FECHA DE SUSCRIPCION</th>
                    <td colspan="3">{{ $agreement->subscription}}</td>
                </tr>
                <tr style="font-size:80%">
                    <th style="color:#48507c;">FECHA DE APROBACION C.U.</th>
                    <td colspan="3">{{ $agreement->approbation}}</td>
                </tr>
                <tr style="font-size:80%">
                    <th style="color:#48507c;">RR. DE APROBACION</th>
                    <td colspan="3">{{ $agreement->resolution}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </table>
        </main>
    </body>
</html>
