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
        $__internal_bda1eca399001b45e76ab80db2528bbc86adc23af08615c8740bebb542b3708d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda1eca399001b45e76ab80db2528bbc86adc23af08615c8740bebb542b3708d->enter($__internal_bda1eca399001b45e76ab80db2528bbc86adc23af08615c8740bebb542b3708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda1eca399001b45e76ab80db2528bbc86adc23af08615c8740bebb542b3708d->leave($__internal_bda1eca399001b45e76ab80db2528bbc86adc23af08615c8740bebb542b3708d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a4cf7a7a9f77eb125799a5f5c268851e8ae32fb0328030fa8ca8d810e5f858a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4cf7a7a9f77eb125799a5f5c268851e8ae32fb0328030fa8ca8d810e5f858a->enter($__internal_1a4cf7a7a9f77eb125799a5f5c268851e8ae32fb0328030fa8ca8d810e5f858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a4cf7a7a9f77eb125799a5f5c268851e8ae32fb0328030fa8ca8d810e5f858a->leave($__internal_1a4cf7a7a9f77eb125799a5f5c268851e8ae32fb0328030fa8ca8d810e5f858a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a75f55ccd0c1760205cbaa0981209706e922db075b44194d870ed0ac947d973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a75f55ccd0c1760205cbaa0981209706e922db075b44194d870ed0ac947d973->enter($__internal_3a75f55ccd0c1760205cbaa0981209706e922db075b44194d870ed0ac947d973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a75f55ccd0c1760205cbaa0981209706e922db075b44194d870ed0ac947d973->leave($__internal_3a75f55ccd0c1760205cbaa0981209706e922db075b44194d870ed0ac947d973_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b47edeedd57ccc62564d95e8197d362d16df5a0301aa3c3d39dc2e0907c6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b47edeedd57ccc62564d95e8197d362d16df5a0301aa3c3d39dc2e0907c6e2->enter($__internal_36b47edeedd57ccc62564d95e8197d362d16df5a0301aa3c3d39dc2e0907c6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_36b47edeedd57ccc62564d95e8197d362d16df5a0301aa3c3d39dc2e0907c6e2->leave($__internal_36b47edeedd57ccc62564d95e8197d362d16df5a0301aa3c3d39dc2e0907c6e2_prof);

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
