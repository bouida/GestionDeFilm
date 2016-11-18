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
        $__internal_28ec6f9ccd92535d7c115944f5338f93f114848687ce9645e956c72f40f0fd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec6f9ccd92535d7c115944f5338f93f114848687ce9645e956c72f40f0fd23->enter($__internal_28ec6f9ccd92535d7c115944f5338f93f114848687ce9645e956c72f40f0fd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_28ec6f9ccd92535d7c115944f5338f93f114848687ce9645e956c72f40f0fd23->leave($__internal_28ec6f9ccd92535d7c115944f5338f93f114848687ce9645e956c72f40f0fd23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3645a76b4ff42c5a0e7319ad9e7c8f4005083683a16454caeaab67bf73614c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3645a76b4ff42c5a0e7319ad9e7c8f4005083683a16454caeaab67bf73614c1->enter($__internal_c3645a76b4ff42c5a0e7319ad9e7c8f4005083683a16454caeaab67bf73614c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3645a76b4ff42c5a0e7319ad9e7c8f4005083683a16454caeaab67bf73614c1->leave($__internal_c3645a76b4ff42c5a0e7319ad9e7c8f4005083683a16454caeaab67bf73614c1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63a1ea2e167d5d92ca4afd54706ef83af7785ffdd22e5b6dcc7a6ac5c8f498ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a1ea2e167d5d92ca4afd54706ef83af7785ffdd22e5b6dcc7a6ac5c8f498ad->enter($__internal_63a1ea2e167d5d92ca4afd54706ef83af7785ffdd22e5b6dcc7a6ac5c8f498ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_63a1ea2e167d5d92ca4afd54706ef83af7785ffdd22e5b6dcc7a6ac5c8f498ad->leave($__internal_63a1ea2e167d5d92ca4afd54706ef83af7785ffdd22e5b6dcc7a6ac5c8f498ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f1dff9b41728a23df4aacd6e02dce5172b5a9dd8ff40e53a6140671190da41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f1dff9b41728a23df4aacd6e02dce5172b5a9dd8ff40e53a6140671190da41->enter($__internal_d9f1dff9b41728a23df4aacd6e02dce5172b5a9dd8ff40e53a6140671190da41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9f1dff9b41728a23df4aacd6e02dce5172b5a9dd8ff40e53a6140671190da41->leave($__internal_d9f1dff9b41728a23df4aacd6e02dce5172b5a9dd8ff40e53a6140671190da41_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77229fed525ecd0c5a7c6e5fd9139d2d7000a328445e874cc1d6018171ced008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77229fed525ecd0c5a7c6e5fd9139d2d7000a328445e874cc1d6018171ced008->enter($__internal_77229fed525ecd0c5a7c6e5fd9139d2d7000a328445e874cc1d6018171ced008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_77229fed525ecd0c5a7c6e5fd9139d2d7000a328445e874cc1d6018171ced008->leave($__internal_77229fed525ecd0c5a7c6e5fd9139d2d7000a328445e874cc1d6018171ced008_prof);

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
