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
        $__internal_f25827206967fd1263fc14bcaa7d891e2345088c72ada56d6f4c59e9a9ae4d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25827206967fd1263fc14bcaa7d891e2345088c72ada56d6f4c59e9a9ae4d28->enter($__internal_f25827206967fd1263fc14bcaa7d891e2345088c72ada56d6f4c59e9a9ae4d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f25827206967fd1263fc14bcaa7d891e2345088c72ada56d6f4c59e9a9ae4d28->leave($__internal_f25827206967fd1263fc14bcaa7d891e2345088c72ada56d6f4c59e9a9ae4d28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bac07163a9e67332ea49f9c87f6daac96ce4fa929565836d9176ffe5ef6c3b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac07163a9e67332ea49f9c87f6daac96ce4fa929565836d9176ffe5ef6c3b8c->enter($__internal_bac07163a9e67332ea49f9c87f6daac96ce4fa929565836d9176ffe5ef6c3b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bac07163a9e67332ea49f9c87f6daac96ce4fa929565836d9176ffe5ef6c3b8c->leave($__internal_bac07163a9e67332ea49f9c87f6daac96ce4fa929565836d9176ffe5ef6c3b8c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2910b0d8083bdd7f834062c691194dbeef10ab11c6f5fe87f59a602a91895dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2910b0d8083bdd7f834062c691194dbeef10ab11c6f5fe87f59a602a91895dfc->enter($__internal_2910b0d8083bdd7f834062c691194dbeef10ab11c6f5fe87f59a602a91895dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2910b0d8083bdd7f834062c691194dbeef10ab11c6f5fe87f59a602a91895dfc->leave($__internal_2910b0d8083bdd7f834062c691194dbeef10ab11c6f5fe87f59a602a91895dfc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e029771bef76ac5332e56acf8d25b3120dbe27871ea85a6312cc26f3483ef9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e029771bef76ac5332e56acf8d25b3120dbe27871ea85a6312cc26f3483ef9f8->enter($__internal_e029771bef76ac5332e56acf8d25b3120dbe27871ea85a6312cc26f3483ef9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e029771bef76ac5332e56acf8d25b3120dbe27871ea85a6312cc26f3483ef9f8->leave($__internal_e029771bef76ac5332e56acf8d25b3120dbe27871ea85a6312cc26f3483ef9f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bc9223dc12e4915b361f045fd510203aad4b93c93c22cf63ea87215d34db7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc9223dc12e4915b361f045fd510203aad4b93c93c22cf63ea87215d34db7bc->enter($__internal_8bc9223dc12e4915b361f045fd510203aad4b93c93c22cf63ea87215d34db7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bc9223dc12e4915b361f045fd510203aad4b93c93c22cf63ea87215d34db7bc->leave($__internal_8bc9223dc12e4915b361f045fd510203aad4b93c93c22cf63ea87215d34db7bc_prof);

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
