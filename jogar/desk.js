// Atari 2600 VCS — Mesa Retrô Interativa (4u-Labs)
(() => {
  'use strict';

  const CLASSICS = [
    { file: 'Pitfall.bin', title: 'PITFALL!', maker: 'Activision · 1982', color: '#16a34a', pt: 'Salte cipós, jacarés e barris na selva em 20 minutos.', en: 'Swing over vines, crocodiles and rolling logs.' },
    { file: 'Pitfall II - Lost 1.bin', title: 'PITFALL II', maker: 'Activision · 1984', color: '#059669', pt: 'Cavernas gigantes, trilha sonora épica e mapa vertical.', en: 'Huge caverns with iconic soundtrack and vertical map.' },
    { file: 'River Raid.bin', title: 'RIVER RAID', maker: 'Activision · 1982', color: '#2563eb', pt: 'Pilote o jato pelo rio destruindo pontes e reabastecendo.', en: 'Fly down the river destroying bridges and refueling.' },
    { file: 'Enduro.bin', title: 'ENDURO', maker: 'Activision · 1983', color: '#dc2626', pt: 'Ultrapasse carros dia, noite, neblina e neve na corrida.', en: 'Pass cars through day, night, fog and snow.' },
    { file: 'Frostbite 5.bin', title: 'FROSTBITE', maker: 'Activision · 1983', color: '#0284c7', pt: 'Pule sobre blocos de gelo para construir seu iglu antes do frio.', en: 'Hop on ice floes to build your igloo before freeze-up.' },
    { file: 'H.E.R.O.bin', title: 'H.E.R.O.', maker: 'Activision · 1984', color: '#ea580c', pt: 'Resgate mineiros com jetpack, laser e dinamite nas cavernas.', en: 'Rescue trapped miners using jetpack, laser and dynamite.' },
    { file: 'Keystone Kapers.bin', title: 'KEYSTONE KAPERS', maker: 'Activision · 1983', color: '#4f46e5', pt: 'Persiga o ladrão Harry Hooligan pelos andares do shopping.', en: 'Chase burglar Harry Hooligan across department store floors.' },
    { file: 'MegaMania - A Space.bin', title: 'MEGAMANIA', maker: 'Activision · 1982', color: '#7c3aed', pt: 'Defenda a galáxia contra hambúrgueres, ferros e pneus.', en: 'Space nightmare shooter against hamburgers and tires.' },
    { file: 'Seaquest.bin', title: 'SEAQUEST', maker: 'Activision · 1983', color: '#0d9488', pt: 'Submarino resgatando mergulhadores enquanto evita tubarões.', en: 'Submarine rescue mission dodging sharks and torpedoes.' },
    { file: 'Chopper Command.bin', title: 'CHOPPER COMMAND', maker: 'Activision · 1982', color: '#b45309', pt: 'Proteja o comboio no deserto com helicóptero e radar.', en: 'Protect the desert convoy with radar-guided chopper.' },
    { file: 'Kaboom! 1.bin', title: 'KABOOM!', maker: 'Activision · 1981', color: '#e11d48', pt: 'Pegue as bombas nos baldes (modo Paddle/Mouse automático!).', en: 'Catch falling bombs with buckets (auto Paddle/Mouse mode!).' },
    { file: 'Space Invaders.bin', title: 'SPACE INVADERS', maker: 'Atari · 1980', color: '#9333ea', pt: 'O clássico arcade dos invasores espaciais com 112 variações.', en: 'Classic alien shooter with 112 game variations.' },
    { file: 'Ms. Pac-Man 1.bin', title: 'MS. PAC-MAN', maker: 'Atari · 1982', color: '#db2777', pt: 'Melhor versão de Pac-Man no Atari 2600 com 4 labirintos.', en: 'Best Atari 2600 maze chase with 4 changing mazes.' },
    { file: 'Jr. Pac-Man.bin', title: 'JR. PAC-MAN', maker: 'Atari · 1986', color: '#ec4899', pt: 'Labirintos largos com rolagem horizontal e fantasmas rápidos.', en: 'Wide scrolling mazes and fast ghost chases.' },
    { file: 'Asteroids.bin', title: 'ASTEROIDS', maker: 'Atari · 1981', color: '#1d4ed8', pt: 'Destrua asteroides e naves inimigas no espaço sideral.', en: 'Blast spinning asteroids and flying saucers.' },
    { file: 'Missile Command 2.bin', title: 'MISSILE COMMAND', maker: 'Atari · 1981', color: '#b91c1c', pt: 'Proteja suas cidades interceptando mísseis balísticos.', en: 'Defend six cities from incoming ICBM waves.' },
    { file: "Yars' Revenge 2.bin", title: "YARS' REVENGE", maker: 'Atari · 1982', color: '#d97706', pt: 'Clássico original do 2600 com o canhão Zorlon contra o Qotile.', en: 'Original 2600 hit: charge the Zorlon Cannon vs Qotile.' },
    { file: 'Adventure.bin', title: 'ADVENTURE', maker: 'Atari · 1980', color: '#ca8a04', pt: 'Primeiro jogo de ação/aventura com dragões e chaves mágicas.', en: 'Pioneering action-adventure with dragons and secret room.' },
    { file: "Montezuma's Revenge.bin", title: "MONTEZUMA'S REVENGE", maker: 'Parker Bros · 1984', color: '#f59e0b', pt: 'Explore a pirâmide asteca coletando joias e chaves.', en: 'Explore the Aztec temple for gems, keys and torches.' },
    { file: 'Berzerk.bin', title: 'BERZERK', maker: 'Atari · 1982', color: '#dc2626', pt: 'Fuja dos robôs atiradores e do Evil Otto nos corredores.', en: 'Blast robots through electrified mazes before Evil Otto.' },
    { file: 'Centipede 3.bin', title: 'CENTIPEDE', maker: 'Atari · 1982', color: '#059669', pt: 'Atire na centopeia e nos cogumelos no jardim neon.', en: 'Arcade insect shooter through mushroom fields.' },
    { file: 'Combat - Tank-Plus.bin', title: 'COMBAT', maker: 'Atari · 1977', color: '#7c2d12', pt: 'Duelos de tanques, biplanos e jatos (2 jogadores).', en: 'Classic 2-player tank, biplane and jet battles.' },
    { file: 'Demon Attack.bin', title: 'DEMON ATTACK', maker: 'Imagic · 1982', color: '#991b1b', pt: 'Ondas de criaturas espaciais coloridas com tiro rápido.', en: 'Colorful waves of splitting cosmic demons.' },
    { file: 'Defender 2.bin', title: 'DEFENDER', maker: 'Atari · 1982', color: '#4338ca', pt: 'Nave veloz com scanner salvando humanoides de alienígenas.', en: 'High-speed arcade shooter rescuing humanoids.' },
    { file: 'Donkey Kong.bin', title: 'DONKEY KONG', maker: 'Coleco · 1982', color: '#c2410c', pt: 'Salte os barris e suba as vigas para resgatar a donzela.', en: 'Dodge barrels and climb girders to save the princess.' },
    { file: 'Frogger 1.bin', title: 'FROGGER', maker: 'Parker Bros · 1982', color: '#15803d', pt: 'Atravesse o trânsito e os troncos do rio sem cair.', en: 'Cross busy highways and flowing river logs.' },
    { file: 'Galaxian 2.bin', title: 'GALAXIAN', maker: 'Atari · 1983', color: '#1e40af', pt: 'Combate espacial clássico contra enxames em formação.', en: 'Defeat diving alien formations in space.' },
    { file: 'Jungle Hunt 2.bin', title: 'JUNGLE HUNT', maker: 'Atari · 1983', color: '#166534', pt: 'Cipós, crocodilos no rio, pedras gigantes e canibais.', en: 'Four-stage arcade rescue through jungle hazards.' },
    { file: 'Moon Patrol 5.bin', title: 'MOON PATROL', maker: 'Atari · 1983', color: '#0369a1', pt: 'Salte crateras lunares com o buggy enquanto abate OVNIs.', en: 'Drive the moon buggy jumping craters and shooting UFOs.' },
    { file: 'Pole Position.bin', title: 'POLE POSITION', maker: 'Atari · 1983', color: '#b91c1c', pt: 'Fórmula 1 em alta velocidade no circuito Fuji Speedway.', en: 'High-speed F1 racing on the Fuji Speedway.' },
    { file: 'Q-bert 1.bin', title: 'Q*BERT', maker: 'Atari · 1987', color: '#d97706', pt: 'Pule na pirâmide isométrica trocando a cor dos cubos.', en: 'Hop diagonally across the pyramid changing cube colors.' },
    { file: 'Solaris 2.bin', title: 'SOLARIS', maker: 'Atari · 1986', color: '#0284c7', pt: 'Gráficos incríveis no limite do hardware em combate estelar.', en: 'Stunning late-era 2600 starship adventure.' },
    { file: 'Popeye 2.bin', title: 'POPEYE', maker: 'Parker Bros · 1983', color: '#0369a1', pt: 'Pegue os corações da Olívia Palito desviando do Brutus.', en: 'Catch Olive Oyl hearts while dodging Bluto.' },
    { file: 'Mario Bros.bin', title: 'MARIO BROS.', maker: 'Atari · 1983', color: '#dc2626', pt: 'Derrube tartarugas e caranguejos nos encanamentos.', en: 'Flip sewer critters from below across pipes.' },
    { file: 'Dig Dug.bin', title: 'DIG DUG', maker: 'Atari · 1983', color: '#0f766e', pt: 'Escave túneis subterrâneos e infle monstros com a bomba.', en: 'Tunnel underground and inflate Pookas and Fygars.' },
    { file: 'Joust 2.bin', title: 'JOUST', maker: 'Atari · 1983', color: '#ca8a04', pt: 'Bata asas sobre o avestruz e derrote cavaleiros por cima.', en: 'Flap your ostrich lance above rival knights.' },
    { file: 'BASIC Programming.bin', title: 'BASIC PROGRAMMING', maker: 'Atari · 1979', color: '#475569', pt: 'Cartucho oficial para programar códigos simples direto no Atari!', en: 'Official Atari cartridge to code simple programs.' },
  ];

  const PALETTE = ['#dc2626', '#2563eb', '#16a34a', '#ea580c', '#9333ea', '#0891b2', '#d97706', '#db2777', '#4f46e5', '#0d9488'];
  const STORAGE_FAV = 'atari2600_favs_v1';
  const STORAGE_RECENT = 'atari2600_recent_v1';
  const STORAGE_LANG = 'atari2600_lang_v1';

  const classicMap = new Map(CLASSICS.map((c) => [c.file.toLowerCase(), c]));
  let allRoms = [];
  let activeFile = 'Pitfall.bin';
  let activeCategory = 'all'; // 'all' | 'classics' | 'favs' | 'recent'
  let searchQuery = '';
  const urlLang = new URLSearchParams(window.location.search).get('lang');
  if (urlLang === 'en' || urlLang === 'pt') {
    try { localStorage.setItem(STORAGE_LANG, urlLang); } catch {}
  }
  const savedLang = localStorage.getItem(STORAGE_LANG);
  let lang = savedLang === 'en' || savedLang === 'pt'
    ? savedLang
    : ((navigator.language || 'pt').toLowerCase().startsWith('pt') ? 'pt' : 'en');
  let favs = new Set(JSON.parse(localStorage.getItem(STORAGE_FAV) || '[]'));
  let recent = JSON.parse(localStorage.getItem(STORAGE_RECENT) || '[]');

  let crtOn = true;
  let filterLevel = false;
  let muted = false;
  let paused = false;
  let powerOn = true;
  let tvColorMode = true;
  let leftExpert = false;
  let rightExpert = false;
  let renderLimit = 100;
  let currentList = [];
  let renderedCount = 0;
  let catalogList = [];
  let catalogRendered = 0;

  const tr = (pt, en) => (lang === 'en' ? en : pt);

  function colorForName(name) {
    const c = classicMap.get(name.toLowerCase());
    if (c) return c.color;
    let h = 0;
    for (let i = 0; i < name.length; i++) h = (h * 31 + name.charCodeAt(i)) | 0;
    return PALETTE[Math.abs(h) % PALETTE.length];
  }

  function displayTitle(file) {
    const c = classicMap.get(file.toLowerCase());
    if (c) return c.title;
    return file.replace(/\.bin$/i, '').toUpperCase();
  }

  // WebAudio sintetizado tátil (alavancas + encaixe de cartucho)
  let actx = null;
  function playMechanicalClick(freq = 320, dur = 0.04) {
    if (muted) return;
    try {
      const Ctx = window.AudioContext || window.webkitAudioContext;
      if (!Ctx) return;
      if (!actx) actx = new Ctx();
      if (actx.state === 'suspended') actx.resume().catch(() => {});
      const osc = actx.createOscillator();
      const gain = actx.createGain();
      osc.type = 'triangle';
      osc.frequency.setValueAtTime(freq, actx.currentTime);
      osc.frequency.exponentialRampToValueAtTime(90, actx.currentTime + dur);
      gain.gain.setValueAtTime(0.08, actx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.001, actx.currentTime + dur);
      osc.connect(gain);
      gain.connect(actx.destination);
      osc.start();
      osc.stop(actx.currentTime + dur);
    } catch {}
  }

  // Elementos DOM
  const el = (id) => document.getElementById(id);
  const rackEl = el('cartridge-rack');
  const searchInput = el('cart-search-input');
  const rackCountEl = el('rack-count-badge');
  const rackLabelEl = el('rack-stats-label');
  const topCartBadge = el('active-cart-badge');
  const miniCartSticker = el('mini-cart-sticker');
  const miniCartName = el('mini-cart-name');
  const miniCartSub = el('mini-cart-sub');
  const consoleCart3d = el('console-cartridge-3d');
  const consoleCartLabel = el('cart3d-end-label');
  const slotLed = el('slot-led');
  const tvPowerLed = el('tv-power-led');
  const tvDialCrt = el('tv-dial-crt');
  const tvDialVol = el('tv-dial-vol');
  const cx40Stick = el('cx40-stick');
  const cx40Fire = el('cx40-fire-btn');
  const cx40Stage = el('cx40-stage');
  const mobileCx40Stick = el('mobile-cx40-stick');
  const mobileCx40Stage = el('mobile-cx40-stage');
  const mobileFireBtns = document.querySelectorAll('.touch-fire-big');
  const catalogModal = el('catalog-modal');
  const catalogGrid = el('catalog-grid');
  const catalogSearch = el('catalog-search-input');
  const manualModal = el('manual-modal');
  const localBinInput = el('local-bin-input');

  function updateCartridgeVisuals(fileName) {
    activeFile = fileName;
    const title = displayTitle(fileName);
    const col = colorForName(fileName);
    const meta = classicMap.get(fileName.toLowerCase());

    if (topCartBadge) topCartBadge.textContent = `ATARI 2600 • ${title}`;
    if (miniCartSticker) miniCartSticker.style.backgroundColor = col;
    if (miniCartName) miniCartName.textContent = title;
    if (miniCartSub) miniCartSub.textContent = meta ? meta.maker : 'Atari 2600 ROM (.BIN)';
    if (consoleCartLabel) {
      consoleCartLabel.style.background = col;
      consoleCartLabel.textContent = title;
    }
    if (consoleCart3d) {
      consoleCart3d.classList.add('inserting');
      setTimeout(() => consoleCart3d.classList.remove('inserting'), 230);
    }
    if (slotLed) slotLed.classList.add('on');
    if (tvPowerLed) tvPowerLed.classList.toggle('on', powerOn);
  }

  function recordRecent(file) {
    recent = [file, ...recent.filter((x) => x !== file)].slice(0, 30);
    try { localStorage.setItem(STORAGE_RECENT, JSON.stringify(recent)); } catch {}
  }

  function toggleFav(file) {
    if (favs.has(file)) favs.delete(file);
    else favs.add(file);
    try { localStorage.setItem(STORAGE_FAV, JSON.stringify([...favs])); } catch {}
    const nextFav = favs.has(file);
    rackEl?.querySelectorAll('.cart-item').forEach((node) => {
      if (node.dataset.file === file) {
        const btn = node.querySelector('.cart-fav-btn');
        if (btn) {
          btn.classList.toggle('is-fav', nextFav);
          btn.textContent = nextFav ? '♥' : '♡';
        }
      }
    });
    if (activeCategory === 'favs') renderRack();
    if (!catalogModal.classList.contains('hidden')) renderCatalogModal();
  }

  function getAllOrderedRoms() {
    const byLower = new Map(allRoms.map((r) => [r.toLowerCase(), r]));
    const first = [];
    const used = new Set();
    for (const c of CLASSICS) {
      const exact = byLower.get(c.file.toLowerCase());
      if (exact && !used.has(exact)) {
        first.push(exact);
        used.add(exact);
      }
    }
    const rest = allRoms.filter((r) => !used.has(r));
    return [...first, ...rest];
  }

  function getFilteredRoms(queryStr, cat) {
    let base;
    if (cat === 'classics') {
      const byLower = new Map(allRoms.map((r) => [r.toLowerCase(), r]));
      base = CLASSICS.map((c) => byLower.get(c.file.toLowerCase())).filter(Boolean);
    } else if (cat === 'favs') {
      base = allRoms.filter((r) => favs.has(r));
    } else if (cat === 'recent') {
      const availableSet = new Set(allRoms);
      base = recent.filter((r) => availableSet.has(r));
    } else {
      base = getAllOrderedRoms();
    }

    const q = (queryStr || '').trim().toLowerCase();
    if (!q) return base;
    return base.filter((f) => {
      const meta = classicMap.get(f.toLowerCase());
      const hay = `${f} ${meta ? `${meta.title} ${meta.maker} ${meta.pt} ${meta.en}` : ''}`.toLowerCase();
      return hay.includes(q);
    });
  }

  function createCartNode(fileName, forModal = false) {
    const col = colorForName(fileName);
    const title = displayTitle(fileName);
    const meta = classicMap.get(fileName.toLowerCase());
    const sub = meta ? tr(meta.pt, meta.en) : fileName;
    const isFav = favs.has(fileName);

    if (forModal) {
      const card = document.createElement('button');
      card.type = 'button';
      card.className = 'catalog-cart-card';
      card.innerHTML = `
        <div class="catalog-cart-label" style="background:${col}">${title}</div>
        <div class="catalog-cart-sub">${sub}</div>
      `;
      card.addEventListener('click', () => {
        catalogModal.classList.add('hidden');
        loadCartridgeFile(fileName);
      });
      return card;
    }

    const row = document.createElement('div');
    row.className = 'cart-item' + (fileName === activeFile ? ' active' : '');
    row.dataset.file = fileName;
    row.setAttribute('role', 'button');
    row.tabIndex = 0;
    row.title = sub;
    row.innerHTML = `
      <div class="cart-label-plate" style="background-color:${col}">
        <span class="cart-item-title">${title}</span>
      </div>
      <button type="button" class="cart-fav-btn ${isFav ? 'is-fav' : ''}" title="${tr('Favoritar', 'Favorite')}">${isFav ? '♥' : '♡'}</button>
    `;
    row.addEventListener('click', (e) => {
      if (e.target.closest('.cart-fav-btn')) {
        e.stopPropagation();
        toggleFav(fileName);
        return;
      }
      loadCartridgeFile(fileName);
    });
    return row;
  }

  function appendNextCartBatch(batchSize = 100) {
    if (!rackEl || renderedCount >= currentList.length) return;
    const nextEnd = Math.min(currentList.length, renderedCount + batchSize);
    const oldMore = rackEl.querySelector('.rack-more-btn');
    if (oldMore) oldMore.remove();

    const frag = document.createDocumentFragment();
    for (let i = renderedCount; i < nextEnd; i++) {
      frag.appendChild(createCartNode(currentList[i], false));
    }
    rackEl.appendChild(frag);
    renderedCount = nextEnd;

    if (currentList.length > renderedCount) {
      const more = document.createElement('button');
      more.type = 'button';
      more.className = 'mech-btn rack-more-btn';
      more.style.width = '100%';
      more.textContent = tr(
        `Role ou clique para carregar mais (${currentList.length - renderedCount} restantes)...`,
        `Scroll or click to load more (${currentList.length - renderedCount} left)...`
      );
      more.addEventListener('click', () => appendNextCartBatch(160));
      rackEl.appendChild(more);
    }
  }

  function renderRack() {
    if (!rackEl) return;
    let list = getFilteredRoms(searchQuery, activeCategory);
    if (searchQuery.trim() && list.length === 0 && activeCategory === 'classics') {
      list = getFilteredRoms(searchQuery, 'all');
    }

    currentList = list;
    renderedCount = 0;
    rackCountEl.textContent = String(list.length);
    rackLabelEl.textContent = tr('cartuchos instalados', 'cartridges installed');
    rackEl.innerHTML = '';
    appendNextCartBatch(Math.max(100, renderLimit));
  }

  rackEl?.addEventListener('scroll', () => {
    if (renderedCount >= currentList.length) return;
    if (rackEl.scrollTop + rackEl.clientHeight >= rackEl.scrollHeight - 160) {
      appendNextCartBatch(120);
    }
  });

  function appendNextCatalogBatch(batchSize = 120) {
    if (!catalogGrid || catalogRendered >= catalogList.length) return;
    const nextEnd = Math.min(catalogList.length, catalogRendered + batchSize);
    catalogGrid.querySelector('.catalog-more-btn')?.remove();

    const frag = document.createDocumentFragment();
    for (let i = catalogRendered; i < nextEnd; i++) {
      frag.appendChild(createCartNode(catalogList[i], true));
    }
    catalogGrid.appendChild(frag);
    catalogRendered = nextEnd;

    if (catalogList.length > catalogRendered) {
      const more = document.createElement('button');
      more.type = 'button';
      more.className = 'mech-btn catalog-more-btn';
      more.style.gridColumn = '1 / -1';
      more.textContent = tr(
        `Role ou clique para carregar mais (${catalogList.length - catalogRendered} restantes)...`,
        `Scroll or click to load more (${catalogList.length - catalogRendered} left)...`
      );
      more.addEventListener('click', () => appendNextCatalogBatch(240));
      catalogGrid.appendChild(more);
    }
  }

  function renderCatalogModal() {
    if (!catalogGrid) return;
    const q = catalogSearch?.value || '';
    catalogList = getFilteredRoms(q, 'all');
    catalogRendered = 0;

    const countEl = el('catalog-count-badge');
    if (countEl) {
      countEl.textContent = `${catalogList.length} ${tr('cartuchos', 'cartridges')}`;
    }

    catalogGrid.innerHTML = '';
    appendNextCatalogBatch(140);
  }

  catalogGrid?.parentElement?.addEventListener('scroll', () => {
    const body = catalogGrid.parentElement;
    if (!body || catalogRendered >= catalogList.length) return;
    if (body.scrollTop + body.clientHeight >= body.scrollHeight - 220) {
      appendNextCatalogBatch(160);
    }
  });

  // Carregamento instantâneo sem recarregar a página via Javatari.room.fileLoader
  function syncPowerUI(isOn) {
    powerOn = !!isOn;
    el('sw-power')?.classList.toggle('up', powerOn);
    tvPowerLed?.classList.toggle('on', powerOn);
    if (el('sw-power-state')) el('sw-power-state').textContent = powerOn ? 'ON' : 'OFF';
  }

  // Inicia/reinicia a partida acionando GAME RESET no hardware emulado (evita ficar no modo Demo de 1 vida)
  let riverWaitTicks = 0;
  function startMatchWithReset(fileName = activeFile) {
    const room = window.Javatari?.room;
    const c = room?.console;
    const cc = room?.consoleControls;
    const jc = window.jt?.ConsoleControls;
    if (!room || !c || !cc || !jc) return;

    if (!c.powerIsOn) c.userPowerOn();
    if (paused) {
      c.userPause(false);
      paused = false;
      el('btn-pause')?.classList.remove('active');
      if (el('pause-state')) el('pause-state').textContent = tr('Rodando', 'Running');
    }
    if (cc.isP1ControlsMode?.()) cc.setP1ControlsMode(false);
    cc.releaseControllers?.();
    syncPowerUI(true);

    try {
      room.runFramesAtTopSpeed?.(6);
      cc.processControlState(jc.RESET, true);
      room.runFramesAtTopSpeed?.(6);
      cc.processControlState(jc.RESET, false);
      const isRiverRaid = /^river raid/i.test(fileName || '');
      room.runFramesAtTopSpeed?.(isRiverRaid ? 85 : 16);
      if (isRiverRaid) {
        // Decola o 1º avião já com as 3 vidas reservas ativas no painel
        cc.processControlState(jc.JOY0_BUTTON, true);
        room.runFramesAtTopSpeed?.(5);
        cc.processControlState(jc.JOY0_BUTTON, false);
      }
      riverWaitTicks = 0;
    } catch {}
  }

  function syncConsoleUiFromEmulator() {
    const c = window.Javatari?.room?.console;
    if (!c) return;
    if (typeof c.powerIsOn === 'boolean' && c.powerIsOn !== powerOn) {
      syncPowerUI(c.powerIsOn);
    }
    // No River Raid, garante que nunca fique no modo Demo (0 vidas) e que o novo avião decole ao renascer
    if (powerOn && !paused && /^river raid(?! ii)/i.test(activeFile || '')) {
      try {
        const b64 = c.saveState?.()?.r?.b;
        if (b64) {
          const ramStr = atob(b64);
          const livesByte = ramStr.charCodeAt(64); // $C0
          const stateByte = ramStr.charCodeAt(70); // $C6
          if (livesByte === 0) {
            startMatchWithReset(activeFile);
          } else if (stateByte === 0x30 && livesByte !== 0x58) {
            riverWaitTicks++;
            if (riverWaitTicks >= 2 && window.jt?.ConsoleControls) {
              riverWaitTicks = 0;
              pulseConsoleControl(jt.ConsoleControls.JOY0_BUTTON, 70);
            }
          } else {
            riverWaitTicks = 0;
          }
        }
      } catch {}
    } else {
      riverWaitTicks = 0;
    }
  }

  async function loadCartridgeFile(fileName) {
    playMechanicalClick(210, 0.06);
    updateCartridgeVisuals(fileName);
    recordRecent(fileName);
    if (activeCategory === 'recent') {
      renderRack();
    } else if (rackEl) {
      rackEl.querySelectorAll('.cart-item').forEach((node) => {
        node.classList.toggle('active', node.dataset.file === fileName);
      });
    }

    const romUrl = `roms/${encodeURIComponent(fileName)}`;
    try {
      const nextUrl = new URL(window.location.href);
      nextUrl.searchParams.set('CARTRIDGE_URL', `roms/${fileName}`);
      window.history.replaceState({}, '', nextUrl.toString());
    } catch {}

    if (window.Javatari?.room?.fileLoader && window.jt?.FileLoader?.OPEN_TYPE) {
      try {
        const res = await fetch(romUrl);
        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        const bytes = new Uint8Array(await res.arrayBuffer());
        // altPower = false -> autoPower = true: reinicia CPU/RAM/TIA e liga o console ao inserir cartucho
        Javatari.room.fileLoader.loadFromContent(fileName, bytes, jt.FileLoader.OPEN_TYPE.ROM, 0, false, false);
        startMatchWithReset(fileName);
        el('jt-screen-fs')?.focus();
        return;
      } catch (err) {
        console.warn('Falha ao injetar ROM direto, usando fallback URL:', err);
      }
    }
    window.location.href = `?CARTRIDGE_URL=${encodeURIComponent(`roms/${fileName}`)}`;
  }

  // Carregar .BIN local do computador
  localBinInput?.addEventListener('change', async (e) => {
    const file = e.target.files?.[0];
    if (!file) return;
    try {
      const bytes = new Uint8Array(await file.arrayBuffer());
      if (window.Javatari?.room?.fileLoader) {
        Javatari.room.fileLoader.loadFromContent(file.name, bytes, jt.FileLoader.OPEN_TYPE.ROM, 0, false, false);
        playMechanicalClick(220, 0.06);
        updateCartridgeVisuals(file.name);
        startMatchWithReset(file.name);
        el('jt-screen-fs')?.focus();
      }
    } catch {}
    localBinInput.value = '';
  });

  // Integração das chaves do Console Atari 2600
  function pulseConsoleControl(ctrlConst, ms = 70) {
    if (!window.Javatari?.room?.consoleControls || typeof window.jt === 'undefined') return;
    Javatari.room.consoleControls.processControlState(ctrlConst, true);
    setTimeout(() => {
      Javatari.room.consoleControls.processControlState(ctrlConst, false);
    }, ms);
  }

  function wireSwitches() {
    const swPower = el('sw-power');
    const swTv = el('sw-tv');
    const swSelect = el('sw-select');
    const swReset = el('sw-reset');

    swPower?.addEventListener('click', () => {
      playMechanicalClick(180, 0.05);
      const c = window.Javatari?.room?.console;
      if (c && window.jt?.ConsoleControls) {
        pulseConsoleControl(jt.ConsoleControls.POWER);
        syncPowerUI(c.powerIsOn);
      } else {
        syncPowerUI(!powerOn);
      }
      el('jt-screen-fs')?.focus();
    });

    swTv?.addEventListener('click', () => {
      playMechanicalClick(280, 0.04);
      tvColorMode = !tvColorMode;
      swTv.classList.toggle('up', tvColorMode);
      el('sw-tv-state').textContent = tvColorMode ? tr('COR', 'COLOR') : tr('P&B', 'B/W');
      if (window.jt?.ConsoleControls) pulseConsoleControl(jt.ConsoleControls.BLACK_WHITE);
      el('jt-screen-fs')?.focus();
    });

    const bindMomentary = (btn, ctrlName) => {
      if (!btn) return;
      const press = (ev) => {
        ev.preventDefault();
        playMechanicalClick(240, 0.05);
        btn.classList.add('up');
        if (ctrlName === 'RESET') {
          startMatchWithReset(activeFile);
          return;
        }
        if (window.Javatari?.room?.consoleControls && window.jt?.ConsoleControls) {
          Javatari.room.consoleControls.processControlState(jt.ConsoleControls[ctrlName], true);
        }
      };
      const release = () => {
        btn.classList.remove('up');
        if (ctrlName !== 'RESET' && window.Javatari?.room?.consoleControls && window.jt?.ConsoleControls) {
          Javatari.room.consoleControls.processControlState(jt.ConsoleControls[ctrlName], false);
        }
        el('jt-screen-fs')?.focus();
      };
      btn.addEventListener('pointerdown', press);
      btn.addEventListener('pointerup', release);
      btn.addEventListener('pointerleave', release);
      btn.addEventListener('pointercancel', release);
    };

    bindMomentary(swSelect, 'SELECT');
    bindMomentary(swReset, 'RESET');

    // Botões extras de Reset/Select no painel direito
    el('btn-quick-reset')?.addEventListener('click', () => {
      playMechanicalClick(240, 0.05);
      startMatchWithReset(activeFile);
      el('jt-screen-fs')?.focus();
    });
    el('btn-quick-select')?.addEventListener('click', () => {
      playMechanicalClick(240, 0.05);
      if (window.jt?.ConsoleControls) pulseConsoleControl(jt.ConsoleControls.SELECT, 90);
      el('jt-screen-fs')?.focus();
    });
  }

  // Botões da barra superior e dials da TV
  function toggleCrt() {
    crtOn = !crtOn;
    Javatari?.room?.screen?.crtModeToggle?.();
    const btn = el('btn-crt');
    if (btn) btn.classList.toggle('active', crtOn);
    if (el('crt-state')) el('crt-state').textContent = crtOn ? 'ON' : 'OFF';
    if (tvDialCrt) tvDialCrt.style.transform = crtOn ? 'rotate(24deg)' : 'rotate(-24deg)';
    playMechanicalClick(360, 0.03);
    el('jt-screen-fs')?.focus();
  }

  function toggleFilter() {
    filterLevel = !filterLevel;
    Javatari?.room?.screen?.crtFilterToggle?.();
    const btn = el('btn-filter');
    if (btn) btn.classList.toggle('active', filterLevel);
    if (el('filter-state')) el('filter-state').textContent = filterLevel ? 'ON' : 'OFF';
    playMechanicalClick(360, 0.03);
    el('jt-screen-fs')?.focus();
  }

  function toggleSound() {
    muted = !muted;
    const spk = Javatari?.room?.speaker;
    if (spk) {
      if (muted) spk.mute?.();
      else spk.unMute?.();
    }
    const btn = el('btn-mute');
    if (btn) btn.classList.toggle('active', !muted);
    if (el('mute-state')) el('mute-state').textContent = muted ? 'OFF' : 'ON';
    if (tvDialVol) tvDialVol.style.transform = muted ? 'rotate(-36deg)' : 'rotate(18deg)';
    el('jt-screen-fs')?.focus();
  }

  function togglePause() {
    paused = !paused;
    if (window.jt?.ConsoleControls) pulseConsoleControl(jt.ConsoleControls.PAUSE, 50);
    const btn = el('btn-pause');
    if (btn) btn.classList.toggle('active', paused);
    if (el('pause-state')) el('pause-state').textContent = paused ? tr('Pausado', 'Paused') : tr('Rodando', 'Running');
    el('jt-screen-fs')?.focus();
  }

  el('btn-crt')?.addEventListener('click', toggleCrt);
  tvDialCrt?.addEventListener('click', toggleCrt);
  el('btn-filter')?.addEventListener('click', toggleFilter);
  el('btn-mute')?.addEventListener('click', toggleSound);
  tvDialVol?.addEventListener('click', toggleSound);
  el('btn-pause')?.addEventListener('click', togglePause);
  el('btn-fullscreen')?.addEventListener('click', () => {
    Javatari?.room?.screen?.displayToggleFullscreen?.();
  });
  el('btn-open-local')?.addEventListener('click', () => localBinInput?.click());
  el('btn-eject-rom')?.addEventListener('click', () => loadCartridgeFile(activeFile));

  // Modais
  el('btn-catalog')?.addEventListener('click', () => {
    catalogModal.classList.remove('hidden');
    renderCatalogModal();
    catalogSearch?.focus();
  });
  el('btn-open-cart-catalog')?.addEventListener('click', () => el('btn-catalog')?.click());
  el('btn-close-catalog')?.addEventListener('click', () => catalogModal.classList.add('hidden'));
  catalogModal?.addEventListener('click', (e) => {
    if (e.target === catalogModal) catalogModal.classList.add('hidden');
  });

  el('btn-open-manual')?.addEventListener('click', () => manualModal.classList.remove('hidden'));
  el('btn-close-manual')?.addEventListener('click', () => manualModal.classList.add('hidden'));
  manualModal?.addEventListener('click', (e) => {
    if (e.target === manualModal) manualModal.classList.add('hidden');
  });

  // Isolamento de teclado dentro dos inputs (evita Javatari roubar P / F1 / Setas na busca)
  [searchInput, catalogSearch].forEach((inp) => {
    if (!inp) return;
    ['keydown', 'keyup', 'keypress'].forEach((evName) => {
      inp.addEventListener(evName, (e) => e.stopPropagation());
    });
    inp.addEventListener('input', () => {
      if (inp === searchInput) {
        searchQuery = inp.value;
        renderLimit = 90;
        renderRack();
      } else {
        renderCatalogModal();
      }
    });
  });

  // Abas de filtro da estante
  document.querySelectorAll('#cart-filter-pills .rack-pill').forEach((pill) => {
    pill.addEventListener('click', () => {
      document.querySelectorAll('#cart-filter-pills .rack-pill').forEach((p) => p.classList.remove('active'));
      pill.classList.add('active');
      activeCategory = pill.dataset.cat || 'all';
      renderLimit = 100;
      renderRack();
    });
  });

  // Joystick CX40 animado em tempo real + ponte direta para o emulador (Teclado + Mouse/Touch Desktop e Mobile)
  const joyHeld = new Set();
  const prevJoySent = { L: false, R: false, U: false, D: false, FIRE: false };

  function updateCx40Stick() {
    let dx = 0;
    let dy = 0;
    const left = joyHeld.has('ArrowLeft') || joyHeld.has('KeyA') || joyHeld.has('L');
    const right = joyHeld.has('ArrowRight') || joyHeld.has('KeyD') || joyHeld.has('R');
    const up = joyHeld.has('ArrowUp') || joyHeld.has('KeyW') || joyHeld.has('U');
    const down = joyHeld.has('ArrowDown') || joyHeld.has('KeyS') || joyHeld.has('D');
    const firing = joyHeld.has('Space') || joyHeld.has('KeyZ') || joyHeld.has('AltLeft') || joyHeld.has('Enter') || joyHeld.has('FIRE');

    if (left) dx -= 1;
    if (right) dx += 1;
    if (up) dy -= 1;
    if (down) dy += 1;
    if (cx40Stick) cx40Stick.style.transform = `translate(${dx * 15}px, ${dy * 15}px)`;
    if (mobileCx40Stick) mobileCx40Stick.style.transform = `translate(${dx * 13}px, ${dy * 13}px)`;
    cx40Fire?.classList.toggle('pressed', firing);
    mobileFireBtns.forEach((b) => b.classList.toggle('pressed', firing));

    if (window.jt?.ConsoleControls && window.Javatari?.room?.consoleControls) {
      const cc = Javatari.room.consoleControls;
      const jc = jt.ConsoleControls;
      if (left !== prevJoySent.L) { prevJoySent.L = left; cc.processControlState(jc.JOY0_LEFT, left); }
      if (right !== prevJoySent.R) { prevJoySent.R = right; cc.processControlState(jc.JOY0_RIGHT, right); }
      if (up !== prevJoySent.U) { prevJoySent.U = up; cc.processControlState(jc.JOY0_UP, up); }
      if (down !== prevJoySent.D) { prevJoySent.D = down; cc.processControlState(jc.JOY0_DOWN, down); }
      if (firing !== prevJoySent.FIRE) { prevJoySent.FIRE = firing; cc.processControlState(jc.JOY0_BUTTON, firing); }
    }
  }

  const GAME_KEY_CODES = new Set([
    'ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown',
    'KeyW', 'KeyA', 'KeyS', 'KeyD',
    'Space', 'KeyZ', 'AltLeft', 'Enter'
  ]);

  window.addEventListener('keydown', (e) => {
    if (e.target instanceof HTMLInputElement || e.target instanceof HTMLTextAreaElement) return;
    if (e.code === 'Escape') {
      catalogModal?.classList.add('hidden');
      manualModal?.classList.add('hidden');
      return;
    }
    if (!e.ctrlKey && !e.metaKey) {
      if (e.code === 'F1') {
        e.preventDefault();
        e.stopPropagation();
        el('sw-reset')?.classList.add('up');
        startMatchWithReset(activeFile);
        return;
      }
      if (e.code === 'F2') {
        e.preventDefault();
        e.stopPropagation();
        el('sw-select')?.classList.add('up');
        if (window.jt?.ConsoleControls) pulseConsoleControl(jt.ConsoleControls.SELECT, 90);
        return;
      }
      if (e.code === 'KeyP' && !e.altKey && !e.repeat) {
        e.preventDefault();
        e.stopPropagation();
        togglePause();
        return;
      }
      if (GAME_KEY_CODES.has(e.code)) {
        e.preventDefault();
        e.stopPropagation();
        joyHeld.add(e.code);
        updateCx40Stick();
      }
    }
  }, true);

  window.addEventListener('keyup', (e) => {
    if (e.target instanceof HTMLInputElement || e.target instanceof HTMLTextAreaElement) return;
    if (e.code === 'F1') {
      el('sw-reset')?.classList.remove('up');
      return;
    }
    if (e.code === 'F2') {
      el('sw-select')?.classList.remove('up');
      return;
    }
    if (GAME_KEY_CODES.has(e.code)) {
      e.preventDefault();
      e.stopPropagation();
      if (joyHeld.delete(e.code)) updateCx40Stick();
    }
  }, true);

  window.addEventListener('blur', () => {
    joyHeld.clear();
    updateCx40Stick();
  });

  // Botão vermelho CX40 & controles móveis interativos (multi-touch isolado por pointerId)
  const bindJoyControl = (btn, jtCtrlName, visualKey) => {
    if (!btn) return;
    let activePid = null;
    const onDown = (e) => {
      e.preventDefault();
      activePid = e.pointerId;
      try { btn.setPointerCapture?.(e.pointerId); } catch {}
      if (jtCtrlName === 'RESET') {
        playMechanicalClick(240, 0.05);
        startMatchWithReset(activeFile);
        return;
      }
      joyHeld.add(visualKey);
      updateCx40Stick();
      if (jtCtrlName !== 'JOY0_BUTTON' && window.jt?.ConsoleControls && window.Javatari?.room?.consoleControls) {
        Javatari.room.consoleControls.processControlState(jt.ConsoleControls[jtCtrlName], true);
      }
    };
    const onUp = (e) => {
      if (activePid !== null && e.pointerId !== activePid) return;
      activePid = null;
      if (jtCtrlName === 'RESET') return;
      joyHeld.delete(visualKey);
      updateCx40Stick();
      if (jtCtrlName !== 'JOY0_BUTTON' && window.jt?.ConsoleControls && window.Javatari?.room?.consoleControls) {
        Javatari.room.consoleControls.processControlState(jt.ConsoleControls[jtCtrlName], false);
      }
    };
    btn.addEventListener('pointerdown', onDown);
    btn.addEventListener('pointerup', onUp);
    btn.addEventListener('pointercancel', onUp);
    btn.addEventListener('lostpointercapture', onUp);
  };

  bindJoyControl(cx40Fire, 'JOY0_BUTTON', 'FIRE');
  document.querySelectorAll('[data-joy-ctrl]').forEach((btn) => {
    bindJoyControl(btn, btn.dataset.joyCtrl, btn.dataset.joyVis || btn.dataset.joyCtrl);
  });

  // Drag/Touch realista no joystick CX40 (desktop + celular multi-touch)
  function bindStickStage(stageEl, deadzone = 12) {
    if (!stageEl) return;
    let activePointerId = null;
    const setDirs = (dx, dy) => {
      ['L', 'R', 'U', 'D'].forEach((k) => joyHeld.delete(k));
      if (dx < -deadzone) joyHeld.add('L');
      if (dx > deadzone) joyHeld.add('R');
      if (dy < -deadzone) joyHeld.add('U');
      if (dy > deadzone) joyHeld.add('D');
      updateCx40Stick();
    };
    const updateFromEvent = (e) => {
      const rect = stageEl.getBoundingClientRect();
      setDirs(e.clientX - (rect.left + rect.width / 2), e.clientY - (rect.top + rect.height / 2));
    };
    stageEl.addEventListener('pointerdown', (e) => {
      if (e.target === cx40Fire) return;
      e.preventDefault();
      activePointerId = e.pointerId;
      try { stageEl.setPointerCapture?.(e.pointerId); } catch {}
      updateFromEvent(e);
    });
    stageEl.addEventListener('pointermove', (e) => {
      if (activePointerId !== e.pointerId) return;
      e.preventDefault();
      updateFromEvent(e);
    });
    const endDrag = (e) => {
      if (activePointerId !== e.pointerId) return;
      activePointerId = null;
      setDirs(0, 0);
    };
    stageEl.addEventListener('pointerup', endDrag);
    stageEl.addEventListener('pointercancel', endDrag);
    stageEl.addEventListener('lostpointercapture', endDrag);
  }

  bindStickStage(cx40Stage, 14);
  bindStickStage(mobileCx40Stage, 10);

  // Bilíngue PT / EN completo (toda a UI, modais, tooltips e manual)
  function applyLang() {
    document.documentElement.lang = lang === 'en' ? 'en' : 'pt-BR';
    document.title = tr(
      'Atari 2600 VCS — Bancada Retrô com 2.146 Jogos | 4u-Labs',
      'Atari 2600 VCS — Retro Desk with 2,146 Games | 4u-Labs'
    );
    el('btn-lang').textContent = lang === 'en' ? '🇺🇸 EN' : '🇧🇷 PT';

    document.querySelectorAll('[data-pt][data-en]').forEach((node) => {
      node.textContent = lang === 'en' ? node.dataset.en : node.dataset.pt;
    });
    document.querySelectorAll('[data-pt-title][data-en-title]').forEach((node) => {
      node.title = lang === 'en' ? node.dataset.enTitle : node.dataset.ptTitle;
    });

    if (el('pause-state')) el('pause-state').textContent = paused ? tr('Pausado', 'Paused') : tr('Rodando', 'Running');
    if (el('rack-title')) el('rack-title').textContent = tr('CARTUCHOS ATARI 2600', 'ATARI 2600 CARTRIDGES');
    if (searchInput) searchInput.placeholder = tr('🔍 Buscar nos 2.146 jogos...', '🔍 Search 2,146 games...');
    if (catalogSearch) catalogSearch.placeholder = tr('🔍 Filtrar cartucho por nome...', '🔍 Filter cartridge by name...');
    if (el('btn-open-local')) el('btn-open-local').textContent = tr('📁 Abrir .BIN', '📁 Open .BIN');
    if (el('btn-eject-rom')) el('btn-eject-rom').textContent = tr('⟲ Reiniciar', '⟲ Reload');
    if (el('pill-classics')) el('pill-classics').textContent = tr('⭐ Clássicos', '⭐ Classics');
    if (el('pill-all')) el('pill-all').textContent = tr('🕹️ Todos', '🕹️ All');
    if (el('pill-favs')) el('pill-favs').textContent = tr('♥ Favoritos', '♥ Favorites');
    if (el('pill-recent')) el('pill-recent').textContent = tr('🕘 Recentes', '🕘 Recent');
    if (el('btn-open-cart-catalog')) el('btn-open-cart-catalog').textContent = tr('🗂️ Caixa', '🗂️ Box');
    if (el('sw-tv-state')) el('sw-tv-state').textContent = tvColorMode ? tr('COR', 'COLOR') : tr('P&B', 'B/W');

    const manualBody = el('manual-body');
    if (manualBody) {
      manualBody.innerHTML = lang === 'en'
        ? `<h3 style="color:#fdba74;margin-bottom:6px;">🕹️ Woody Console Switches</h3>
           <ul style="padding-left:18px;margin-bottom:14px;">
             <li><strong>GAME RESET (F1):</strong> starts most games (such as <em>River Raid</em>, <em>Enduro</em>, <em>Pitfall!</em>) or restarts the match.</li>
             <li><strong>GAME SELECT (F2):</strong> chooses the game mode (1 or 2 players, speed, variations such as the 112 modes of <em>Space Invaders</em>).</li>
             <li><strong>TV TYPE:</strong> toggles Color vs Black &amp; White video (some games such as <em>Starmaster</em> use this switch for the tactical map!).</li>
             <li><strong>POWER:</strong> turns the Atari 2600 console on or off (always powers on automatically when inserting a cartridge).</li>
           </ul>
           <h3 style="color:#fdba74;margin-bottom:6px;">🎯 Paddles, Save States &amp; NetPlay</h3>
           <ul style="padding-left:18px;">
             <li>Hover over the bottom of the TV screen to reveal Javatari's bar: <strong>Save/Load State</strong>, <strong>Paddle</strong> mode (for <em>Kaboom!</em> &amp; <em>Breakout</em>) and <strong>P2P NetPlay</strong>!</li>
             <li>You can also click <strong>📁 Open .BIN</strong> or drag &amp; drop any <code>.bin</code>/<code>.a26</code> cartridge straight onto the TV.</li>
           </ul>`
        : `<h3 style="color:#fdba74;margin-bottom:6px;">🕹️ Chaves do Console Woody</h3>
           <ul style="padding-left:18px;margin-bottom:14px;">
             <li><strong>GAME RESET (F1):</strong> inicia a maioria dos jogos (como <em>River Raid</em>, <em>Enduro</em>, <em>Pitfall!</em>) ou reinicia a partida.</li>
             <li><strong>GAME SELECT (F2):</strong> escolhe o modo de jogo (1 ou 2 jogadores, velocidade, variações como os 112 modos de <em>Space Invaders</em>).</li>
             <li><strong>TV TYPE:</strong> alterna entre vídeo Colorido e Preto &amp; Branco (alguns jogos como <em>Starmaster</em> usam essa chave para mapa!).</li>
             <li><strong>POWER:</strong> liga ou desliga o console Atari 2600 (a chave sempre acende ao carregar um novo cartucho).</li>
           </ul>
           <h3 style="color:#fdba74;margin-bottom:6px;">🎯 Paddles, Save States &amp; NetPlay</h3>
           <ul style="padding-left:18px;">
             <li>Passe o mouse na parte inferior da tela da TV para revelar a barra avançada do Javatari: <strong>Save/Load State</strong>, troca de <strong>Paddle</strong> (para <em>Kaboom!</em> e <em>Breakout</em>) e <strong>NetPlay P2P</strong>!</li>
             <li>Você também pode clicar em <strong>📁 Abrir .BIN</strong> ou arrastar qualquer cartucho <code>.bin</code>/<code>.a26</code> direto para a TV.</li>
           </ul>`;
    }

    renderRack();
    if (catalogModal && !catalogModal.classList.contains('hidden')) renderCatalogModal();
  }

  el('btn-lang')?.addEventListener('click', () => {
    lang = lang === 'en' ? 'pt' : 'en';
    try { localStorage.setItem(STORAGE_LANG, lang); } catch {}
    applyLang();
  });

  // Inicialização
  async function initDesk() {
    wireSwitches();
    const params = new URLSearchParams(window.location.search);
    const paramUrl = params.get('CARTRIDGE_URL') || params.get('AUTODETECT_URL');
    let cleanParamName = paramUrl ? decodeURIComponent(paramUrl.split('/').pop() || '') : '';
    const STALE_NTSC_UPGRADE = {
      'Popeye.bin': 'Popeye 2.bin',
      'Joust.bin': 'Joust 2.bin',
      'Frostbite.bin': 'Frostbite 5.bin',
      'Bridge.bin': 'Bridge 1.bin',
      'Grand Prix.bin': 'Grand Prix 1.bin',
      'E.T. - The Extra-Ter.bin': 'E.T. - The Extra-T 1.bin',
      'X-Man.bin': 'X-Man 1.bin'
    };
    if (cleanParamName) {
      updateCartridgeVisuals(STALE_NTSC_UPGRADE[cleanParamName] || cleanParamName || 'Pitfall.bin');
      recordRecent(STALE_NTSC_UPGRADE[cleanParamName] || cleanParamName);
    }

    try {
      const res = await fetch('roms.json');
      if (res.ok) {
        allRoms = await res.json();
      }
    } catch (err) {
      console.error('Erro carregando roms.json:', err);
      allRoms = CLASSICS.map((c) => c.file);
    }

    applyLang();

    // Sincroniza estado real da chave POWER do console Javatari (inclusive atalho F1 ou boot atrasado)
    syncConsoleUiFromEmulator();
    setInterval(syncConsoleUiFromEmulator, 250);

    // Carrega e inicia automaticamente a ROM com GAME RESET ativo (3 vidas)
    const targetBootRom = STALE_NTSC_UPGRADE[cleanParamName] || cleanParamName || 'Pitfall.bin';
    const waitReady = setInterval(() => {
      if (window.Javatari?.room?.fileLoader && window.jt?.FileLoader) {
        clearInterval(waitReady);
        loadCartridgeFile(targetBootRom);
      }
    }, 120);
    setTimeout(() => clearInterval(waitReady), 8000);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDesk);
  } else {
    initDesk();
  }
})();
