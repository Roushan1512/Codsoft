<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <p class="name">delhi</p>
    <button class="nextBtn">Shit</button>
    
    <script>
      let text = document.querySelector(".name").innerHTML;
      console.log(text);
      let Btn = document.querySelector(".nextBtn");
      Btn.addEventListener("click", (e) => {
        // e.preventDefault();
      localStorage.setItem('Arr',JSON.stringify([text]));
      window.location.href="test2.html"
      });
    </script>
  </body>
</html>
