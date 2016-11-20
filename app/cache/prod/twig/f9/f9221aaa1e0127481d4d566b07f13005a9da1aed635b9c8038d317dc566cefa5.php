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
        $__internal_2443ce7416caa0616a637be6b6ab808aa9d55a5dd0e84127b8d2faa7460b9d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2443ce7416caa0616a637be6b6ab808aa9d55a5dd0e84127b8d2faa7460b9d4c->enter($__internal_2443ce7416caa0616a637be6b6ab808aa9d55a5dd0e84127b8d2faa7460b9d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2443ce7416caa0616a637be6b6ab808aa9d55a5dd0e84127b8d2faa7460b9d4c->leave($__internal_2443ce7416caa0616a637be6b6ab808aa9d55a5dd0e84127b8d2faa7460b9d4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b94d9767709a153ea44a9fa8c06915589be766220cd8fb90a4364915e930039a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94d9767709a153ea44a9fa8c06915589be766220cd8fb90a4364915e930039a->enter($__internal_b94d9767709a153ea44a9fa8c06915589be766220cd8fb90a4364915e930039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b94d9767709a153ea44a9fa8c06915589be766220cd8fb90a4364915e930039a->leave($__internal_b94d9767709a153ea44a9fa8c06915589be766220cd8fb90a4364915e930039a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bba81a0863ded81291c2dd3908c593b1b066b3fb80d59c30bb4b1caa03d9cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bba81a0863ded81291c2dd3908c593b1b066b3fb80d59c30bb4b1caa03d9cc8->enter($__internal_8bba81a0863ded81291c2dd3908c593b1b066b3fb80d59c30bb4b1caa03d9cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8bba81a0863ded81291c2dd3908c593b1b066b3fb80d59c30bb4b1caa03d9cc8->leave($__internal_8bba81a0863ded81291c2dd3908c593b1b066b3fb80d59c30bb4b1caa03d9cc8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_361ed4ecdce4a1ae26fc5488ab404967d7ddd88d2e9f1a19394af92348692ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361ed4ecdce4a1ae26fc5488ab404967d7ddd88d2e9f1a19394af92348692ff4->enter($__internal_361ed4ecdce4a1ae26fc5488ab404967d7ddd88d2e9f1a19394af92348692ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_361ed4ecdce4a1ae26fc5488ab404967d7ddd88d2e9f1a19394af92348692ff4->leave($__internal_361ed4ecdce4a1ae26fc5488ab404967d7ddd88d2e9f1a19394af92348692ff4_prof);

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
