<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f64048bc8766c7c661b56e7117d90d9266176e666441034bfe60f0d9d6def85b extends Twig_Template
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
        $__internal_227a79d3a5b21edb5d3ca6a893b00a8cd2246ec38ad07d5d984c11058ecf4748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227a79d3a5b21edb5d3ca6a893b00a8cd2246ec38ad07d5d984c11058ecf4748->enter($__internal_227a79d3a5b21edb5d3ca6a893b00a8cd2246ec38ad07d5d984c11058ecf4748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227a79d3a5b21edb5d3ca6a893b00a8cd2246ec38ad07d5d984c11058ecf4748->leave($__internal_227a79d3a5b21edb5d3ca6a893b00a8cd2246ec38ad07d5d984c11058ecf4748_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c39b927853a28a6906dec4fcad8556f4ecbc16fbf73fedcd91883920079b7415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39b927853a28a6906dec4fcad8556f4ecbc16fbf73fedcd91883920079b7415->enter($__internal_c39b927853a28a6906dec4fcad8556f4ecbc16fbf73fedcd91883920079b7415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c39b927853a28a6906dec4fcad8556f4ecbc16fbf73fedcd91883920079b7415->leave($__internal_c39b927853a28a6906dec4fcad8556f4ecbc16fbf73fedcd91883920079b7415_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7882420caffcf794fa4fcc8a6e4c8eec0cb0f2c2efb67d3b690b821e4d5d4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7882420caffcf794fa4fcc8a6e4c8eec0cb0f2c2efb67d3b690b821e4d5d4cc->enter($__internal_e7882420caffcf794fa4fcc8a6e4c8eec0cb0f2c2efb67d3b690b821e4d5d4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7882420caffcf794fa4fcc8a6e4c8eec0cb0f2c2efb67d3b690b821e4d5d4cc->leave($__internal_e7882420caffcf794fa4fcc8a6e4c8eec0cb0f2c2efb67d3b690b821e4d5d4cc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ff0aed27e3cf6a00fb2ae0261a293fe471b9a9237af29a6ab02f96679183576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff0aed27e3cf6a00fb2ae0261a293fe471b9a9237af29a6ab02f96679183576->enter($__internal_5ff0aed27e3cf6a00fb2ae0261a293fe471b9a9237af29a6ab02f96679183576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5ff0aed27e3cf6a00fb2ae0261a293fe471b9a9237af29a6ab02f96679183576->leave($__internal_5ff0aed27e3cf6a00fb2ae0261a293fe471b9a9237af29a6ab02f96679183576_prof);

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
