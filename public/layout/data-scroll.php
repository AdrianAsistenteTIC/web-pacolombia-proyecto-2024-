<?php
// Datos de la página de inicio - definidos de manera estática
$index_panel = [
    'titulo' => 'ARRIBA'
];
?>
<!-- Back to top button -->
<a href="#top" rel="noopener noreferrer" class="btn-scroll-top" data-scroll>
  <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">
    <?php echo htmlspecialchars($index_panel['titulo']); ?>
  </span>
  <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>