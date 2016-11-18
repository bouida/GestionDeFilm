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
        $__internal_d6f52797c53d32d84694c6bee8661babdfcc4f0bb9833ae9c485d71c811b85da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f52797c53d32d84694c6bee8661babdfcc4f0bb9833ae9c485d71c811b85da->enter($__internal_d6f52797c53d32d84694c6bee8661babdfcc4f0bb9833ae9c485d71c811b85da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f52797c53d32d84694c6bee8661babdfcc4f0bb9833ae9c485d71c811b85da->leave($__internal_d6f52797c53d32d84694c6bee8661babdfcc4f0bb9833ae9c485d71c811b85da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db5b8bb3ce5f95dca89ac9ed0e35fb699411a666cf739807e8502e79314ac4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5b8bb3ce5f95dca89ac9ed0e35fb699411a666cf739807e8502e79314ac4f9->enter($__internal_db5b8bb3ce5f95dca89ac9ed0e35fb699411a666cf739807e8502e79314ac4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_db5b8bb3ce5f95dca89ac9ed0e35fb699411a666cf739807e8502e79314ac4f9->leave($__internal_db5b8bb3ce5f95dca89ac9ed0e35fb699411a666cf739807e8502e79314ac4f9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_602202373635707ffaf06c7e3ef04a75826430125c6fb00449af4c697dbb05ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602202373635707ffaf06c7e3ef04a75826430125c6fb00449af4c697dbb05ca->enter($__internal_602202373635707ffaf06c7e3ef04a75826430125c6fb00449af4c697dbb05ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_602202373635707ffaf06c7e3ef04a75826430125c6fb00449af4c697dbb05ca->leave($__internal_602202373635707ffaf06c7e3ef04a75826430125c6fb00449af4c697dbb05ca_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_153c4ec5d7c96d4bf400b4586e56bcb435c960663e9f396e55969f7c32c60f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153c4ec5d7c96d4bf400b4586e56bcb435c960663e9f396e55969f7c32c60f95->enter($__internal_153c4ec5d7c96d4bf400b4586e56bcb435c960663e9f396e55969f7c32c60f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_153c4ec5d7c96d4bf400b4586e56bcb435c960663e9f396e55969f7c32c60f95->leave($__internal_153c4ec5d7c96d4bf400b4586e56bcb435c960663e9f396e55969f7c32c60f95_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a32b921ad04e67cb4bf62fe23696ba2575d5617eb78945444059f3a7520f77a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32b921ad04e67cb4bf62fe23696ba2575d5617eb78945444059f3a7520f77a3->enter($__internal_a32b921ad04e67cb4bf62fe23696ba2575d5617eb78945444059f3a7520f77a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a32b921ad04e67cb4bf62fe23696ba2575d5617eb78945444059f3a7520f77a3->leave($__internal_a32b921ad04e67cb4bf62fe23696ba2575d5617eb78945444059f3a7520f77a3_prof);

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
