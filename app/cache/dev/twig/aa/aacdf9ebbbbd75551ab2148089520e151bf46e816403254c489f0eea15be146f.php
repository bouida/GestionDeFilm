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
        $__internal_0f4c1fbe7fd838a6bcd75e5779903a213a7f2cbd82283ed0e8de9a8411adadb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4c1fbe7fd838a6bcd75e5779903a213a7f2cbd82283ed0e8de9a8411adadb1->enter($__internal_0f4c1fbe7fd838a6bcd75e5779903a213a7f2cbd82283ed0e8de9a8411adadb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f4c1fbe7fd838a6bcd75e5779903a213a7f2cbd82283ed0e8de9a8411adadb1->leave($__internal_0f4c1fbe7fd838a6bcd75e5779903a213a7f2cbd82283ed0e8de9a8411adadb1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9a75b77e5f3c163c4ce96ecf503a484cdcacfe7ac960d4f57a35c14b2280688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a75b77e5f3c163c4ce96ecf503a484cdcacfe7ac960d4f57a35c14b2280688->enter($__internal_f9a75b77e5f3c163c4ce96ecf503a484cdcacfe7ac960d4f57a35c14b2280688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9a75b77e5f3c163c4ce96ecf503a484cdcacfe7ac960d4f57a35c14b2280688->leave($__internal_f9a75b77e5f3c163c4ce96ecf503a484cdcacfe7ac960d4f57a35c14b2280688_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c38e391f9b127e999aad154f5e507633826664ed8a7582e5fd3f3aa6c09aecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c38e391f9b127e999aad154f5e507633826664ed8a7582e5fd3f3aa6c09aecc->enter($__internal_9c38e391f9b127e999aad154f5e507633826664ed8a7582e5fd3f3aa6c09aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c38e391f9b127e999aad154f5e507633826664ed8a7582e5fd3f3aa6c09aecc->leave($__internal_9c38e391f9b127e999aad154f5e507633826664ed8a7582e5fd3f3aa6c09aecc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e81ad0a69bbb759b9ec90bc3005090fdc3a5956bcea4ac50a563aba3bec2454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e81ad0a69bbb759b9ec90bc3005090fdc3a5956bcea4ac50a563aba3bec2454->enter($__internal_2e81ad0a69bbb759b9ec90bc3005090fdc3a5956bcea4ac50a563aba3bec2454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2e81ad0a69bbb759b9ec90bc3005090fdc3a5956bcea4ac50a563aba3bec2454->leave($__internal_2e81ad0a69bbb759b9ec90bc3005090fdc3a5956bcea4ac50a563aba3bec2454_prof);

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
