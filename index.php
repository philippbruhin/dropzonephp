<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>File Upload</title>
        <meta name="description" content="File uploader">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/dropzone.css">
        <link rel="stylesheet" href="css/basic.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div id="wrapper">
            <h1 class="pagetitle">STV Wangen SZ File Upload</h1>
            <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->
            <form action="upload.php" class="dropzone" id="dropzonewidget">
                <div class="dz-message">Zum Hochladen Dateien per Drag 	&amp; Drop hier ablegen oder Klicken.
                    <br> <span class="note">(Dateigrösse maximal 500MB)</span>
                </div>
                <div class="fallback">
                    <input name="file" type="file" multiple accept=".gif,.png,.jpg,.jpeg,.mp4,.mov,.wmv,.flv,.avi,.mp3,.xls,.xlsx,.pdf,.doc,.docx,.ppt,.pptx" />
                </div>
            </form>
        </div>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/dropzone.js"></script>
        <script src="js/main.js"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-10944792-2', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>
