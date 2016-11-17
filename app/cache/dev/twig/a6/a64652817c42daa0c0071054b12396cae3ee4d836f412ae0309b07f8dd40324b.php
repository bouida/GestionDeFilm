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
        $__internal_160091de48e21d97d6e94f88cc57c5d80f0ab865d2d0314e7a57334da5f32373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160091de48e21d97d6e94f88cc57c5d80f0ab865d2d0314e7a57334da5f32373->enter($__internal_160091de48e21d97d6e94f88cc57c5d80f0ab865d2d0314e7a57334da5f32373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160091de48e21d97d6e94f88cc57c5d80f0ab865d2d0314e7a57334da5f32373->leave($__internal_160091de48e21d97d6e94f88cc57c5d80f0ab865d2d0314e7a57334da5f32373_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_420342d66879fdb1973c6acb4260aecf6f0a3b849d2d9ebc7052fb369df60b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420342d66879fdb1973c6acb4260aecf6f0a3b849d2d9ebc7052fb369df60b2b->enter($__internal_420342d66879fdb1973c6acb4260aecf6f0a3b849d2d9ebc7052fb369df60b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_420342d66879fdb1973c6acb4260aecf6f0a3b849d2d9ebc7052fb369df60b2b->leave($__internal_420342d66879fdb1973c6acb4260aecf6f0a3b849d2d9ebc7052fb369df60b2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_768ce8da8f5711543f76a94267211dcac342ae0c5fe7817f289f26b98e59e12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768ce8da8f5711543f76a94267211dcac342ae0c5fe7817f289f26b98e59e12c->enter($__internal_768ce8da8f5711543f76a94267211dcac342ae0c5fe7817f289f26b98e59e12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_768ce8da8f5711543f76a94267211dcac342ae0c5fe7817f289f26b98e59e12c->leave($__internal_768ce8da8f5711543f76a94267211dcac342ae0c5fe7817f289f26b98e59e12c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_87476c032c99b0522c77f0b64722d56bec6f61bce7cdf974601f4550e6051cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87476c032c99b0522c77f0b64722d56bec6f61bce7cdf974601f4550e6051cfc->enter($__internal_87476c032c99b0522c77f0b64722d56bec6f61bce7cdf974601f4550e6051cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87476c032c99b0522c77f0b64722d56bec6f61bce7cdf974601f4550e6051cfc->leave($__internal_87476c032c99b0522c77f0b64722d56bec6f61bce7cdf974601f4550e6051cfc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f7501c6cccb0394b7acaf9c5cf43a8827530ce52642770fc6f2a3c8106c3415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7501c6cccb0394b7acaf9c5cf43a8827530ce52642770fc6f2a3c8106c3415->enter($__internal_8f7501c6cccb0394b7acaf9c5cf43a8827530ce52642770fc6f2a3c8106c3415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8f7501c6cccb0394b7acaf9c5cf43a8827530ce52642770fc6f2a3c8106c3415->leave($__internal_8f7501c6cccb0394b7acaf9c5cf43a8827530ce52642770fc6f2a3c8106c3415_prof);

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
