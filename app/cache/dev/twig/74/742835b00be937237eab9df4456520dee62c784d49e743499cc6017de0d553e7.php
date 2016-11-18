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
        $__internal_b22337c4844e6249855e10f6b9889337a337f713b0cf10ae2093e374afd56dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22337c4844e6249855e10f6b9889337a337f713b0cf10ae2093e374afd56dac->enter($__internal_b22337c4844e6249855e10f6b9889337a337f713b0cf10ae2093e374afd56dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b22337c4844e6249855e10f6b9889337a337f713b0cf10ae2093e374afd56dac->leave($__internal_b22337c4844e6249855e10f6b9889337a337f713b0cf10ae2093e374afd56dac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07a0938be397708d3cf0d333f8fb4f6400a5f58bbcede86fc9bceb85f92fbfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a0938be397708d3cf0d333f8fb4f6400a5f58bbcede86fc9bceb85f92fbfbf->enter($__internal_07a0938be397708d3cf0d333f8fb4f6400a5f58bbcede86fc9bceb85f92fbfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07a0938be397708d3cf0d333f8fb4f6400a5f58bbcede86fc9bceb85f92fbfbf->leave($__internal_07a0938be397708d3cf0d333f8fb4f6400a5f58bbcede86fc9bceb85f92fbfbf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28d72261cf4af6c7fe34f2513e28c37bee0c222ee56dd2563d4bc9f369c72e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d72261cf4af6c7fe34f2513e28c37bee0c222ee56dd2563d4bc9f369c72e60->enter($__internal_28d72261cf4af6c7fe34f2513e28c37bee0c222ee56dd2563d4bc9f369c72e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_28d72261cf4af6c7fe34f2513e28c37bee0c222ee56dd2563d4bc9f369c72e60->leave($__internal_28d72261cf4af6c7fe34f2513e28c37bee0c222ee56dd2563d4bc9f369c72e60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d774ae8e0e03a499cca510c8f1e4177b768ddc0c91717d6d1b4ecde0223d0308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d774ae8e0e03a499cca510c8f1e4177b768ddc0c91717d6d1b4ecde0223d0308->enter($__internal_d774ae8e0e03a499cca510c8f1e4177b768ddc0c91717d6d1b4ecde0223d0308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d774ae8e0e03a499cca510c8f1e4177b768ddc0c91717d6d1b4ecde0223d0308->leave($__internal_d774ae8e0e03a499cca510c8f1e4177b768ddc0c91717d6d1b4ecde0223d0308_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5769918419dda53de5b725c2d983b849ce0e4fe2f75fe1c57c1954f2a109f54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5769918419dda53de5b725c2d983b849ce0e4fe2f75fe1c57c1954f2a109f54e->enter($__internal_5769918419dda53de5b725c2d983b849ce0e4fe2f75fe1c57c1954f2a109f54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5769918419dda53de5b725c2d983b849ce0e4fe2f75fe1c57c1954f2a109f54e->leave($__internal_5769918419dda53de5b725c2d983b849ce0e4fe2f75fe1c57c1954f2a109f54e_prof);

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
