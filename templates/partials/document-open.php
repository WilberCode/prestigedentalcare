<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>  
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
     <meta name="keywords" content="Prestige dental care"> 
    <?php wp_head() ?>    
    <script type="text/javascript" src="https://www.doctible.com/v1/doctible.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $('#doctible-review-widget').reviewWidget({
            id: 'prestige-dental-care',
            format: 'horizontal'
            });
        });
    </script>
</head>
<body <?php body_class() ?>   >