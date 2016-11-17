<?php

/* ::base.html.twig */
class __TwigTemplate_a800317357d73a7a8e7f499e92e0e45c7a623ffdd4437dce7c7b449680d9e8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_713204219d99d0cb7735f14f468b7f756e0f90b2536a30bbf3ba38743c8a773c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713204219d99d0cb7735f14f468b7f756e0f90b2536a30bbf3ba38743c8a773c->enter($__internal_713204219d99d0cb7735f14f468b7f756e0f90b2536a30bbf3ba38743c8a773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_713204219d99d0cb7735f14f468b7f756e0f90b2536a30bbf3ba38743c8a773c->leave($__internal_713204219d99d0cb7735f14f468b7f756e0f90b2536a30bbf3ba38743c8a773c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_523f7595942124f1205cca8261782df4e1b5ab5eeaaa5a3a715cde7a9e5a57b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523f7595942124f1205cca8261782df4e1b5ab5eeaaa5a3a715cde7a9e5a57b0->enter($__internal_523f7595942124f1205cca8261782df4e1b5ab5eeaaa5a3a715cde7a9e5a57b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_523f7595942124f1205cca8261782df4e1b5ab5eeaaa5a3a715cde7a9e5a57b0->leave($__internal_523f7595942124f1205cca8261782df4e1b5ab5eeaaa5a3a715cde7a9e5a57b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fa50634f5567af8c98f7e8635c7613748a064222ccd501c2c3a998b57640331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa50634f5567af8c98f7e8635c7613748a064222ccd501c2c3a998b57640331->enter($__internal_6fa50634f5567af8c98f7e8635c7613748a064222ccd501c2c3a998b57640331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6fa50634f5567af8c98f7e8635c7613748a064222ccd501c2c3a998b57640331->leave($__internal_6fa50634f5567af8c98f7e8635c7613748a064222ccd501c2c3a998b57640331_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ac914a926621c8f72ee10ee3ac65e1c06f5cbcaed488ba38d4504be272a9178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac914a926621c8f72ee10ee3ac65e1c06f5cbcaed488ba38d4504be272a9178->enter($__internal_0ac914a926621c8f72ee10ee3ac65e1c06f5cbcaed488ba38d4504be272a9178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ac914a926621c8f72ee10ee3ac65e1c06f5cbcaed488ba38d4504be272a9178->leave($__internal_0ac914a926621c8f72ee10ee3ac65e1c06f5cbcaed488ba38d4504be272a9178_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3c12de3fa4b241d3515eb8d791506b21f7ef635a3b623aef11736ffe3425656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c12de3fa4b241d3515eb8d791506b21f7ef635a3b623aef11736ffe3425656->enter($__internal_a3c12de3fa4b241d3515eb8d791506b21f7ef635a3b623aef11736ffe3425656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3c12de3fa4b241d3515eb8d791506b21f7ef635a3b623aef11736ffe3425656->leave($__internal_a3c12de3fa4b241d3515eb8d791506b21f7ef635a3b623aef11736ffe3425656_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\app/Resources\\views/base.html.twig");
    }
}
