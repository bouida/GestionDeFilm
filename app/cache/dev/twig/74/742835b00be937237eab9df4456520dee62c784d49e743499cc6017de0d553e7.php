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
        $__internal_3ee4c855444ccddb4e8d53aa2b5cd119c1869f41116fd4690b2cf66daf890ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee4c855444ccddb4e8d53aa2b5cd119c1869f41116fd4690b2cf66daf890ec9->enter($__internal_3ee4c855444ccddb4e8d53aa2b5cd119c1869f41116fd4690b2cf66daf890ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3ee4c855444ccddb4e8d53aa2b5cd119c1869f41116fd4690b2cf66daf890ec9->leave($__internal_3ee4c855444ccddb4e8d53aa2b5cd119c1869f41116fd4690b2cf66daf890ec9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a0192459c3c01f6f419228ef1002c4451291a6ba4bafc9c284638a4385e1032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0192459c3c01f6f419228ef1002c4451291a6ba4bafc9c284638a4385e1032->enter($__internal_3a0192459c3c01f6f419228ef1002c4451291a6ba4bafc9c284638a4385e1032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3a0192459c3c01f6f419228ef1002c4451291a6ba4bafc9c284638a4385e1032->leave($__internal_3a0192459c3c01f6f419228ef1002c4451291a6ba4bafc9c284638a4385e1032_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8b085f445b582ae8a2a3700aecf4ff2d833078a1226c129c49664292d4b8380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b085f445b582ae8a2a3700aecf4ff2d833078a1226c129c49664292d4b8380->enter($__internal_c8b085f445b582ae8a2a3700aecf4ff2d833078a1226c129c49664292d4b8380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c8b085f445b582ae8a2a3700aecf4ff2d833078a1226c129c49664292d4b8380->leave($__internal_c8b085f445b582ae8a2a3700aecf4ff2d833078a1226c129c49664292d4b8380_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c83a2e50ac3a6072ae7858b7d71e40d415e7ade6597bd0eecfe02c5c72b2890e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83a2e50ac3a6072ae7858b7d71e40d415e7ade6597bd0eecfe02c5c72b2890e->enter($__internal_c83a2e50ac3a6072ae7858b7d71e40d415e7ade6597bd0eecfe02c5c72b2890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c83a2e50ac3a6072ae7858b7d71e40d415e7ade6597bd0eecfe02c5c72b2890e->leave($__internal_c83a2e50ac3a6072ae7858b7d71e40d415e7ade6597bd0eecfe02c5c72b2890e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a8531d0823c6f1e5ec02dfdca7630d6b75f5caca2400bbba1fb6434277028fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8531d0823c6f1e5ec02dfdca7630d6b75f5caca2400bbba1fb6434277028fb->enter($__internal_4a8531d0823c6f1e5ec02dfdca7630d6b75f5caca2400bbba1fb6434277028fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a8531d0823c6f1e5ec02dfdca7630d6b75f5caca2400bbba1fb6434277028fb->leave($__internal_4a8531d0823c6f1e5ec02dfdca7630d6b75f5caca2400bbba1fb6434277028fb_prof);

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
