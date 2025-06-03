<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio Amina</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Paytone+One&display=swap');

    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      font-family: Calibri, sans-serif;
    }

    main {
  flex: 1 0 auto;
  overflow: hidden;
  background-color: black;
  padding: 100px 0 1rem; 
  width: 100%;
  text-align: center;
}


    .intro {
      font-family: 'Paytone One', sans-serif;
      font-size: 3rem;
      color: white;
      margin: 3rem 0 2rem;
      line-height: 1.4;
    }

    #typewriter {
      border-right: 2px solid white;
      
      color: #00e58a;

    }

    @keyframes blink-caret {
      from, to { border-color: transparent; }
      50% { border-color: white; }
    }

    .scrolling-wrapper {
      display: flex;
      width: calc(8 * 1100px);
      animation: scroll-left 70s linear infinite;
      justify-content: center;
    }

    main img {
      height: 500px;
      margin: 0 4rem;
      border-radius: 8px;
      flex-shrink: 0;
      transition: transform 0.7s ease;
      width: auto;
      aspect-ratio: auto;
    }

    main img:hover {
      transform: scale(1.1);
      animation-play-state: paused;
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(calc(-50%));
      }
    }

    footer {
      background-color: black;
      color: white;
      padding: 2rem 0;
      text-align: center;
      flex-shrink: 0;
    }

    .prenom {
  font-size: 4rem;
}

.metier {
  font-size: 2.2rem;
}


  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <main>
  <div class="intro">
  <span class="prenom">Salut, moi c’est <span style="color: #00e58a;">Amina</span></span><br />
  <span class="metier">je suis <span id="typewriter"></span></span>
</div>


    <div class="scrolling-wrapper">
      <img src="logo-memoji/image1.png" alt="Image 1" />
      <img src="logo-memoji/image2.png" alt="Image 2" />
      <img src="logo-memoji/image3.png" alt="Image 3" />
      <img src="logo-memoji/image4.png" alt="Image 4" />
      <img src="logo-memoji/image1.png" alt="Image 1" />
      <img src="logo-memoji/image2.png" alt="Image 2" />
      <img src="logo-memoji/image3.png" alt="Image 3" />
      <img src="logo-memoji/image4.png" alt="Image 4" />
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const words = ["étudiante", "développeuse", "curieuse", "créative"];
      const typewriter = document.getElementById("typewriter");

      let wordIndex = 0;
      let charIndex = 0;
      let isDeleting = false;

      function type() {
        const currentWord = words[wordIndex];
        const displayedText = currentWord.substring(0, charIndex);
        typewriter.textContent = displayedText;

        if (!isDeleting && charIndex < currentWord.length) {
          charIndex++;
          setTimeout(type, 150);
        } else if (isDeleting && charIndex > 0) {
          charIndex--;
          setTimeout(type, 75);
        } else {
          if (!isDeleting) {
            isDeleting = true;
            setTimeout(type, 1000);
          } else {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, 300);
          }
        }
      }

      type();
    });
  </script>
</body>
</html>
