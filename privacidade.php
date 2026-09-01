<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Política de Privacidade — Atari 2600 Online</title>
  <meta name="description" content="Política de Privacidade do Atari 2600 Online. Emulação 100% no navegador sem coleta de dados.">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * { font-family: 'Roboto', system-ui, -apple-system, sans-serif; box-sizing: border-box; }
    .legal-container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background: rgba(15, 7, 20, 0.95);
      border: 1px solid rgba(255, 121, 198, 0.3);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      line-height: 1.7;
      color: #f8f8f2;
    }
    .legal-container h1 { font-family: 'Press Start 2P', monospace; font-size: 1.2rem; margin-bottom: 1rem; color: #ff79c6; line-height: 1.6; }
    .legal-container h2 { font-size: 1.2rem; margin: 1.5rem 0 0.5rem; color: #bd93f9; font-weight: 700; }
    .legal-container p, .legal-container ul { font-size: 0.9rem; color: #a0a0cc; margin-bottom: 1rem; }
    .legal-container ul { padding-left: 1.2rem; }
    .legal-container li { margin-bottom: 0.4rem; }
    .back-btn { display: inline-flex; align-items: center; gap: 0.4rem; color: #ff79c6; text-decoration: none; font-weight: 700; font-size: 0.875rem; margin-bottom: 1.5rem; }
    .app-header-legal { padding: 1rem 1.5rem; background: #0b050e; border-bottom: 1px solid rgba(255, 121, 198, 0.3); }
    .app-footer-legal { text-align: center; padding: 1.25rem; font-size: 0.775rem; color: #6272a4; border-top: 1px solid rgba(255,255,255,0.08); margin-top: auto; }
  </style>
</head>
<body style="background:#09040c; color:#fff; min-height:100vh; display:flex; flex-direction:column;">
  
  <header class="app-header-legal">
    <div style="max-width:1200px; margin:0 auto; display:flex; align-items:center; justify-content:space-between;">
      <a href="index.php" style="display:flex; align-items:center; gap:0.6rem; text-decoration:none; color:#fff; font-weight:800; font-size:1.3rem;">
        <img src="favicon.svg" style="width:32px; height:32px; object-fit:contain;">
        <span style="font-family:'Press Start 2P', monospace; font-size:0.9rem; color:#ff79c6;">ATARI 2600</span>
      </a>
    </div>
  </header>

  <main style="flex:1;">
    <div class="legal-container">
      <a href="index.php" class="back-btn">← Voltar ao Atari 2600</a>
      
      <h1>POLÍTICA DE PRIVACIDADE</h1>
      <p>Última atualização: <?php echo date('d/m/Y'); ?></p>

      <h2>1. Emulação 100% no Navegador</h2>
      <p>O <strong>Atari 2600 Online</strong> utiliza motores de emulação em WebAssembly / HTML5 que rodam inteiramente de forma local no navegador da sua máquina. Não há transmissão ou armazenamento de dados de salvamento ou partidas em servidores externos.</p>

      <h2>2. Privacidade e Coleta de Dados</h2>
      <p>Nossa plataforma garante <strong>privacidade total</strong>. Não exigimos criação de conta, senhas, e-mails para jogar ou rastreamento de comportamento do usuário.</p>

      <h2>3. Armazenamento Local (Save States)</h2>
      <p>O progresso dos jogos, se houver, é mantido estritamente no <code>localStorage</code> / <code>IndexedDB</code> do seu próprio navegador.</p>

      <h2>4. Contato</h2>
      <p>Para dúvidas legais ou sugestões, acesse nossa <a href="suporte.php" style="color:#ff79c6;">Central de Suporte</a> ou escreva para <code>contato@4u.ia.br</code>.</p>
    </div>
  </main>

  <footer class="app-footer-legal">
    <p>Atari 2600 Online • <a href="privacidade.php" style="color:#bd93f9; text-decoration:underline;">Privacidade</a> | <a href="termos.php" style="color:#bd93f9; text-decoration:underline;">Termos</a> | <a href="suporte.php" style="color:#bd93f9; text-decoration:underline;">Suporte</a></p>
  </footer>

</body>
</html>
