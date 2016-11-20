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
        $__internal_3dc9e60703ece35b9f699c128dca31c0d2886e1b85fa3f542bc886128b88f17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc9e60703ece35b9f699c128dca31c0d2886e1b85fa3f542bc886128b88f17a->enter($__internal_3dc9e60703ece35b9f699c128dca31c0d2886e1b85fa3f542bc886128b88f17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc9e60703ece35b9f699c128dca31c0d2886e1b85fa3f542bc886128b88f17a->leave($__internal_3dc9e60703ece35b9f699c128dca31c0d2886e1b85fa3f542bc886128b88f17a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b747f45c6e90e0696cb4f692bd475f22c8a3774dccb2e386ea31bcae09871e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b747f45c6e90e0696cb4f692bd475f22c8a3774dccb2e386ea31bcae09871e4->enter($__internal_6b747f45c6e90e0696cb4f692bd475f22c8a3774dccb2e386ea31bcae09871e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b747f45c6e90e0696cb4f692bd475f22c8a3774dccb2e386ea31bcae09871e4->leave($__internal_6b747f45c6e90e0696cb4f692bd475f22c8a3774dccb2e386ea31bcae09871e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94283742f3d2b088167cd5b04b1fa950edce02bfc53b5b16b82196a2c1f23fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94283742f3d2b088167cd5b04b1fa950edce02bfc53b5b16b82196a2c1f23fc3->enter($__internal_94283742f3d2b088167cd5b04b1fa950edce02bfc53b5b16b82196a2c1f23fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94283742f3d2b088167cd5b04b1fa950edce02bfc53b5b16b82196a2c1f23fc3->leave($__internal_94283742f3d2b088167cd5b04b1fa950edce02bfc53b5b16b82196a2c1f23fc3_prof);

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
