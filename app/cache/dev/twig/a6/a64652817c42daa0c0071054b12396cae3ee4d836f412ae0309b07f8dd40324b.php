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
        $__internal_15ac989c2b5351880c1002f1e7e12f8c75f3f369ad68cf7d7775203e2e47a8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ac989c2b5351880c1002f1e7e12f8c75f3f369ad68cf7d7775203e2e47a8f0->enter($__internal_15ac989c2b5351880c1002f1e7e12f8c75f3f369ad68cf7d7775203e2e47a8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ac989c2b5351880c1002f1e7e12f8c75f3f369ad68cf7d7775203e2e47a8f0->leave($__internal_15ac989c2b5351880c1002f1e7e12f8c75f3f369ad68cf7d7775203e2e47a8f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5606e93a079d4347349074abd3044d628df7078a4e65b80324778c16dcf2b5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5606e93a079d4347349074abd3044d628df7078a4e65b80324778c16dcf2b5a9->enter($__internal_5606e93a079d4347349074abd3044d628df7078a4e65b80324778c16dcf2b5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5606e93a079d4347349074abd3044d628df7078a4e65b80324778c16dcf2b5a9->leave($__internal_5606e93a079d4347349074abd3044d628df7078a4e65b80324778c16dcf2b5a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b258d46dfcfba68375b42828fed66e8f2667b303a177c4b3e980adf0086e565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b258d46dfcfba68375b42828fed66e8f2667b303a177c4b3e980adf0086e565->enter($__internal_9b258d46dfcfba68375b42828fed66e8f2667b303a177c4b3e980adf0086e565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9b258d46dfcfba68375b42828fed66e8f2667b303a177c4b3e980adf0086e565->leave($__internal_9b258d46dfcfba68375b42828fed66e8f2667b303a177c4b3e980adf0086e565_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3ef587244d9f87d083a2ca1f1999681b0687cdfd94823d723c0711e8efa4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3ef587244d9f87d083a2ca1f1999681b0687cdfd94823d723c0711e8efa4dd->enter($__internal_6f3ef587244d9f87d083a2ca1f1999681b0687cdfd94823d723c0711e8efa4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f3ef587244d9f87d083a2ca1f1999681b0687cdfd94823d723c0711e8efa4dd->leave($__internal_6f3ef587244d9f87d083a2ca1f1999681b0687cdfd94823d723c0711e8efa4dd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_398fcd25905d92351d937112bd06ced834a1e898727c12ef7783c17194afd685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398fcd25905d92351d937112bd06ced834a1e898727c12ef7783c17194afd685->enter($__internal_398fcd25905d92351d937112bd06ced834a1e898727c12ef7783c17194afd685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_398fcd25905d92351d937112bd06ced834a1e898727c12ef7783c17194afd685->leave($__internal_398fcd25905d92351d937112bd06ced834a1e898727c12ef7783c17194afd685_prof);

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
