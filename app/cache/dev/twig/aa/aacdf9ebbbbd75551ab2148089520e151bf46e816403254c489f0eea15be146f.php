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
        $__internal_78f4a9a531406dd5a1b06e493098504cc2f72a2391686a6f1012a971fc5cbf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f4a9a531406dd5a1b06e493098504cc2f72a2391686a6f1012a971fc5cbf01->enter($__internal_78f4a9a531406dd5a1b06e493098504cc2f72a2391686a6f1012a971fc5cbf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f4a9a531406dd5a1b06e493098504cc2f72a2391686a6f1012a971fc5cbf01->leave($__internal_78f4a9a531406dd5a1b06e493098504cc2f72a2391686a6f1012a971fc5cbf01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88479e2fbd651802b238ff2d61a61dac62fa3c29af778af595aedcabb120a4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88479e2fbd651802b238ff2d61a61dac62fa3c29af778af595aedcabb120a4bb->enter($__internal_88479e2fbd651802b238ff2d61a61dac62fa3c29af778af595aedcabb120a4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_88479e2fbd651802b238ff2d61a61dac62fa3c29af778af595aedcabb120a4bb->leave($__internal_88479e2fbd651802b238ff2d61a61dac62fa3c29af778af595aedcabb120a4bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7af164efb1cfd3e9a27c7d2703d983c3e99b91f85c139a2480318232ac6e3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7af164efb1cfd3e9a27c7d2703d983c3e99b91f85c139a2480318232ac6e3cd->enter($__internal_f7af164efb1cfd3e9a27c7d2703d983c3e99b91f85c139a2480318232ac6e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7af164efb1cfd3e9a27c7d2703d983c3e99b91f85c139a2480318232ac6e3cd->leave($__internal_f7af164efb1cfd3e9a27c7d2703d983c3e99b91f85c139a2480318232ac6e3cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f24448645b0d8a3ee8675f84e6ce8de16fae42fac961d0859d8f2b00a4cdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f24448645b0d8a3ee8675f84e6ce8de16fae42fac961d0859d8f2b00a4cdd0->enter($__internal_c7f24448645b0d8a3ee8675f84e6ce8de16fae42fac961d0859d8f2b00a4cdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c7f24448645b0d8a3ee8675f84e6ce8de16fae42fac961d0859d8f2b00a4cdd0->leave($__internal_c7f24448645b0d8a3ee8675f84e6ce8de16fae42fac961d0859d8f2b00a4cdd0_prof);

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
