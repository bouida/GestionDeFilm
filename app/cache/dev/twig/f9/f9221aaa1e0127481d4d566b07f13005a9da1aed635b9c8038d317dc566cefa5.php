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
        $__internal_07c1f7937bafdde92c10d3464e8ec7dd8a10f12a74e555dfc459e54100134a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c1f7937bafdde92c10d3464e8ec7dd8a10f12a74e555dfc459e54100134a54->enter($__internal_07c1f7937bafdde92c10d3464e8ec7dd8a10f12a74e555dfc459e54100134a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c1f7937bafdde92c10d3464e8ec7dd8a10f12a74e555dfc459e54100134a54->leave($__internal_07c1f7937bafdde92c10d3464e8ec7dd8a10f12a74e555dfc459e54100134a54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_923bff22770b0f2f83889ad030795e38e9c343c1113bdc1803cdaea27f782d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923bff22770b0f2f83889ad030795e38e9c343c1113bdc1803cdaea27f782d84->enter($__internal_923bff22770b0f2f83889ad030795e38e9c343c1113bdc1803cdaea27f782d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_923bff22770b0f2f83889ad030795e38e9c343c1113bdc1803cdaea27f782d84->leave($__internal_923bff22770b0f2f83889ad030795e38e9c343c1113bdc1803cdaea27f782d84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5b3928ae565c8a3a7c7b06c1f715212a60ed24c2ac64c090df74cd0cd20a262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b3928ae565c8a3a7c7b06c1f715212a60ed24c2ac64c090df74cd0cd20a262->enter($__internal_c5b3928ae565c8a3a7c7b06c1f715212a60ed24c2ac64c090df74cd0cd20a262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5b3928ae565c8a3a7c7b06c1f715212a60ed24c2ac64c090df74cd0cd20a262->leave($__internal_c5b3928ae565c8a3a7c7b06c1f715212a60ed24c2ac64c090df74cd0cd20a262_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5e8bb97caefab85af0f591821d6816d6a5fa724f0f12d41e97cf3cd156ad4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e8bb97caefab85af0f591821d6816d6a5fa724f0f12d41e97cf3cd156ad4d8->enter($__internal_c5e8bb97caefab85af0f591821d6816d6a5fa724f0f12d41e97cf3cd156ad4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c5e8bb97caefab85af0f591821d6816d6a5fa724f0f12d41e97cf3cd156ad4d8->leave($__internal_c5e8bb97caefab85af0f591821d6816d6a5fa724f0f12d41e97cf3cd156ad4d8_prof);

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
