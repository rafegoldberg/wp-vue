
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Williams Selyem</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- External  -->
  <script src="//unpkg.com/wpapi@1.1.2/browser/wpapi.min.js"></script>
  
  <script>
    var
    UiImportPath = "/rgd3/wp-content/themes/wp-vue/dist/";
  </script>
  <?wp_head()?>
</head>
<body <?body_class()?>>

    <div id="ssr-content" hidden>
      <?if(have_posts()): while(have_posts()): the_post()?>
      <article>
        <header>
          <h2><?the_title()?></h2>
        </header>
        <section><?the_content()?></section>
      </article>
      <?endwhile; endif?>
    </div>

    <div id="app">
    </div>

  <?wp_footer()?>
</body>
</html>