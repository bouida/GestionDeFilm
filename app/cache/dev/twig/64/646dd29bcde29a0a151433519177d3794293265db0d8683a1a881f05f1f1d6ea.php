<?php

/* ::base.html.twig */
class __TwigTemplate_00d081103bd2166006af923daf6f053112fc2ade6cee9f15420ce6750855dd1d extends Twig_Template
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
        $__internal_fa360db831a3f2119153927a8995dde61ad6f3b51845b62417573241ef1a858d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa360db831a3f2119153927a8995dde61ad6f3b51845b62417573241ef1a858d->enter($__internal_fa360db831a3f2119153927a8995dde61ad6f3b51845b62417573241ef1a858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fa360db831a3f2119153927a8995dde61ad6f3b51845b62417573241ef1a858d->leave($__internal_fa360db831a3f2119153927a8995dde61ad6f3b51845b62417573241ef1a858d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0795b3ad25f18820b8fdf13f4ebb133525cb4a6f3fe3e656237e3117fcf09e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0795b3ad25f18820b8fdf13f4ebb133525cb4a6f3fe3e656237e3117fcf09e7->enter($__internal_e0795b3ad25f18820b8fdf13f4ebb133525cb4a6f3fe3e656237e3117fcf09e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e0795b3ad25f18820b8fdf13f4ebb133525cb4a6f3fe3e656237e3117fcf09e7->leave($__internal_e0795b3ad25f18820b8fdf13f4ebb133525cb4a6f3fe3e656237e3117fcf09e7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42d30f10a824a34dcad77c779ff3094ad0ee54ab6ff77e1356c8aa63293fafcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d30f10a824a34dcad77c779ff3094ad0ee54ab6ff77e1356c8aa63293fafcf->enter($__internal_42d30f10a824a34dcad77c779ff3094ad0ee54ab6ff77e1356c8aa63293fafcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42d30f10a824a34dcad77c779ff3094ad0ee54ab6ff77e1356c8aa63293fafcf->leave($__internal_42d30f10a824a34dcad77c779ff3094ad0ee54ab6ff77e1356c8aa63293fafcf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f26c0e438d933afe112a72e8d273bb4ade119a4098837cd9afca07262f21ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f26c0e438d933afe112a72e8d273bb4ade119a4098837cd9afca07262f21ce->enter($__internal_c3f26c0e438d933afe112a72e8d273bb4ade119a4098837cd9afca07262f21ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3f26c0e438d933afe112a72e8d273bb4ade119a4098837cd9afca07262f21ce->leave($__internal_c3f26c0e438d933afe112a72e8d273bb4ade119a4098837cd9afca07262f21ce_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e18eece477181ca8265abb24ef750c20bdc050622a8a841549e5b57e93aa2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e18eece477181ca8265abb24ef750c20bdc050622a8a841549e5b57e93aa2de->enter($__internal_5e18eece477181ca8265abb24ef750c20bdc050622a8a841549e5b57e93aa2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e18eece477181ca8265abb24ef750c20bdc050622a8a841549e5b57e93aa2de->leave($__internal_5e18eece477181ca8265abb24ef750c20bdc050622a8a841549e5b57e93aa2de_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\app/Resources\\views/base.html.twig");
    }
}
