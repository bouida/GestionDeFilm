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
        $__internal_363f51bd33d99c19444029e77b091c07b11105520570828e933471a87bb5bc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363f51bd33d99c19444029e77b091c07b11105520570828e933471a87bb5bc95->enter($__internal_363f51bd33d99c19444029e77b091c07b11105520570828e933471a87bb5bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_363f51bd33d99c19444029e77b091c07b11105520570828e933471a87bb5bc95->leave($__internal_363f51bd33d99c19444029e77b091c07b11105520570828e933471a87bb5bc95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85b83fa0298c1ce09941c89b4f1ce0aeb81d2eb4dc188e9a587a3462898a45f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b83fa0298c1ce09941c89b4f1ce0aeb81d2eb4dc188e9a587a3462898a45f0->enter($__internal_85b83fa0298c1ce09941c89b4f1ce0aeb81d2eb4dc188e9a587a3462898a45f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_85b83fa0298c1ce09941c89b4f1ce0aeb81d2eb4dc188e9a587a3462898a45f0->leave($__internal_85b83fa0298c1ce09941c89b4f1ce0aeb81d2eb4dc188e9a587a3462898a45f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab4d0c8c2e1703d4e5692b18d2183403b10ed32aafb1c09210414cbf1cb6d789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4d0c8c2e1703d4e5692b18d2183403b10ed32aafb1c09210414cbf1cb6d789->enter($__internal_ab4d0c8c2e1703d4e5692b18d2183403b10ed32aafb1c09210414cbf1cb6d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ab4d0c8c2e1703d4e5692b18d2183403b10ed32aafb1c09210414cbf1cb6d789->leave($__internal_ab4d0c8c2e1703d4e5692b18d2183403b10ed32aafb1c09210414cbf1cb6d789_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_224a1fe82eb88a21fadd5bdabec3adefde479e65aa60bf629202f9b1a33a7305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224a1fe82eb88a21fadd5bdabec3adefde479e65aa60bf629202f9b1a33a7305->enter($__internal_224a1fe82eb88a21fadd5bdabec3adefde479e65aa60bf629202f9b1a33a7305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_224a1fe82eb88a21fadd5bdabec3adefde479e65aa60bf629202f9b1a33a7305->leave($__internal_224a1fe82eb88a21fadd5bdabec3adefde479e65aa60bf629202f9b1a33a7305_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c91d8933143a13d0b76895b3b6762baf5b66ff6597b9b6ea41ec8e234f91a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c91d8933143a13d0b76895b3b6762baf5b66ff6597b9b6ea41ec8e234f91a59->enter($__internal_4c91d8933143a13d0b76895b3b6762baf5b66ff6597b9b6ea41ec8e234f91a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4c91d8933143a13d0b76895b3b6762baf5b66ff6597b9b6ea41ec8e234f91a59->leave($__internal_4c91d8933143a13d0b76895b3b6762baf5b66ff6597b9b6ea41ec8e234f91a59_prof);

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
