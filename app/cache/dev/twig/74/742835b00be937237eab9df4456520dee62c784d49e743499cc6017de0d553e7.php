<?php

/* base.html.twig */
class __TwigTemplate_b2d01356c5ba4b2b0b9a4a7a401f3354b212bbbd59576610e8cdee6577a54282 extends Twig_Template
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
        $__internal_518480aea82525e1962a96921d9417e91f9f826a976e5d42617f9666088086d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518480aea82525e1962a96921d9417e91f9f826a976e5d42617f9666088086d1->enter($__internal_518480aea82525e1962a96921d9417e91f9f826a976e5d42617f9666088086d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_518480aea82525e1962a96921d9417e91f9f826a976e5d42617f9666088086d1->leave($__internal_518480aea82525e1962a96921d9417e91f9f826a976e5d42617f9666088086d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d21556a6e155e75f3027c964c74e9626fbe19bdfbd1d8c2066f54cb3dc38362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21556a6e155e75f3027c964c74e9626fbe19bdfbd1d8c2066f54cb3dc38362d->enter($__internal_d21556a6e155e75f3027c964c74e9626fbe19bdfbd1d8c2066f54cb3dc38362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d21556a6e155e75f3027c964c74e9626fbe19bdfbd1d8c2066f54cb3dc38362d->leave($__internal_d21556a6e155e75f3027c964c74e9626fbe19bdfbd1d8c2066f54cb3dc38362d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a58dc6843e84d7a30ec9727a3567559caf197d75ee05c374cd1456eca6e1065a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58dc6843e84d7a30ec9727a3567559caf197d75ee05c374cd1456eca6e1065a->enter($__internal_a58dc6843e84d7a30ec9727a3567559caf197d75ee05c374cd1456eca6e1065a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a58dc6843e84d7a30ec9727a3567559caf197d75ee05c374cd1456eca6e1065a->leave($__internal_a58dc6843e84d7a30ec9727a3567559caf197d75ee05c374cd1456eca6e1065a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e86af95a2adf9fc13a19f0376ce9b5c0c6144b72e19c64bcb6b0d1375edfd402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86af95a2adf9fc13a19f0376ce9b5c0c6144b72e19c64bcb6b0d1375edfd402->enter($__internal_e86af95a2adf9fc13a19f0376ce9b5c0c6144b72e19c64bcb6b0d1375edfd402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e86af95a2adf9fc13a19f0376ce9b5c0c6144b72e19c64bcb6b0d1375edfd402->leave($__internal_e86af95a2adf9fc13a19f0376ce9b5c0c6144b72e19c64bcb6b0d1375edfd402_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39338d6688094b513f0548127fc9f9acdeacc5b5ce77523b0669903cad5d8e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39338d6688094b513f0548127fc9f9acdeacc5b5ce77523b0669903cad5d8e6f->enter($__internal_39338d6688094b513f0548127fc9f9acdeacc5b5ce77523b0669903cad5d8e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_39338d6688094b513f0548127fc9f9acdeacc5b5ce77523b0669903cad5d8e6f->leave($__internal_39338d6688094b513f0548127fc9f9acdeacc5b5ce77523b0669903cad5d8e6f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\app\\Resources\\views\\base.html.twig");
    }
}
