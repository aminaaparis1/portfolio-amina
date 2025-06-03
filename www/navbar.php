<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Navbar</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet" />
  
  <style>
    nav {
      font-family: 'Paytone One', sans-serif;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: black;
      font-size: 1.25rem;
      color: white;
      position: fixed;        
  top: 0;                 
  width: 97%;             
  z-index: 9999;
    }

    .logo {
      font-size: 2rem;
      color: white;
    }

    .nav-links {
  display: flex;
  gap: 3.5rem;
  justify-content: center;
  list-style: none;
  margin: 0;
  padding: 0;
}


    .nav-links li a {
      text-decoration: none;
      color: white;
      font-size: 1.25rem;
      transition: transform 0.3s ease, color 0.3s ease;
      display: inline-block;
    }

    .nav-links li a:hover {
      transform: scale(1.3);
      color:#00e58a; 
    }

    .social-links {
      display: flex;
      gap: 1.5rem;
    }

    .social-links a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 1.25rem;
      display: flex;
      align-items: center;
      transition: color 0.3s ease;
    }

    .social-links a:hover {
      color: #00e58a; 
    }

    /* Icônes SVG en noir */
    .social-links svg {
      fill: white;
      transition: fill 0.3s ease;
    }

    .social-links a:hover svg {
      fill: #00e58a;
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">Amina .</div>
    <ul class="nav-links">
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Formations</a></li>
      <li><a href="#">Projets</a></li>
      <li><a href="#">Expériences</a></li>
      <li><a href="#">Loisirs</a></li>
    </ul>
    <div class="social-links">
      <a href="https://github.com/aminaaparis1" target="_blank" aria-label="GitHub">
        <!-- Icône GitHub SVG -->
        <svg height="24" width="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 0C3.58 0 0 3.58 0 8a8 8 0 005.47 7.59c.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2 
          .37-.49-.51-.49-.51-.36-.92-.88-1.17-.88-1.17-.72-.49.05-.48.05-.48.8.06 1.22.82 1.22.82.71 
          1.22 1.87.87 2.33.66.07-.52.28-.87.5-1.07-1.78-.2-3.64-.89-3.64-3.95 
          0-.87.31-1.58.82-2.14-.08-.2-.36-1.01.08-2.11 
          0 0 .67-.21 2.2.82a7.5 7.5 0 012-.27 7.5 7.5 0 012 .27c1.53-1.04 2.2-.82 
          2.2-.82.44 1.1.16 1.91.08 2.11.51.56.82 1.27.82 2.14 
          0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 
          0 .21.15.46.55.38A8 8 0 0016 8c0-4.42-3.58-8-8-8z"/>
        </svg>
      </a>
      <a href="https://www.linkedin.com/in/amina-zouane/" target="_blank" aria-label="LinkedIn">
  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 24h5V7H0v17zm7.5-17h4.78v2.33h.07c.67-1.27 
    2.3-2.61 4.73-2.61 5.06 0 6 3.33 6 7.67V24h-5v-7.83c0-1.87-.03-4.29-2.62-4.29-2.63 
    0-3.03 2.05-3.03 4.17V24h-5V7z"/>
  </svg>
</a>

    </div>
  </nav>

</body>
</html>
