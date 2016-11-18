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
        $__internal_3219aff8c4593942b35c9e64663aec3e2b3a64d3f6944b8e6e0bba1aa27d4b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3219aff8c4593942b35c9e64663aec3e2b3a64d3f6944b8e6e0bba1aa27d4b5b->enter($__internal_3219aff8c4593942b35c9e64663aec3e2b3a64d3f6944b8e6e0bba1aa27d4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_3219aff8c4593942b35c9e64663aec3e2b3a64d3f6944b8e6e0bba1aa27d4b5b->leave($__internal_3219aff8c4593942b35c9e64663aec3e2b3a64d3f6944b8e6e0bba1aa27d4b5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde5d42113877b51e09c0bce9d01cd27083a803621f3c8f9be59201ebd929420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde5d42113877b51e09c0bce9d01cd27083a803621f3c8f9be59201ebd929420->enter($__internal_bde5d42113877b51e09c0bce9d01cd27083a803621f3c8f9be59201ebd929420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_bde5d42113877b51e09c0bce9d01cd27083a803621f3c8f9be59201ebd929420->leave($__internal_bde5d42113877b51e09c0bce9d01cd27083a803621f3c8f9be59201ebd929420_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8c85998e082505480f1d83ee557af104a5f59f4237c14a34f6dbd130830ca78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c85998e082505480f1d83ee557af104a5f59f4237c14a34f6dbd130830ca78->enter($__internal_d8c85998e082505480f1d83ee557af104a5f59f4237c14a34f6dbd130830ca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_d8c85998e082505480f1d83ee557af104a5f59f4237c14a34f6dbd130830ca78->leave($__internal_d8c85998e082505480f1d83ee557af104a5f59f4237c14a34f6dbd130830ca78_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_81205d476243117040e548d7e7470b992713ebcde10b079ba842876c188bdc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81205d476243117040e548d7e7470b992713ebcde10b079ba842876c188bdc55->enter($__internal_81205d476243117040e548d7e7470b992713ebcde10b079ba842876c188bdc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_81205d476243117040e548d7e7470b992713ebcde10b079ba842876c188bdc55->leave($__internal_81205d476243117040e548d7e7470b992713ebcde10b079ba842876c188bdc55_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7225648a6e0ed87343d9ae3c2e38d1813ef4e3d6fa0acf24c87a63c867bab6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7225648a6e0ed87343d9ae3c2e38d1813ef4e3d6fa0acf24c87a63c867bab6ea->enter($__internal_7225648a6e0ed87343d9ae3c2e38d1813ef4e3d6fa0acf24c87a63c867bab6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7225648a6e0ed87343d9ae3c2e38d1813ef4e3d6fa0acf24c87a63c867bab6ea->leave($__internal_7225648a6e0ed87343d9ae3c2e38d1813ef4e3d6fa0acf24c87a63c867bab6ea_prof);

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
