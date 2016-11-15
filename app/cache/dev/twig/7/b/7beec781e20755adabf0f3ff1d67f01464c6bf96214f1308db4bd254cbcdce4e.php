<?php

/* FilmBundle::index.html.twig */
class __TwigTemplate_a15b618f2e3bc8f3814e37efca9244c9f044af1055faaf148437e6a6481e0b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f5c6da80b14b03b1580b727c4f209cbd1f101159cbddf19ccdd13661776f8c3 = $this->env->getExtension("native_profiler");
        $__internal_8f5c6da80b14b03b1580b727c4f209cbd1f101159cbddf19ccdd13661776f8c3->enter($__internal_8f5c6da80b14b03b1580b727c4f209cbd1f101159cbddf19ccdd13661776f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle::index.html.twig"));

        // line 1
        echo "<html>
<head>
\t<title>FilmBundle</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" /> 
\t<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/js/scripts.js"), "html", null, true);
        echo "\"></script>\t\t
</head>
<body>
\t<div id=\"page\">    
\t\t<div id=\"mainheader\">
\t\t\t
\t\t\t<div id=\"log\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/logo.png"), "html", null, true);
        echo "\" alt=\"FilmBundle\" width=\"128\" height=\"128\" />
\t\t\t</div>
\t\t\t<div style=\"background-color:#dddddd\">
\t\t\t\t<center>
\t\t\t\t\t<b><font color=\"#000080\">Bienvenue sur notre site ,le but est de pouvoir ajouter tous les acteurs dont vous êtes fan ... </font></b>
\t\t\t\t</center>
\t\t\t</div>
\t\t\t     <center>
\t\t\t<h1><font color=\"#000080\"> Cast Ton Acteur ou Ton Actrice</font></h1>
\t\t\t     </center>
\t\t\t<ul id=\"menu\">
\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("film");
        echo "\">Accueil</a></li>\t\t    
\t\t\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("acteur");
        echo "\">Acteurs</a></li>                   
\t\t\t</ul>
\t\t</div>
\t\t<div id=\"content\">
\t\t\t";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "\t\t</div>

\t\t<footer id=\"footer\">                
\t\t\t<div class=\"foot\">
\t\t\t\t<h4>Notre Site</h4>
\t\t\t\t<p>Adresse :91 avenue Maurice Thorez Ivry-sur-Seine </p>
\t\t\t</div>

\t\t\t<div class=\"foot\">
\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t<p>Tel: 06 20 76 74 86 </p>

\t\t\t</div>

\t\t\t<div class=\"foot\">
\t\t\t\t<h4>Social</h4>   
\t\t\t\t<p>Facebook:Bouida Mehdy et Kevin Jum's </p>\t\t\t\t\t\t\t

\t\t\t</div> 

\t\t\t<div class=\"clear\"></div>

\t\t</div>
\t</footer>\t
</div>

</body>
</html>

";
        
        $__internal_8f5c6da80b14b03b1580b727c4f209cbd1f101159cbddf19ccdd13661776f8c3->leave($__internal_8f5c6da80b14b03b1580b727c4f209cbd1f101159cbddf19ccdd13661776f8c3_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_69eba9899967f886b46aab5abd25b5fbc807cba2dfbaecabd634790215ebf476 = $this->env->getExtension("native_profiler");
        $__internal_69eba9899967f886b46aab5abd25b5fbc807cba2dfbaecabd634790215ebf476->enter($__internal_69eba9899967f886b46aab5abd25b5fbc807cba2dfbaecabd634790215ebf476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "\t\t\t<div id=\"header\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<div id=\"slide-holder\">
\t\t\t\t\t\t<div id=\"slide-runner\">
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-1\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/10.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a>
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-2\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/14.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a>
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-3\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/12.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a>
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-4\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/15.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a>
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-5\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/11.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a>
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-6\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/16.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a>
\t\t\t\t\t\t\t<a href=\"\"><img id=\"slide-img-7\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/13.jpg"), "html", null, true);
        echo "\" class=\"slide\" alt=\"\" /></a> 
