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
        $__internal_dd66a1a496800d68e96b7c0cf6b41fc5a34058bd3c2a299b741002136e46d6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd66a1a496800d68e96b7c0cf6b41fc5a34058bd3c2a299b741002136e46d6bf->enter($__internal_dd66a1a496800d68e96b7c0cf6b41fc5a34058bd3c2a299b741002136e46d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd66a1a496800d68e96b7c0cf6b41fc5a34058bd3c2a299b741002136e46d6bf->leave($__internal_dd66a1a496800d68e96b7c0cf6b41fc5a34058bd3c2a299b741002136e46d6bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef5c7fdaaebe6b0cd44408498be7fc2bba9e54dcc3472a14942bef2ed50b81b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5c7fdaaebe6b0cd44408498be7fc2bba9e54dcc3472a14942bef2ed50b81b7->enter($__internal_ef5c7fdaaebe6b0cd44408498be7fc2bba9e54dcc3472a14942bef2ed50b81b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef5c7fdaaebe6b0cd44408498be7fc2bba9e54dcc3472a14942bef2ed50b81b7->leave($__internal_ef5c7fdaaebe6b0cd44408498be7fc2bba9e54dcc3472a14942bef2ed50b81b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bedabd891b8354625064a2cb3b9b3f60c97f92da7642ed0add076cb27764bb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedabd891b8354625064a2cb3b9b3f60c97f92da7642ed0add076cb27764bb42->enter($__internal_bedabd891b8354625064a2cb3b9b3f60c97f92da7642ed0add076cb27764bb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bedabd891b8354625064a2cb3b9b3f60c97f92da7642ed0add076cb27764bb42->leave($__internal_bedabd891b8354625064a2cb3b9b3f60c97f92da7642ed0add076cb27764bb42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82671f7bbd5b3e5d305c41db45d729b7656dc7d0c648ea4cadab9d6fc3ee8fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82671f7bbd5b3e5d305c41db45d729b7656dc7d0c648ea4cadab9d6fc3ee8fda->enter($__internal_82671f7bbd5b3e5d305c41db45d729b7656dc7d0c648ea4cadab9d6fc3ee8fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_82671f7bbd5b3e5d305c41db45d729b7656dc7d0c648ea4cadab9d6fc3ee8fda->leave($__internal_82671f7bbd5b3e5d305c41db45d729b7656dc7d0c648ea4cadab9d6fc3ee8fda_prof);

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
