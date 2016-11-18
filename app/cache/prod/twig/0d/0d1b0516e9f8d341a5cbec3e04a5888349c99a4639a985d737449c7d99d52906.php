<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e1ecbbea0d58295fc27fcb2e2a4ecc72315018a39f7c8311dcc7654e5d84d9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6dc7888e4727f2159d45682430a9b79f98165c712ccc95b9ee7fc53d44059a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc7888e4727f2159d45682430a9b79f98165c712ccc95b9ee7fc53d44059a89->enter($__internal_6dc7888e4727f2159d45682430a9b79f98165c712ccc95b9ee7fc53d44059a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc7888e4727f2159d45682430a9b79f98165c712ccc95b9ee7fc53d44059a89->leave($__internal_6dc7888e4727f2159d45682430a9b79f98165c712ccc95b9ee7fc53d44059a89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_762d3db945b11dad9051001a9e855fc84649a20a39d3c543a7ed0be82f184b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762d3db945b11dad9051001a9e855fc84649a20a39d3c543a7ed0be82f184b67->enter($__internal_762d3db945b11dad9051001a9e855fc84649a20a39d3c543a7ed0be82f184b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_762d3db945b11dad9051001a9e855fc84649a20a39d3c543a7ed0be82f184b67->leave($__internal_762d3db945b11dad9051001a9e855fc84649a20a39d3c543a7ed0be82f184b67_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8207956aa1c3e78fd495cca5a8cb9eea1d0300ddfe8fbfd364a4396a4985176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8207956aa1c3e78fd495cca5a8cb9eea1d0300ddfe8fbfd364a4396a4985176->enter($__internal_d8207956aa1c3e78fd495cca5a8cb9eea1d0300ddfe8fbfd364a4396a4985176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8207956aa1c3e78fd495cca5a8cb9eea1d0300ddfe8fbfd364a4396a4985176->leave($__internal_d8207956aa1c3e78fd495cca5a8cb9eea1d0300ddfe8fbfd364a4396a4985176_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a46bf360d77388fe6ac01a0cd2f89ba7016ce30b221604dc55396347bc9ea61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a46bf360d77388fe6ac01a0cd2f89ba7016ce30b221604dc55396347bc9ea61->enter($__internal_8a46bf360d77388fe6ac01a0cd2f89ba7016ce30b221604dc55396347bc9ea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8a46bf360d77388fe6ac01a0cd2f89ba7016ce30b221604dc55396347bc9ea61->leave($__internal_8a46bf360d77388fe6ac01a0cd2f89ba7016ce30b221604dc55396347bc9ea61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
