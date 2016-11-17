<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aa5e70523409d38edcb10aec3a5167c4d19e5a5ef871a497e1257ea39417f523 extends Twig_Template
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
        $__internal_e103a81e7a9784be0dc03d40e264a077345c390bd2cc04072441a1b49ad3393c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e103a81e7a9784be0dc03d40e264a077345c390bd2cc04072441a1b49ad3393c->enter($__internal_e103a81e7a9784be0dc03d40e264a077345c390bd2cc04072441a1b49ad3393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e103a81e7a9784be0dc03d40e264a077345c390bd2cc04072441a1b49ad3393c->leave($__internal_e103a81e7a9784be0dc03d40e264a077345c390bd2cc04072441a1b49ad3393c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e5a4a690480d3a5520d1355db37516594b8c05eebb75d5c9eb7b760289a5672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5a4a690480d3a5520d1355db37516594b8c05eebb75d5c9eb7b760289a5672->enter($__internal_7e5a4a690480d3a5520d1355db37516594b8c05eebb75d5c9eb7b760289a5672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e5a4a690480d3a5520d1355db37516594b8c05eebb75d5c9eb7b760289a5672->leave($__internal_7e5a4a690480d3a5520d1355db37516594b8c05eebb75d5c9eb7b760289a5672_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc69f0a1aa194c51e6f0169ff100daafa6d8b8acc32290dcf39f5be64f8cb76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc69f0a1aa194c51e6f0169ff100daafa6d8b8acc32290dcf39f5be64f8cb76e->enter($__internal_fc69f0a1aa194c51e6f0169ff100daafa6d8b8acc32290dcf39f5be64f8cb76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc69f0a1aa194c51e6f0169ff100daafa6d8b8acc32290dcf39f5be64f8cb76e->leave($__internal_fc69f0a1aa194c51e6f0169ff100daafa6d8b8acc32290dcf39f5be64f8cb76e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a234df614504132a7ac2ed8c7f1f1f7989b617c8274e338a77e9a4e7513d3225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a234df614504132a7ac2ed8c7f1f1f7989b617c8274e338a77e9a4e7513d3225->enter($__internal_a234df614504132a7ac2ed8c7f1f1f7989b617c8274e338a77e9a4e7513d3225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a234df614504132a7ac2ed8c7f1f1f7989b617c8274e338a77e9a4e7513d3225->leave($__internal_a234df614504132a7ac2ed8c7f1f1f7989b617c8274e338a77e9a4e7513d3225_prof);

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
