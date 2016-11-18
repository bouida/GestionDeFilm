<?php

/* ::base.html.twig */
class __TwigTemplate_00d081103bd2166006af923daf6f053112fc2ade6cee9f15420ce6750855dd1d extends Twig_Template
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
        $__internal_6d2e50ff8fb7cba19a9c43b9f540084b7e888e2db95f86d1efde56bf37eec860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2e50ff8fb7cba19a9c43b9f540084b7e888e2db95f86d1efde56bf37eec860->enter($__internal_6d2e50ff8fb7cba19a9c43b9f540084b7e888e2db95f86d1efde56bf37eec860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6d2e50ff8fb7cba19a9c43b9f540084b7e888e2db95f86d1efde56bf37eec860->leave($__internal_6d2e50ff8fb7cba19a9c43b9f540084b7e888e2db95f86d1efde56bf37eec860_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed8c93dac698619715ad121db42d008a1e53e6e0248c40646004d5deb442bb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8c93dac698619715ad121db42d008a1e53e6e0248c40646004d5deb442bb23->enter($__internal_ed8c93dac698619715ad121db42d008a1e53e6e0248c40646004d5deb442bb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed8c93dac698619715ad121db42d008a1e53e6e0248c40646004d5deb442bb23->leave($__internal_ed8c93dac698619715ad121db42d008a1e53e6e0248c40646004d5deb442bb23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73d0bf4f49979e5786fbe3885134070f962061c67aa6faea7005d98abf24af4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d0bf4f49979e5786fbe3885134070f962061c67aa6faea7005d98abf24af4f->enter($__internal_73d0bf4f49979e5786fbe3885134070f962061c67aa6faea7005d98abf24af4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73d0bf4f49979e5786fbe3885134070f962061c67aa6faea7005d98abf24af4f->leave($__internal_73d0bf4f49979e5786fbe3885134070f962061c67aa6faea7005d98abf24af4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0bb02f26c801379a67a7192e6439084fc8d57f32be051ccb30caf7310e018b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bb02f26c801379a67a7192e6439084fc8d57f32be051ccb30caf7310e018b4->enter($__internal_b0bb02f26c801379a67a7192e6439084fc8d57f32be051ccb30caf7310e018b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0bb02f26c801379a67a7192e6439084fc8d57f32be051ccb30caf7310e018b4->leave($__internal_b0bb02f26c801379a67a7192e6439084fc8d57f32be051ccb30caf7310e018b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdbb81ba7aa9de0f1292f6f9c01b73e0c5d4a39acf5851dfcaf6e0faf10e321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbb81ba7aa9de0f1292f6f9c01b73e0c5d4a39acf5851dfcaf6e0faf10e321b->enter($__internal_cdbb81ba7aa9de0f1292f6f9c01b73e0c5d4a39acf5851dfcaf6e0faf10e321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cdbb81ba7aa9de0f1292f6f9c01b73e0c5d4a39acf5851dfcaf6e0faf10e321b->leave($__internal_cdbb81ba7aa9de0f1292f6f9c01b73e0c5d4a39acf5851dfcaf6e0faf10e321b_prof);

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
