<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Publishers Speak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" id="publishers-icons-css" href="http://localhost/salvadorfm/wp-content/themes/seox-theme-publishers/assets/css/libs/bootstrap-icons/bootstrap-icons.min.css?ver=1.10.3" media="">
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="container">
  <header>
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <?php include 'includes/speakText.php'; ?>
        <?php include 'includes/recordText.php'; ?>
      </div>
      <div class="col-12 col-md-6">
        <h1 class="title">Publishers Speak</h1>
      </div>
    </div>
  </header>
  <div class="comandos">
    <div class="col-comando">
      <h3>Navegação Básica:</h3>
      <ul>
        <li>Buscar: {palavra-chave}</li>
        <li>"Ir/Acessar/Navegar/Voltar para o início" - Navegar para a página inicial.</li>
      </ul>
    </div>
    <div class="col-comando">
      <h3>Navegação para Apresentadores:</h3>
      <ul>
        <li>"Ir/Acesar/Navegar para {pagina} apresentadores" - Navegar para a página de apresentadores.</li>
      </ul>
    </div>
    <div class="col-comando">
      <h3>Rolagem:</h3>
      <ul>
        <li>"Rolar para cima" - Rolar a página para cima.</li>
        <li>"Rolar para baixo" - Rolar a página para baixo.</li>
      </ul>
    </div>
    <div class="col-comando">
      <h3>Navegação para Rádio ao Vivo:</h3>
      <ul>
        <li>"Ir/Acesar/Navegar para {pagina} rádio ao vivo" - Navegar para a página de rádio ao vivo.</li>
      </ul>
    </div>
  </div>
  <div class="single-content mt-5">
    <h2 class="mb-4">Neymar é operado e deve ter alta até sábado: ‘foi um sucesso’</h2>
    <p class="mb-2">
      Após sofrer ruptura no ligamento cruzado e do menisco do joelho esquerdo, Neymar foi operado nesta quinta-feira (2), em Belo Horizonte. Segundo nota do departamento médico da seleção brasileira, o procedimento foi um sucesso.
    </p>
    <p class="mb-2">
      “Estamos muito satisfeitos com o resultado, foi um sucesso”, disse o médico Rodrigo Lasmar, da Seleção Brasileira, em boletim do hospital Mater Dei.
    </p>
    <p class="mb-2">
      Segundo Lasmar, foi feita uma reconstrução do ligamento cruzado anterior, o reparo das lesões meniscais nos dois meniscos.
    </p>
    <img class="rounded-2 mb-4 w-100" src="https://api.radiosalvadorfm.com.br/fotos/gcma_noticias/122880/IMAGEM_NOTICIA_1.jpg?v=c8607dc8c0316d90cecaebf94a08bcc0" alt="Imagem de Neymar operado e deve ter alta até sábado: ‘foi um sucesso’" />
    <p class="mb-2">
      Após sofrer ruptura no ligamento cruzado e do menisco do joelho esquerdo, Neymar foi operado nesta quinta-feira (2), em Belo Horizonte. Segundo nota do departamento médico da seleção brasileira, o procedimento foi um sucesso.
    </p>
    <p class="mb-2">
      A Associação Brasileira de Proteína Animal (ABPA) celebrou o anúncio
      feito hoje pelo Ministro da Agricultura e Pecuária do Brasil, Carlos
      Fávaro, referente à autorização de dezenas de novas instalações
      exportadoras de carne suína para a República Dominicana, após a
      comunicação emitida pela Direção Geral de Medicamentos, Alimentos e
      Produtos Sanitários do país centro-americano. No total, foram
      habilitadas 36 novas instalações, incluindo 34 abatedouros e 2 unidades
      de processamento. Essas se somam a outras quatro unidades que já haviam
      sido autorizadas a exportar para o mercado dominicano na primeira
      quinzena de agosto, totalizando 40 instalações autorizadas a enviar
      produtos para a República Dominicana.
    </p>
    <p class="mb-2">
      A Associação Brasileira de Proteína Animal (ABPA) celebrou o anúncio
      feito hoje pelo Ministro da Agricultura e Pecuária do Brasil, Carlos
      Fávaro, referente à autorização de dezenas de novas instalações
      exportadoras de carne suína para a República Dominicana, após a
      comunicação emitida pela Direção Geral de Medicamentos, Alimentos e
      Produtos Sanitários do país centro-americano. No total, foram
      habilitadas 36 novas instalações, incluindo 34 abatedouros e 2 unidades
      de processamento. Essas se somam a outras quatro unidades que já haviam
      sido autorizadas a exportar para o mercado dominicano na primeira
      quinzena de agosto, totalizando 40 instalações autorizadas a enviar
      produtos para a República Dominicana.
    </p>
  </div>
  <footer>
    <button class="btn-navigation-voice" id="btn-navigation-voice" onclick="startVoiceNavigation()">
      <div class="icon-record">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="var(--bs-primary)" class="bi bi-mic-fill" viewBox="0 0 16 16">
        <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"></path>
        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"></path>
      </svg>
      </div>
      <div class="icon-recording" style="display: none;">
            <span class="dot" id="dot1"></span>
            <span class="dot" id="dot2"></span>
            <span class="dot" id="dot3"></span>
        </div>
    </button>
  </footer>
</body>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/recordText.js"></script>
<script src="assets/js/speakText.js"></script>

</html>