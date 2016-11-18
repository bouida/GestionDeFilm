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
        $__internal_4b340a73916477566a998b3d6d56a495a42197c723b8f3e41d4a51cf1adf6c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b340a73916477566a998b3d6d56a495a42197c723b8f3e41d4a51cf1adf6c3e->enter($__internal_4b340a73916477566a998b3d6d56a495a42197c723b8f3e41d4a51cf1adf6c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4b340a73916477566a998b3d6d56a495a42197c723b8f3e41d4a51cf1adf6c3e->leave($__internal_4b340a73916477566a998b3d6d56a495a42197c723b8f3e41d4a51cf1adf6c3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41c8fb33a31f4f71984acf09c6e8b5aae17e0aeb1ec1cadef26288c656a9fc17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c8fb33a31f4f71984acf09c6e8b5aae17e0aeb1ec1cadef26288c656a9fc17->enter($__internal_41c8fb33a31f4f71984acf09c6e8b5aae17e0aeb1ec1cadef26288c656a9fc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41c8fb33a31f4f71984acf09c6e8b5aae17e0aeb1ec1cadef26288c656a9fc17->leave($__internal_41c8fb33a31f4f71984acf09c6e8b5aae17e0aeb1ec1cadef26288c656a9fc17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_928223fe1110276809e473775efd4d6e7148a66b8a0242713be49b863014d9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928223fe1110276809e473775efd4d6e7148a66b8a0242713be49b863014d9de->enter($__internal_928223fe1110276809e473775efd4d6e7148a66b8a0242713be49b863014d9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_928223fe1110276809e473775efd4d6e7148a66b8a0242713be49b863014d9de->leave($__internal_928223fe1110276809e473775efd4d6e7148a66b8a0242713be49b863014d9de_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc447b9fd98da2cafd8942799e8742a255e92a0e6a463b7001f4808e530b5182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc447b9fd98da2cafd8942799e8742a255e92a0e6a463b7001f4808e530b5182->enter($__internal_bc447b9fd98da2cafd8942799e8742a255e92a0e6a463b7001f4808e530b5182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc447b9fd98da2cafd8942799e8742a255e92a0e6a463b7001f4808e530b5182->leave($__internal_bc447b9fd98da2cafd8942799e8742a255e92a0e6a463b7001f4808e530b5182_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc181e6872fa5dc38965488f15dd62e1f38c93a6b134e3943289b73ab2ee9583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc181e6872fa5dc38965488f15dd62e1f38c93a6b134e3943289b73ab2ee9583->enter($__internal_fc181e6872fa5dc38965488f15dd62e1f38c93a6b134e3943289b73ab2ee9583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc181e6872fa5dc38965488f15dd62e1f38c93a6b134e3943289b73ab2ee9583->leave($__internal_fc181e6872fa5dc38965488f15dd62e1f38c93a6b134e3943289b73ab2ee9583_prof);

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
