<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizualização de Estágios</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div style="background-color: #f8f9fa; padding: 10px; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto;">
                <h1 style="margin: 0;">Nome do Documento:</h1>
                <h3 style="margin: 0;">Data de Vencimento:</h3>
                <div style="display: flex; align-items: center;">
                </div>
            </div>
        </div>
        
        <br>
        <br>
        <table border="1" cellpadding="6" cellspacing="0">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Tempo Restante</th>
                    <th>Documento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                    <td>Arquivo: <input type=file name="arquivo" accept=".png,.jpg,.bmp,.doc,.pdf,.txt">
                    <input type='submit' name='botao' value='Upload'></td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>