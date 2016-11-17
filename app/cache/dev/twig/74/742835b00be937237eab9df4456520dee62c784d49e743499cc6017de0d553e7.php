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
        $__internal_c8bb75ac75bd41b5c24f71df00cf9fe7247cf3dea5872da5f510d73942012f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bb75ac75bd41b5c24f71df00cf9fe7247cf3dea5872da5f510d73942012f0d->enter($__internal_c8bb75ac75bd41b5c24f71df00cf9fe7247cf3dea5872da5f510d73942012f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c8bb75ac75bd41b5c24f71df00cf9fe7247cf3dea5872da5f510d73942012f0d->leave($__internal_c8bb75ac75bd41b5c24f71df00cf9fe7247cf3dea5872da5f510d73942012f0d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6b36a5fb665c3a331e84b5b9eaa91c48c079d6dd8dc7eac0db57d32176b3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6b36a5fb665c3a331e84b5b9eaa91c48c079d6dd8dc7eac0db57d32176b3e6->enter($__internal_5e6b36a5fb665c3a331e84b5b9eaa91c48c079d6dd8dc7eac0db57d32176b3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5e6b36a5fb665c3a331e84b5b9eaa91c48c079d6dd8dc7eac0db57d32176b3e6->leave($__internal_5e6b36a5fb665c3a331e84b5b9eaa91c48c079d6dd8dc7eac0db57d32176b3e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_739793741adc98f383705922db82fae2146a312e6014c5999f2d9b6a715ca6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739793741adc98f383705922db82fae2146a312e6014c5999f2d9b6a715ca6a3->enter($__internal_739793741adc98f383705922db82fae2146a312e6014c5999f2d9b6a715ca6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_739793741adc98f383705922db82fae2146a312e6014c5999f2d9b6a715ca6a3->leave($__internal_739793741adc98f383705922db82fae2146a312e6014c5999f2d9b6a715ca6a3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a86741b1f53ee52d9d140b885548bc164ee1cac58c7f8cb5ef032e8c395e990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a86741b1f53ee52d9d140b885548bc164ee1cac58c7f8cb5ef032e8c395e990->enter($__internal_5a86741b1f53ee52d9d140b885548bc164ee1cac58c7f8cb5ef032e8c395e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a86741b1f53ee52d9d140b885548bc164ee1cac58c7f8cb5ef032e8c395e990->leave($__internal_5a86741b1f53ee52d9d140b885548bc164ee1cac58c7f8cb5ef032e8c395e990_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0542564e616016d70e9bf8f2c36089063e45d0178e7437cdaf7b173836003805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0542564e616016d70e9bf8f2c36089063e45d0178e7437cdaf7b173836003805->enter($__internal_0542564e616016d70e9bf8f2c36089063e45d0178e7437cdaf7b173836003805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0542564e616016d70e9bf8f2c36089063e45d0178e7437cdaf7b173836003805->leave($__internal_0542564e616016d70e9bf8f2c36089063e45d0178e7437cdaf7b173836003805_prof);

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
