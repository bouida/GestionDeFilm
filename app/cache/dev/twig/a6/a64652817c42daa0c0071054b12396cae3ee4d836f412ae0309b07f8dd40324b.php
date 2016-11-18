<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8fa6dae95e1686b700fdc12a753bb7902d33a8091b39f8be785fe9b344e101dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1be8c956e528cefc8ec3ee50351efeceefdcb866fea4da733348909f5b56e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1be8c956e528cefc8ec3ee50351efeceefdcb866fea4da733348909f5b56e91->enter($__internal_e1be8c956e528cefc8ec3ee50351efeceefdcb866fea4da733348909f5b56e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1be8c956e528cefc8ec3ee50351efeceefdcb866fea4da733348909f5b56e91->leave($__internal_e1be8c956e528cefc8ec3ee50351efeceefdcb866fea4da733348909f5b56e91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89c232391a71f2377dbe4f161efc1dfbab301344b96044d8ae8f765e1f8cde8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c232391a71f2377dbe4f161efc1dfbab301344b96044d8ae8f765e1f8cde8f->enter($__internal_89c232391a71f2377dbe4f161efc1dfbab301344b96044d8ae8f765e1f8cde8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_89c232391a71f2377dbe4f161efc1dfbab301344b96044d8ae8f765e1f8cde8f->leave($__internal_89c232391a71f2377dbe4f161efc1dfbab301344b96044d8ae8f765e1f8cde8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ead32eca9cd11e71b397bb38a616611d59fb34eb5bfea7784d50b8e39363dc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead32eca9cd11e71b397bb38a616611d59fb34eb5bfea7784d50b8e39363dc60->enter($__internal_ead32eca9cd11e71b397bb38a616611d59fb34eb5bfea7784d50b8e39363dc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ead32eca9cd11e71b397bb38a616611d59fb34eb5bfea7784d50b8e39363dc60->leave($__internal_ead32eca9cd11e71b397bb38a616611d59fb34eb5bfea7784d50b8e39363dc60_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_32cf22e72ba14b63966ce56e3356950d7e50f05336010e1ecac65e84d739c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cf22e72ba14b63966ce56e3356950d7e50f05336010e1ecac65e84d739c774->enter($__internal_32cf22e72ba14b63966ce56e3356950d7e50f05336010e1ecac65e84d739c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_32cf22e72ba14b63966ce56e3356950d7e50f05336010e1ecac65e84d739c774->leave($__internal_32cf22e72ba14b63966ce56e3356950d7e50f05336010e1ecac65e84d739c774_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0b528f6b6ece7f452866314f64e520b9c7e588a126091edefe7d39635282cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b528f6b6ece7f452866314f64e520b9c7e588a126091edefe7d39635282cb7->enter($__internal_a0b528f6b6ece7f452866314f64e520b9c7e588a126091edefe7d39635282cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a0b528f6b6ece7f452866314f64e520b9c7e588a126091edefe7d39635282cb7->leave($__internal_a0b528f6b6ece7f452866314f64e520b9c7e588a126091edefe7d39635282cb7_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
