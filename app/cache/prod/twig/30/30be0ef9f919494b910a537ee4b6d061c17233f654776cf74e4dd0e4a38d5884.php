<?php

/* base.html.twig */
class __TwigTemplate_d28388232123d162c0648adabd15f88681b1a10f738c82f631b37df7c5367ef8 extends Twig_Template
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
        $__internal_06c363b1ac589cb91a1e9940f1333b0a804c2015c8e0506e40ff01d2817f82eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c363b1ac589cb91a1e9940f1333b0a804c2015c8e0506e40ff01d2817f82eb->enter($__internal_06c363b1ac589cb91a1e9940f1333b0a804c2015c8e0506e40ff01d2817f82eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_06c363b1ac589cb91a1e9940f1333b0a804c2015c8e0506e40ff01d2817f82eb->leave($__internal_06c363b1ac589cb91a1e9940f1333b0a804c2015c8e0506e40ff01d2817f82eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9de6feab6c77e8af531ce1328e1d1179da33e5da7898dfdbb5708e07c68ce8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9de6feab6c77e8af531ce1328e1d1179da33e5da7898dfdbb5708e07c68ce8d->enter($__internal_d9de6feab6c77e8af531ce1328e1d1179da33e5da7898dfdbb5708e07c68ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d9de6feab6c77e8af531ce1328e1d1179da33e5da7898dfdbb5708e07c68ce8d->leave($__internal_d9de6feab6c77e8af531ce1328e1d1179da33e5da7898dfdbb5708e07c68ce8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db091f30aff9350ed8143e17d93273aada896c3551aad71de956e49c29d28a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db091f30aff9350ed8143e17d93273aada896c3551aad71de956e49c29d28a60->enter($__internal_db091f30aff9350ed8143e17d93273aada896c3551aad71de956e49c29d28a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_db091f30aff9350ed8143e17d93273aada896c3551aad71de956e49c29d28a60->leave($__internal_db091f30aff9350ed8143e17d93273aada896c3551aad71de956e49c29d28a60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5b4389a0f8df4da879d85d2ad9989956af44d9cc9252603a026971ed41fab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5b4389a0f8df4da879d85d2ad9989956af44d9cc9252603a026971ed41fab2->enter($__internal_0b5b4389a0f8df4da879d85d2ad9989956af44d9cc9252603a026971ed41fab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b5b4389a0f8df4da879d85d2ad9989956af44d9cc9252603a026971ed41fab2->leave($__internal_0b5b4389a0f8df4da879d85d2ad9989956af44d9cc9252603a026971ed41fab2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_811a05ed65c858f80cd6cd9292777fcdf6cf2b6ee8ad584face98c8cc040ee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811a05ed65c858f80cd6cd9292777fcdf6cf2b6ee8ad584face98c8cc040ee6e->enter($__internal_811a05ed65c858f80cd6cd9292777fcdf6cf2b6ee8ad584face98c8cc040ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_811a05ed65c858f80cd6cd9292777fcdf6cf2b6ee8ad584face98c8cc040ee6e->leave($__internal_811a05ed65c858f80cd6cd9292777fcdf6cf2b6ee8ad584face98c8cc040ee6e_prof);

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
