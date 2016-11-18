<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8fa6dae95e1686b700fdc12a753bb7902d33a8091b39f8be785fe9b344e101dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f36963d4956470614ef91b77a00de0c4ea3d79358bd21d48b3e3380b86839670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36963d4956470614ef91b77a00de0c4ea3d79358bd21d48b3e3380b86839670->enter($__internal_f36963d4956470614ef91b77a00de0c4ea3d79358bd21d48b3e3380b86839670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36963d4956470614ef91b77a00de0c4ea3d79358bd21d48b3e3380b86839670->leave($__internal_f36963d4956470614ef91b77a00de0c4ea3d79358bd21d48b3e3380b86839670_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_633a1e42b7263e9555ee5b22f41d422dc4185a999bad8c431af88b68269e21fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a1e42b7263e9555ee5b22f41d422dc4185a999bad8c431af88b68269e21fb->enter($__internal_633a1e42b7263e9555ee5b22f41d422dc4185a999bad8c431af88b68269e21fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_633a1e42b7263e9555ee5b22f41d422dc4185a999bad8c431af88b68269e21fb->leave($__internal_633a1e42b7263e9555ee5b22f41d422dc4185a999bad8c431af88b68269e21fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_daf6a201fae07fff4d8b54d9c23f75b7f6604391d3895a4888b1761c762b2b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf6a201fae07fff4d8b54d9c23f75b7f6604391d3895a4888b1761c762b2b4b->enter($__internal_daf6a201fae07fff4d8b54d9c23f75b7f6604391d3895a4888b1761c762b2b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_daf6a201fae07fff4d8b54d9c23f75b7f6604391d3895a4888b1761c762b2b4b->leave($__internal_daf6a201fae07fff4d8b54d9c23f75b7f6604391d3895a4888b1761c762b2b4b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_735ae5aa3d810c0ec212400f2f10854fafbe8b3bcda6528362527579dff345a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735ae5aa3d810c0ec212400f2f10854fafbe8b3bcda6528362527579dff345a1->enter($__internal_735ae5aa3d810c0ec212400f2f10854fafbe8b3bcda6528362527579dff345a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_735ae5aa3d810c0ec212400f2f10854fafbe8b3bcda6528362527579dff345a1->leave($__internal_735ae5aa3d810c0ec212400f2f10854fafbe8b3bcda6528362527579dff345a1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7e70f694b4f1aef9c217999880ac2c8ca024eadaa2ae8784365ccd55e04420c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e70f694b4f1aef9c217999880ac2c8ca024eadaa2ae8784365ccd55e04420c->enter($__internal_e7e70f694b4f1aef9c217999880ac2c8ca024eadaa2ae8784365ccd55e04420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e7e70f694b4f1aef9c217999880ac2c8ca024eadaa2ae8784365ccd55e04420c->leave($__internal_e7e70f694b4f1aef9c217999880ac2c8ca024eadaa2ae8784365ccd55e04420c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
