<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
$assetVersion = time();
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
<meta content="4U.IA.BR - Reviva mais de 2000 clássicos do Atari 2600 diretamente no seu navegador com um visual neon retrô." name="description"/>
<title>4U.IA.BR - Clássicos do Atari Online</title>
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="apple-touch-icon" href="favicon.svg">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#ff79c6">

<!-- Link para a folha de estilos CSS local -->
<link href="style.css?v=1.0.3" rel="stylesheet"/>
<!-- Links para Google Fonts (Roboto, Press Start 2P e Orbitron para o novo estilo) -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&amp;family=Press+Start+2P&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
<!-- Link para Font Awesome CDN (para ícones) -->
<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" referrerpolicy="no-referrer" rel="stylesheet">
<!-- Favicon (Opcional, mas recomendado) -->
<!-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
</link></head>
<body>
<!-- Cabeçalho da Página -->
<header class="site-header">
  <div class="container header-container d-flex align-items-center justify-content-start">
    <a href="index.php">
      <img src="../../logo.webp?v=4" alt="4U.IA.BR Logo" class="header-logo" style="height:50px; width:auto; object-fit:contain;">
    </a>
  </div>
</header>

<!-- Conteúdo Principal -->
<main>
<!-- Seção Principal (Hero Section) -->
<section class="hero">
<div class="container hero-content">
<!-- Título chamativo -->
<h2 class="hero-title">A Lenda Vive!</h2>
<!-- Descrição curta e envolvente -->
<p class="hero-description">
                    Transporte-se de volta para a era de ouro dos videogames! Explore e jogue
                    os maiores sucessos do Atari 2600 diretamente no seu navegador.
                    <!-- Informação adicionada -->
                    Uma coleção massiva com <strong>mais de 2000 clássicos</strong> te espera.
                    Diversão pixelada instantânea!
                </p>
<!-- Botão de Chamada para Ação (Call to Action) -->
<a aria-label="Ver amostra dos jogos clássicos" class="cta-button" href="#game-gallery-section">Ver Jogos Clássicos</a>
<!-- O link agora aponta para a seção da galeria na mesma página -->
</div>
</section>
<!-- Seção da Galeria de Jogos -->
<section class="game-gallery" id="game-gallery-section">
<div class="container">
<h3 class="gallery-title">Nossos Clássicos Imortais</h3>
<!-- Descrição atualizada -->
<p class="gallery-description">
                    Explore uma amostra da nossa vasta coleção com mais de 2000 títulos.
                    Passe o mouse ou toque para ver o nome do jogo.
                </p>
<!-- Nova estrutura em Grid para a galeria -->
<div class="game-gallery-grid">
<!-- Card do Jogo 1: Asteroids -->
<div class="game-card">
<img alt="Capa do jogo Asteroids" loading="lazy" src="img/covers/asteroids.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Asteroids</span>
</div>
</div>
<!-- Card do Jogo 2: Bridge -->
<div class="game-card">
<img alt="Capa do jogo Bridge" loading="lazy" src="img/covers/bridge.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Bridge</span>
</div>
</div>
<!-- Card do Jogo 3: Centipede -->
<div class="game-card">
<img alt="Capa do jogo Centipede" loading="lazy" src="img/covers/centipede.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Centipede</span>
</div>
</div>
<!-- Card do Jogo 4: Enduro -->
<div class="game-card">
<img alt="Capa do jogo Enduro" loading="lazy" src="img/covers/enduro.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Enduro</span>
</div>
</div>
<!-- Card do Jogo 5: Frogger -->
<div class="game-card">
<img alt="Capa do jogo Frogger" loading="lazy" src="img/covers/frogger.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Frogger</span>
</div>
</div>
<!-- Card do Jogo 6: Grand Prix -->
<div class="game-card">
<img alt="Capa do jogo Grand Prix" loading="lazy" src="img/covers/grandprix.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Grand Prix</span>
</div>
</div>
<!-- Card do Jogo 7: Mario Bros. -->
<div class="game-card">
<img alt="Capa do jogo Mario Bros." loading="lazy" src="img/covers/mariobros.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Mario Bros.</span>
</div>
</div>
<!-- Card do Jogo 8: Missile Command -->
<div class="game-card">
<img alt="Capa do jogo Missile Command" loading="lazy" src="img/covers/misselcomando.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Missile Command</span>
</div>
</div>
<!-- Card do Jogo 9: Pac-Man -->
<div class="game-card">
<img alt="Capa do jogo Pac-Man" loading="lazy" src="img/covers/pacman.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Pac-Man</span>
</div>
</div>
<!-- Card do Jogo 10: Pitfall -->
<div class="game-card">
<img alt="Capa do jogo Pitfall" loading="lazy" src="img/covers/pitfall.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Pitfall!</span>
</div>
</div>
<!-- Card do Jogo 11: River Raid -->
<div class="game-card">
<img alt="Capa do jogo River Raid" loading="lazy" src="img/covers/riverraid.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">River Raid</span>
</div>
</div>
<!-- Card do Jogo 12: Seaquest -->
<div class="game-card">
<img alt="Capa do jogo Seaquest" loading="lazy" src="img/covers/seaquest.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Seaquest</span>
</div>
</div>
<!-- Card do Jogo 13: Space Invaders -->
<div class="game-card">
<img alt="Capa do jogo Space Invaders" loading="lazy" src="img/covers/spaceinvaders.jpg"/>
<div class="game-card-overlay">
<span class="game-card-title">Space Invaders</span>
</div>
</div>
<!-- Card do Jogo 14: kangaroo -->
<div class="game-card">
<img alt="Capa do jogo Kangaroo." loading="lazy" src="img/covers/kangaroo.png"/>
<div class="game-card-overlay">
<span class="game-card-title">Kangaroo</span>
</div>
</div>
<!-- Card do Jogo 15: Freeway (Corrigido numero e imagem) -->
<div class="game-card">
<img alt="Capa do jogo Freeway" loading="lazy" src="img/covers/freeway.png"/>
<div class="game-card-overlay">
<span class="game-card-title">Freeway</span>
</div>
</div>
<!-- Card do Jogo 16: X-Man (Corrigido numero e imagem) -->
<div class="game-card">
<img alt="Capa do jogo X-Man" loading="lazy" src="img/covers/xman.png"/>
<div class="game-card-overlay">
<span class="game-card-title">X-Man</span>
</div>
</div>
<!-- Card do Jogo 17: E.T. (Corrigido numero e imagem) -->
<div class="game-card">
<img alt="Capa do jogo E.T." loading="lazy" src="img/covers/et.png"/>
<div class="game-card-overlay">
<span class="game-card-title">E.T.</span>
</div>
</div>
<!-- Card do Jogo 18: Gremlins (Corrigido numero, imagem e nome) -->
<div class="game-card">
<img alt="Capa do jogo Gremlins" loading="lazy" src="img/covers/gremilins.png"/>
<div class="game-card-overlay">
<span class="game-card-title">Gremlins</span>
</div>
</div>
<!-- Adicione mais cards aqui conforme desejar para a amostra -->
</div>
<!-- Link para a página principal de jogos -->
<div class="gallery-cta">
<a class="cta-button secondary" href="jogar/index.html">Ver Coleção Completa (+2000 Jogos)</a>
</div>
</div>
</section>
<!-- Seção de Destaques/Benefícios -->
<section class="features">
<div class="container">
<h3 class="features-title">Por que jogar aqui?</h3>
<div class="features-grid">
<!-- Destaque 1 -->
<div class="feature-item">
<i class="fa-solid fa-layer-group feature-icon"></i>
<h4>Coleção Massiva</h4>
<p>Mais de 2000 títulos do Atari 2600, dos clássicos absolutos às joias escondidas.</p>
</div>
<!-- Destaque 2 -->
<div class="feature-item">
<i class="fa-solid fa-laptop-code feature-icon"></i>
<h4>Acesso Instantâneo</h4>
<p>Jogue diretamente no seu navegador em qualquer dispositivo, sem instalações complicadas.</p>
</div>
<!-- Destaque 3 -->
<div class="feature-item">
<i class="fa-solid fa-heart feature-icon"></i>
<h4>Feito por Fãs</h4>
<p>Somos apaixonados por retrogaming e queremos compartilhar essa nostalgia com você.</p>
</div>
</div>
</div>
</section>
</main>
<!-- Rodapé da Página (Novo Modelo) -->
<!-- Script para atualizar o ano no rodapé -->
<script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>

