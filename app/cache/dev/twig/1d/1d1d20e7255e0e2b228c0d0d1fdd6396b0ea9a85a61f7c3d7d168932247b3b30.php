<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_74dcea87da3be8af4115eab21c54221618282673a30dbee620949c2e0987ba34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_102e961fa6e86710592eb8e5f1e0efa90ff13c918b19558d093dbb660cf5ca5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102e961fa6e86710592eb8e5f1e0efa90ff13c918b19558d093dbb660cf5ca5f->enter($__internal_102e961fa6e86710592eb8e5f1e0efa90ff13c918b19558d093dbb660cf5ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_102e961fa6e86710592eb8e5f1e0efa90ff13c918b19558d093dbb660cf5ca5f->leave($__internal_102e961fa6e86710592eb8e5f1e0efa90ff13c918b19558d093dbb660cf5ca5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d01525b3ab6dcaa966c4651066c231b3a6e1239cc536b91f1a11b446963a343d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01525b3ab6dcaa966c4651066c231b3a6e1239cc536b91f1a11b446963a343d->enter($__internal_d01525b3ab6dcaa966c4651066c231b3a6e1239cc536b91f1a11b446963a343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_d01525b3ab6dcaa966c4651066c231b3a6e1239cc536b91f1a11b446963a343d->leave($__internal_d01525b3ab6dcaa966c4651066c231b3a6e1239cc536b91f1a11b446963a343d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a2d1205fb6f2d482befd74670234633a03edebf85430e17828d24900074b121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2d1205fb6f2d482befd74670234633a03edebf85430e17828d24900074b121->enter($__internal_9a2d1205fb6f2d482befd74670234633a03edebf85430e17828d24900074b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_9a2d1205fb6f2d482befd74670234633a03edebf85430e17828d24900074b121->leave($__internal_9a2d1205fb6f2d482befd74670234633a03edebf85430e17828d24900074b121_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed0fb0bc2b250d3f653bad6bb02259a5809c99e1a53a9893a4def8976fbf1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed0fb0bc2b250d3f653bad6bb02259a5809c99e1a53a9893a4def8976fbf1cc->enter($__internal_aed0fb0bc2b250d3f653bad6bb02259a5809c99e1a53a9893a4def8976fbf1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_aed0fb0bc2b250d3f653bad6bb02259a5809c99e1a53a9893a4def8976fbf1cc->leave($__internal_aed0fb0bc2b250d3f653bad6bb02259a5809c99e1a53a9893a4def8976fbf1cc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83302845dac8687b0616bde6eb8af80b2fde31cb8f7739102491e5b10401b8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83302845dac8687b0616bde6eb8af80b2fde31cb8f7739102491e5b10401b8b8->enter($__internal_83302845dac8687b0616bde6eb8af80b2fde31cb8f7739102491e5b10401b8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_83302845dac8687b0616bde6eb8af80b2fde31cb8f7739102491e5b10401b8b8->leave($__internal_83302845dac8687b0616bde6eb8af80b2fde31cb8f7739102491e5b10401b8b8_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\coresphere\\console-bundle/Resources/views/base.html.twig");
    }
}
