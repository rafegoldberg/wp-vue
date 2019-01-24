
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Williams Selyem</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- External  -->
  <script>
    UiImportPath = "http://localhost:8080/"
  </script>
  <script src="//unpkg.com/wpapi@1.1.2/browser/wpapi.min.js"></script>

  <?wp_head()?>
</head>
<body <?body_class()?>>

    <div id="app">
      <? if( have_posts() ): while( have_posts() ): the_post() ?>
      <article>
        <header>
          <h2><?the_title()?></h2>
        </header>
        <section>
          <?the_content()?>
        </section>
      </article>
      <? endwhile; endif ?>
    </div>

  <?if( false )
    get_template_part("path/file", "name"); // path/file-name.php
    ?>

  <?wp_footer()?>
</body>
</html>