<script src="script.js?v=1.0.3"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap');
footer {
  --text-secondary: #a0a0cc;
  --accent-purple: #bd93f9;
  --accent-pink: #ff79c6;
  --dark-gray-2: #6272a4;
  flex-shrink: 0;
  width: 100%;
  padding: 20px 10px;
  margin-top: 30px;
  text-align: center;
  font-size: 0.85em;
  color: var(--text-secondary);
  border-top: 1px solid var(--dark-gray-2);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.footer-links {
  margin-bottom: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 5px 15px;
}
footer a {
  color: var(--accent-purple);
  text-decoration: none;
  transition: color 0.2s ease, text-shadow 0.2s ease;
}
footer a:hover {
  color: var(--accent-pink);
  text-shadow: 0 0 3px var(--accent-pink);
}
footer span {
  color: var(--dark-gray-2);
  margin: 0 5px;
  user-select: none;
}
.footer-logo-magenta {
  font-family: 'Orbitron', sans-serif;
  font-weight: bold;
  color: var(--accent-pink);
}
footer a:hover .footer-logo-magenta {
  text-shadow: 0 0 5px var(--accent-pink);
}
.copyright {
  font-size: 0.8em;
}
.copyright .footer-logo-magenta {
  font-weight: normal;
}
@media (max-width: 600px) {
  footer {
    font-size: 0.8em;
    padding: 15px 10px;
  }
  .footer-links {
    gap: 5px 10px;
  }
}
@media (max-width: 420px) {
  footer {
    font-size: 0.75em;
    margin-top: 20px;
  }
  .footer-links {
    gap: 5px 8px;
  }
  footer span {
    margin: 0 3px;
  }
}
</style>
<footer>
<div class="footer-links">
<a href="../../politica.html" rel="noopener noreferrer">Privacidade</a>
<span>|</span>
<a href="../../servicos.html" rel="noopener noreferrer">Serviços</a>
<span>|</span>
<a href="../../sobre.html" rel="noopener noreferrer">Sobre</a>
<span>|</span>
<a href="../../termos.html" rel="noopener noreferrer">Termos</a>
<span>|</span>
<a href="index.php" rel="noopener noreferrer">Início</a>
</div>
<p class="copyright">
    © <span id="current-year"></span>
<span class="footer-logo-magenta">4U.IA.BR</span> — v5.1.1. Todos os direitos reservados.
  </p>
</footer>
<script>
(function() {
  var footer = document.currentScript.previousElementSibling;
  var currentYearElement = footer.querySelector('#current-year');
  if (currentYearElement) {
      currentYearElement.textContent = new Date().getFullYear();
  }
})();
</script>
    <script>
      // PWA Service Worker Registration & Anti-Cache
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
          navigator.serviceWorker.register("sw.js").catch(err => console.log("SW reg error:", err));
        });
      }
    </script>
</body>
</html>