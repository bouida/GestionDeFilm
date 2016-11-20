<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_43ad8dfafa97759f83e08347d00ee16658adb45289b73e2d3b595978d23afae4 extends Twig_Template
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
        $__internal_368cd009f43d8c57e04671461d3738e7ee3d9e7aff434ecb06130e6c3fbaa391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368cd009f43d8c57e04671461d3738e7ee3d9e7aff434ecb06130e6c3fbaa391->enter($__internal_368cd009f43d8c57e04671461d3738e7ee3d9e7aff434ecb06130e6c3fbaa391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368cd009f43d8c57e04671461d3738e7ee3d9e7aff434ecb06130e6c3fbaa391->leave($__internal_368cd009f43d8c57e04671461d3738e7ee3d9e7aff434ecb06130e6c3fbaa391_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65e5b2f2b10903fa03f8813ca98d86caf799cb81cf28020de430183716a42ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e5b2f2b10903fa03f8813ca98d86caf799cb81cf28020de430183716a42ed6->enter($__internal_65e5b2f2b10903fa03f8813ca98d86caf799cb81cf28020de430183716a42ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_65e5b2f2b10903fa03f8813ca98d86caf799cb81cf28020de430183716a42ed6->leave($__internal_65e5b2f2b10903fa03f8813ca98d86caf799cb81cf28020de430183716a42ed6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64093d6d904d17822daacdcc86e714fb30e82db73084903cbef5c4bbb8ed63c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64093d6d904d17822daacdcc86e714fb30e82db73084903cbef5c4bbb8ed63c4->enter($__internal_64093d6d904d17822daacdcc86e714fb30e82db73084903cbef5c4bbb8ed63c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64093d6d904d17822daacdcc86e714fb30e82db73084903cbef5c4bbb8ed63c4->leave($__internal_64093d6d904d17822daacdcc86e714fb30e82db73084903cbef5c4bbb8ed63c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecdfaeee8d58ca7f3e7016e964ba93c36f46155ab5558449dd279cbe7b70373e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdfaeee8d58ca7f3e7016e964ba93c36f46155ab5558449dd279cbe7b70373e->enter($__internal_ecdfaeee8d58ca7f3e7016e964ba93c36f46155ab5558449dd279cbe7b70373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ecdfaeee8d58ca7f3e7016e964ba93c36f46155ab5558449dd279cbe7b70373e->leave($__internal_ecdfaeee8d58ca7f3e7016e964ba93c36f46155ab5558449dd279cbe7b70373e_prof);

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
