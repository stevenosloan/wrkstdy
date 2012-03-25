<meta charset="UTF-8" />
      
    <title><?php echo $title; ?></title>
    
    <link rel="stylesheet" href="css/main<?php echo '.' . filemtime('css/main.css'); ?>.css" />
    <link rel="icon" href="assets/images/favicon<?php echo '.' . filemtime('assets/images/favicon.png'); ?>.png" type="image/png" />
    
    <script type="text/javascript" src="assets/scripts/modernizr-build<?php echo '.' . filemtime('assets/scripts/modernizr-build.js'); ?>.js"></script>
    <script type="text/javascript">
      
      // be sure to add a customized modernizr build
      Modernizr.load([
        {
          // jquery & init
          load: 
            ['http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js' , 'assets/scripts/init<?php echo '.' . filemtime('assets/scripts/init.js'); ?>.js'],
            complete: function () {
              console.log('jquery & init loaded');
              jqueryInit();
            }
        },
        {
          // load other scripts that may depend on jquery      
        }
      ]);
      
    </script>
    
    <script type="text/javascript">
    
      Modernizr.load([ ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'
      ]);
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_trackPageLoadTime']);
    
    </script>