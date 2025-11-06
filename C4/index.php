<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma de Atividades</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
        }
        
        .header {
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 10px 10px 0 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .header h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .header .due-date {
            color: #e74c3c;
            font-size: 18px;
            font-weight: 500;
        }
        
        .info-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .info-item {
            display: flex;
            flex-direction: column;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .info-label {
            font-weight: 600;
            color: #2c3e50;
            font-size: 16px;
            margin-bottom: 8px;
        }
        
        .info-value {
            color: #34495e;
            font-size: 16px;
        }
        
        .status {
            color: #27ae60;
            font-weight: 600;
        }
        
        .time-remaining {
            color: #2980b9;
            font-weight: 500;
        }
        
        .file-name {
            color: #8e44ad;
            font-weight: 500;
        }
        
        .comments {
            color: #7f8c8d;
        }
        
        .upload-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }
        
        .upload-form input[type="file"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .upload-form input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
            width: fit-content;
        }
        
        .upload-form input[type="submit"]:hover {
            background-color: #2980b9;
        }
        
        .complete-btn {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s;
            margin-top: 20px;
            width: 100%;
        }
        
        .complete-btn:hover {
            background-color: #27ae60;
        }
        
        @media (max-width: 600px) {
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 24px;
            }
            
            .header .due-date {
                font-size: 16px;
            }
            
            .info-card {
                padding: 20px;
            }
            
            .info-label, .info-value {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>CRONOGRAMA DE ATIVIDADES</h1>
            <div class="due-date">VENCIMENTO: SEXTA, 31 OUT 2025, 23:59</div>
        </div>
        
        <div class="info-card">
            <div class="info-item">
                <div class="info-label">STATUS</div>
                <div class="info-value status">ENVIADO</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">TEMPO RESTANTE</div>
                <div class="info-value time-remaining">ENVIADO 1 DIA ADIANTADO</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">ARQUIVO</div>
                <div class="info-value file-name">CRONOGRAMA_DE_ATIVIDADES.PDF</div>
                <form class="upload-form" action="index.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="arquivo" accept=".png,.jpg,.bmp,.doc,.pdf,.txt">
                    <input type="submit" name="botao" value="Upload">
                </form>
            </div>
            
            <div class="info-item">
                <div class="info-label">COMENTÁRIOS</div>
                <div class="info-value comments">COMENTÁRIOS(0)</div>
            </div>
            
            <button class="complete-btn">MARCAR COMO CONCLUÍDO</button>
        </div>
    </div>
</body>
</html>