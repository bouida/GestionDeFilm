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
        $__internal_17eae3ffd442896daf3575658cf9c3da7a375a5d17f64954652fa0eedb584260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17eae3ffd442896daf3575658cf9c3da7a375a5d17f64954652fa0eedb584260->enter($__internal_17eae3ffd442896daf3575658cf9c3da7a375a5d17f64954652fa0eedb584260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17eae3ffd442896daf3575658cf9c3da7a375a5d17f64954652fa0eedb584260->leave($__internal_17eae3ffd442896daf3575658cf9c3da7a375a5d17f64954652fa0eedb584260_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ddb143390e94d159b7e2cfc64326d05ecf153fb76c2c57e0088cd64a6335b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddb143390e94d159b7e2cfc64326d05ecf153fb76c2c57e0088cd64a6335b83->enter($__internal_7ddb143390e94d159b7e2cfc64326d05ecf153fb76c2c57e0088cd64a6335b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7ddb143390e94d159b7e2cfc64326d05ecf153fb76c2c57e0088cd64a6335b83->leave($__internal_7ddb143390e94d159b7e2cfc64326d05ecf153fb76c2c57e0088cd64a6335b83_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0194b0a5df25bd546347ff8a7cc6bb7173d7ebf2ff62c50042629ce833e00a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0194b0a5df25bd546347ff8a7cc6bb7173d7ebf2ff62c50042629ce833e00a5b->enter($__internal_0194b0a5df25bd546347ff8a7cc6bb7173d7ebf2ff62c50042629ce833e00a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0194b0a5df25bd546347ff8a7cc6bb7173d7ebf2ff62c50042629ce833e00a5b->leave($__internal_0194b0a5df25bd546347ff8a7cc6bb7173d7ebf2ff62c50042629ce833e00a5b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f35d609bc6a23c2f26c904b79e00e6cd42f91ec81af1069f171fb6029953c352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35d609bc6a23c2f26c904b79e00e6cd42f91ec81af1069f171fb6029953c352->enter($__internal_f35d609bc6a23c2f26c904b79e00e6cd42f91ec81af1069f171fb6029953c352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f35d609bc6a23c2f26c904b79e00e6cd42f91ec81af1069f171fb6029953c352->leave($__internal_f35d609bc6a23c2f26c904b79e00e6cd42f91ec81af1069f171fb6029953c352_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c2f460562805787dde87a5ff3400b0a2724322f58b72c89aade667116967f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2f460562805787dde87a5ff3400b0a2724322f58b72c89aade667116967f08->enter($__internal_6c2f460562805787dde87a5ff3400b0a2724322f58b72c89aade667116967f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6c2f460562805787dde87a5ff3400b0a2724322f58b72c89aade667116967f08->leave($__internal_6c2f460562805787dde87a5ff3400b0a2724322f58b72c89aade667116967f08_prof);

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
