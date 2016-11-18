<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1d93a3eeca4cb0eb691d07d7d66fa71249f2eb3d847c8164e7c7fb805451111b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a17069d9473d07c0a4c51112e4411a90db85ed6184223ada907cfa19a6ef13ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17069d9473d07c0a4c51112e4411a90db85ed6184223ada907cfa19a6ef13ae->enter($__internal_a17069d9473d07c0a4c51112e4411a90db85ed6184223ada907cfa19a6ef13ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17069d9473d07c0a4c51112e4411a90db85ed6184223ada907cfa19a6ef13ae->leave($__internal_a17069d9473d07c0a4c51112e4411a90db85ed6184223ada907cfa19a6ef13ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_029fa1447ec2ad08250bca0dad8a0fcf7fe1ef107377cfbc657a7c090018c6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029fa1447ec2ad08250bca0dad8a0fcf7fe1ef107377cfbc657a7c090018c6e0->enter($__internal_029fa1447ec2ad08250bca0dad8a0fcf7fe1ef107377cfbc657a7c090018c6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_029fa1447ec2ad08250bca0dad8a0fcf7fe1ef107377cfbc657a7c090018c6e0->leave($__internal_029fa1447ec2ad08250bca0dad8a0fcf7fe1ef107377cfbc657a7c090018c6e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ac1103198dbefe0bbe42c78f1065a3f98da3077dcfe84c323574642f004e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ac1103198dbefe0bbe42c78f1065a3f98da3077dcfe84c323574642f004e24->enter($__internal_04ac1103198dbefe0bbe42c78f1065a3f98da3077dcfe84c323574642f004e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_04ac1103198dbefe0bbe42c78f1065a3f98da3077dcfe84c323574642f004e24->leave($__internal_04ac1103198dbefe0bbe42c78f1065a3f98da3077dcfe84c323574642f004e24_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
