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
        $__internal_380810d76d45a3a55b49ec2413870f5c84467facbd055d68c68c6d7a723a7f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380810d76d45a3a55b49ec2413870f5c84467facbd055d68c68c6d7a723a7f20->enter($__internal_380810d76d45a3a55b49ec2413870f5c84467facbd055d68c68c6d7a723a7f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_380810d76d45a3a55b49ec2413870f5c84467facbd055d68c68c6d7a723a7f20->leave($__internal_380810d76d45a3a55b49ec2413870f5c84467facbd055d68c68c6d7a723a7f20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80929e4e487da4bfd9d353978f8d0eff6e997bfeb82221c9befda5a7094601a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80929e4e487da4bfd9d353978f8d0eff6e997bfeb82221c9befda5a7094601a2->enter($__internal_80929e4e487da4bfd9d353978f8d0eff6e997bfeb82221c9befda5a7094601a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80929e4e487da4bfd9d353978f8d0eff6e997bfeb82221c9befda5a7094601a2->leave($__internal_80929e4e487da4bfd9d353978f8d0eff6e997bfeb82221c9befda5a7094601a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c23c91358c94e3eb311a345eb9398065b5a0ef09a83ee90ad45e059e1ab8622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c23c91358c94e3eb311a345eb9398065b5a0ef09a83ee90ad45e059e1ab8622->enter($__internal_0c23c91358c94e3eb311a345eb9398065b5a0ef09a83ee90ad45e059e1ab8622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0c23c91358c94e3eb311a345eb9398065b5a0ef09a83ee90ad45e059e1ab8622->leave($__internal_0c23c91358c94e3eb311a345eb9398065b5a0ef09a83ee90ad45e059e1ab8622_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c360b1da18bfe930b692b817a75019762dfb951fbef9cfdce6e934c228aae291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c360b1da18bfe930b692b817a75019762dfb951fbef9cfdce6e934c228aae291->enter($__internal_c360b1da18bfe930b692b817a75019762dfb951fbef9cfdce6e934c228aae291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c360b1da18bfe930b692b817a75019762dfb951fbef9cfdce6e934c228aae291->leave($__internal_c360b1da18bfe930b692b817a75019762dfb951fbef9cfdce6e934c228aae291_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d44904e36be1daae72652d2ffbbfa7bdcdc3307a21f904e87eb51dff700ee030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44904e36be1daae72652d2ffbbfa7bdcdc3307a21f904e87eb51dff700ee030->enter($__internal_d44904e36be1daae72652d2ffbbfa7bdcdc3307a21f904e87eb51dff700ee030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d44904e36be1daae72652d2ffbbfa7bdcdc3307a21f904e87eb51dff700ee030->leave($__internal_d44904e36be1daae72652d2ffbbfa7bdcdc3307a21f904e87eb51dff700ee030_prof);

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
