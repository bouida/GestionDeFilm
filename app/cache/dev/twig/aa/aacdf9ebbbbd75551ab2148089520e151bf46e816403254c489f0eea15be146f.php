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
        $__internal_1cba0716a190f70451ec3479d3c998d2eccc1706d35721eb1cf02368cdaa33e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cba0716a190f70451ec3479d3c998d2eccc1706d35721eb1cf02368cdaa33e6->enter($__internal_1cba0716a190f70451ec3479d3c998d2eccc1706d35721eb1cf02368cdaa33e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cba0716a190f70451ec3479d3c998d2eccc1706d35721eb1cf02368cdaa33e6->leave($__internal_1cba0716a190f70451ec3479d3c998d2eccc1706d35721eb1cf02368cdaa33e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8570ceda3319dcc1868bbebb4270fa75bb4ed5d67b18f867e57ffdc4ddaca08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8570ceda3319dcc1868bbebb4270fa75bb4ed5d67b18f867e57ffdc4ddaca08f->enter($__internal_8570ceda3319dcc1868bbebb4270fa75bb4ed5d67b18f867e57ffdc4ddaca08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8570ceda3319dcc1868bbebb4270fa75bb4ed5d67b18f867e57ffdc4ddaca08f->leave($__internal_8570ceda3319dcc1868bbebb4270fa75bb4ed5d67b18f867e57ffdc4ddaca08f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff93f73dae8191c3d7ba543ccb34b81ea1d2976074681e88d43decd41643d94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff93f73dae8191c3d7ba543ccb34b81ea1d2976074681e88d43decd41643d94d->enter($__internal_ff93f73dae8191c3d7ba543ccb34b81ea1d2976074681e88d43decd41643d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff93f73dae8191c3d7ba543ccb34b81ea1d2976074681e88d43decd41643d94d->leave($__internal_ff93f73dae8191c3d7ba543ccb34b81ea1d2976074681e88d43decd41643d94d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e1dd57b70730ba8ff01ab0e9517bc941b9778a69b3acbaf6f1b7e745bfee59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e1dd57b70730ba8ff01ab0e9517bc941b9778a69b3acbaf6f1b7e745bfee59->enter($__internal_74e1dd57b70730ba8ff01ab0e9517bc941b9778a69b3acbaf6f1b7e745bfee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_74e1dd57b70730ba8ff01ab0e9517bc941b9778a69b3acbaf6f1b7e745bfee59->leave($__internal_74e1dd57b70730ba8ff01ab0e9517bc941b9778a69b3acbaf6f1b7e745bfee59_prof);

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
