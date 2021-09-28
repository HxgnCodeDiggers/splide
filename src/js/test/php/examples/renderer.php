<?php
require_once '../parts.php';
require_once '../settings.php';

$settings = get_settings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Renderer</title>

  <link rel="stylesheet" href="../../../../../dist/css/themes/splide-<?php echo $settings['theme'] ?>.min.css">
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <script type="text/javascript" src="../../../../../dist/js/splide.js"></script>
  <script type="text/javascript" src="../../../../../dist/js/splide-renderer.min.js"></script>

  <script>
    document.addEventListener( 'DOMContentLoaded', function () {
      const options = {
        type: 'loop',
        // padding: '1rem',
        perPage: 5,
        // clones: 5,
        gap: 100,
        focus: 'center',
        // fixedWidth: '20rem',
        // fixedHeight: '20rem',
        // direction: 'ttb',
        height: 600,
        breakpoints: {
          1000: {
            // perPage: 3,
            // gap: 10,
            // padding: '5rem',
          },
          640: {
            // perPage: 1,
            gap: '3rem',
            padding: 0,
          }
        },
      };

      var renderer = new SplideRenderer(
        [
          '<img src="../../assets/images/pics/slide01.jpg">',
          '<img src="../../assets/images/pics/slide02.jpg">',
          '<img src="../../assets/images/pics/slide03.jpg">',
          '<img src="../../assets/images/pics/slide04.jpg">',
          '<img src="../../assets/images/pics/slide05.jpg">',
        ],
        options
      );

      var attrs = [
        { dataTest: 1 },
        { dataTest: 2 },
        { dataTest: 3 },
        { dataTest: 4 },
        { dataTest: 5 },
      ];

      var wrapper = document.getElementById( 'wrapper' );
      wrapper.innerHTML = renderer.html( { arrows: true, slideAttrs: attrs } );

      setTimeout( () => {
        var splide = new Splide( wrapper.firstElementChild, options );
        SplideRenderer.clean( splide );
        splide.mount();
      }, 2000 );
    } );
  </script>
</head>
<body>

<div id="wrapper"></div>

</body>
</html>
