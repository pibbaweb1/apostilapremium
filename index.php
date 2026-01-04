<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Venda de Apostilas | ECS Gráfica Rápida</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{font-family:Arial,Helvetica,sans-serif;margin:0;background:#f4f6f8;color:#222}
header{background:#0d47a1;color:#fff;padding:20px;text-align:center}
section{padding:30px;max-width:1200px;margin:auto}
.card{background:#fff;border-radius:8px;padding:20px;margin-bottom:25px;box-shadow:0 2px 6px rgba(0,0,0,.08)}
h2{margin-top:0;color:#0d47a1}
table{width:100%;border-collapse:collapse;margin-top:15px}
th,td{padding:10px;border:1px solid #ddd;text-align:center}
th{background:#e3f2fd}
input,select{padding:8px;width:100%;margin-top:5px}
.btn{background:#0d47a1;color:#fff;border:none;padding:12px 20px;border-radius:6px;cursor:pointer;font-size:16px}
.btn:hover{background:#08306b}
footer{background:#111;color:#fff;text-align:center;padding:15px}
.price{font-weight:bold;color:#2e7d32}
</style>
</head>
<body>
<header>
<h1>ECS Gráfica Rápida</h1>
<p>Apostilas impressas sob medida • Venda e divulgação</p>
</header>

<section class="card">
<h2>Valores Base de Impressão</h2>
<ul>
<li>Impressão <strong>Colorida</strong>: R$ 0,36 por página</li>
<li>Impressão <strong>Preta</strong>: R$ 0,25 por página</li>
<li>Encadernação Espiral: R$ 5,60</li>
</ul>
</section>

<section class="card">
<h2>Solicitar Pedido com Upload de Arquivo</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
<label>Nome</label>
<input type="text" name="nome" required>
<label>WhatsApp</label>
<input type="text" name="whatsapp" required>
<label>Tipo de Impressão</label>
<select name="tipo">
<option>Preta • Frente</option>
<option>Preta • Frente e Verso</option>
<option>Colorida • Frente</option>
<option>Colorida • Frente e Verso</option>
</select>
<label>Quantidade de Páginas</label>
<input type="number" name="paginas" min="1" required>
<label>Enviar Arquivo (PDF, DOCX, JPG, PNG)</label>
<input type="file" name="arquivo" required>
<br><br>
<button class="btn" type="submit">Enviar Pedido</button>
</form>
</section>

<footer>
<p>ECS Gráfica Rápida • Atendimento Online</p>
<p>WhatsApp: (13) 98808-9754</p>
</footer>

<a href="https://wa.me/5513988089754" target="_blank" style="position:fixed;bottom:20px;right:20px;background:#25d366;color:#fff;padding:15px 18px;border-radius:50px;font-weight:bold;text-decoration:none;box-shadow:0 4px 10px rgba(0,0,0,.3);z-index:999">WhatsApp</a>
</body>
</html>
