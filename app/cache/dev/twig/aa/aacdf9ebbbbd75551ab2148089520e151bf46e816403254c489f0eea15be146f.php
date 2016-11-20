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
        $__internal_aefb73247acf7cbb316ae735eef4bfccf5918fbb1a0119b7f73b9a3cab4a2115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefb73247acf7cbb316ae735eef4bfccf5918fbb1a0119b7f73b9a3cab4a2115->enter($__internal_aefb73247acf7cbb316ae735eef4bfccf5918fbb1a0119b7f73b9a3cab4a2115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aefb73247acf7cbb316ae735eef4bfccf5918fbb1a0119b7f73b9a3cab4a2115->leave($__internal_aefb73247acf7cbb316ae735eef4bfccf5918fbb1a0119b7f73b9a3cab4a2115_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42f73436cadbfcd08d50aff9269dc0a553e69408cf3125d6afb9b8fff60994d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f73436cadbfcd08d50aff9269dc0a553e69408cf3125d6afb9b8fff60994d2->enter($__internal_42f73436cadbfcd08d50aff9269dc0a553e69408cf3125d6afb9b8fff60994d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_42f73436cadbfcd08d50aff9269dc0a553e69408cf3125d6afb9b8fff60994d2->leave($__internal_42f73436cadbfcd08d50aff9269dc0a553e69408cf3125d6afb9b8fff60994d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba3d9990369f652058928a585e62021f5edfdea418f5b4af9997955aa8081df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba3d9990369f652058928a585e62021f5edfdea418f5b4af9997955aa8081df->enter($__internal_3ba3d9990369f652058928a585e62021f5edfdea418f5b4af9997955aa8081df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ba3d9990369f652058928a585e62021f5edfdea418f5b4af9997955aa8081df->leave($__internal_3ba3d9990369f652058928a585e62021f5edfdea418f5b4af9997955aa8081df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_321f6c9eb0a436d6709a048cbf8ace2bab310ad06551cf9995e11a49cd83d9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321f6c9eb0a436d6709a048cbf8ace2bab310ad06551cf9995e11a49cd83d9f2->enter($__internal_321f6c9eb0a436d6709a048cbf8ace2bab310ad06551cf9995e11a49cd83d9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_321f6c9eb0a436d6709a048cbf8ace2bab310ad06551cf9995e11a49cd83d9f2->leave($__internal_321f6c9eb0a436d6709a048cbf8ace2bab310ad06551cf9995e11a49cd83d9f2_prof);

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
