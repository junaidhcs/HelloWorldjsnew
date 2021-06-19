# HelloWorldjsnew


This module add with custom js module with front storeview controller

View Directory:
    Layout
          HelloWorldjsnew/view/frontend/layout/default_head_blocks.xml
          HelloWorldjsnew/view/frontend/layout/helloworldjsnew_index_indexjs.xml
    Templates
          HelloWorldjsnew/view/frontend/templates/hellojs.phtml
    Web
       Js
          HelloWorldjsnew/view/frontend/web/js/my_custom.js
          
          
          
          
**
default_head_blocks.xml**

  
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"  xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
	<head>
		<!--and for JS-->
    	<link src="Mytask_HelloWorldjsnew::js/my_custom.js"/>
		
	</head>
</page>





**my_custom.js**

require([
"jquery"
], function($){
    $(document).ready(function() {
        console.log('Hello world  js new All right Sparky!!');
    });
});

 
 Visit more details
 
 https://techymalabar.blogspot.com/2021/06/js-hello-world-module.html
