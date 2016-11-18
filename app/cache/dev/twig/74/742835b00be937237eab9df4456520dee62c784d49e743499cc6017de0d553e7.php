<?php

/* base.html.twig */
class __TwigTemplate_b2d01356c5ba4b2b0b9a4a7a401f3354b212bbbd59576610e8cdee6577a54282 extends Twig_Template
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
        $__internal_b02fae312a5616cb07cc54d54ba2b07c59c8979fd17385befafcec0db35ca81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02fae312a5616cb07cc54d54ba2b07c59c8979fd17385befafcec0db35ca81c->enter($__internal_b02fae312a5616cb07cc54d54ba2b07c59c8979fd17385befafcec0db35ca81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b02fae312a5616cb07cc54d54ba2b07c59c8979fd17385befafcec0db35ca81c->leave($__internal_b02fae312a5616cb07cc54d54ba2b07c59c8979fd17385befafcec0db35ca81c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c540dd34f2450f670470d7a66c9143e36027f5e600bca0a922c0218b948bf4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c540dd34f2450f670470d7a66c9143e36027f5e600bca0a922c0218b948bf4b9->enter($__internal_c540dd34f2450f670470d7a66c9143e36027f5e600bca0a922c0218b948bf4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c540dd34f2450f670470d7a66c9143e36027f5e600bca0a922c0218b948bf4b9->leave($__internal_c540dd34f2450f670470d7a66c9143e36027f5e600bca0a922c0218b948bf4b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fdc6ac7e94497f9e6ae6a6e9e6ee400be94776deb36539c936a0708ed5ee188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdc6ac7e94497f9e6ae6a6e9e6ee400be94776deb36539c936a0708ed5ee188->enter($__internal_3fdc6ac7e94497f9e6ae6a6e9e6ee400be94776deb36539c936a0708ed5ee188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3fdc6ac7e94497f9e6ae6a6e9e6ee400be94776deb36539c936a0708ed5ee188->leave($__internal_3fdc6ac7e94497f9e6ae6a6e9e6ee400be94776deb36539c936a0708ed5ee188_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3573b48b3f05b6fbef36fa5401fd5dca16f7b97e4976c68429d163384b4a219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3573b48b3f05b6fbef36fa5401fd5dca16f7b97e4976c68429d163384b4a219->enter($__internal_c3573b48b3f05b6fbef36fa5401fd5dca16f7b97e4976c68429d163384b4a219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3573b48b3f05b6fbef36fa5401fd5dca16f7b97e4976c68429d163384b4a219->leave($__internal_c3573b48b3f05b6fbef36fa5401fd5dca16f7b97e4976c68429d163384b4a219_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6684d6a408bdcd55ad7c9ec05f050eb4a3cdc63f260b7dcd0e405adf17d26ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6684d6a408bdcd55ad7c9ec05f050eb4a3cdc63f260b7dcd0e405adf17d26ae0->enter($__internal_6684d6a408bdcd55ad7c9ec05f050eb4a3cdc63f260b7dcd0e405adf17d26ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6684d6a408bdcd55ad7c9ec05f050eb4a3cdc63f260b7dcd0e405adf17d26ae0->leave($__internal_6684d6a408bdcd55ad7c9ec05f050eb4a3cdc63f260b7dcd0e405adf17d26ae0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\app\\Resources\\views\\base.html.twig");
    }
}
