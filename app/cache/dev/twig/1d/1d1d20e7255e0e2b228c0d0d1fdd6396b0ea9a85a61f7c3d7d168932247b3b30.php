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
        $__internal_86794472da3c0493c2d7128dfa792dca6ece2dd6d9ff9d87a023f54dec3949c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86794472da3c0493c2d7128dfa792dca6ece2dd6d9ff9d87a023f54dec3949c8->enter($__internal_86794472da3c0493c2d7128dfa792dca6ece2dd6d9ff9d87a023f54dec3949c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_86794472da3c0493c2d7128dfa792dca6ece2dd6d9ff9d87a023f54dec3949c8->leave($__internal_86794472da3c0493c2d7128dfa792dca6ece2dd6d9ff9d87a023f54dec3949c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8d16d715938c7d50ee3c61aa8f322db6359a429484b5a16e476e747d46500e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d16d715938c7d50ee3c61aa8f322db6359a429484b5a16e476e747d46500e8->enter($__internal_b8d16d715938c7d50ee3c61aa8f322db6359a429484b5a16e476e747d46500e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_b8d16d715938c7d50ee3c61aa8f322db6359a429484b5a16e476e747d46500e8->leave($__internal_b8d16d715938c7d50ee3c61aa8f322db6359a429484b5a16e476e747d46500e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b196a98ee868c9f5bb08847f0eb6c946a1deb61bd7bbc5b4e6ae26bb558fa22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b196a98ee868c9f5bb08847f0eb6c946a1deb61bd7bbc5b4e6ae26bb558fa22->enter($__internal_5b196a98ee868c9f5bb08847f0eb6c946a1deb61bd7bbc5b4e6ae26bb558fa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_5b196a98ee868c9f5bb08847f0eb6c946a1deb61bd7bbc5b4e6ae26bb558fa22->leave($__internal_5b196a98ee868c9f5bb08847f0eb6c946a1deb61bd7bbc5b4e6ae26bb558fa22_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b3cb3bae62aa5fb08487d97cf9592a85aae1425cb46c2faee6f2fa9bb87b14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3cb3bae62aa5fb08487d97cf9592a85aae1425cb46c2faee6f2fa9bb87b14b->enter($__internal_3b3cb3bae62aa5fb08487d97cf9592a85aae1425cb46c2faee6f2fa9bb87b14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_3b3cb3bae62aa5fb08487d97cf9592a85aae1425cb46c2faee6f2fa9bb87b14b->leave($__internal_3b3cb3bae62aa5fb08487d97cf9592a85aae1425cb46c2faee6f2fa9bb87b14b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91bceed4f8dbc8418748d0fd2255c9bed6572ce2e6b5333e21470df66a271ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91bceed4f8dbc8418748d0fd2255c9bed6572ce2e6b5333e21470df66a271ebb->enter($__internal_91bceed4f8dbc8418748d0fd2255c9bed6572ce2e6b5333e21470df66a271ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_91bceed4f8dbc8418748d0fd2255c9bed6572ce2e6b5333e21470df66a271ebb->leave($__internal_91bceed4f8dbc8418748d0fd2255c9bed6572ce2e6b5333e21470df66a271ebb_prof);

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
