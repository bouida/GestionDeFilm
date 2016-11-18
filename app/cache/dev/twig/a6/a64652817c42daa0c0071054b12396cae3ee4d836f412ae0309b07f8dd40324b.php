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
        $__internal_6407d0a48f0d7c0f0b97a6a673a70cb26bdcc019f66f5bb332df44b4be2ff42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6407d0a48f0d7c0f0b97a6a673a70cb26bdcc019f66f5bb332df44b4be2ff42f->enter($__internal_6407d0a48f0d7c0f0b97a6a673a70cb26bdcc019f66f5bb332df44b4be2ff42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6407d0a48f0d7c0f0b97a6a673a70cb26bdcc019f66f5bb332df44b4be2ff42f->leave($__internal_6407d0a48f0d7c0f0b97a6a673a70cb26bdcc019f66f5bb332df44b4be2ff42f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5270d1825e75c27be394194104f886b61e9b665bcffb514920b153cff9f8cfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5270d1825e75c27be394194104f886b61e9b665bcffb514920b153cff9f8cfbd->enter($__internal_5270d1825e75c27be394194104f886b61e9b665bcffb514920b153cff9f8cfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5270d1825e75c27be394194104f886b61e9b665bcffb514920b153cff9f8cfbd->leave($__internal_5270d1825e75c27be394194104f886b61e9b665bcffb514920b153cff9f8cfbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30bb7b862c6c52ccdb8d200f76c41cdf4cda7fbe8b324297b4ab24c38e1b6463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bb7b862c6c52ccdb8d200f76c41cdf4cda7fbe8b324297b4ab24c38e1b6463->enter($__internal_30bb7b862c6c52ccdb8d200f76c41cdf4cda7fbe8b324297b4ab24c38e1b6463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_30bb7b862c6c52ccdb8d200f76c41cdf4cda7fbe8b324297b4ab24c38e1b6463->leave($__internal_30bb7b862c6c52ccdb8d200f76c41cdf4cda7fbe8b324297b4ab24c38e1b6463_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b05f9326a734bfe7137e5e746c7f3228a15825f437c4f8cce7a656956a83db85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05f9326a734bfe7137e5e746c7f3228a15825f437c4f8cce7a656956a83db85->enter($__internal_b05f9326a734bfe7137e5e746c7f3228a15825f437c4f8cce7a656956a83db85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b05f9326a734bfe7137e5e746c7f3228a15825f437c4f8cce7a656956a83db85->leave($__internal_b05f9326a734bfe7137e5e746c7f3228a15825f437c4f8cce7a656956a83db85_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c67b41fba0337eda1d4e575f5e67ff4c81a6ba59804555c3e7ca8bcc09fa1ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67b41fba0337eda1d4e575f5e67ff4c81a6ba59804555c3e7ca8bcc09fa1ed3->enter($__internal_c67b41fba0337eda1d4e575f5e67ff4c81a6ba59804555c3e7ca8bcc09fa1ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c67b41fba0337eda1d4e575f5e67ff4c81a6ba59804555c3e7ca8bcc09fa1ed3->leave($__internal_c67b41fba0337eda1d4e575f5e67ff4c81a6ba59804555c3e7ca8bcc09fa1ed3_prof);

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
