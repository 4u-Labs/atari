<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();

$feedbackMsg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email']) && !empty($_POST['message'])) {
    $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $userMsg = htmlspecialchars($_POST['message']);
    
    $to = "contato@4u.ia.br";
    $subject = "=?UTF-8?B?" . base64_encode("Atari 2600 Online — Nova Mensagem de Suporte") . "?=";
    $body = "Nova mensagem enviada pelo Atari 2600 Online Suporte:\n\nDe: " . $senderEmail . "\nData: " . date('d/m/Y H:i') . "\n\nMensagem:\n" . $userMsg;
    
    $headers = "From: contato@4u.ia.br\r\n" .
               "Reply-To: " . $senderEmail . "\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n" .
               "X-Mailer: PHP/" . phpversion();

    @mail($to, $subject, $body, $headers);

    // Save backup log on server
    $uploadDir = __DIR__ . '/uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $logFile = $uploadDir . 'messages_log.json';
    $existing = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
    $existing[] = [
        'id' => uniqid('msg_', true),
        'app' => 'Atari 2600 Online',
        'from' => $senderEmail,
        'date' => date('Y-m-d H:i:s'),
        'message' => $_POST['message']
    ];
    file_put_contents($logFile, json_encode($existing, JSON_PRETTY_PRINT));

    $feedbackMsg = "Mensagem enviada com sucesso! Nossa equipe responderá em breve.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Suporte & Contato — Atari 2600 Online</title>
  <meta name="description" content="Central de Suporte e Perguntas Frequentes do Atari 2600 Online.">
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
    .faq-item { background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 1rem; margin-bottom: 0.75rem; }
    .faq-q { font-weight: 700; color: #fff; font-size: 0.95rem; margin-bottom: 0.3rem; }
    .faq-a { color: #a0a0cc; font-size: 0.85rem; line-height: 1.5; }
    .contact-card { background: rgba(255, 121, 198, 0.05); border: 1px solid rgba(255, 121, 198, 0.3); border-radius: 12px; padding: 1.25rem; margin-top: 1.5rem; }
    .input-field { width: 100%; background: #09040c; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; padding: 0.75rem; color: #fff; font-size: 0.9rem; outline: none; }
    .btn-submit { background: linear-gradient(135deg, #ff79c6, #bd93f9); color: #fff; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 0.5rem; }
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
      
      <h1>CENTRAL DE SUPORTE</h1>
      <p>Perguntas frequentes e suporte aos jogos do Atari 2600.</p>

      <h2>Perguntas Frequentes (FAQ)</h2>

      <div class="faq-item">
        <div class="faq-q">🎮 Como jogar os clássicos do Atari 2600?</div>
        <div class="faq-a">Basta clicar no botão <strong>"Ver Coleção Completa (+2000 Jogos)"</strong> no app para escolher seu jogo favorito. Os controles funcionam direto no teclado (Setas direcionais e Espaço / Z / X para ação) ou via Joystick USB.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">📱 Funciona no celular ou tablet?</div>
        <div class="faq-a">Sim! Todos os emuladores possuem suporte a controles de toque na tela (*Touch Gamepad*). Toque no botão <strong>"Instalar App"</strong> no topo para jogar como um aplicativo PWA nativo no seu dispositivo.</div>
      </div>

      <h2>Entre em Contato</h2>
      <div class="contact-card">
        <?php if ($feedbackMsg): ?>
          <div style="padding: 0.75rem; background: rgba(255, 121, 198, 0.15); border: 1px solid #ff79c6; color: #ff79c6; border-radius: 8px; font-size: 0.85rem; margin-bottom: 1rem;">
            <?php echo $feedbackMsg; ?>
          </div>
        <?php endif; ?>

        <p style="font-size: 0.85rem; margin-bottom: 1rem;">Dúvidas ou sugestões sobre a biblioteca de jogos? Escreva para <code>contato@4u.ia.br</code> ou preencha o formulário abaixo:</p>

        <form method="POST" action="suporte.php" style="display: flex; flex-direction: column; gap: 0.85rem;">
          <input type="email" name="email" placeholder="Seu e-mail de contato" class="input-field" required>
          <textarea name="message" rows="4" placeholder="Escreva sua mensagem..." class="input-field" style="resize: vertical;" required></textarea>
          <button type="submit" class="btn-submit">
            Enviar Mensagem
          </button>
        </form>
      </div>

    </div>
  </main>

  <footer class="app-footer-legal">
    <p>Atari 2600 Online • <a href="privacidade.php" style="color:#bd93f9; text-decoration:underline;">Privacidade</a> | <a href="termos.php" style="color:#bd93f9; text-decoration:underline;">Termos</a> | <a href="suporte.php" style="color:#bd93f9; text-decoration:underline;">Suporte</a></p>
  </footer>

</body>
</html>
