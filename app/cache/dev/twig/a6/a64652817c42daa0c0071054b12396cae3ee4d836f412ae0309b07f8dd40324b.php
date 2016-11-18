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
        $__internal_2e0104ff126d95f5b2278b00d9f6887b35e534722de82f09f50c406f88f917c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0104ff126d95f5b2278b00d9f6887b35e534722de82f09f50c406f88f917c0->enter($__internal_2e0104ff126d95f5b2278b00d9f6887b35e534722de82f09f50c406f88f917c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e0104ff126d95f5b2278b00d9f6887b35e534722de82f09f50c406f88f917c0->leave($__internal_2e0104ff126d95f5b2278b00d9f6887b35e534722de82f09f50c406f88f917c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68041ef6259c743598707b86ee03984f58c94ebb99d02bfb78041b208bd5d2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68041ef6259c743598707b86ee03984f58c94ebb99d02bfb78041b208bd5d2c3->enter($__internal_68041ef6259c743598707b86ee03984f58c94ebb99d02bfb78041b208bd5d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_68041ef6259c743598707b86ee03984f58c94ebb99d02bfb78041b208bd5d2c3->leave($__internal_68041ef6259c743598707b86ee03984f58c94ebb99d02bfb78041b208bd5d2c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1c8a794c08319b8aea47a1d6e349fa24cc6e7865801e1081019cd8b48431d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c8a794c08319b8aea47a1d6e349fa24cc6e7865801e1081019cd8b48431d7b->enter($__internal_c1c8a794c08319b8aea47a1d6e349fa24cc6e7865801e1081019cd8b48431d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c1c8a794c08319b8aea47a1d6e349fa24cc6e7865801e1081019cd8b48431d7b->leave($__internal_c1c8a794c08319b8aea47a1d6e349fa24cc6e7865801e1081019cd8b48431d7b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ff3e434d8e94098b403344bb8823009a7e28131294e59eede869247c1b8fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ff3e434d8e94098b403344bb8823009a7e28131294e59eede869247c1b8fa1->enter($__internal_a8ff3e434d8e94098b403344bb8823009a7e28131294e59eede869247c1b8fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8ff3e434d8e94098b403344bb8823009a7e28131294e59eede869247c1b8fa1->leave($__internal_a8ff3e434d8e94098b403344bb8823009a7e28131294e59eede869247c1b8fa1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad0151b571129390947ca67a621c4dffae1f005e180745db3ce957df04063a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0151b571129390947ca67a621c4dffae1f005e180745db3ce957df04063a83->enter($__internal_ad0151b571129390947ca67a621c4dffae1f005e180745db3ce957df04063a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ad0151b571129390947ca67a621c4dffae1f005e180745db3ce957df04063a83->leave($__internal_ad0151b571129390947ca67a621c4dffae1f005e180745db3ce957df04063a83_prof);

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
