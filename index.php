<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Base php</title>
  </head>
  <body>
    <p>
      <?php
        $badword = $_GET['badword'];
        $sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quas dolore, facere ab, repudiandae atque repellat ipsam nulla dolor deserunt non beatae quisquam suscipit voluptatem consequatur aspernatur quam quaerat necessitatibus?';
        $sentenceMod = str_replace($badword, '***', $sentence);
        
        echo $sentenceMod;

        // var_dump($badword, $sentence, $sentenceMod); die();
      ?>
    </p>
  </body>
</html>