\t\t\t\t\t\t\t<div id=\"slide-controls\">
\t\t\t\t\t\t\t\t<p id=\"slide-client\" class=\"text\"><strong>post: </strong><span></span></p>
\t\t\t\t\t\t\t\t<p id=\"slide-desc\" class=\"text\"></p>
\t\t\t\t\t\t\t\t<p id=\"slide-nav\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t<!--content featured gallery here -->\t\t\t\t
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tif(!window.slider) var slider={};slider.data=[{\"id\":\"slide-img-1\",\"client\":\"Meagan Good\",\"desc\":\"Actrice\"},{\"id\":\"slide-img-2\",\"client\":\"Terrence Howard\",\"desc\":\"Acteur\"},{\"id\":\"slide-img-3\",\"client\":\"Sofia Vergara\",\"desc\":\"Actrice\"},{\"id\":\"slide-img-4\",\"client\":\"Jason Statham\",\"desc\":\"Acteur\"},{\"id\":\"slide-img-5\",\"client\":\"Blake Lively\",\"desc\":\"Acteur\"},{\"id\":\"slide-img-6\",\"client\":\"Georges Clooney\",\"desc\":\"Acteur\"},{\"id\":\"slide-img-7\",\"client\":\"Adele Exarchopoulos\",\"desc\":\"Actrice\"}];
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        
        $__internal_69eba9899967f886b46aab5abd25b5fbc807cba2dfbaecabd634790215ebf476->leave($__internal_69eba9899967f886b46aab5abd25b5fbc807cba2dfbaecabd634790215ebf476_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  120 => 32,  114 => 31,  78 => 57,  76 => 31,  69 => 27,  65 => 26,  51 => 15,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* 	<title>FilmBundle</title>*/
/* 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* 	<link rel="stylesheet" href="{{  asset('bundles/film/css/main.css')  }}" type="text/css" media="all" /> */
/* 	<link rel="stylesheet" href="{{  asset('bundles/film/css/style.css')  }}" type="text/css" media="screen" /> */
/* 	<script type="text/javascript" src="{{  asset('bundles/film/js/jquery.js')  }}"></script>*/
/* 	<script type="text/javascript" src="{{  asset('bundles/film/js/scripts.js')  }}"></script>		*/
/* </head>*/
/* <body>*/
/* 	<div id="page">    */
/* 		<div id="mainheader">*/
/* 			*/
/* 			<div id="log">*/
/* 				<img src="{{  asset('bundles/film/images/logo.png')  }}" alt="FilmBundle" width="128" height="128" />*/
/* 			</div>*/
/* 			<div style="background-color:#dddddd">*/
/* 				<center>*/
/* 					<b><font color="#000080">Bienvenue sur notre site ,le but est de pouvoir ajouter tous les acteurs dont vous êtes fan ... </font></b>*/
/* 				</center>*/
/* 			</div>*/
/* 			     <center>*/
/* 			<h1><font color="#000080"> Cast Ton Acteur ou Ton Actrice</font></h1>*/
/* 			     </center>*/
/* 			<ul id="menu">*/
/* 				<li><a href="{{  path('film')  }}">Accueil</a></li>		    */
/* 				<li><a href="{{  path('acteur')  }}">Acteurs</a></li>                   */
/* 			</ul>*/
/* 		</div>*/
/* 		<div id="content">*/
/* 			{%block body%}*/
/* 			<div id="header">*/
/* 				<div class="wrap">*/
/* 					<div id="slide-holder">*/
/* 						<div id="slide-runner">*/
/* 							<a href=""><img id="slide-img-1" src="{{  asset('bundles/film/images/10.jpg')  }}" class="slide" alt="" /></a>*/
/* 							<a href=""><img id="slide-img-2" src="{{  asset('bundles/film/images/14.jpg')  }}" class="slide" alt="" /></a>*/
/* 							<a href=""><img id="slide-img-3" src="{{  asset('bundles/film/images/12.jpg')  }}" class="slide" alt="" /></a>*/
/* 							<a href=""><img id="slide-img-4" src="{{  asset('bundles/film/images/15.jpg')  }}" class="slide" alt="" /></a>*/
/* 							<a href=""><img id="slide-img-5" src="{{  asset('bundles/film/images/11.jpg')  }}" class="slide" alt="" /></a>*/
/* 							<a href=""><img id="slide-img-6" src="{{  asset('bundles/film/images/16.jpg')  }}" class="slide" alt="" /></a>*/
/* 							<a href=""><img id="slide-img-7" src="{{  asset('bundles/film/images/13.jpg')  }}" class="slide" alt="" /></a> */
/* 							<div id="slide-controls">*/
/* 								<p id="slide-client" class="text"><strong>post: </strong><span></span></p>*/
/* 								<p id="slide-desc" class="text"></p>*/
/* 								<p id="slide-nav"></p>*/
/* 							</div>*/
/* 						</div>				*/
/* 						<!--content featured gallery here -->				*/
/* 						<script type="text/javascript">*/
/* 						if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"Meagan Good","desc":"Actrice"},{"id":"slide-img-2","client":"Terrence Howard","desc":"Acteur"},{"id":"slide-img-3","client":"Sofia Vergara","desc":"Actrice"},{"id":"slide-img-4","client":"Jason Statham","desc":"Acteur"},{"id":"slide-img-5","client":"Blake Lively","desc":"Acteur"},{"id":"slide-img-6","client":"Georges Clooney","desc":"Acteur"},{"id":"slide-img-7","client":"Adele Exarchopoulos","desc":"Actrice"}];*/
/* 						</script>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endblock %}*/
/* 		</div>*/
/* */
/* 		<footer id="footer">                */
/* 			<div class="foot">*/
/* 				<h4>Notre Site</h4>*/
/* 				<p>Adresse :91 avenue Maurice Thorez Ivry-sur-Seine </p>*/
/* 			</div>*/
/* */
/* 			<div class="foot">*/
/* 				<h4>Nous contacter</h4>*/
/* 				<p>Tel: 06 20 76 74 86 </p>*/
/* */
/* 			</div>*/
/* */
/* 			<div class="foot">*/
/* 				<h4>Social</h4>   */
/* 				<p>Facebook:Bouida Mehdy et Kevin Jum's </p>							*/
/* */
/* 			</div> */
/* */
/* 			<div class="clear"></div>*/
/* */
/* 		</div>*/
/* 	</footer>	*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */