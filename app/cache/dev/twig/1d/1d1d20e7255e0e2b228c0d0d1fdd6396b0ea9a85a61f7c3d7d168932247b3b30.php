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
        $__internal_6fda629dbb691c7e031cf09855314e309efcf208f8cf72ba72a470629a336706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fda629dbb691c7e031cf09855314e309efcf208f8cf72ba72a470629a336706->enter($__internal_6fda629dbb691c7e031cf09855314e309efcf208f8cf72ba72a470629a336706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_6fda629dbb691c7e031cf09855314e309efcf208f8cf72ba72a470629a336706->leave($__internal_6fda629dbb691c7e031cf09855314e309efcf208f8cf72ba72a470629a336706_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea94674a5dfe9d287d5f2e0ca16fc94950eb733982942546c598f94841966fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea94674a5dfe9d287d5f2e0ca16fc94950eb733982942546c598f94841966fca->enter($__internal_ea94674a5dfe9d287d5f2e0ca16fc94950eb733982942546c598f94841966fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_ea94674a5dfe9d287d5f2e0ca16fc94950eb733982942546c598f94841966fca->leave($__internal_ea94674a5dfe9d287d5f2e0ca16fc94950eb733982942546c598f94841966fca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d827f66b10140bade62820d6da723513e11c5b1fa1d74787deee3faf00f6e778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d827f66b10140bade62820d6da723513e11c5b1fa1d74787deee3faf00f6e778->enter($__internal_d827f66b10140bade62820d6da723513e11c5b1fa1d74787deee3faf00f6e778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_d827f66b10140bade62820d6da723513e11c5b1fa1d74787deee3faf00f6e778->leave($__internal_d827f66b10140bade62820d6da723513e11c5b1fa1d74787deee3faf00f6e778_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e24dc40260d9908b52fc2b3b40821a2f0ad1e81fa7693bd57d68d7157ceca217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24dc40260d9908b52fc2b3b40821a2f0ad1e81fa7693bd57d68d7157ceca217->enter($__internal_e24dc40260d9908b52fc2b3b40821a2f0ad1e81fa7693bd57d68d7157ceca217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_e24dc40260d9908b52fc2b3b40821a2f0ad1e81fa7693bd57d68d7157ceca217->leave($__internal_e24dc40260d9908b52fc2b3b40821a2f0ad1e81fa7693bd57d68d7157ceca217_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c02a9bf9bd542629ee4d861c99fadfae69ac42710d37f86c3442a22643d920e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02a9bf9bd542629ee4d861c99fadfae69ac42710d37f86c3442a22643d920e0->enter($__internal_c02a9bf9bd542629ee4d861c99fadfae69ac42710d37f86c3442a22643d920e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c02a9bf9bd542629ee4d861c99fadfae69ac42710d37f86c3442a22643d920e0->leave($__internal_c02a9bf9bd542629ee4d861c99fadfae69ac42710d37f86c3442a22643d920e0_prof);

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
