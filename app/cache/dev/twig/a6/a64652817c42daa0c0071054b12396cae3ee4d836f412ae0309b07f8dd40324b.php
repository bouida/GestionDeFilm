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
        $__internal_7850e91d14e1955c87290e5d9486474fcb37358a308060e06eff620d1c9dc6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7850e91d14e1955c87290e5d9486474fcb37358a308060e06eff620d1c9dc6ea->enter($__internal_7850e91d14e1955c87290e5d9486474fcb37358a308060e06eff620d1c9dc6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7850e91d14e1955c87290e5d9486474fcb37358a308060e06eff620d1c9dc6ea->leave($__internal_7850e91d14e1955c87290e5d9486474fcb37358a308060e06eff620d1c9dc6ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d797cce96e0f1e46a8d1c2d078a4e66850b8841d43c251fb7510f2d8230e93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d797cce96e0f1e46a8d1c2d078a4e66850b8841d43c251fb7510f2d8230e93b->enter($__internal_9d797cce96e0f1e46a8d1c2d078a4e66850b8841d43c251fb7510f2d8230e93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9d797cce96e0f1e46a8d1c2d078a4e66850b8841d43c251fb7510f2d8230e93b->leave($__internal_9d797cce96e0f1e46a8d1c2d078a4e66850b8841d43c251fb7510f2d8230e93b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5eea4f48bbfa105a66c29290b0342eb9edb3ec1a5713e7acdf791c249236430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5eea4f48bbfa105a66c29290b0342eb9edb3ec1a5713e7acdf791c249236430->enter($__internal_d5eea4f48bbfa105a66c29290b0342eb9edb3ec1a5713e7acdf791c249236430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d5eea4f48bbfa105a66c29290b0342eb9edb3ec1a5713e7acdf791c249236430->leave($__internal_d5eea4f48bbfa105a66c29290b0342eb9edb3ec1a5713e7acdf791c249236430_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b596bbb2dc5bf0841caf035f0cb9521984e878c8754dcba69fee4d287deadde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b596bbb2dc5bf0841caf035f0cb9521984e878c8754dcba69fee4d287deadde->enter($__internal_6b596bbb2dc5bf0841caf035f0cb9521984e878c8754dcba69fee4d287deadde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b596bbb2dc5bf0841caf035f0cb9521984e878c8754dcba69fee4d287deadde->leave($__internal_6b596bbb2dc5bf0841caf035f0cb9521984e878c8754dcba69fee4d287deadde_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_99b1a92fab7cb299c9baa93c1ddc51981ebf71448724dc19b1352ec52bca7938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b1a92fab7cb299c9baa93c1ddc51981ebf71448724dc19b1352ec52bca7938->enter($__internal_99b1a92fab7cb299c9baa93c1ddc51981ebf71448724dc19b1352ec52bca7938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_99b1a92fab7cb299c9baa93c1ddc51981ebf71448724dc19b1352ec52bca7938->leave($__internal_99b1a92fab7cb299c9baa93c1ddc51981ebf71448724dc19b1352ec52bca7938_prof);

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
