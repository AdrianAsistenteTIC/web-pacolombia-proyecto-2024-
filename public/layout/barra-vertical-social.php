<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Redes Sociales</title>
  <style>
  .social-bar {
    position: fixed;
    top: 50%;
    right: 1px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 8px;
    z-index: 1000;
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .social-bar .icon {
    text-decoration: none;
  }

  .social-bar .icon img {
    width: 35px;
    height: 35px;
    background-color: #D50057;
    border: 2px solid transparent;
    border-radius: 50%;
    padding: 5px;
    box-shadow: 0 0 0px rgba(213, 0, 50, 0.7);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .social-bar .icon img:hover {
    transform: scale(1.3);
    box-shadow: 0 0 0px rgba(213, 0, 50, 1);
  }
  </style>
</head>

<body>
  <div class="social-bar">
    <a href="https://www.facebook.com/profile.php?id=100063802800139" rel="noopener noreferrer" class="icon facebook"
      target="_blank">
      <image src="https://img.icons8.com/48/ffffff/facebook-new.png" alt="Facebook" title="Facebook" />
    </a>
    <a href="https://www.instagram.com/profesionales.asociados/" rel="noopener noreferrer" class="icon instagram"
      target="_blank">
      <image src="https://img.icons8.com/48/ffffff/instagram-new.png" alt="Instagram" title="Instagram" />
    </a>
    <a href="https://www.youtube.com/@PA.Colombia" rel="noopener noreferrer" class="icon youtube" target="_blank">
      <image src="https://img.icons8.com/48/ffffff/youtube-play.png" alt="YouTube" title="YouTube" />
    </a>
    <a href="https://co.linkedin.com/company/profesionales-asociados" rel="noopener noreferrer" class="icon linkedin"
      target="_blank">
      <image src="https://img.icons8.com/48/ffffff/linkedin.png" alt="LinkedIn" title="LinkedIn" />
    </a>
    <a href="https://wa.link/1rh7vg" rel="noopener noreferrer" class="icon whatsapp" target="_blank">
      <image src="https://img.icons8.com/48/ffffff/whatsapp.png" alt="WhatsApp" title="WhatsApp" />
    </a>
  </div>
</body>

</html>