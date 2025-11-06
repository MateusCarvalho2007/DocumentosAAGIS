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
                <input type='submit' name='botao' value='Marcar como Concluido'></td>
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
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <td>Enviado</td>
                <td>2 Dias</td>
                <td> <form action="index.php" method="post" enctype="multipart/form-data">
                Arquivo: <input type=file name="arquivo" accept=".png,.jpg,.bmp,.doc,.pdf,.txt">
                <input type='submit' name='botao' value='Upload'></td>
                </td>
                <td>Nenhum Comentário</td>
            </tbody>
        </table>
    </body>
    </html>