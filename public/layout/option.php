<?php
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'titulo' => 'CARGANDO...'
];
?>
<!-- Google Tag Manager (noscript)-->
<noscript>
  <iframe src="../www.googletagmanager.com/ns8a44.html?id=GTM-WKV3GT5" height="0" width="0"
    style="display: none; visibility: hidden;" title="Google Tag Manager"></iframe>
</noscript>

<!-- Page loading spinner -->
<div class="page-loading active">
  <div class="page-loading-inner">
    <div class="page-spinner" role="status"></div><span
      class="text-dark"><?php echo htmlspecialchars($index_panel['titulo']); ?></span>
  </div>
</div>