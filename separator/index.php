<!doctype html>
<?php
$VERSION = '1.1';
$isHorz = (@$_GET['t'] == 'horz');
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Separador para marcadores</title>

  <!-- See: https://css-tricks.com/svg-favicons-and-all-the-fun-things-we-can-do-with-them/ -->
  <link rel="icon" href="favicon-<?php echo $isHorz ? 'horz' : 'vert'; ?>.svg" type="image/svg+xml">

  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div id="outer">
    <div id="inner">

      <p>
        Sou un separador <b><?php echo $isHorz ? 'horizontal' : 'vertical'; ?></b>.
        Arrastrame <a class="me" href="" title="Arrastrame!"><?php echo $isHorz ? '───────────' : ''; ?></a><br/>
        hacia tu(s) <span class="target-name"><?php echo $isHorz ? 'carpetas' : 'barra de herramientas'; ?></span>.
      </p>

      <p>
        Para un separador <b><?php echo $isHorz ? 'vertical' : 'horizontal'; ?></b>, click <a href="<?php echo $isHorz ? 'index.php' : 'index.php?t=horz'; ?>">aquí</a>.
      </p>

      <p>
        <b>:)</b>
      </p>

      <div class="footer">
        <p>
          Versión <?php echo $VERSION; ?> hecha por <a href="https://www.twitter.com/hydratable" target="_blank">@5qw</a>
          (on <a href="https://github.com/5qw" target="_blank">GitHub</a>),<br>
          based on work by <a href="https://www.twitter.com/VorteXLP" target="_blank">@VorteXLP</a>
        </p>
        <p>
          <!-- See:
               - https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview
               - https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/guides/parameter-reference1
           -->
          <a class="twitter-share-button"
             href="https://twitter.com/intent/tweet"
             data-text="Quieres un separador para tus marcadores? Mira esto!"
             data-hashtags="tweettip"
             data-via="5qw"
             data-url="https://not5qw.ml/separator">
            Tweet
          </a>
          <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
        </p>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
