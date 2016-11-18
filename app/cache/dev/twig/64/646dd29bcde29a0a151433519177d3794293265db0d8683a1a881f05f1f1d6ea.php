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
        $__internal_040245e5cc6d4807514ee88ed7fd015eb1e6740e084e44d56709da5dc689be56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040245e5cc6d4807514ee88ed7fd015eb1e6740e084e44d56709da5dc689be56->enter($__internal_040245e5cc6d4807514ee88ed7fd015eb1e6740e084e44d56709da5dc689be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_040245e5cc6d4807514ee88ed7fd015eb1e6740e084e44d56709da5dc689be56->leave($__internal_040245e5cc6d4807514ee88ed7fd015eb1e6740e084e44d56709da5dc689be56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dbc3ee7d8becee953099d600e1d4b7d2b44d7fe5574e7933b4b2bde689b5cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbc3ee7d8becee953099d600e1d4b7d2b44d7fe5574e7933b4b2bde689b5cfe->enter($__internal_0dbc3ee7d8becee953099d600e1d4b7d2b44d7fe5574e7933b4b2bde689b5cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0dbc3ee7d8becee953099d600e1d4b7d2b44d7fe5574e7933b4b2bde689b5cfe->leave($__internal_0dbc3ee7d8becee953099d600e1d4b7d2b44d7fe5574e7933b4b2bde689b5cfe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dac9409ce05d0fbf17a5bb340261e16866a9a57fda050f21c99ca3acd3c79f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac9409ce05d0fbf17a5bb340261e16866a9a57fda050f21c99ca3acd3c79f77->enter($__internal_dac9409ce05d0fbf17a5bb340261e16866a9a57fda050f21c99ca3acd3c79f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dac9409ce05d0fbf17a5bb340261e16866a9a57fda050f21c99ca3acd3c79f77->leave($__internal_dac9409ce05d0fbf17a5bb340261e16866a9a57fda050f21c99ca3acd3c79f77_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_312ba71668f1aa8368ede0e20becaf6453756d152c4fde57f1133f625d208754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312ba71668f1aa8368ede0e20becaf6453756d152c4fde57f1133f625d208754->enter($__internal_312ba71668f1aa8368ede0e20becaf6453756d152c4fde57f1133f625d208754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_312ba71668f1aa8368ede0e20becaf6453756d152c4fde57f1133f625d208754->leave($__internal_312ba71668f1aa8368ede0e20becaf6453756d152c4fde57f1133f625d208754_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4820b05ccb3ac097651e561c17db9dc0880ab34225f1da5f6897d360549e7ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4820b05ccb3ac097651e561c17db9dc0880ab34225f1da5f6897d360549e7ae4->enter($__internal_4820b05ccb3ac097651e561c17db9dc0880ab34225f1da5f6897d360549e7ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4820b05ccb3ac097651e561c17db9dc0880ab34225f1da5f6897d360549e7ae4->leave($__internal_4820b05ccb3ac097651e561c17db9dc0880ab34225f1da5f6897d360549e7ae4_prof);

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
