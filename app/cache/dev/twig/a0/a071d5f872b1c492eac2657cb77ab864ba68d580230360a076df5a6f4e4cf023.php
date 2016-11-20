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
        $__internal_479c47dd244100f1d9d4c5e2f1eb7063e42a4a612b1759eb5908c63df657ce6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479c47dd244100f1d9d4c5e2f1eb7063e42a4a612b1759eb5908c63df657ce6f->enter($__internal_479c47dd244100f1d9d4c5e2f1eb7063e42a4a612b1759eb5908c63df657ce6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_479c47dd244100f1d9d4c5e2f1eb7063e42a4a612b1759eb5908c63df657ce6f->leave($__internal_479c47dd244100f1d9d4c5e2f1eb7063e42a4a612b1759eb5908c63df657ce6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4faa81a7f30cfcf46955978c0344c3b2240cd0afaf59f7c6524392265297d23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faa81a7f30cfcf46955978c0344c3b2240cd0afaf59f7c6524392265297d23c->enter($__internal_4faa81a7f30cfcf46955978c0344c3b2240cd0afaf59f7c6524392265297d23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4faa81a7f30cfcf46955978c0344c3b2240cd0afaf59f7c6524392265297d23c->leave($__internal_4faa81a7f30cfcf46955978c0344c3b2240cd0afaf59f7c6524392265297d23c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79a9e97bd5fff057a18511f920991b41bd5436dd803e17fa2ecb082349e52416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a9e97bd5fff057a18511f920991b41bd5436dd803e17fa2ecb082349e52416->enter($__internal_79a9e97bd5fff057a18511f920991b41bd5436dd803e17fa2ecb082349e52416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79a9e97bd5fff057a18511f920991b41bd5436dd803e17fa2ecb082349e52416->leave($__internal_79a9e97bd5fff057a18511f920991b41bd5436dd803e17fa2ecb082349e52416_prof);

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
