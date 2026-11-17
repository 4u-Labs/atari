<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <meta name="description" content="Atari 2600 VCS Woody — Jogue 2.146 cartuchos clássicos direto no navegador (PC e celular) em uma bancada anos 80 realista com TV Gradiente CRT, chaves metálicas e Joystick CX40 | 4u-Labs." />
  <title>Atari 2600 VCS Woody — 2.146 Jogos Clássicos na Bancada Retrô | 4u-Labs</title>
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <link rel="apple-touch-icon" href="favicon.svg" />
  <link rel="manifest" href="manifest.json" />
  <meta name="theme-color" content="#f97316" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://4u.ia.br/app/atari/" />
  <meta property="og:title" content="Atari 2600 VCS Woody — 2.146 Jogos na Bancada Anos 80 | 4u-Labs" />
  <meta property="og:description" content="TV de tubo Gradiente, Console Woody CX2600 com 4 chaves prateadas, Joystick CX40 realista no PC e no celular e 2.146 cartuchos prontos para jogar." />
  <meta property="og:image" content="https://4u.ia.br/capa.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;800;900&family=Press+Start+2P&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css?v=20261117a" />
</head>
<body>
  <!-- Cabeçalho -->
  <header class="site-header">
    <div class="container header-container">
      <a href="index.php" class="brand-group" aria-label="4u-Labs Atari 2600">
        <img src="../../logo.webp?v=4" alt="4u-Labs" class="header-logo" />
        <span class="brand-divider" aria-hidden="true"></span>
        <img src="jogar/images/atari-logo.png" alt="Atari" class="header-atari-logo" />
        <span class="header-badge">2600 · VCS WOODY</span>
      </a>

      <nav class="header-nav">
        <a href="#game-gallery-section" class="nav-link" data-pt="Clássicos" data-en="Classics">Clássicos</a>
        <a href="#features-section" class="nav-link" data-pt="Bancada Anos 80" data-en="80s Retro Desk">Bancada Anos 80</a>
        <a href="jogar/manual-atari-2600.pdf" download="Atari-2600-Owner-Manual.pdf" class="nav-link" data-pt="📄 Manual PDF" data-en="📄 Manual PDF">📄 Manual PDF</a>
        <button type="button" id="btn-lang" class="lang-btn" title="Alternar Idioma PT / EN">🇧🇷 PT</button>
        <a href="jogar/index.html" class="header-play-btn">
          <i class="fa-solid fa-gamepad"></i>
          <span data-pt="Jogar Agora (2.146)" data-en="Play Now (2,146)">Jogar Agora (2.146)</span>
        </a>
      </nav>
    </div>
  </header>

  <main>
    <!-- Hero Section -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-left">
          <span class="hero-kicker" data-pt="🕹️ SIMULADOR REALISTA • TV GRADIENTE CRT + CONSOLE WOODY CX2600" data-en="🕹️ REALISTIC SIMULATOR • GRADIENTE CRT TV + WOODY CX2600 CONSOLE">
            🕹️ SIMULADOR REALISTA • TV GRADIENTE CRT + CONSOLE WOODY CX2600
          </span>
          <h1 class="hero-title" data-pt="A Lenda dos Anos 80 <span>Vive no Seu Navegador!</span>" data-en="The 1980s Legend <span>Lives in Your Browser!</span>">
            A Lenda dos Anos 80 <span>Vive no Seu Navegador!</span>
          </h1>
          <p class="hero-description" data-pt="Reviva a emoção exata de encaixar o cartucho no console de madeira <strong>Atari 2600</strong>, bater a chave prateada <strong>GAME RESET</strong> e jogar numa TV de tubo <strong>Gradiente</strong> — com <strong>2.146 jogos instalados</strong> e <strong>Joystick CX40 realista</strong> tanto no computador quanto no celular." data-en="Relive the exact thrill of slotting a cartridge into the woodgrain <strong>Atari 2600</strong>, flipping the silver <strong>GAME RESET</strong> switch, and playing on an 80s <strong>Gradiente</strong> CRT TV — featuring <strong>2,146 installed games</strong> and a realistic <strong>CX40 Joystick</strong> on both PC and mobile.">
            Reviva a emoção exata de encaixar o cartucho no console de madeira <strong>Atari 2600</strong>, bater a chave prateada <strong>GAME RESET</strong> e jogar numa TV de tubo <strong>Gradiente</strong> — com <strong>2.146 jogos instalados</strong> e <strong>Joystick CX40 realista</strong> tanto no computador quanto no celular.
          </p>

          <div class="hero-cta-row">
            <a href="jogar/index.html" class="cta-button primary">
              <i class="fa-solid fa-play"></i>
              <span data-pt="Entrar na Bancada Retrô (2.146 Jogos)" data-en="Launch Retro Desk (2,146 Games)">Entrar na Bancada Retrô (2.146 Jogos)</span>
            </a>
            <a href="jogar/manual-atari-2600.pdf" download="Atari-2600-Owner-Manual.pdf" class="cta-button secondary">
              <i class="fa-solid fa-file-pdf"></i>
              <span data-pt="Baixar Manual Original (PDF)" data-en="Download Owner's Manual (PDF)">Baixar Manual Original (PDF)</span>
            </a>
          </div>

          <!-- Busca Instantânea nos 2.146 Cartuchos direto na Home -->
          <div class="quick-search-box">
            <label for="home-rom-search" class="quick-search-label" data-pt="🔍 BUSCA RÁPIDA NOS 2.146 CARTUCHOS (CLIQUE PARA JOGAR NA HORA):" data-en="🔍 QUICK SEARCH ACROSS 2,146 CARTRIDGES (CLICK TO PLAY INSTANTLY):">
              🔍 BUSCA RÁPIDA NOS 2.146 CARTUCHOS (CLIQUE PARA JOGAR NA HORA):
            </label>
            <div class="quick-search-row">
              <input type="search" id="home-rom-search" class="quick-search-input" placeholder="Ex.: River Raid, Pitfall, Enduro, H.E.R.O., Frostbite, Keystone..." autocomplete="off" />
            </div>
            <div id="home-rom-results" class="quick-search-results">
              <a class="quick-cart-pill" href="jogar/index.html?CARTRIDGE_URL=roms%2FRiver%20Raid.bin">🕹️ RIVER RAID</a>
              <a class="quick-cart-pill" href="jogar/index.html?CARTRIDGE_URL=roms%2FPitfall.bin">🕹️ PITFALL!</a>
              <a class="quick-cart-pill" href="jogar/index.html?CARTRIDGE_URL=roms%2FEnduro.bin">🕹️ ENDURO</a>
              <a class="quick-cart-pill" href="jogar/index.html?CARTRIDGE_URL=roms%2FH.E.R.O.bin">🕹️ H.E.R.O.</a>
              <a class="quick-cart-pill" href="jogar/index.html?CARTRIDGE_URL=roms%2FFrostbite%205.bin">🕹️ FROSTBITE</a>
              <a class="quick-cart-pill" href="jogar/index.html?CARTRIDGE_URL=roms%2FKeystone%20Kapers.bin">🕹️ KEYSTONE KAPERS</a>
            </div>
          </div>
        </div>

        <!-- Vitrine Visual da Bancada Anos 80 -->
        <div class="hero-showcase-card">
          <div class="showcase-tv-frame">
            <div class="showcase-screen">
              <img src="jogar/images/atari-logo.png" alt="Atari" class="showcase-atari-logo" />
              <div class="showcase-screen-tag" data-pt="MOS 6507 @ 1.19 MHz • CHIP TIA NTSC • 60 FPS" data-en="MOS 6507 @ 1.19 MHz • NTSC TIA CHIP • 60 FPS">
                MOS 6507 @ 1.19 MHz • CHIP TIA NTSC • 60 FPS
              </div>
              <a href="jogar/index.html?CARTRIDGE_URL=roms%2FRiver%20Raid.bin" class="header-play-btn" style="margin-top:4px;">
                <i class="fa-solid fa-bolt"></i>
                <span data-pt="Ligar TV e Jogar River Raid" data-en="Power On TV &amp; Play River Raid">Ligar TV e Jogar River Raid</span>
              </a>
            </div>
            <div class="showcase-tv-bar">
              <img src="jogar/images/gradiente-logo.png" alt="Gradiente" class="showcase-gradiente-logo" />
              <span style="font-size:0.7rem;color:#94a3b8;font-weight:700;" data-pt="COLOR TV • CRT FOSFÓREO" data-en="COLOR TV • PHOSPHOR CRT">COLOR TV • CRT FOSFÓREO</span>
            </div>
          </div>

          <div class="showcase-woody-strip">
            <img src="jogar/images/atari-logo.png" alt="Atari" />
            <span>VIDEO COMPUTER SYSTEM · CX2600</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Estatísticas da Bancada -->
    <section class="stats-strip">
      <div class="container stats-grid">
        <div class="stat-card">
          <div class="stat-number">2.146 <span>.BIN</span></div>
          <div class="stat-label" data-pt="Cartuchos instalados prontos para jogar" data-en="Installed cartridges ready to play">Cartuchos instalados prontos para jogar</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">4 <span>Chaves</span></div>
          <div class="stat-label" data-pt="Power, TV Cor/P&amp;B, Select e Reset reais" data-en="Real Power, Color/BW, Select &amp; Reset levers">Power, TV Cor/P&amp;B, Select e Reset reais</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">CX40 <span>Touch</span></div>
          <div class="stat-label" data-pt="Joystick original no PC e multi-touch no celular" data-en="Original CX40 stick on PC &amp; mobile multi-touch">Joystick original no PC e multi-touch no celular</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">100% <span>NTSC</span></div>
          <div class="stat-label" data-pt="3 vidas ativas + Manual Original em PDF" data-en="3 active lives + Original Owner's Manual PDF">3 vidas ativas + Manual Original em PDF</div>
        </div>
      </div>
    </section>

    <!-- Galeria de Clássicos Imortais (19 Capas Originais Clicáveis) -->
    <section class="game-gallery" id="game-gallery-section">
      <div class="container">
        <div class="section-header">
          <span class="section-kicker" data-pt="ACERVO HISTÓRICO ATARI 2600" data-en="ATARI 2600 HISTORICAL ARCHIVE">ACERVO HISTÓRICO ATARI 2600</span>
          <h2 class="gallery-title" data-pt="Clássicos Imortais — Clique na Capa para Jogar" data-en="Immortal Classics — Click Any Cover to Play">Clássicos Imortais — Clique na Capa para Jogar</h2>
          <p class="gallery-description" data-pt="Cada capa abaixo já encaixa o cartucho correspondente direto no slot do console Atari 2600 com 3 vidas prontas para a partida." data-en="Each cover below slots the corresponding cartridge straight into the Atari 2600 console with 3 lives ready for action.">
            Cada capa abaixo já encaixa o cartucho correspondente direto no slot do console Atari 2600 com 3 vidas prontas para a partida.
          </p>
        </div>

        <div class="game-gallery-grid">
          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FRiver%20Raid.bin">
            <div class="game-card-cover">
              <img src="img/covers/riverraid.jpg" alt="River Raid" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">River Raid</span>
              <span class="game-card-meta">Activision · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FPitfall.bin">
            <div class="game-card-cover">
              <img src="img/covers/pitfall.jpg" alt="Pitfall!" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Pitfall!</span>
              <span class="game-card-meta">Activision · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FEnduro.bin">
            <div class="game-card-cover">
              <img src="img/covers/enduro.jpg" alt="Enduro" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Enduro</span>
              <span class="game-card-meta">Activision · 1983</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FSeaquest.bin">
            <div class="game-card-cover">
              <img src="img/covers/seaquest.jpg" alt="Seaquest" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Seaquest</span>
              <span class="game-card-meta">Activision · 1983</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FPac-Man.bin">
            <div class="game-card-cover">
              <img src="img/covers/pacman.jpg" alt="Pac-Man" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Pac-Man</span>
              <span class="game-card-meta">Atari · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FSpace%20Invaders.bin">
            <div class="game-card-cover">
              <img src="img/covers/spaceinvaders.jpg" alt="Space Invaders" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Space Invaders</span>
              <span class="game-card-meta">Atari · 1980</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FChopper%20Command.bin">
            <div class="game-card-cover">
              <img src="img/covers/choppercommand.png" alt="Chopper Command" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Chopper Command</span>
              <span class="game-card-meta">Activision · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FFrogger%201.bin">
            <div class="game-card-cover">
              <img src="img/covers/frogger.jpg" alt="Frogger" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Frogger</span>
              <span class="game-card-meta">Parker Bros · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FFreeway.bin">
            <div class="game-card-cover">
              <img src="img/covers/freeway.png" alt="Freeway" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Freeway</span>
              <span class="game-card-meta">Activision · 1981</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FGrand%20Prix%201.bin">
            <div class="game-card-cover">
              <img src="img/covers/grandprix.jpg" alt="Grand Prix" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Grand Prix</span>
              <span class="game-card-meta">Activision · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FAsteroids.bin">
            <div class="game-card-cover">
              <img src="img/covers/asteroids.jpg" alt="Asteroids" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Asteroids</span>
              <span class="game-card-meta">Atari · 1981</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FMissile%20Command%202.bin">
            <div class="game-card-cover">
              <img src="img/covers/misselcomando.jpg" alt="Missile Command" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Missile Command</span>
              <span class="game-card-meta">Atari · 1981</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FCentipede%203.bin">
            <div class="game-card-cover">
              <img src="img/covers/centipede.jpg" alt="Centipede" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Centipede</span>
              <span class="game-card-meta">Atari · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FMario%20Bros.bin">
            <div class="game-card-cover">
              <img src="img/covers/mariobros.jpg" alt="Mario Bros." loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Mario Bros.</span>
              <span class="game-card-meta">Atari · 1983</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FKangaroo%201.bin">
            <div class="game-card-cover">
              <img src="img/covers/kangaroo.png" alt="Kangaroo" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Kangaroo</span>
              <span class="game-card-meta">Atari · 1983</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FE.T.%20-%20The%20Extra-T%201.bin">
            <div class="game-card-cover">
              <img src="img/covers/et.png" alt="E.T." loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">E.T. Extra-Terrestrial</span>
              <span class="game-card-meta">Atari · 1982</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FGremlins%201.bin">
            <div class="game-card-cover">
              <img src="img/covers/gremilins.png" alt="Gremlins" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Gremlins</span>
              <span class="game-card-meta">Atari · 1984</span>
            </div>
          </a>

          <a class="game-card" href="jogar/index.html?CARTRIDGE_URL=roms%2FBridge%201.bin">
            <div class="game-card-cover">
              <img src="img/covers/bridge.jpg" alt="Bridge" loading="lazy" />
              <span class="game-card-play-pill" data-pt="▶ JOGAR" data-en="▶ PLAY">▶ JOGAR</span>
            </div>
            <div class="game-card-body">
              <span class="game-card-title">Bridge</span>
              <span class="game-card-meta">Activision · 1980</span>
            </div>
          </a>
        </div>

        <div class="gallery-cta">
          <a class="cta-button primary" href="jogar/index.html">
            <i class="fa-solid fa-box-open"></i>
            <span data-pt="Abrir Bancada com Todos os 2.146 Cartuchos" data-en="Open Desk with All 2,146 Cartridges">Abrir Bancada com Todos os 2.146 Cartuchos</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Recursos da Bancada & Especificações -->
    <section class="features" id="features-section">
      <div class="container">
        <div class="section-header">
          <span class="section-kicker" data-pt="ENGENHARIA RETRÔ • FIDELIDADE TOTAL" data-en="RETRO ENGINEERING • TOTAL FIDELITY">ENGENHARIA RETRÔ • FIDELIDADE TOTAL</span>
          <h2 class="features-title" data-pt="Por Que Nossa Bancada Atari 2600 É Única?" data-en="Why Is Our Atari 2600 Desk Unique?">Por Que Nossa Bancada Atari 2600 É Única?</h2>
        </div>

        <div class="features-grid">
          <div class="feature-item">
            <i class="fa-solid fa-tv feature-icon"></i>
            <h4 data-pt="TV de Tubo Gradiente Anos 80" data-en="1980s Gradiente CRT TV">TV de Tubo Gradiente Anos 80</h4>
            <p data-pt="Gabinete de madeira com logotipo Gradiente original, modo de fósforo CRT, ajuste de sintonia/volume nos seletores giratórios e chave física para alternar entre TV em Cores e Preto &amp; Branco." data-en="Woodgrain cabinet featuring the classic Gradiente badge, phosphor CRT scanlines, rotary VHF/Volume dials, and a physical switch to toggle Color vs Black &amp; White video."></p>
          </div>

          <div class="feature-item">
            <i class="fa-solid fa-sliders feature-icon"></i>
            <h4 data-pt="Console Woody CX2600 Realista" data-en="Realistic Woody CX2600 Console">Console Woody CX2600 Realista</h4>
            <p data-pt="Painel frontal em jacarandá com a logo branca oficial da Atari, slot superior que mostra o cartucho encaixado em 3D e as 4 alavancas prateadas (Power, TV Type, Game Select e Game Reset)." data-en="Rosewood front fascia with the official white Atari logo, top 3D cartridge slot, and the 4 iconic silver toggle levers (Power, TV Type, Game Select, and Game Reset)."></p>
          </div>

          <div class="feature-item">
            <i class="fa-solid fa-gamepad feature-icon"></i>
            <h4 data-pt="Joystick CX40 no PC e no Celular" data-en="CX40 Joystick on PC &amp; Mobile">Joystick CX40 no PC e no Celular</h4>
            <p data-pt="Controle pelo teclado (Setas ou WASD + Espaço/Z), arraste a alavanca do CX40 com o mouse ou jogue no celular com o CX40 multi-touch realista e botão vermelho FIRE dedicado." data-en="Play via keyboard (Arrows or WASD + Space/Z), drag the CX40 stick with your mouse, or play on mobile with the dedicated multi-touch CX40 stick and big red FIRE button."></p>
          </div>

          <div class="feature-item">
            <i class="fa-solid fa-book-open feature-icon"></i>
            <h4 data-pt="2.146 Jogos + Manual Original PDF" data-en="2,146 Games + Owner's Manual PDF">2.146 Jogos + Manual Original PDF</h4>
            <p data-pt="Estante em formato de cartuchos físicos com busca instantânea, favoritos, caixa visual completa, abertura de arquivos .BIN próprios e o Manual de Proprietário do Atari 2600 em PDF." data-en="Physical cartridge-shaped rack with instant search, favorites, full visual box modal, custom .BIN file loading, and the downloadable Atari 2600 Owner's Manual in PDF."></p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Rodapé Ecossistema 4u-Labs -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-links">
        <a href="jogar/index.html" data-pt="🕹️ Jogar Atari 2600" data-en="🕹️ Play Atari 2600">🕹️ Jogar Atari 2600</a>
        <a href="privacidade.php" data-pt="Privacidade" data-en="Privacy">Privacidade</a>
        <a href="termos.php" data-pt="Termos" data-en="Terms">Termos</a>
        <a href="suporte.php" data-pt="Suporte" data-en="Support">Suporte</a>
        <a href="https://4u.ia.br" target="_blank" rel="noopener">Portal 4U</a>
        <a href="https://4u.ia.br/loja" target="_blank" rel="noopener">Loja de Apps</a>
        <a href="https://4u.ia.br/central_de_ajuda.php" target="_blank" rel="noopener">Central de Ajuda</a>
        <a href="https://4u.ia.br/sobre.php" target="_blank" rel="noopener">Sobre 4U</a>
        <a href="https://github.com/4u-Labs" target="_blank" rel="noopener">GitHub</a>
        <a href="https://4u-labs.github.io" target="_blank" rel="noopener">Blog Dev</a>
        <a href="https://alternativeto.net/user/4u-labs/" target="_blank" rel="noopener">AlternativeTo</a>
        <a href="https://www.youtube.com/@4u-Labs" target="_blank" rel="noopener">YouTube</a>
        <a href="https://www.instagram.com/fbr4g4/" target="_blank" rel="noopener">Instagram</a>
        <a href="https://www.facebook.com/fbr4g4" target="_blank" rel="noopener">Facebook</a>
        <a href="https://x.com/fbr4g4" target="_blank" rel="noopener">X / Twitter</a>
        <a href="https://www.linkedin.com/in/fbr4g4/" target="_blank" rel="noopener">LinkedIn</a>
      </div>
      <p>© <span id="current-year"></span> <strong>4u-Labs · 4U.IA.BR</strong> — Atari 2600 VCS Retro Desk.</p>
    </div>
  </footer>

  <script>
    (() => {
      'use strict';
      const STORAGE_LANG = 'atari2600_lang_v1';
      let lang = localStorage.getItem(STORAGE_LANG) === 'en' ? 'en' : 'pt';
      let allRoms = [];

      const yearEl = document.getElementById('current-year');
      if (yearEl) yearEl.textContent = String(new Date().getFullYear());

      function applyLang() {
        document.documentElement.lang = lang === 'en' ? 'en' : 'pt-BR';
        const btn = document.getElementById('btn-lang');
        if (btn) btn.textContent = lang === 'en' ? '🇺🇸 EN' : '🇧🇷 PT';

        document.querySelectorAll('[data-pt][data-en]').forEach((node) => {
          const val = lang === 'en' ? node.dataset.en : node.dataset.pt;
          if (val.includes('<strong>') || val.includes('<span>') || val.includes('&amp;')) {
            node.innerHTML = val;
          } else {
            node.textContent = val;
          }
        });

        const searchInp = document.getElementById('home-rom-search');
        if (searchInp) {
          searchInp.placeholder = lang === 'en'
            ? 'e.g. River Raid, Pitfall, Enduro, H.E.R.O., Frostbite, Keystone...'
            : 'Ex.: River Raid, Pitfall, Enduro, H.E.R.O., Frostbite, Keystone...';
        }
      }

      document.getElementById('btn-lang')?.addEventListener('click', () => {
        lang = lang === 'en' ? 'pt' : 'en';
        try { localStorage.setItem(STORAGE_LANG, lang); } catch {}
        applyLang();
      });

      applyLang();

      // Busca instantânea nos 2.146 cartuchos direto na página inicial
      const searchInput = document.getElementById('home-rom-search');
      const resultsBox = document.getElementById('home-rom-results');
      const defaultPillsHtml = resultsBox ? resultsBox.innerHTML : '';

      fetch('jogar/roms.json')
        .then((r) => (r.ok ? r.json() : []))
        .then((list) => {
          if (Array.isArray(list)) allRoms = list;
        })
        .catch(() => {});

      searchInput?.addEventListener('input', () => {
        if (!resultsBox) return;
        const q = searchInput.value.trim().toLowerCase();
        if (!q || allRoms.length === 0) {
          resultsBox.innerHTML = defaultPillsHtml;
          return;
        }
        const matches = allRoms.filter((f) => f.toLowerCase().includes(q)).slice(0, 12);
        if (matches.length === 0) {
          resultsBox.innerHTML = `<span style="font-size:0.8rem;color:#94a3b8;">${lang === 'en' ? 'No cartridge found.' : 'Nenhum cartucho encontrado.'}</span>`;
          return;
        }
        resultsBox.innerHTML = matches
          .map((file) => {
            const label = file.replace(/\.bin$/i, '').toUpperCase();
            const href = `jogar/index.html?CARTRIDGE_URL=${encodeURIComponent('roms/' + file)}`;
            return `<a class="quick-cart-pill" href="${href}">🕹️ ${label}</a>`;
          })
          .join('');
      });

      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('sw.js').catch(() => {});
        });
      }
    })();
  </script>
</body>
</html>
