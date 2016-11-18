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
        $__internal_0195734a0d73e7ab43301aac0bc31f387183113ac07b22233d25e2180792d47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0195734a0d73e7ab43301aac0bc31f387183113ac07b22233d25e2180792d47c->enter($__internal_0195734a0d73e7ab43301aac0bc31f387183113ac07b22233d25e2180792d47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0195734a0d73e7ab43301aac0bc31f387183113ac07b22233d25e2180792d47c->leave($__internal_0195734a0d73e7ab43301aac0bc31f387183113ac07b22233d25e2180792d47c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51f279b5acc2d1aa1e1d7facc7ce59035916cff00aa4b09a7f667bdfa1017497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f279b5acc2d1aa1e1d7facc7ce59035916cff00aa4b09a7f667bdfa1017497->enter($__internal_51f279b5acc2d1aa1e1d7facc7ce59035916cff00aa4b09a7f667bdfa1017497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_51f279b5acc2d1aa1e1d7facc7ce59035916cff00aa4b09a7f667bdfa1017497->leave($__internal_51f279b5acc2d1aa1e1d7facc7ce59035916cff00aa4b09a7f667bdfa1017497_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b32b07d5ad3137cbb235d46d7446a7439fa9dd5cb95a09759d84bc2e0701516b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32b07d5ad3137cbb235d46d7446a7439fa9dd5cb95a09759d84bc2e0701516b->enter($__internal_b32b07d5ad3137cbb235d46d7446a7439fa9dd5cb95a09759d84bc2e0701516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b32b07d5ad3137cbb235d46d7446a7439fa9dd5cb95a09759d84bc2e0701516b->leave($__internal_b32b07d5ad3137cbb235d46d7446a7439fa9dd5cb95a09759d84bc2e0701516b_prof);

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
