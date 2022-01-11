<!DOCTYPE html>
<html>
    <head>
        <title>No Data</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                /*color: #B0BEC5;*/
                color: #000;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            .paragraph {
                font-size: 20px;
                margin-bottom: 40px;
            }
            .button {
              display: inline-block;
              border-radius: 4px;
              background-color: #f4511e;
              border: none;
              color: #FFFFFF;
              text-align: center;
              font-size: 28px;
              padding: 20px;
              width: 200px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
            }

            .button span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }

            .button span:after {
              content: '\00bb';
              position: absolute;
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }

            .button:hover span {
              padding-right: 25px;
            }

            .button:hover span:after {
              opacity: 1;
              right: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">No Data</div>
                <div class="paragraph">Silakan isi kriteria dan atau alternatif terlebih dahulu.</div>
        <button class="button" style="vertical-align:middle" onclick="location.href='{{ url('/data-alternatif') }}';"><span>Kembali </span></button>
            </div>
        </div>
    </body>
</html>
